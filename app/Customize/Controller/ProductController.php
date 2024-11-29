<?php
/*----------------------------------------
 * ProductController
 *----------------------------------------
 * 2022.05.13 受渡日毎の出荷制限対応 by inok
 * 2021.08.01 extends by inok
 *----------------------------------------*/

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

//namespace Eccube\Controller;
namespace Customize\Controller;

use Eccube\Controller\ProductController as BaseProductController;   // (HDN) 元のコントローラ

use Customize\Entity\HdnTenpo;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\Master\ProductStatus;
use Eccube\Entity\Category;
use Eccube\Entity\Order;
use Eccube\Entity\Product;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Form\Type\AddCartType;
use Eccube\Form\Type\Master\ProductListMaxType;
use Eccube\Form\Type\Master\ProductListOrderByType;
use Eccube\Form\Type\SearchProductType;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\CustomerFavoriteProductRepository;
use Eccube\Repository\Master\ProductListMaxRepository;
use Eccube\Repository\ProductRepository;
use Eccube\Service\CartService;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Knp\Component\Pager\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;   // (HDN)
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ProductController extends BaseProductController
{
    // Base側がprivateのため
    private $title = '';

    /**
     * 商品一覧画面.
     *
     * @Route("/products/list", name="product_list")
     * @Template("Product/list.twig")
     */
    public function index(Request $request, Paginator $paginator)
    {
        // (HDN) 催事等が未選択の場合はstartへリダイレクト
        $session = new Session();
        if ( empty($session->get('saiji_id')) || empty($session->get('tenpo_id')) ) {
            log_info('セッション無効：リダイレクト：催事ID：'.$session->get('saiji_id'));
            return $this->redirectToRoute('start');
        }
        log_info('[商品一覧]催事ID='.$session->get('saiji_id')." 店舗ID=".$session->get('tenpo_id'));

        // Doctrine SQLFilter
        if ($this->BaseInfo->isOptionNostockHidden()) {
            $this->entityManager->getFilters()->enable('option_nostock_hidden');
        }

        // handleRequestは空のqueryの場合は無視するため
        if ($request->getMethod() === 'GET') {
            $request->query->set('pageno', $request->query->get('pageno', ''));
        }

        // searchForm
        /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
        $builder = $this->formFactory->createNamedBuilder('', SearchProductType::class);

        if ($request->getMethod() === 'GET') {
            $builder->setMethod('GET');
        }

        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_PRODUCT_INDEX_INITIALIZE, $event);

        /* @var $searchForm \Symfony\Component\Form\FormInterface */
        $searchForm = $builder->getForm();

        $searchForm->handleRequest($request);

        // paginator
        $searchData = $searchForm->getData();
        $qb = $this->productRepository->getQueryBuilderBySearchData($searchData);

        $event = new EventArgs(
            [
                'searchData' => $searchData,
                'qb' => $qb,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_PRODUCT_INDEX_SEARCH, $event);
        $searchData = $event->getArgument('searchData');

        $query = $qb->getQuery()
            ->useResultCache(true, $this->eccubeConfig['eccube_result_cache_lifetime_short']);

        /** @var SlidingPagination $pagination */
        $pagination = $paginator->paginate(
            $query,
            !empty($searchData['pageno']) ? $searchData['pageno'] : 1,
            !empty($searchData['disp_number']) ? $searchData['disp_number']->getId() : $this->productListMaxRepository->findOneBy([], ['sort_no' => 'ASC'])->getId()
        );

        $ids = [];
        foreach ($pagination as $Product) {
            $ids[] = $Product->getId();
        }

        // (HDN) 商品がない場合は催事一覧に戻る
        if ( count($ids) <= 0 ) {
            log_info('商品がないので催事一覧に戻る：ここは検証が必要');
            return $this->redirectToRoute('start/list_saiji');
        }

        // (HDN) 指定されている場合は対象を指定店舗に限定
        //$session = new Session();
        if ( $session->get('tenpo_id') ) {
            // 指定店舗に限定
            $ProductsAndClassCategories = $this->productRepository->findProductsWithTenpo($ids, 'p.id', $session->get('tenpo_id'));
        } else {
            // orgin
            $ProductsAndClassCategories = $this->productRepository->findProductsWithSortedClassCategories($ids, 'p.id');
        }

        // addCart form
        $forms = [];
        foreach ($pagination as $Product) {
            /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
            $ProductClasses = $Product->getProductClasses();
            //log_info('買い物かご（リスト）：',$ProductClasses->toArray());
            log_info('買い物かご（リスト） first-id:'.$ProductClasses->first()->getId());
            log_info('買い物かご（リスト） 件数:'.$ProductClasses->count());
            //log_info('買い物かご（リスト） hasProductClass:'.$ProductsAndClassCategories[$Product->getId()]->hasProductClass());

            $builder = $this->formFactory->createNamedBuilder(
                '',
                AddCartType::class,
                null,
                [
                    'product' => $ProductsAndClassCategories[$Product->getId()],
                    'allow_extra_fields' => true,
                ]
            );
            $addCartForm = $builder->getForm();

            $forms[$Product->getId()] = $addCartForm->createView();
        }
        //-------------------------------------------
        // (HDN) 2022.05.13 受渡日ごとの在庫状況を取得
        // 1) 催事を取得し受渡日のリストを作成 $shippingDates[]
        // 2) 商品毎(店舗)の受渡日別受注数を取得 $sumOrdersByTenpo
        // 3) 商品毎(全店)の受渡日別受注数を取得 $sumOrdersAllTenpo
        // 4) 商品毎の受渡日別受注状況をセット $infoByProductAndDate[]
        //-------------------------------------------
        // 1) 催事を取得し受渡日のリストを作成 $shippingDates[]
        $shippingDates = [];
        // 1)-1 催事を取得
        $em = $this->entityManager;
        $categoryRepository = $em->getRepository(Category::class);
        $saiji = $categoryRepository->find($session->get('saiji_id'));
        
        // 1)-2 受渡開始日と受渡終了日から受渡日のリストを作成
        $deliveryStartDt = $saiji->getDeliveryStartDt();
        $deliveryEndDt = $saiji->getDeliveryEndDt();
        // (HDN) 2023.07.xx 通年対応
        if ( $deliveryStartDt && $deliveryEndDt ) {
            $period = new \DatePeriod(
                $deliveryStartDt, new \DateInterval('P1D'), $deliveryEndDt->modify('+1 days')
            );
            foreach ($period as $day) {
                $shippingDates[] = $day->format('Y-m-d');
            }
            log_info('[商品一覧]催事の受渡期間 開始='.$deliveryStartDt->format('Y-m-d').' 終了='.$deliveryEndDt->format('Y-m-d'));
        }
        log_info('[商品一覧]受渡日群：',$shippingDates);

        // 2) 商品毎(店舗)の受渡日別受注数を取得 $sumOrdersByTenpo
        // 2)-1 店舗を取得
        //$hdnTenpoRepository = $em->getRepository(Order::class);
        $hdnTenpoRepository = $em->getRepository(HdnTenpo::class);
        $tenpo = $hdnTenpoRepository->find($session->get('tenpo_id'));

        // 2)-2 催事/店舗を条件に商品/受渡日毎の実績を取得(SQL生成)
        $orderRepository = $em->getRepository(Order::class);
        $qb = $orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            ->addSelect('tp.id as tenpo_id')
            ->addSelect('p.id as product_id')
            ->addSelect('s.shipping_delivery_date')
            ->addSelect('sum(oi.quantity) as quantity')
            ->leftJoin('o.OrderItems', 'oi')
            ->leftJoin('oi.Product', 'p')
            ->leftJoin('oi.Shipping', 's')
            ->leftJoin('o.Saiji', 'sj')
            ->leftJoin('o.Tenpo', 'tp')
            ->where('o.Saiji = :Saiji')
            ->andwhere('o.Tenpo = :Tenpo')
            ->andwhere($qb->expr()->in('p.id', $ids))
            ->andWhere('o.OrderStatus not in (3,8)')
            ->andWhere('oi.class_name1 is not null')
            ->groupBy('saiji_id')
            ->addGroupBy('tenpo_id')
            ->addGroupBy('product_id')
            ->addGroupBy('s.shipping_delivery_date')
            ->orderBy('product_id')
            ->addOrderBy('s.shipping_delivery_date');
        $qb->setParameter('Saiji', $saiji)
            ->setParameter('Tenpo', $tenpo);

        // 2)-3 実績取得(SQL実行)
        $sumOrdersByTenpo = $qb->getQuery()->execute();
        log_info('[商品一覧]受注実績(店舗):',$sumOrdersByTenpo);

        // 2)-4 商品毎受渡日別受注状況をワーク配列にセット
        $wOrders = [];
        foreach ($sumOrdersByTenpo as $sumOrder) {
            if (!isset($sumOrder['shipping_delivery_date']) || !($sumOrder['shipping_delivery_date'] instanceof DateTime)) {
                continue;
            }//nullチェック
            if (!isset($sumOrder['product_id']) || !isset($sumOrder['quantity'])) {
                echo "Missing product_id or quantity\n";
                continue;
            }
            $wDate = $sumOrder['shipping_delivery_date']->format('Y-m-d');
            $wOrders[$sumOrder['product_id']][$wDate] = $sumOrder['quantity'];
        }

        // 3) 商品毎(全店)の受渡日別受注数を取得 $sumOrdersAllTenpo
        // 3)-1 催事を条件に商品/受渡日毎の実績を取得(SQL生成)
        $qb = $orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            //->addSelect('tp.id as tenpo_id')
            ->addSelect('p.id as product_id')
            ->addSelect('s.shipping_delivery_date')
            ->addSelect('sum(oi.quantity) as quantity')
            ->leftJoin('o.OrderItems', 'oi')
            ->leftJoin('oi.Product', 'p')
            ->leftJoin('oi.Shipping', 's')
            ->leftJoin('o.Saiji', 'sj')
            //->leftJoin('o.Tenpo', 'tp')
            ->where('o.Saiji = :Saiji')
            //->andwhere('o.Tenpo = :Tenpo')
            ->andwhere($qb->expr()->in('p.id', $ids))
            ->andWhere('o.OrderStatus not in (3,8)')
            ->andWhere('oi.class_name1 is null')
            ->groupBy('saiji_id')
            //->addGroupBy('tenpo_id')
            ->addGroupBy('product_id')
            ->addGroupBy('s.shipping_delivery_date')
            ->orderBy('product_id')
            ->addOrderBy('s.shipping_delivery_date');
        $qb->setParameter('Saiji', $saiji);
            //->setParameter('Tenpo', $tenpo);

        // 3)-2 実績取得(SQL実行)
        $sumOrdersAllTenpo = $qb->getQuery()->execute();
        log_info('[商品一覧]受注実績(全店):',$sumOrdersAllTenpo);

        // 3)-3 商品毎受渡日別受注状況をワーク配列にセット
        $wOrders = [];
        foreach ($sumOrdersAllTenpo as $sumOrder) {
            // shipping_delivery_dateがDateTimeオブジェクトであることを確認
            if (!isset($sumOrder['shipping_delivery_date']) || !($sumOrder['shipping_delivery_date'] instanceof DateTime)) {
                continue;
            }
            // product_idとquantityが存在することを確認
            if (!isset($sumOrder['product_id']) || !isset($sumOrder['quantity'])) {
                echo "Missing product_id or quantity\n";
                continue;
            }
            $wDate = $sumOrder['shipping_delivery_date']->format('Y-m-d');
            $wOrders[$sumOrder['product_id']][$wDate] = $sumOrder['quantity'];
        }

        // 4) 商品毎の受渡日別受注状況をセット $infoByProductAndDate[]
        $infoByProductAndDate = [];
        // 4)-1 商品毎日毎に受注数/日別上限/日別残数を初期化&設定
        foreach ($pagination as $Product) {
            $id = $Product->getId();
            // 条件が揃っていなければ、日別残数は管理しない
            $infoByProductAndDate[$id] = false;
            // 受渡日が単日の場合は対象外
            if ( count($shippingDates) <= 1 ) { continue; }
            // 商品が在庫無制限の場合は対象外
            if ( $Product->getStockUnlimitedMin() ) { continue; }
            // 商品に日別上限の設定がなければ対象外
            $oneDayLimit = $Product->getTenpoOneDayLimit($session->get('tenpo_id'));
            log_info('[商品一覧]日別上限 ID:'.$id.' 店舗:'.$session->get('tenpo_id').' limit:'.$oneDayLimit);
            if ( is_null($oneDayLimit) || $oneDayLimit <= 0 ) { continue; }

            // 条件が揃っている場合、商品毎の受渡日別受注状況をセット
            $infoByProductAndDate[$id] = [];
            // 総在庫数をセット
            $infoByProductAndDate[$id]['stock'] = $Product->getTenpoStock();
            log_info('[商品一覧]総在庫数 ID:'.$id.' stock:'.$infoByProductAndDate[$id]['stock']);
            $infoByProductAndDate[$id]['disp_simple'] = '上限 ';
            // 日別受注状況を初期化
            foreach ($shippingDates as $day) {
                $infoByProductAndDate[$id][$day]['date'] = $day;
                $infoByProductAndDate[$id][$day]['limit'] = $oneDayLimit;
                $infoByProductAndDate[$id][$day]['quantity'] = 0;
                $infoByProductAndDate[$id][$day]['stock'] = $oneDayLimit;
                // 受注数と残数をセット
                if ( isset($wOrders[$id]) && isset($wOrders[$id][$day]) ) {
                    $infoByProductAndDate[$id][$day]['quantity'] = $wOrders[$id][$day];
                    $infoByProductAndDate[$id][$day]['stock']
                     = $infoByProductAndDate[$id][$day]['limit'] - $wOrders[$id][$day];
                }
                // 総在庫数が、1日上限からの計算在庫数を下回っている場合は、そちらを在庫数とする
                if ( $infoByProductAndDate[$id][$day]['stock'] > $infoByProductAndDate[$id]['stock'] ) {
                    $infoByProductAndDate[$id][$day]['stock'] = $infoByProductAndDate[$id]['stock'];
                }
                // 簡易表示(disp_simple)編集（詳細な表示が必要な場合は別途行う）
                $wInfo = $infoByProductAndDate[$id][$day];
                $wDispSimple  = str_replace('-','/',mb_substr($wInfo['date'],8)).'日';
                if ( $wInfo['stock'] > 0 ) {
                    $wDispSimple .= '('.$wInfo['stock'].')';
                } else {
                    $wDispSimple .= '(X)';
                }
                $infoByProductAndDate[$id]['disp_simple'] .= $wDispSimple;
            }    
        }
        log_info('[商品一覧]日別受注状況:',$infoByProductAndDate);

        

        // 表示件数
        $builder = $this->formFactory->createNamedBuilder(
            'disp_number',
            ProductListMaxType::class,
            null,
            [
                'required' => false,
                'allow_extra_fields' => true,
            ]
        );
        if ($request->getMethod() === 'GET') {
            $builder->setMethod('GET');
        }

        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_PRODUCT_INDEX_DISP, $event);

        $dispNumberForm = $builder->getForm();

        $dispNumberForm->handleRequest($request);

        // ソート順
        $builder = $this->formFactory->createNamedBuilder(
            'orderby',
            ProductListOrderByType::class,
            null,
            [
                'required' => false,
                'allow_extra_fields' => true,
            ]
        );
        if ($request->getMethod() === 'GET') {
            $builder->setMethod('GET');
        }

        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_PRODUCT_INDEX_ORDER, $event);

        $orderByForm = $builder->getForm();

        $orderByForm->handleRequest($request);

        $Category = $searchForm->get('category_id')->getData();

        return [
            'subtitle' => $this->getPageTitle($searchData),
            'pagination' => $pagination,
            'search_form' => $searchForm->createView(),
            'disp_number_form' => $dispNumberForm->createView(),
            'order_by_form' => $orderByForm->createView(),
            'forms' => $forms,
            'Category' => $Category,
            'infoByProductAndDate' => $infoByProductAndDate,
        ];
    }

    /**
     * 商品詳細画面.
     *
     * @Route("/products/detail/{id}", name="product_detail", methods={"GET"}, requirements={"id" = "\d+"})
     * @Template("Product/detail.twig")
     * xxxx　ParamConverter("Product", options={"repository_method" = "findWithSortedClassCategories"})
     * @ParamConverter("Product", options={"repository_method" = "findWithTenpo"})
     *
     * @param Request $request
     * @param Product $Product
     *
     * @return array
     */
    public function detail(Request $request, Product $Product)
    {
        // (HDN) 催事等が未選択の場合はstartへリダイレクト
        $session = new Session();
        if ( empty($session->get('saiji_id')) || empty($session->get('tenpo_id')) ) {
            log_info('セッション無効：リダイレクト：催事ID：'.$session->get('saiji_id'));
            return $this->redirectToRoute('start');
        }

        if (!$this->checkVisibility($Product)) {
            throw new NotFoundHttpException();
        }

        // (HDN) productId
        $productId = $Product->getId();
        // (HDN) 指定されている場合は対象を指定店舗に限定
        //$session = new Session();
        if ( $session->get('tenpo_id') ) {
            log_info('買い物かご（単品）：店舗ID：'.$session->get('tenpo_id'));
            // 指定店舗に限定
            $ProductsAndClassCategories = $this->productRepository->findProductsWithTenpo([$productId], 'p.id', $session->get('tenpo_id'));
            $Product = $ProductsAndClassCategories[$productId];
        }

        // (HDN) 対象の商品規格のみ
        $ProductClasses = $Product->getProductClasses();
        //log_info('買い物かご（単品）：',$ProductClasses->toArray());
        log_info('買い物かご（単品） first-id:'.$ProductClasses->first()->getId());
        log_info('買い物かご（単品） 件数:'.$ProductClasses->count());
        //log_info('買い物かご（単品） hasProductClass:'.$Product->hasProductClass());

        $builder = $this->formFactory->createNamedBuilder(
            '',
            AddCartType::class,
            null,
            [
                'product' => $Product,
                'id_add_product_id' => false,
            ]
        );

        $event = new EventArgs(
            [
                'builder' => $builder,
                'Product' => $Product,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_PRODUCT_DETAIL_INITIALIZE, $event);

        $is_favorite = false;
        if ($this->isGranted('ROLE_USER')) {
            $Customer = $this->getUser();
            $is_favorite = $this->customerFavoriteProductRepository->isFavorite($Customer, $Product);
        }

        return [
            'title' => $this->title,
            'subtitle' => $Product->getName(),
            'form' => $builder->getForm()->createView(),
            'Product' => $Product,
            'is_favorite' => $is_favorite,
        ];
    }

}
