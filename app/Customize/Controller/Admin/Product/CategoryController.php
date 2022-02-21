<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

//namespace Eccube\Controller\Admin\Product;
namespace Customize\Controller\Admin\Product;

use Eccube\Controller\Admin\Product\CategoryController as BaseCategoryController;   // 元のコントローラ

use Customize\Entity\HdnSaijiTenpo;
use Eccube\Controller\AbstractController;
use Eccube\Entity\Category;
use Eccube\Entity\Master\CsvType;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Form\Type\Admin\CategoryType;
use Eccube\Repository\CategoryRepository;
use Eccube\Service\CsvExportService;
use Eccube\Util\CacheUtil;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends BaseCategoryController
{
    /**
     * @Route("/%eccube_admin_route%/product/category", name="admin_product_category")
     * @Route("/%eccube_admin_route%/product/category/{parent_id}", requirements={"parent_id" = "\d+"}, name="admin_product_category_show")
     * @Route("/%eccube_admin_route%/product/category/{id}/edit", requirements={"id" = "\d+"}, name="admin_product_category_edit")
     * @Template("@admin/Product/category.twig")
     */
    public function index(Request $request, $parent_id = null, $id = null, CacheUtil $cacheUtil)
    {
        if ($parent_id) {
            /** @var Category $Parent */
            $Parent = $this->categoryRepository->find($parent_id);
            if (!$Parent) {
                throw new NotFoundHttpException();
            }
        } else {
            $Parent = null;
        }
        if ($id) {
            $TargetCategory = $this->categoryRepository->find($id);
            if (!$TargetCategory) {
                throw new NotFoundHttpException();
            }
            $Parent = $TargetCategory->getParent();
        } else {
            $TargetCategory = new \Eccube\Entity\Category();
            $TargetCategory->setParent($Parent);
            if ($Parent) {
                $TargetCategory->setHierarchy($Parent->getHierarchy() + 1);
            } else {
                $TargetCategory->setHierarchy(1);
            }
        }

        $Categories = $this->categoryRepository->getList($Parent);

        // ツリー表示のため、ルートからのカテゴリを取得
        $TopCategories = $this->categoryRepository->getList(null);

        $builder = $this->formFactory
            ->createBuilder(CategoryType::class, $TargetCategory);

        $event = new EventArgs(
            [
                'builder' => $builder,
                'Parent' => $Parent,
                'TargetCategory' => $TargetCategory,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_PRODUCT_CATEGORY_INDEX_INITIALIZE, $event);

        //　(HDN) メインフォーム
        $form = $builder->getForm();

        //　(HDN) リスト側フォーム群
        $forms = [];
        foreach ($Categories as $Category) {
            $forms[$Category->getId()] = $this->formFactory
                ->createNamed('category_'.$Category->getId(), CategoryType::class, $Category);

            // (HDN) 催事店舗登録状況をFORMに反映
            $tenpos = [];
            $SaijiTenpos = $Category->getSaijiTenpos();
            foreach ($SaijiTenpos as $SaijiTenpo) {
                    $tenpos[] = $SaijiTenpo->getTenpo();
            }
            $forms[$Category->getId()]['Tenpo']->setData($tenpos);

        }

        if ($request->getMethod() === 'POST') {
            log_info('カテゴリ登録：新規部：Request,', $request->request->all());
            $form->handleRequest($request);
            if ($form->isValid()) {
                if ($this->eccubeConfig['eccube_category_nest_level'] < $TargetCategory->getHierarchy()) {
                    throw new BadRequestHttpException();
                }
                log_info('カテゴリ登録開始', [$id]);

                // (HDN) 既存の場合は催事店舗を一旦クリア
                if ( $id ) {
                    /* @var $Product \Eccube\Entity\Product */
                    foreach ($TargetCategory->getSaijiTenpos() as $SaijiTenpo) {
                        $TargetCategory->removeSaijiTenpo($SaijiTenpo);
                        $this->entityManager->remove($SaijiTenpo);
                    }
                    $this->entityManager->persist($TargetCategory);
                    $this->entityManager->flush();
                } else {
                    // (HDN) 新規の場合は一旦登録
                    $this->categoryRepository->save($TargetCategory);
                }

                // (HDN) 催事店舗を改めて登録
                $Tenpos = $form->get('Tenpo')->getData();
                foreach ($Tenpos as $Tenpo) {
                    $SaijiTenpo = new HdnSaijiTenpo();
                    $SaijiTenpo
                        ->setSaijiId($TargetCategory->getId())
                        ->setSaiji($TargetCategory)
                        ->setTenpoId($Tenpo->getId())
                        ->setTenpo($Tenpo);
                    $TargetCategory->addSaijiTenpo($SaijiTenpo);
                    $this->entityManager->persist($TargetCategory);
                }

                $this->categoryRepository->save($TargetCategory);

                log_info('カテゴリ登録完了', [$id]);

                // $formが保存されたフォーム
                // 下の編集用フォームの場合とイベント名が共通のため
                // このイベントのリスナーではsubmitされているフォームを判定する必要がある
                $event = new EventArgs(
                    [
                        'form' => $form,
                        'Parent' => $Parent,
                        'TargetCategory' => $TargetCategory,
                    ],
                    $request
                );
                $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_PRODUCT_CATEGORY_INDEX_COMPLETE, $event);

                $this->addSuccess('admin.common.save_complete', 'admin');

                $cacheUtil->clearDoctrineCache();

                if ($Parent) {
                    return $this->redirectToRoute('admin_product_category_show', ['parent_id' => $Parent->getId()]);
                } else {
                    return $this->redirectToRoute('admin_product_category');
                }
            }

            foreach ($forms as $editForm) {
                log_info('カテゴリ登録：明細部：カテゴリ名:'.$editForm->getData()->getName());
        
                $editForm->handleRequest($request);

                if ($editForm->isSubmitted() && $editForm->isValid()) {

                    $TargetCategory = $editForm->getData();

                    log_info('カテゴリ登録(明細部)開始', [$TargetCategory->getId()]);

                    // (HDN) 催事店舗の登録
                    // (HDN) 一度クリア
                    /* @var $Product \Eccube\Entity\Product */
                    foreach ($TargetCategory->getSaijiTenpos() as $SaijiTenpo) {
                        $TargetCategory->removeSaijiTenpo($SaijiTenpo);
                        $this->entityManager->remove($SaijiTenpo);
                    }
                    $this->entityManager->persist($TargetCategory);
                    $this->entityManager->flush();
    
                    // (HDN) 催事店舗を改めて登録
                    $Tenpos = $editForm->get('Tenpo')->getData();
                    foreach ($Tenpos as $Tenpo) {
                        $SaijiTenpo = new HdnSaijiTenpo();
                        $SaijiTenpo
                            ->setSaijiId($TargetCategory->getId())
                            ->setSaiji($TargetCategory)
                            ->setTenpoId($Tenpo->getId())
                            ->setTenpo($Tenpo);
                        $TargetCategory->addSaijiTenpo($SaijiTenpo);
                        $this->entityManager->persist($TargetCategory);
                    }
    

                    $this->categoryRepository->save($editForm->getData());

                    // $editFormが保存されたフォーム
                    // 上の新規登録用フォームの場合とイベント名が共通のため
                    // このイベントのリスナーではsubmitされているフォームを判定する必要がある
                    $event = new EventArgs(
                        [
                            'form' => $form,
                            'editForm' => $editForm,
                            'Parent' => $Parent,
                            'TargetCategory' => $editForm->getData(),
                        ],
                        $request
                    );

                    $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_PRODUCT_CATEGORY_INDEX_COMPLETE, $event);

                    $this->addSuccess('admin.common.save_complete', 'admin');

                    $cacheUtil->clearDoctrineCache();

                    if ($Parent) {
                        return $this->redirectToRoute('admin_product_category_show', ['parent_id' => $Parent->getId()]);
                    } else {
                        return $this->redirectToRoute('admin_product_category');
                    }
                }
            }
        }

        $formViews = [];
        foreach ($forms as $key => $value) {
            $formViews[$key] = $value->createView();
        }

        $Ids = [];
        if ($Parent && $Parent->getParents()) {
            foreach ($Parent->getParents() as $item) {
                $Ids[] = $item['id'];
            }
        }
        $Ids[] = intval($parent_id);

        return [
            'form' => $form->createView(),
            'Parent' => $Parent,
            'Ids' => $Ids,
            'Categories' => $Categories,
            'TopCategories' => $TopCategories,
            'TargetCategory' => $TargetCategory,
            'forms' => $formViews,
        ];
    }

}
