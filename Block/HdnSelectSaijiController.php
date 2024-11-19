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

//namespace Eccube\Controller\Block;
namespace Customize\Controller\Block;

use Eccube\Controller\AbstractController;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
//use Eccube\Form\Type\SearchProductBlockType;
/* FormType */
use Customize\Form\Type\HdnSelectSaijiBlockType;
/* EntityとRepository */
//use Customize\Entity\Category;
use Eccube\Entity\Category;
use Customize\Repository\CategoryRepository;

use Eccube\Service\CartService;
use Eccube\Service\OrderHelper; // (HDN) 定数取得のため

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;

class HdnSelectSaijiController extends AbstractController
{
    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var CategoryRepository
     * @var CartService
     */
    protected $categoryRepository;
    protected $cartService;

    /**
     * HdnSelectSaijiController constructor.
     *
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(
        RequestStack $requestStack,
        CategoryRepository $categoryRepository,
        CartService $cartService
    ) {
        $this->requestStack = $requestStack;
        $this->categoryRepository = $categoryRepository;
        $this->cartService = $cartService;
    }

    /**
     * @Route("/block/select_saiji", name="block_select_saiji")
     * @Template("Block/select_saiji.twig")
     */
    public function index(Request $request)
    {
        /* session */
        $session = $this->get('session');
        log_info("saiji_id=".$session->get('saiji_id'));
        /* ここでセッションの店舗コードを使って該当店舗を取得 */
        $objSaiji = null;
        if ( $session->get('saiji_id') ) {
            $objSaiji = $this->categoryRepository->find($session->get('saiji_id'));
            if (null === $objSaiji) {
                throw new NotFoundHttpException();
            }
        }

        $builder = $this->formFactory
            ->createNamedBuilder('', HdnSelectSaijiBlockType::class)
            ->setMethod('GET');

        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );

        /* ここはそのまま（宿題） */
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_BLOCK_SEARCH_PRODUCT_INDEX_INITIALIZE, $event);

        $request = $this->requestStack->getMasterRequest();

        /* form生成 */
        $form = $builder->getForm();

        /* formに既定値をセット */
        $form->get('saiji_id')->setData($objSaiji);

        $form->handleRequest($request);

        return [
            'form' => $form->createView(),
        ];
    }
    /**
     * @Route("/block/select_saiji/{id}", name="block_select_saiji_change")
     */
    public function change(Request $request, $id)
    {
        /* session */
        $session = $this->get('session');
        $session->set('saiji_id', $id);
        log_info("saiji_id=".$session->get('saiji_id'));

        /* ここでセッションの催事ＩＤを使って該当催事を取得 */
        $objSaiji = null;
        if ( $session->get('saiji_id') ) {
            $objSaiji = $this->categoryRepository->find($session->get('saiji_id'));
            if (null === $objSaiji) {
                throw new NotFoundHttpException();
            }
        }
        // Cartをクリア
        $this->cartService->clear();
        // 会員情報をクリア
        $session->set(OrderHelper::SESSION_NON_MEMBER,'');

        return $this->json(['success' => true]);
    }
}
