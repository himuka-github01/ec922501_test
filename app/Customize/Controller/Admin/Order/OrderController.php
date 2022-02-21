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

//namespace Eccube\Controller\Admin\Order;
namespace Customize\Controller\Admin\Order;

use Eccube\Controller\Admin\Order\OrderController as BaseOrderController;   // 元のコントローラ

use Customize\Repository\HdnTenpoRepository;    // (HDN) 店舗Repository

use Eccube\Common\Constant;
use Eccube\Controller\AbstractController;
use Eccube\Entity\ExportCsvRow;
use Eccube\Entity\Master\CsvType;
use Eccube\Entity\Master\OrderStatus;
use Eccube\Entity\OrderPdf;
use Eccube\Entity\Shipping;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Form\Type\Admin\OrderPdfType;
use Eccube\Form\Type\Admin\SearchOrderType;
use Eccube\Repository\CustomerRepository;
use Eccube\Repository\Master\OrderStatusRepository;
use Eccube\Repository\Master\PageMaxRepository;
use Eccube\Repository\Master\ProductStatusRepository;
use Eccube\Repository\Master\SexRepository;
use Eccube\Repository\OrderPdfRepository;
use Eccube\Repository\OrderRepository;
use Eccube\Repository\PaymentRepository;
use Eccube\Repository\ProductStockRepository;
use Eccube\Service\CsvExportService;
use Eccube\Service\MailService;

use Eccube\Service\OrderPdfService;
//use Customize\Service\OrderPdfService;  // services.yamlの記述が効かないためCustomize側を直接記述

use Customize\Service\HdnOrderListService;  // (HDN) Listサービス

use Eccube\Service\OrderStateMachine;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Eccube\Util\FormUtil;

// 同名のクラスが存在するため、使用するものを明示
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Symfony\Component\HttpFoundation\Session\Session;

class OrderController extends BaseOrderController
{
    /**
     * @var HdnTenpoRepository
     */
    protected $hdnTenpoRepository;

    /**
     * @var HdnOrderListService
     */
    protected $hdnOrderListService;

    /**
     * OrderController constructor.
     *
     * @param PurchaseFlow $orderPurchaseFlow
     * @param CsvExportService $csvExportService
     * @param CustomerRepository $customerRepository
     * @param PaymentRepository $paymentRepository
     * @param SexRepository $sexRepository
     * @param OrderStatusRepository $orderStatusRepository
     * @param PageMaxRepository $pageMaxRepository
     * @param ProductStatusRepository $productStatusRepository
     * @param ProductStockRepository $productStockRepository
     * @param OrderRepository $orderRepository
     * @param OrderPdfRepository $orderPdfRepository
     * @param ValidatorInterface $validator
     * @param OrderStateMachine $orderStateMachine ;
     * @param HdnTenpoRepository $hdnTenpoRepository ;    // (HDN)
     * @param HdnOrderListService $hdnOrderListService ;    // (HDN)
     */
    public function __construct(
        PurchaseFlow $orderPurchaseFlow,
        CsvExportService $csvExportService,
        CustomerRepository $customerRepository,
        PaymentRepository $paymentRepository,
        SexRepository $sexRepository,
        OrderStatusRepository $orderStatusRepository,
        PageMaxRepository $pageMaxRepository,
        ProductStatusRepository $productStatusRepository,
        ProductStockRepository $productStockRepository,
        OrderRepository $orderRepository,
        OrderPdfRepository $orderPdfRepository,
        ValidatorInterface $validator,
        OrderStateMachine $orderStateMachine,
        MailService $mailService,
        HdnTenpoRepository $hdnTenpoRepository,
        HdnOrderListService $hdnOrderListService
    ) {
        $this->purchaseFlow = $orderPurchaseFlow;
        $this->csvExportService = $csvExportService;
        $this->customerRepository = $customerRepository;
        $this->paymentRepository = $paymentRepository;
        $this->sexRepository = $sexRepository;
        $this->orderStatusRepository = $orderStatusRepository;
        $this->pageMaxRepository = $pageMaxRepository;
        $this->productStatusRepository = $productStatusRepository;
        $this->productStockRepository = $productStockRepository;
        $this->orderRepository = $orderRepository;
        $this->orderPdfRepository = $orderPdfRepository;
        $this->validator = $validator;
        $this->orderStateMachine = $orderStateMachine;
        $this->mailService = $mailService;
        $this->hdnTenpoRepository = $hdnTenpoRepository;
        $this->hdnOrderListService = $hdnOrderListService;
    }
    /**
     * 受注一覧画面.
     *
     * - 検索条件, ページ番号, 表示件数はセッションに保持されます.
     * - クエリパラメータでresume=1が指定された場合、検索条件, ページ番号, 表示件数をセッションから復旧します.
     * - 各データの, セッションに保持するアクションは以下の通りです.
     *   - 検索ボタン押下時
     *      - 検索条件をセッションに保存します
     *      - ページ番号は1で初期化し、セッションに保存します。
     *   - 表示件数変更時
     *      - クエリパラメータpage_countをセッションに保存します。
     *      - ただし, mtb_page_maxと一致しない場合, eccube_default_page_countが保存されます.
     *   - ページング時
     *      - URLパラメータpage_noをセッションに保存します.
     *   - 初期表示
     *      - 検索条件は空配列, ページ番号は1で初期化し, セッションに保存します.
     *
     * @Route("/%eccube_admin_route%/order", name="admin_order")
     * @Route("/%eccube_admin_route%/order/page/{page_no}", requirements={"page_no" = "\d+"}, name="admin_order_page")
     * @Route("/%eccube_admin_route%/order/list/juchu", name="admin_order_list_juchu")
     * @Route("/%eccube_admin_route%/order/list/shukka", name="admin_order_list_shukka")
     * @Route("/%eccube_admin_route%/order/list/uriage", name="admin_order_list_uriage")
     * @Template("@admin/Order/index.twig")
     */
    public function index(Request $request, $page_no = null, PaginatorInterface $paginator)
    {
        log_info('受注一覧：Request',$request->request->all());

        $builder = $this->formFactory
            ->createBuilder(SearchOrderType::class);

        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_ORDER_INDEX_INITIALIZE, $event);

        $searchForm = $builder->getForm();

        /**
         * ページの表示件数は, 以下の順に優先される.
         * - リクエストパラメータ
         * - セッション
         * - デフォルト値
         * また, セッションに保存する際は mtb_page_maxと照合し, 一致した場合のみ保存する.
         **/
        $page_count = $this->session->get('eccube.admin.order.search.page_count',
            $this->eccubeConfig->get('eccube_default_page_count'));

        $page_count_param = (int) $request->get('page_count');
        $pageMaxis = $this->pageMaxRepository->findAll();

        if ($page_count_param) {
            foreach ($pageMaxis as $pageMax) {
                if ($page_count_param == $pageMax->getName()) {
                    $page_count = $pageMax->getName();
                    $this->session->set('eccube.admin.order.search.page_count', $page_count);
                    break;
                }
            }
        }

        // (HDN) 催事オブジェクト
        $objSaiji = null;
        // (HDN) 店舗オブジェクト
        $objTenpo = null;
        // (HDN) 部門オブジェクト
        $objBumon = null;

        if ('POST' === $request->getMethod()) {
            $searchForm->handleRequest($request);

            if ($searchForm->isValid()) {
                /**
                 * 検索が実行された場合は, セッションに検索条件を保存する.
                 * ページ番号は最初のページ番号に初期化する.
                 */
                $page_no = 1;
                $searchData = $searchForm->getData();

                // 検索条件, ページ番号をセッションに保持.
                $this->session->set('eccube.admin.order.search', FormUtil::getViewData($searchForm));
                $this->session->set('eccube.admin.order.search.page_no', $page_no);
            } else {
                // 検索エラーの際は, 詳細検索枠を開いてエラー表示する.
                return [
                    'searchForm' => $searchForm->createView(),
                    'pagination' => [],
                    'pageMaxis' => $pageMaxis,
                    'page_no' => $page_no,
                    'page_count' => $page_count,
                    'has_errors' => true,
                ];
            }
        } else {
            if (null !== $page_no || $request->get('resume')) {
                /*
                 * ページ送りの場合または、他画面から戻ってきた場合は, セッションから検索条件を復旧する.
                 */
                if ($page_no) {
                    // ページ送りで遷移した場合.
                    $this->session->set('eccube.admin.order.search.page_no', (int) $page_no);
                } else {
                    // 他画面から遷移した場合.
                    $page_no = $this->session->get('eccube.admin.order.search.page_no', 1);
                }
                $viewData = $this->session->get('eccube.admin.order.search', []);
                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);
            } else {
                /**
                 * 初期表示の場合.
                 */
                $page_no = 1;
                $viewData = [];

                if ($statusId = (int) $request->get('order_status_id')) {
                    $viewData = ['status' => $statusId];
                }

                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);

                // セッション中の検索条件, ページ番号を初期化.
                $this->session->set('eccube.admin.order.search', $viewData);
                $this->session->set('eccube.admin.order.search.page_no', $page_no);
            }
        }

        log_info('受注一覧：searchData',$searchData);

        // (HDN) formで指定があれば催事オブジェクトを取得
        if ( $searchForm->get('saiji_id') ) {
            $objSaiji = $searchForm->get('saiji_id')->getData();
        }
        // (HDN) formで指定があれば店舗オブジェクトを取得
        //  ※店舗ログインの場合は該当店舗を条件とする
        if ( $searchForm->get('tenpo_id') ) {
            log_info('受注一覧：tenpo by id：',(array)$searchForm->get('tenpo_id'));
            $objTenpo = $searchForm->get('tenpo_id')->getData();
        }
        if ( !$objTenpo ) {
            $session = new Session();
            log_info('受注一覧：session(tenpo_cd)：'.$session->get('tenpo_cd'));
            $objTenpo = $this->hdnTenpoRepository->findOneBy(['tenpo_cd' => $session->get('tenpo_cd')]);
        }
        // (HDN) formで指定があれば部門オブジェクトを取得
        if ( $searchForm->get('bumon_id') ) {
            $objBumon = $searchForm->get('bumon_id')->getData();
        }

        // QueryBuilderを取得
        $qb = $this->orderRepository->getQueryBuilderBySearchDataForAdmin($searchData);
        
        $qb ->addSelect('sj')
            ->leftJoin('o.Saiji', 'sj');

        $qb ->addSelect('tp')
            ->leftJoin('o.Tenpo', 'tp');

        $qb ->addSelect('bm')
            ->leftJoin('oi.Bumon', 'bm');
                
        // (HDN) 催事指定があれば条件セット
        if ( $objSaiji ) {
            $qb
            ->andWhere('sj.id = :saiji_id')
            ->setParameter('saiji_id', $objSaiji->getId());
        }
        // (HDN) 店舗指定があれば条件セット
        if ( $objTenpo ) {
            $qb
            ->andWhere('tp.id = :tenpo_id')
            ->setParameter('tenpo_id', $objTenpo->getId());
        }
        // (HDN) 部門指定があれば条件セット
        if ( $objBumon ) {
            $qb
            ->andWhere('bm.id = :bumon_id')
            ->setParameter('bumon_id', $objBumon->getId());
        }

        log_info('受注一覧：queryBuilder',(array)$qb);

        // (HDN)
        if ( $request->request->get('list_type') ) {
            //$this->hdnOrderListService = new HdnOrderListService();
            log_info('受注：帳票作成：list_type='.$request->request->get('list_type'));
            // query実行
            if ( !$objSaiji ) {
                $status = false;
            } else if ( $request->request->get('list_type') == 'juchu' ) {
                $qb->orderBy('o.id');
                $arrData = $qb->getQuery()->getResult();
                $status = $this->hdnOrderListService->makeJuchuExcel($searchData,$arrData);
            } else if ( $request->request->get('list_type') == 'shukka' ) {
                $qb->orderBy('o.saiji_cd');
                $qb->addorderBy('o.tenpo_cd');
                $qb->addorderBy('s.shipping_delivery_date');
                $qb->addorderBy('o.kana01');
                $qb->addorderBy('o.kana02');
                $arrData = $qb->getQuery()->getResult();
                $status = $this->hdnOrderListService->makeShukkaExcel($searchData,$arrData);
            } else if ( $request->request->get('list_type') == 'uriage' ) {
                $arrData = $qb->getQuery()->getResult();
                $status = $this->hdnOrderListService->makeJuchuExcel($searchData,$arrData);
            } else {
                $status = false;
            }
            // 異常終了した場合の処理
            if (!$status) {
                $this->addError('EXCELの生成に失敗しました。条件をご確認ください。', 'admin');
                log_info('Unable to create excel files! Process have problems!');
                return [
                    'searchForm' => $searchForm->createView(),
                    'pagination' => [],
                    'pageMaxis' => $pageMaxis,
                    'page_no' => $page_no,
                    'page_count' => $page_count,
                    'has_errors' => true,
                ];
            }
            // 暫定的に
            return [
                'searchForm' => $searchForm->createView(),
                'pagination' => [],
                'pageMaxis' => $pageMaxis,
                'page_no' => $page_no,
                'page_count' => $page_count,
                'has_errors' => true,
            ];
        }

        $event = new EventArgs(
            [
                'qb' => $qb,
                'searchData' => $searchData,
            ],
            $request
        );

        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_ORDER_INDEX_SEARCH, $event);

        $pagination = $paginator->paginate(
            $qb,
            $page_no,
            $page_count
        );

        return [
            'searchForm' => $searchForm->createView(),
            'pagination' => $pagination,
            'pageMaxis' => $pageMaxis,
            'page_no' => $page_no,
            'page_count' => $page_count,
            'has_errors' => false,
            'OrderStatuses' => $this->orderStatusRepository->findBy([], ['sort_no' => 'ASC']),
        ];
    }

    /**
     * 受注集計画面.
     *
     * - 検索条件
     *   - 催事（必須）
     *   - 店舗（任意）
     *   - 部門（任意）
     *
     * @Route("/%eccube_admin_route%/order/sum_bumon_item", name="admin_order_sum_bumon_item")
     * @Route("/%eccube_admin_route%/order/sum_bumon_item/{saiji_id}", requirements={"saiji_id" = "\d+"}, name="admin_order_sum_bumon_item_saiji")
     * @Template("@admin/Order/sum_bumon_item.twig")
     */
    public function sumBumonItem(Request $request, $saiji_id = null, PaginatorInterface $paginator)
    {
        log_info('受注集計：Request',$request->request->all());

        // (HDN) 受注検索FORMをそのまま使用
        $builder = $this->formFactory
            ->createBuilder(SearchOrderType::class);

        // (HDN) イベントはとりあえずそのまま
        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_ORDER_INDEX_INITIALIZE, $event);

        $searchForm = $builder->getForm();

        // (HDN) 催事オブジェクト
        $objSaiji = null;
        // (HDN) 店舗オブジェクト
        $objTenpo = null;
        // (HDN) 部門オブジェクト
        $objBumon = null;

        // (HDN) 検索条件を取得
        if ('POST' === $request->getMethod()) {
            $searchForm->handleRequest($request);

            if ($searchForm->isValid()) {
                /**
                 * 検索が実行された場合は, セッションに検索条件を保存する.
                 */
                $searchData = $searchForm->getData();

                // 検索条件をセッションに保持.
                $this->session->set('eccube.admin.order.search', FormUtil::getViewData($searchForm));
            } else {
                // 検索エラーの際は, 詳細検索枠を開いてエラー表示する.
                return [
                    'searchForm' => $searchForm->createView(),
                    'has_errors' => true,
                ];
            }
        } else {
            if ($request->get('resume')) {
                /*
                 * 他画面から戻ってきた場合は, セッションから検索条件を復旧する.
                 */
                $viewData = $this->session->get('eccube.admin.order.search', []);
                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);
            } else {
                /**
                 * 初期表示の場合.
                 */
                $viewData = [];

                if ($saiji_id) {
                    $viewData = ['saiji_id' => $saiji_id];
                }

                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);

                // セッション中の検索条件を初期化.
                $this->session->set('eccube.admin.order.search', $viewData);
            }
        }

        log_info('受注集計：searchData',$searchData);

        // (HDN) formで指定があれば催事オブジェクトを取得
        if ( $searchForm->get('saiji_id') ) {
            $objSaiji = $searchForm->get('saiji_id')->getData();
        }
        // (HDN) formで指定があれば店舗オブジェクトを取得
        if ( $searchForm->get('tenpo_id') ) {
            $objTenpo = $searchForm->get('tenpo_id')->getData();
        }
        // (HDN) formで指定があれば部門オブジェクトを取得
        if ( $searchForm->get('bumon_id') ) {
            $objBumon = $searchForm->get('bumon_id')->getData();
        }

        // (HDN) 催事指定がなければ初期表示
        if ( !$objSaiji ) {
            return [
                'searchForm' => $searchForm->createView(),
                'has_errors' => false,
                'posOfDate' => null,
                'lines' => [],
                ];
        }

        /*
         * (HDN) 受注集計
         *  ①受渡日のリストを取得
         *  ②受渡日のポジションをセット
         *  ③催事/店舗/部門/商品/受渡日の実績を取得
         *  ④実績を受渡日で展開
         */

        // EntityManager取得
        $em = $this->getDoctrine()->getEntityManager(); 

        // ①受渡日のリストを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('s.shipping_delivery_date')
            ->leftJoin('o.Shippings', 's')
            ->where('o.Saiji = :Saiji')
            ->andWhere('o.OrderStatus not in (3,8)')
            ->groupBy('s.shipping_delivery_date')
            ->orderBy('s.shipping_delivery_date');

        $qb->where('o.Saiji = :Saiji')->setParameter('Saiji', $objSaiji);

        //$shippingDates = $qb->getQuery()->execute();
        //log_info('受注集計：shippingDates by execute()',$shippingDates);
        $shippingDates = $qb->getQuery()->getResult();
        log_info('受注集計：shippingDates by getResult()',$shippingDates);

        // ②受渡日のポジションをセット
        $pos = 0;
        $posOfDate = [];
        foreach ( $shippingDates as $shippingDate ) {
            if ( !is_null($shippingDate['shipping_delivery_date']) ) {
                $wDate = $shippingDate['shipping_delivery_date']->format('Y-m-d');
                $posOfDate[$wDate] = $pos;
                $pos++;
            }
        }
        log_info('受注集計：posOfDate',$posOfDate);

        // ③催事/店舗/部門/商品/受渡日の実績を取得
        // QueryBuilderを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            ->addSelect('sj.name as saiji_name')
            ->addSelect('tp.id as tenpo_id')
            ->addSelect('tp.tenpo_name as tenpo_name')
            ->addSelect('bm.id as bumon_id')
            ->addSelect('bm.name as bumon_name')
            ->addSelect('oi.product_code')
            ->addSelect('s.shipping_delivery_date')
            ->addSelect('os.id as order_status_id')
            ->addSelect('max(oi.product_name) as product_name')
            ->addSelect('sum(oi.quantity) as quantity')
            ->addSelect('sum(oi.quantity*oi.base_price) as base_kingaku')
            ->addSelect('sum(oi.quantity*oi.price) as kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_a_gaku) as wari_a_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_b_gaku) as wari_b_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_kikan_gaku) as wari_kikan_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_matome_gaku) as wari_matome_kingaku')
            ->leftJoin('o.OrderItems', 'oi')
            ->leftJoin('oi.Shipping', 's')
            ->leftJoin('o.Saiji', 'sj')
            ->leftJoin('o.Tenpo', 'tp')
            ->leftJoin('oi.Bumon', 'bm')
            ->leftJoin('o.OrderStatus', 'os')
            ->where('o.Saiji = :Saiji')
            ->andWhere('o.OrderStatus not in (3,8)')
            ->andWhere('oi.product_code is not null')
            ->groupBy('saiji_id')
            ->addGroupBy('tenpo_id')
            ->addGroupBy('bumon_id')
            ->addGroupBy('oi.product_code')
            ->addGroupBy('s.shipping_delivery_date')
            ->addGroupBy('os.id')
            ->having('oi.product_code is not null')
            ->orderBy('saiji_id')
            ->addOrderBy('tenpo_id')
            ->addOrderBy('bumon_id')
            ->addOrderBy('oi.product_code')
            ->addOrderBy('s.shipping_delivery_date');

        // (HDN) 催事指定は必須
        //$qb->where('o.Saiji = :Saiji')->setParameter('Saiji', $objSaiji);
        $qb->setParameter('Saiji', $objSaiji);

        // (HDN) 店舗指定があれば条件セット
        if ( $objTenpo ) {
            $qb
            ->andWhere('tp.id = :tenpo_id')
            ->setParameter('tenpo_id', $objTenpo->getId());
        }

        // (HDN) 部門指定があれば条件セット
        if ( $objBumon ) {
            $qb
            ->andWhere('bm.id = :bumon_id')
            ->setParameter('bumon_id', $objBumon->getId());
        }

        // (HDN) 実績取得
        $dtls = $qb->getQuery()->execute();
        log_info('受注集計：dtls by execute()',$dtls);

        // ④実績を受渡日で展開
        // (HDN) 商品行 & 部門行
        $itemLine = $bumonLine = $lines = [];
        $pre['saiji_id'] = '';
        $pre['tenpo_id'] = '';
        $pre['bumon_id'] = '';
        $pre['product_code'] = '';
        // (HDN) 実績を展開
        while ( $dtl = current($dtls) ) {
            if ( $pre['saiji_id'] != $dtl['saiji_id'] ||
                 $pre['tenpo_id'] != $dtl['tenpo_id'] || 
                 $pre['bumon_id'] != $dtl['bumon_id'] || 
                 $pre['product_code'] != $dtl['product_code'] ) {
                // 商品行の初期化
                $bumonLine['saiji_id'] = $itemLine['saiji_id'] = $dtl['saiji_id'];
                $bumonLine['saiji_name'] = $itemLine['saiji_name'] = $dtl['saiji_name'];
                $bumonLine['tenpo_id'] = $itemLine['tenpo_id'] = $dtl['tenpo_id'];
                $bumonLine['tenpo_name'] = $itemLine['tenpo_name'] = $dtl['tenpo_name'];
                $bumonLine['bumon_id'] = $itemLine['bumon_id'] = $dtl['bumon_id'];
                $bumonLine['bumon_name'] = $itemLine['bumon_name'] = $dtl['bumon_name'];
                $itemLine['product_code'] = $dtl['product_code'];
                $itemLine['product_name'] = $dtl['product_name'] ;   
                for ( $i=0; $i<count($posOfDate); $i++ ) {
                    $itemLine['quantity'][$i]      = 0;
                    $itemLine['shukka_quantity'][$i]      = 0;
                    $itemLine['kingaku'][$i]       = 0;
                    $itemLine['base_kingaku'][$i]  = 0;
                }
                $itemLine['sum_quantity'] = 0;
                $itemLine['sum_shukka_quantity'] = 0;
                $itemLine['sum_kingaku'] = 0;
                $itemLine['sum_base_kingaku'] = 0;
                $itemLine['kbn'] = 'item';
            }
            // 部門行の初期化
            if ( !isset($bumonLine['quantity']) ) {
                for ( $i=0; $i<count($posOfDate); $i++ ) {
                    $bumonLine['quantity'][$i]      = 0;
                    $bumonLine['shukka_quantity'][$i] = 0;
                    $bumonLine['kingaku'][$i]       = 0;
                    $bumonLine['base_kingaku'][$i]  = 0;
                }
                $bumonLine['product_code'] = '';
                $bumonLine['product_name'] = '';
                $bumonLine['sum_quantity'] = 0;
                $bumonLine['sum_shukka_quantity'] = 0;
                $bumonLine['sum_kingaku'] = 0;
                $bumonLine['sum_base_kingaku'] = 0;
                $bumonLine['kbn'] = 'bumon';
            }
            if ( !is_null($dtl['shipping_delivery_date']) ) {
                $wDate = $dtl['shipping_delivery_date']->format('Y-m-d');
                // 商品行へのセット
                $itemLine['quantity'][$posOfDate[$wDate]] += $dtl['quantity'];
                $itemLine['shukka_quantity'][$posOfDate[$wDate]] += $dtl['shukka_quantity'];
                $itemLine['kingaku'][$posOfDate[$wDate]] += $dtl['kingaku'];
                $itemLine['base_kingaku'][$posOfDate[$wDate]] += $dtl['base_kingaku'];
                // 商品行の加算
                $itemLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $itemLine['sum_kingaku'] += $dtl['kingaku'];
                $itemLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                // 部門行への加算
                $bumonLine['quantity'][$posOfDate[$wDate]] += $dtl['quantity'];
                $bumonLine['kingaku'][$posOfDate[$wDate]] += $dtl['kingaku'];
                $bumonLine['base_kingaku'][$posOfDate[$wDate]] += $dtl['base_kingaku'];
                $bumonLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $bumonLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $bumonLine['sum_kingaku'] += $dtl['kingaku'];
                $bumonLine['sum_base_kingaku'] += $dtl['base_kingaku'];
            }
            $pre = $dtl;
            $post = next($dtls);
            if ( !$post ||
                 $post['saiji_id'] != $dtl['saiji_id'] ||
                 $post['tenpo_id'] != $dtl['tenpo_id'] || 
                 $post['bumon_id'] != $dtl['bumon_id'] ) {
                $lines[] = $itemLine;
                $itemLine = [];
                $lines[] = $bumonLine;
                $bumonLine = [];
            } else if ( $post['product_code'] != $dtl['product_code'] ) {
                $lines[] = $itemLine;
                $itemLine = [];
            }
        }
        log_info('受注集計：lines',$lines);

        $event = new EventArgs(
            [
                'qb' => $qb,
                'searchData' => $searchData,
            ],
            $request
        );

        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_ORDER_INDEX_SEARCH, $event);

        return [
            'searchForm' => $searchForm->createView(),
            'has_errors' => false,
            'posOfDate' => $posOfDate,
            'lines' => $lines,
        ];
    }

    /**
     * 受注店舗部門集計画面.
     *
     * - 検索条件
     *   - 催事（必須）
     *   - 店舗（任意）
     *   - 部門（任意）
     *
     * @Route("/%eccube_admin_route%/order/sum_tenpo_bumon", name="admin_order_sum_tenpo_bumon")
     * @Route("/%eccube_admin_route%/order/sum_tenpo_bumon/{saiji_id}", requirements={"saiji_id" = "\d+"}, name="admin_order_sum_tenpo_bumon_saiji")
     * @Template("@admin/Order/sum_tenpo_bumon.twig")
     */
    public function sumTenpoBumon(Request $request, $saiji_id = null, PaginatorInterface $paginator)
    {
        log_info('受注店舗部門集計：Request',$request->request->all());

        // (HDN) 受注検索FORMをそのまま使用
        $builder = $this->formFactory
            ->createBuilder(SearchOrderType::class);

        // (HDN) イベントはとりあえずそのまま
        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_ORDER_INDEX_INITIALIZE, $event);

        $searchForm = $builder->getForm();

        // (HDN) 催事オブジェクト
        $objSaiji = null;
        // (HDN) 店舗オブジェクト
        $objTenpo = null;
        // (HDN) 部門オブジェクト
        $objBumon = null;

        // (HDN) 検索条件を取得
        if ('POST' === $request->getMethod()) {
            $searchForm->handleRequest($request);

            if ($searchForm->isValid()) {
                /**
                 * 検索が実行された場合は, セッションに検索条件を保存する.
                 */
                $searchData = $searchForm->getData();

                // 検索条件をセッションに保持.
                $this->session->set('eccube.admin.order.search', FormUtil::getViewData($searchForm));
            } else {
                // 検索エラーの際は, 詳細検索枠を開いてエラー表示する.
                return [
                    'searchForm' => $searchForm->createView(),
                    'has_errors' => true,
                ];
            }
        } else {
            if ($request->get('resume')) {
                /*
                 * 他画面から戻ってきた場合は, セッションから検索条件を復旧する.
                 */
                $viewData = $this->session->get('eccube.admin.order.search', []);
                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);
            } else {
                /**
                 * 初期表示の場合.
                 */
                $viewData = [];

                if ($saiji_id) {
                    $viewData = ['saiji_id' => $saiji_id];
                }

                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);

                // セッション中の検索条件を初期化.
                $this->session->set('eccube.admin.order.search', $viewData);
            }
        }

        log_info('受注店舗部門集計：searchData',$searchData);

        // (HDN) formで指定があれば催事オブジェクトを取得
        if ( $searchForm->get('saiji_id') ) {
            $objSaiji = $searchForm->get('saiji_id')->getData();
        }
        // (HDN) formで指定があれば店舗オブジェクトを取得
        if ( $searchForm->get('tenpo_id') ) {
            $objTenpo = $searchForm->get('tenpo_id')->getData();
        }
        // (HDN) formで指定があれば部門オブジェクトを取得
        if ( $searchForm->get('bumon_id') ) {
            $objBumon = $searchForm->get('bumon_id')->getData();
        }

        // (HDN) 催事指定がなければ初期表示
        if ( !$objSaiji ) {
            return [
                'searchForm' => $searchForm->createView(),
                'has_errors' => false,
                'posOfDate' => null,
                'lines' => [],
                ];
        }

        /*
         * (HDN) 受注店舗部門集計
         *  ①受渡日のリストを取得
         *  ②受渡日のポジションをセット
         *  ⑤催事/店舗/部門/受渡日の実績を取得
         *  ⑥実績を受渡日で展開
         */

        // EntityManager取得
        $em = $this->getDoctrine()->getEntityManager(); 

        //-------------------------
        // ①受渡日のリストを取得
        //-------------------------
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('s.shipping_delivery_date')
            ->leftJoin('o.Shippings', 's')
            ->where('o.Saiji = :Saiji')
            ->andWhere('o.OrderStatus not in (3,8)')
            ->groupBy('s.shipping_delivery_date')
            ->orderBy('s.shipping_delivery_date');

        $qb->where('o.Saiji = :Saiji')->setParameter('Saiji', $objSaiji);

        //$shippingDates = $qb->getQuery()->execute();
        //log_info('受注店舗部門集計：shippingDates by execute()',$shippingDates);
        $shippingDates = $qb->getQuery()->getResult();
        log_info('受注店舗部門集計：shippingDates by getResult()',$shippingDates);

        //-------------------------
        // ②受渡日のポジションをセット
        //-------------------------
        $pos = 0;
        $posOfDate = [];
        foreach ( $shippingDates as $shippingDate ) {
            if ( !is_null($shippingDate['shipping_delivery_date']) ) {
                $wDate = $shippingDate['shipping_delivery_date']->format('Y-m-d');
                $posOfDate[$wDate] = $pos;
                $pos++;
            }
        }
        log_info('受注店舗部門集計：posOfDate',$posOfDate);

        //-------------------------
        // ③税毎の集計を下記KEYで
        // 　　催事、店舗、日付、税率
        //-------------------------
        $qb = $this->orderRepository->createQueryBuilder('o')
        ->select('sj.id as saiji_id')
        ->addSelect('tp.id as tenpo_id')
        ->addSelect('s.shipping_delivery_date')
        ->addSelect('o.payment_method')
        ->addSelect('o.id as order_id')
        ->addSelect('oi.tax_rate')
        ->addSelect('sum(oi.quantity*oi.price) as kingaku')
        ->leftJoin('o.OrderItems', 'oi')
        ->leftJoin('oi.Shipping', 's')
        ->leftJoin('o.Saiji', 'sj')
        ->leftJoin('o.Tenpo', 'tp')
        ->leftJoin('oi.Bumon', 'bm')
        ->where('o.Saiji = :Saiji')->setParameter('Saiji', $objSaiji)
        ->andWhere('o.OrderStatus not in (3,8)')
        ->andWhere('oi.product_code is not null')
        ->groupBy('saiji_id')
        ->addGroupBy('tenpo_id')
        ->addGroupBy('s.shipping_delivery_date')
        ->addGroupBy('o.payment_method')
        ->addGroupBy('order_id')
        ->addGroupBy('oi.tax_rate')
        ->orderBy('saiji_id')
        ->addOrderBy('tenpo_id')
        ->addOrderBy('oi.tax_rate')
        ->addOrderBy('s.shipping_delivery_date')
        ;

        // (HDN) 催事指定は必須
        // (HDN) 店舗指定があれば条件セット
        if ( $objTenpo ) {
            $qb
            ->andWhere('tp.id = :tenpo_id')->setParameter('tenpo_id', $objTenpo->getId());
        }
        // (HDN) 部門指定があれば条件セット
        if ( $objBumon ) {
            $qb
            ->andWhere('bm.id = :bumon_id')->setParameter('bumon_id', $objBumon->getId());
        }

        $denpyoByTax = $qb->getQuery()->getResult();
        log_info('受注店舗部門集計：税別集計：denpyos by getResult()',$denpyoByTax);

        //-------------------------
        // ④税別集計をセット
        // 　※催事指定ありが前提
        //-------------------------
        $pos = 0;
        $sumByTax = [];
        // (HDN) 伝票税別集計を展開：初期処理
        $pre['tenpo_id'] = '';
        $pre['tax_rate'] = '';
        // (HDN) 伝票税別集計を展開：1件毎に処理
        foreach ( $denpyoByTax as $dtl ) {
            // 店舗毎の初期化
            if ( $pre['tenpo_id'] != $dtl['tenpo_id'] || $pre['tax_rate'] != $dtl['tax_rate'] ) {
                // 店舗合計金額を初期化
                if ( $pre['tenpo_id'] != $dtl['tenpo_id'] ) {
                    for ( $i=0; $i<count($posOfDate); $i++ ) {
                        // 日別
                        $sumByTax[$dtl['tenpo_id']]['total'][$i]    = 0;
                        $sumByTax[$dtl['tenpo_id']]['kinshu']       = [];
                        // 合計
                        $sumByTax[$dtl['tenpo_id']]['sum_total']    = 0;
                        $sumByTax[$dtl['tenpo_id']]['sum_kinshu']   = [];
                    }
                }
                // 店舗毎の税別集計を初期化
                for ( $i=0; $i<count($posOfDate); $i++ ) {
                    // 日別
                    $sumByTax[$dtl['tenpo_id']][$dtl['tax_rate']]['kingaku'][$i]   = 0;
                    $sumByTax[$dtl['tenpo_id']][$dtl['tax_rate']]['tax'][$i]   = 0;
                    // 合計
                    $sumByTax[$dtl['tenpo_id']][$dtl['tax_rate']]['sum_kingaku']   = 0;
                    $sumByTax[$dtl['tenpo_id']][$dtl['tax_rate']]['sum_tax']   = 0;
                }
            }
            // 伝票税別集計を店舗集計
            if ( !is_null($dtl['shipping_delivery_date']) ) {
                // 日付のポジション
                $wDate = $dtl['shipping_delivery_date']->format('Y-m-d');
                $wPos = $posOfDate[$wDate];
                // 税額は伝票毎の四捨五入
                $wTax = round($dtl['tax_rate']*$dtl['kingaku']/100,0);
                $wTotal = $dtl['kingaku'] + $wTax;

                $sumByTax[$dtl['tenpo_id']][$dtl['tax_rate']]['tax_rate'] = $dtl['tax_rate'];
                // 税別集計（日別）
                $sumByTax[$dtl['tenpo_id']][$dtl['tax_rate']]['kingaku'][$wPos] += $dtl['kingaku'];
                $sumByTax[$dtl['tenpo_id']][$dtl['tax_rate']]['tax'][$wPos] += $wTax;
                // 税別集計（合計）
                $sumByTax[$dtl['tenpo_id']][$dtl['tax_rate']]['sum_kingaku'] += $dtl['kingaku'];
                $sumByTax[$dtl['tenpo_id']][$dtl['tax_rate']]['sum_tax'] += $wTax;
                // 支払金額（日別）
                $sumByTax[$dtl['tenpo_id']]['total'][$wPos] += $wTotal;
                // 支払金額（合計）
                $sumByTax[$dtl['tenpo_id']]['sum_total'] += $wTotal;
                // 金種別（日別/合計）
                if ( !array_key_exists($dtl['payment_method'],$sumByTax[$dtl['tenpo_id']]['kinshu']) ) {
                    for ( $i=0; $i<count($posOfDate); $i++ ) {
                        $sumByTax[$dtl['tenpo_id']]['kinshu'][$dtl['payment_method']][$i] = 0;
                    }
                    $sumByTax[$dtl['tenpo_id']]['kinshu'][$dtl['payment_method']][$wPos] = $wTotal;
                    $sumByTax[$dtl['tenpo_id']]['sum_kinshu'][$dtl['payment_method']] = $wTotal;
                } else {
                    $sumByTax[$dtl['tenpo_id']]['kinshu'][$dtl['payment_method']][$wPos] += $wTotal;
                    $sumByTax[$dtl['tenpo_id']]['sum_kinshu'][$dtl['payment_method']] += $wTotal;
                }
            }
            $pre = $dtl;
        }
        log_info('受注店舗部門集計：sumByTax',$sumByTax);

        //-------------------------
        // ⑤催事/店舗/部門/受渡日の実績を取得
        //-------------------------
        // QueryBuilderを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            ->addSelect('sj.name as saiji_name')
            ->addSelect('tp.id as tenpo_id')
            ->addSelect('tp.tenpo_name as tenpo_name')
            ->addSelect('bm.id as bumon_id')
            ->addSelect('bm.name as bumon_name')
            //->addSelect('oi.product_code')
            ->addSelect('s.shipping_delivery_date')
            //->addSelect('max(oi.product_name) as product_name')
            ->addSelect('o.payment_method')
            ->addSelect('sum(oi.quantity) as quantity')
            ->addSelect('sum(oi.quantity*oi.base_price) as base_kingaku')
            ->addSelect('sum(oi.quantity*oi.price) as kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_a_gaku) as wari_a_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_b_gaku) as wari_b_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_kikan_gaku) as wari_kikan_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_matome_gaku) as wari_matome_kingaku')
            ->leftJoin('o.OrderItems', 'oi')
            ->leftJoin('oi.Shipping', 's')
            ->leftJoin('o.Saiji', 'sj')
            ->leftJoin('o.Tenpo', 'tp')
            ->leftJoin('oi.Bumon', 'bm')
            ->where('o.Saiji = :Saiji')
            ->andWhere('o.OrderStatus not in (3,8)')
            ->andWhere('oi.product_code is not null')
            ->groupBy('saiji_id')
            ->addGroupBy('tenpo_id')
            ->addGroupBy('bumon_id')
            //->addGroupBy('oi.product_code')
            ->addGroupBy('s.shipping_delivery_date')
            //->having('oi.product_code is not null')
            ->addGroupBy('o.payment_method')
            ->orderBy('saiji_id')
            ->addOrderBy('tenpo_id')
            ->addOrderBy('bumon_id')
            //->addOrderBy('oi.product_code')
            ->addOrderBy('s.shipping_delivery_date');

        // (HDN) 催事指定は必須
        //$qb->where('o.Saiji = :Saiji')->setParameter('Saiji', $objSaiji);
        $qb->setParameter('Saiji', $objSaiji);

        // (HDN) 店舗指定があれば条件セット
        if ( $objTenpo ) {
            $qb
            ->andWhere('tp.id = :tenpo_id')
            ->setParameter('tenpo_id', $objTenpo->getId());
        }

        // (HDN) 部門指定があれば条件セット
        if ( $objBumon ) {
            $qb
            ->andWhere('bm.id = :bumon_id')
            ->setParameter('bumon_id', $objBumon->getId());
        }

        // (HDN) 実績取得
        $dtls = $qb->getQuery()->execute();
        log_info('受注集計：dtls by execute()',$dtls);

        //-------------------------
        // ⑥実績を受渡日で展開
        //-------------------------
        // (HDN) 商品行 & 部門行
        $bumonLine = $tenpoLine = $lines = [];
        $pre['saiji_id'] = '';
        $pre['tenpo_id'] = '';
        $pre['bumon_id'] = '';
        // (HDN) 実績を展開
        while ( $dtl = current($dtls) ) {
            if ( $pre['saiji_id'] != $dtl['saiji_id'] ||
                 $pre['tenpo_id'] != $dtl['tenpo_id'] || 
                 $pre['bumon_id'] != $dtl['bumon_id'] ) {
                // 店舗行/部門行の初期化
                $tenpoLine['saiji_id'] = $bumonLine['saiji_id'] = $dtl['saiji_id'];
                $tenpoLine['saiji_name'] = $bumonLine['saiji_name'] = $dtl['saiji_name'];
                $tenpoLine['tenpo_id'] = $bumonLine['tenpo_id'] = $dtl['tenpo_id'];
                $tenpoLine['tenpo_name'] = $bumonLine['tenpo_name'] = $dtl['tenpo_name'];
                $bumonLine['bumon_id'] = $dtl['bumon_id'];
                $bumonLine['bumon_name'] = $dtl['bumon_name'];
                // 部門行の日別集計を初期化
                for ( $i=0; $i<count($posOfDate); $i++ ) {
                    $bumonLine['quantity'][$i]      = 0;
                    $bumonLine['kingaku'][$i]       = 0;
                    $bumonLine['base_kingaku'][$i]  = 0;
                    // 割引ごと
                    $bumonLine['wari_a_kingaku'][$i]        = 0;
                    $bumonLine['wari_b_kingaku'][$i]        = 0;
                    $bumonLine['wari_kikan_kingaku'][$i]    = 0;
                    $bumonLine['wari_matome_kingaku'][$i]   = 0;
                }
                // 部門行の集計を初期化
                $bumonLine['sum_quantity'] = 0;
                $bumonLine['sum_kingaku'] = 0;
                $bumonLine['sum_base_kingaku'] = 0;
                $bumonLine['kbn'] = 'bumon';
                // 割引ごと
                $bumonLine['sum_wari_a_kingaku']        = 0;
                $bumonLine['sum_wari_b_kingaku']        = 0;
                $bumonLine['sum_wari_kikan_kingaku']    = 0;
                $bumonLine['sum_wari_matome_kingaku']   = 0;
            }
            // 店舗行の初期化
            if ( !isset($tenpoLine['quantity']) ) {
                // 店舗行の日別集計を初期化
                for ( $i=0; $i<count($posOfDate); $i++ ) {
                    $tenpoLine['quantity'][$i]      = 0;
                    $tenpoLine['kingaku'][$i]       = 0;
                    $tenpoLine['base_kingaku'][$i]  = 0;
                    // 割引ごと
                    $tenpoLine['wari_a_kingaku'][$i]        = 0;
                    $tenpoLine['wari_b_kingaku'][$i]        = 0;
                    $tenpoLine['wari_kikan_kingaku'][$i]    = 0;
                    $tenpoLine['wari_matome_kingaku'][$i]   = 0;
                    // 金種ごと
                    $tenpoLine['kingaku_genkin'][$i]  = 0;
                    $tenpoLine['kingaku_denshi'][$i]  = 0;
                    $tenpoLine['kingaku_credit'][$i]  = 0;
                }
                // 店舗行の集計を初期化
                $tenpoLine['bumon_id'] = '';
                $tenpoLine['bumon_name'] = '';
                $tenpoLine['sum_quantity'] = 0;
                $tenpoLine['sum_kingaku'] = 0;
                $tenpoLine['sum_base_kingaku'] = 0;
                $tenpoLine['kbn'] = 'tenpo';
                // 割引ごと
                $tenpoLine['sum_wari_a_kingaku']        = 0;
                $tenpoLine['sum_wari_b_kingaku']        = 0;
                $tenpoLine['sum_wari_kikan_kingaku']    = 0;
                $tenpoLine['sum_wari_matome_kingaku']   = 0;
            }
            if ( !is_null($dtl['shipping_delivery_date']) ) {
                $wDate = $dtl['shipping_delivery_date']->format('Y-m-d');
                // 部門行日別へのセット
                $bumonLine['quantity'][$posOfDate[$wDate]] += $dtl['quantity'];
                $bumonLine['kingaku'][$posOfDate[$wDate]] += $dtl['kingaku'];
                $bumonLine['base_kingaku'][$posOfDate[$wDate]] += $dtl['base_kingaku'];
                // 部門行日別(割引ごと)へのセット
                $bumonLine['wari_a_kingaku'][$posOfDate[$wDate]] += $dtl['wari_a_kingaku'];
                $bumonLine['wari_b_kingaku'][$posOfDate[$wDate]] += $dtl['wari_b_kingaku'];
                $bumonLine['wari_kikan_kingaku'][$posOfDate[$wDate]] += $dtl['wari_kikan_kingaku'];
                $bumonLine['wari_matome_kingaku'][$posOfDate[$wDate]] += $dtl['wari_matome_kingaku'];
                // 部門行集計への加算
                $bumonLine['sum_quantity'] += $dtl['quantity'];
                $bumonLine['sum_kingaku'] += $dtl['kingaku'];
                $bumonLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                // 部門行集計(割引ごと)への加算
                $bumonLine['sum_wari_a_kingaku'] += $dtl['wari_a_kingaku'];
                $bumonLine['sum_wari_b_kingaku'] += $dtl['wari_b_kingaku'];
                $bumonLine['sum_wari_kikan_kingaku'] += $dtl['wari_kikan_kingaku'];
                $bumonLine['sum_wari_matome_kingaku'] += $dtl['wari_matome_kingaku'];
                // 店舗行日別への加算
                $tenpoLine['quantity'][$posOfDate[$wDate]] += $dtl['quantity'];
                $tenpoLine['kingaku'][$posOfDate[$wDate]] += $dtl['kingaku'];
                $tenpoLine['base_kingaku'][$posOfDate[$wDate]] += $dtl['base_kingaku'];
                // 店舗行日別(割引ごと)への加算
                $tenpoLine['wari_a_kingaku'][$posOfDate[$wDate]] += $dtl['wari_a_kingaku'];
                $tenpoLine['wari_b_kingaku'][$posOfDate[$wDate]] += $dtl['wari_b_kingaku'];
                $tenpoLine['wari_kikan_kingaku'][$posOfDate[$wDate]] += $dtl['wari_kikan_kingaku'];
                $tenpoLine['wari_matome_kingaku'][$posOfDate[$wDate]] += $dtl['wari_matome_kingaku'];
                // 金種ごと
                if ( $dtl['payment_method'] == 'ＦＣ電子マネー' ) {
                    $tenpoLine['kingaku_denshi'][$posOfDate[$wDate]]  += $dtl['kingaku'];
                } else if ( $dtl['payment_method'] == 'クレジット' ) {
                    $tenpoLine['kingaku_credit'][$posOfDate[$wDate]]  += $dtl['kingaku'];
                } else {
                    $tenpoLine['kingaku_genkin'][$posOfDate[$wDate]]  += $dtl['kingaku'];
                }
                // 店舗行集計への加算
                $tenpoLine['sum_quantity'] += $dtl['quantity'];
                $tenpoLine['sum_kingaku'] += $dtl['kingaku'];
                $tenpoLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                // 店舗行集計(割引ごと)への加算
                $tenpoLine['sum_wari_a_kingaku'] += $dtl['wari_a_kingaku'];
                $tenpoLine['sum_wari_b_kingaku'] += $dtl['wari_b_kingaku'];
                $tenpoLine['sum_wari_kikan_kingaku'] += $dtl['wari_kikan_kingaku'];
                $tenpoLine['sum_wari_matome_kingaku'] += $dtl['wari_matome_kingaku'];
            }
            $pre = $dtl;
            $post = next($dtls);
            if ( !$post ||
                 $post['saiji_id'] != $dtl['saiji_id'] ||
                 $post['tenpo_id'] != $dtl['tenpo_id'] ) {
                $lines[] = $bumonLine;
                $bumonLine = [];
                // 店舗行に税別集計を組み込み
                $tenpoLine['sumByTax'] = $sumByTax[$dtl['tenpo_id']];
                $lines[] = $tenpoLine;
                $tenpoLine = [];
            } else if ( $post['bumon_id'] != $dtl['bumon_id'] ) {
                $lines[] = $bumonLine;
                $bumonLine = [];
            }
        }
        log_info('受注店舗部門集計：lines',$lines);

        $event = new EventArgs(
            [
                'qb' => $qb,
                'searchData' => $searchData,
            ],
            $request
        );

        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_ORDER_INDEX_SEARCH, $event);

        return [
            'searchForm' => $searchForm->createView(),
            'has_errors' => false,
            'posOfDate' => $posOfDate,
            'lines' => $lines,
        ];
    }

    /**
     * @Route("/%eccube_admin_route%/order/export/pdf", name="admin_order_export_pdf")
     * @Template("@admin/Order/order_pdf.twig")
     *
     * @param Request $request
     *
     * @return array|RedirectResponse
     */
    public function exportPdf(Request $request)
    {
        // requestから出荷番号IDの一覧を取得する.
        $ids = $request->get('ids', []);

        if (count($ids) == 0) {
            $this->addError('admin.order.delivery_note_parameter_error', 'admin');
            log_info('The Order cannot found!');

            return $this->redirectToRoute('admin_order');
        }

        /** @var OrderPdf $OrderPdf */
        $OrderPdf = $this->orderPdfRepository->find($this->getUser());

        if (!$OrderPdf) {
            $OrderPdf = new OrderPdf();
            /*
            $OrderPdf
                ->setTitle(trans('admin.order.delivery_note_title__default'))
                ->setMessage1(trans('admin.order.delivery_note_message__default1'))
                ->setMessage2(trans('admin.order.delivery_note_message__default2'))
                ->setMessage3(trans('admin.order.delivery_note_message__default3'));
            */
            // (HDN)
            $OrderPdf
                ->setTitle(trans('admin.order.delivery_note_title__y01'))
                ->setMessage1(trans('admin.order.delivery_note_message__y01_1'))
                ->setMessage2(trans('admin.order.delivery_note_message__y01_2'))
                ->setMessage3(trans('admin.order.delivery_note_message__y01_3'))
                ->setNote1(trans('admin.order.delivery_note__y01_line1'))
                ->setNote2(trans('admin.order.delivery_note__y01_line2'))
                ->setNote3(trans('admin.order.delivery_note__y01_line3'));
        }

        /**
         * @var FormBuilder
         */
        $builder = $this->formFactory->createBuilder(OrderPdfType::class, $OrderPdf);

        /* @var \Symfony\Component\Form\Form $form */
        $form = $builder->getForm();

        // Formへの設定
        $form->get('ids')->setData(implode(',', $ids));

        return [
            'form' => $form->createView(),
        ];
    }

    /**
     * @Route("/%eccube_admin_route%/order/export/pdf/download_xx", name="admin_order_pdf_download_xx")
     * @Template("@admin/Order/order_pdf.twig")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function exportPdfDownload(Request $request, OrderPdfService $orderPdfService)
    {
        /**
         * @var FormBuilder
         */
        $builder = $this->formFactory->createBuilder(OrderPdfType::class);

        /* @var \Symfony\Component\Form\Form $form */
        $form = $builder->getForm();
        $form->handleRequest($request);

        // Validation
        if (!$form->isValid()) {
            log_info('The parameter is invalid!');

            return $this->render('@admin/Order/order_pdf.twig', [
                'form' => $form->createView(),
            ]);
        }

        $arrData = $form->getData();

        // 購入情報からPDFを作成する
        $status = $orderPdfService->makePdf($arrData);

        // 異常終了した場合の処理
        if (!$status) {
            $this->addError('admin.order.export.pdf.download.failure', 'admin');
            log_info('Unable to create pdf files! Process have problems!');

            return $this->render('@admin/Order/order_pdf.twig', [
                'form' => $form->createView(),
            ]);
        }

        // ダウンロードする
        $response = new Response(
            $orderPdfService->outputPdf(),
            200,
            ['content-type' => 'application/pdf']
        );

        $downloadKind = $form->get('download_kind')->getData();

        // レスポンスヘッダーにContent-Dispositionをセットし、ファイル名を指定
        if ($downloadKind == 1) {
            $response->headers->set('Content-Disposition', 'attachment; filename="'.$orderPdfService->getPdfFileName().'"');
        } else {
            $response->headers->set('Content-Disposition', 'inline; filename="'.$orderPdfService->getPdfFileName().'"');
        }

        log_info('OrderPdf download success!', ['Order ID' => implode(',', $request->get('ids', []))]);

        $isDefault = isset($arrData['default']) ? $arrData['default'] : false;
        if ($isDefault) {
            // Save input to DB
            $arrData['admin'] = $this->getUser();
            $this->orderPdfRepository->save($arrData);
        }

        return $response;
    }

    /**
     * (HDN) 予約システム用に納品書確認画面をSKIP
     * @Route("/%eccube_admin_route%/order/export/pdf/download", name="admin_order_pdf_download")
     * @Route("/%eccube_admin_route%/order/export/pdf_y01", name="admin_order_pdf_y01")
     * @Template("@admin/Order/order_pdf.twig")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function exportPdfDownloadY01(Request $request, OrderPdfService $orderPdfService)
    {
        log_info('商品引換証 download start!', ['Order ID' => implode(',', $request->get('ids', []))]);

        // requestから出荷番号IDの一覧を取得する.
        $ids = $request->get('ids', []);

        if (count($ids) == 0) {
            $this->addError('admin.order.delivery_note_parameter_error', 'admin');
            log_info('The Order cannot found!');

            return $this->redirectToRoute('admin_order');
        }

        /** @var OrderPdf $OrderPdf */
        $OrderPdf = $this->orderPdfRepository->find($this->getUser());

        if (!$OrderPdf) {
            $OrderPdf = new OrderPdf();
            $OrderPdf
                ->setTitle(trans('admin.order.delivery_note_title__default'))
                ->setMessage1(trans('admin.order.delivery_note_message__default1'))
                ->setMessage2(trans('admin.order.delivery_note_message__default2'))
                ->setMessage3(trans('admin.order.delivery_note_message__default3'));
        }

        /**
         * @var FormBuilder
         */
        $builder = $this->formFactory->createBuilder(OrderPdfType::class, $OrderPdf);

        /* @var \Symfony\Component\Form\Form $form */
        $form = $builder->getForm();

        // Formへの設定
        $form->get('ids')->setData(implode(',', $ids));

        $now = new \DateTime();
        $form->get('issue_date')->setData($now);

        // (HDN) ここから「exportPdfDownload」
        //$form->handleRequest($request);

        // Validation
        /*
        if (!$form->isValid()) {
            log_info('The parameter is invalid!');

            return $this->render('@admin/Order/order_pdf.twig', [
                'form' => $form->createView(),
            ]);
        }
        */

        //$arrData = $form->getData();
        $arrData['ids'] = implode(',', $ids);
        $arrData['issue_date'] = $now;
        $arrData['title'] = trans('admin.order.delivery_note_title__y01');
        $arrData['message1'] = trans('admin.order.delivery_note_message__y01_1');
        $arrData['message2'] = trans('admin.order.delivery_note_message__y01_2');
        $arrData['message3'] = trans('admin.order.delivery_note_message__y01_3');
        $arrData['note1'] = trans('admin.order.delivery_note__y01_line1');
        $arrData['note2'] = trans('admin.order.delivery_note__y01_line2');
        $arrData['note3'] = trans('admin.order.delivery_note__y01_line3');

        // 購入情報からPDFを作成する
        $status = $orderPdfService->makePdfY01($arrData);

        // 異常終了した場合の処理
        if (!$status) {
            $this->addError('admin.order.export.pdf.download.failure', 'admin');
            log_info('Unable to create pdf files! Process have problems!');

            return $this->render('@admin/Order/order_pdf.twig', [
                'form' => $form->createView(),
            ]);
        }

        // ダウンロードする
        $response = new Response(
            $orderPdfService->outputPdf(),
            200,
            ['content-type' => 'application/pdf']
        );

        $downloadKind = $form->get('download_kind')->getData();

        // レスポンスヘッダーにContent-Dispositionをセットし、ファイル名を指定
        if ($downloadKind == 1) {
            $response->headers->set('Content-Disposition', 'attachment; filename="'.$orderPdfService->getPdfFileName().'"');
        } else {
            $response->headers->set('Content-Disposition', 'inline; filename="'.$orderPdfService->getPdfFileName().'"');
        }

        log_info('商品引換証 download success!', ['Order ID' => implode(',', $request->get('ids', []))]);

        $isDefault = isset($arrData['default']) ? $arrData['default'] : false;
        if ($isDefault) {
            // Save input to DB
            $arrData['admin'] = $this->getUser();
            $this->orderPdfRepository->save($arrData);
        }

        return $response;

        /*
        return [
            'form' => $form->createView(),
        ];
        */
    }

    /**
     * 未引渡商品一覧画面.
     *
     * - 検索条件
     *   - 催事（必須）
     *   - 店舗（任意）
     *   - 部門（任意）
     *
     * @Route("/%eccube_admin_route%/order/sum_minou_item", name="admin_order_sum_minou_item")
     * @Route("/%eccube_admin_route%/order/sum_minou_item/{saiji_id}", requirements={"saiji_id" = "\d+"}, name="admin_order_sum_minou_item_saiji")
     * @Template("@admin/Order/sum_minou_item.twig")
     */
    public function sumMinouItem(Request $request, $saiji_id = null, PaginatorInterface $paginator)
    {
        log_info('未引渡商品一覧：Request',$request->request->all());

        // (HDN) 受注検索FORMをそのまま使用
        $builder = $this->formFactory
            ->createBuilder(SearchOrderType::class);

        // (HDN) イベントはとりあえずそのまま
        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_ORDER_INDEX_INITIALIZE, $event);

        $searchForm = $builder->getForm();

        // (HDN) 催事オブジェクト
        $objSaiji = null;
        // (HDN) 店舗オブジェクト
        $objTenpo = null;
        // (HDN) 部門オブジェクト
        $objBumon = null;

        // (HDN) 検索条件を取得
        if ('POST' === $request->getMethod()) {
            $searchForm->handleRequest($request);

            if ($searchForm->isValid()) {
                /**
                 * 検索が実行された場合は, セッションに検索条件を保存する.
                 */
                $searchData = $searchForm->getData();

                // 検索条件をセッションに保持.
                $this->session->set('eccube.admin.order.search', FormUtil::getViewData($searchForm));
            } else {
                // 検索エラーの際は, 詳細検索枠を開いてエラー表示する.
                return [
                    'searchForm' => $searchForm->createView(),
                    'has_errors' => true,
                ];
            }
        } else {
            if ($request->get('resume')) {
                /*
                 * 他画面から戻ってきた場合は, セッションから検索条件を復旧する.
                 */
                $viewData = $this->session->get('eccube.admin.order.search', []);
                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);
            } else {
                /**
                 * 初期表示の場合.
                 */
                $viewData = [];

                if ($saiji_id) {
                    $viewData = ['saiji_id' => $saiji_id];
                }

                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);

                // セッション中の検索条件を初期化.
                $this->session->set('eccube.admin.order.search', $viewData);
            }
        }

        log_info('未引渡商品一覧：searchData',$searchData);

        // (HDN) formで指定があれば催事オブジェクトを取得
        if ( $searchForm->get('saiji_id') ) {
            $objSaiji = $searchForm->get('saiji_id')->getData();
        }
        // (HDN) formで指定があれば店舗オブジェクトを取得
        if ( $searchForm->get('tenpo_id') ) {
            $objTenpo = $searchForm->get('tenpo_id')->getData();
        }
        // (HDN) formで指定があれば部門オブジェクトを取得
        if ( $searchForm->get('bumon_id') ) {
            $objBumon = $searchForm->get('bumon_id')->getData();
        }

        // (HDN) 催事指定がなければ初期表示
        if ( !$objSaiji ) {
            return [
                'searchForm' => $searchForm->createView(),
                'has_errors' => false,
                'posOfDate' => null,
                'lines' => [],
                ];
        }

        /*
         * (HDN) 未引渡商品一覧
         *  ①受渡日のリストを取得
         *  ②受渡日のポジションをセット
         *  ③催事/店舗/部門/商品/受渡日の実績を取得
         *  ④実績を受渡日で展開
         */

        // EntityManager取得
        $em = $this->getDoctrine()->getEntityManager(); 

        // ①受渡日のリストを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('s.shipping_delivery_date')
            ->leftJoin('o.Shippings', 's')
            ->where('o.Saiji = :Saiji')
            ->andWhere('o.OrderStatus not in (3,8)')
            ->groupBy('s.shipping_delivery_date')
            ->orderBy('s.shipping_delivery_date');

        $qb->where('o.Saiji = :Saiji')->setParameter('Saiji', $objSaiji);

        //$shippingDates = $qb->getQuery()->execute();
        //log_info('未引渡商品一覧：shippingDates by execute()',$shippingDates);
        $shippingDates = $qb->getQuery()->getResult();
        log_info('未引渡商品一覧：shippingDates by getResult()',$shippingDates);

        // ②受渡日のポジションをセット
        $pos = 0;
        $posOfDate = [];
        foreach ( $shippingDates as $shippingDate ) {
            if ( !is_null($shippingDate['shipping_delivery_date']) ) {
                $wDate = $shippingDate['shipping_delivery_date']->format('Y-m-d');
                $posOfDate[$wDate] = $pos;
                $pos++;
            }
        }
        log_info('未引渡商品一覧：posOfDate',$posOfDate);

        // ③催事/店舗/部門/商品/受渡日の実績を取得
        // QueryBuilderを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            ->addSelect('sj.name as saiji_name')
            ->addSelect('tp.id as tenpo_id')
            ->addSelect('tp.tenpo_name as tenpo_name')
            ->addSelect('bm.id as bumon_id')
            ->addSelect('bm.name as bumon_name')
            ->addSelect('oi.product_code')
            ->addSelect('s.shipping_delivery_date')
            ->addSelect('os.id as order_status_id')
            ->addSelect('max(oi.product_name) as product_name')
            ->addSelect('sum(oi.quantity) as quantity')
            ->addSelect('sum(oi.quantity*oi.base_price) as base_kingaku')
            ->addSelect('sum(oi.quantity*oi.price) as kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_a_gaku) as wari_a_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_b_gaku) as wari_b_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_kikan_gaku) as wari_kikan_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_matome_gaku) as wari_matome_kingaku')
            ->leftJoin('o.OrderItems', 'oi')
            ->leftJoin('oi.Shipping', 's')
            ->leftJoin('o.Saiji', 'sj')
            ->leftJoin('o.Tenpo', 'tp')
            ->leftJoin('oi.Bumon', 'bm')
            ->leftJoin('o.OrderStatus', 'os')
            ->where('o.Saiji = :Saiji')
            ->andWhere('o.OrderStatus not in (3,8)')
            ->andWhere('oi.product_code is not null')
            ->groupBy('saiji_id')
            ->addGroupBy('tenpo_id')
            ->addGroupBy('bumon_id')
            ->addGroupBy('oi.product_code')
            ->addGroupBy('s.shipping_delivery_date')
            ->addGroupBy('os.id')
            ->having('oi.product_code is not null')
            ->orderBy('saiji_id')
            ->addOrderBy('tenpo_id')
            ->addOrderBy('bumon_id')
            ->addOrderBy('oi.product_code')
            ->addOrderBy('s.shipping_delivery_date');

        // (HDN) 催事指定は必須
        //$qb->where('o.Saiji = :Saiji')->setParameter('Saiji', $objSaiji);
        $qb->setParameter('Saiji', $objSaiji);

        // (HDN) 店舗指定があれば条件セット
        if ( $objTenpo ) {
            $qb
            ->andWhere('tp.id = :tenpo_id')
            ->setParameter('tenpo_id', $objTenpo->getId());
        }

        // (HDN) 部門指定があれば条件セット
        if ( $objBumon ) {
            $qb
            ->andWhere('bm.id = :bumon_id')
            ->setParameter('bumon_id', $objBumon->getId());
        }

        // (HDN) 実績取得
        $dtls = $qb->getQuery()->execute();
        log_info('未引渡商品一覧：dtls by execute()',$dtls);

        // ④実績を受渡日で展開
        // (HDN) 商品行 & 部門行
        $itemLine = $bumonLine = $lines = [];
        $pre['saiji_id'] = '';
        $pre['tenpo_id'] = '';
        $pre['bumon_id'] = '';
        $pre['product_code'] = '';
        // (HDN) 実績を展開
        while ( $dtl = current($dtls) ) {
            if ( $pre['saiji_id'] != $dtl['saiji_id'] ||
                 $pre['tenpo_id'] != $dtl['tenpo_id'] || 
                 $pre['bumon_id'] != $dtl['bumon_id'] || 
                 $pre['product_code'] != $dtl['product_code'] ) {
                // 商品行と部門行の初期化
                $bumonLine['saiji_id'] = $itemLine['saiji_id'] = $dtl['saiji_id'];
                $bumonLine['saiji_name'] = $itemLine['saiji_name'] = $dtl['saiji_name'];
                $bumonLine['tenpo_id'] = $itemLine['tenpo_id'] = $dtl['tenpo_id'];
                $bumonLine['tenpo_name'] = $itemLine['tenpo_name'] = $dtl['tenpo_name'];
                $bumonLine['bumon_id'] = $itemLine['bumon_id'] = $dtl['bumon_id'];
                $bumonLine['bumon_name'] = $itemLine['bumon_name'] = $dtl['bumon_name'];
                // 商品行の初期化
                $itemLine['kbn'] = 'item';
                $itemLine['product_code'] = $dtl['product_code'];
                $itemLine['product_name'] = $dtl['product_name'] ;
                // 商品行の日別集計を初期化   
                for ( $i=0; $i<count($posOfDate); $i++ ) {
                    $itemLine['quantity'][$i]      = 0;
                    $itemLine['shukka_quantity'][$i] = 0;
                    $itemLine['kingaku'][$i]       = 0;
                    $itemLine['base_kingaku'][$i]  = 0;
                }
                // 商品行の集計欄を初期化
                $itemLine['sum_quantity'] = 0;
                $itemLine['sum_shukka_quantity'] = 0;
                $itemLine['sum_kingaku'] = 0;
                $itemLine['sum_base_kingaku'] = 0;
            }
            // 部門行の初期化
            if ( !isset($bumonLine['quantity']) ) {
                // 部門行の初期化
                $bumonLine['kbn'] = 'bumon';
                $bumonLine['product_code'] = '';
                $bumonLine['product_name'] = '';
                // 部門行の日別集計を初期化   
                for ( $i=0; $i<count($posOfDate); $i++ ) {
                    $bumonLine['quantity'][$i]      = 0;
                    $bumonLine['shukka_quantity'][$i] = 0;
                    $bumonLine['kingaku'][$i]       = 0;
                    $bumonLine['base_kingaku'][$i]  = 0;
                }
                // 部門行の集計欄を初期化
                $bumonLine['sum_quantity'] = 0;
                $bumonLine['sum_shukka_quantity'] = 0;
                $bumonLine['sum_kingaku'] = 0;
                $bumonLine['sum_base_kingaku'] = 0;
            }

            // 明細のセット
            if ( !is_null($dtl['shipping_delivery_date']) ) {
                $wDate = $dtl['shipping_delivery_date']->format('Y-m-d');
                // 商品行への加算(日付ごとに加算)
                $itemLine['quantity'][$posOfDate[$wDate]] += $dtl['quantity'];
                // 商品行への出荷数の加算
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['shukka_quantity'][$posOfDate[$wDate]] += $dtl['quantity'];
                }
                $itemLine['kingaku'][$posOfDate[$wDate]] += $dtl['kingaku'];
                $itemLine['base_kingaku'][$posOfDate[$wDate]] += $dtl['base_kingaku'];
                // 商品行の集計欄へ加算
                $itemLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $itemLine['sum_kingaku'] += $dtl['kingaku'];
                $itemLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                // 部門行への加算(日付ごとに加算)
                $bumonLine['quantity'][$posOfDate[$wDate]] += $dtl['quantity'];
                // 部門行への出荷数の加算
                if ($dtl['order_status_id'] == 5) {
                    $bumonLine['shukka_quantity'][$posOfDate[$wDate]] += $dtl['quantity'];
                }
                $bumonLine['kingaku'][$posOfDate[$wDate]] += $dtl['kingaku'];
                $bumonLine['base_kingaku'][$posOfDate[$wDate]] += $dtl['base_kingaku'];
                // 部門行の集計欄へ加算
                $bumonLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $bumonLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $bumonLine['sum_kingaku'] += $dtl['kingaku'];
                $bumonLine['sum_base_kingaku'] += $dtl['base_kingaku'];
            }
            $pre = $dtl;
            $post = next($dtls);
            if ( !$post ||
                 $post['saiji_id'] != $dtl['saiji_id'] ||
                 $post['tenpo_id'] != $dtl['tenpo_id'] || 
                 $post['bumon_id'] != $dtl['bumon_id'] ) {
                $lines[] = $itemLine;
                $itemLine = [];
                $lines[] = $bumonLine;
                $bumonLine = [];
            } else if ( $post['product_code'] != $dtl['product_code'] ) {
                $lines[] = $itemLine;
                $itemLine = [];
            }
        }
        log_info('未引渡商品一覧：lines',$lines);

        $event = new EventArgs(
            [
                'qb' => $qb,
                'searchData' => $searchData,
            ],
            $request
        );

        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_ORDER_INDEX_SEARCH, $event);

        return [
            'searchForm' => $searchForm->createView(),
            'has_errors' => false,
            'posOfDate' => $posOfDate,
            'lines' => $lines,
        ];
    }

}
