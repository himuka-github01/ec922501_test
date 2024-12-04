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
use Eccube\Entity\Payment;      // (HDN) Payment
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
use Eccube\Repository\ProductRepository;    // (HDN) ProductRepository
use Eccube\Repository\ProductStockRepository;
use Eccube\Service\CsvExportService;
use Eccube\Service\MailService;
use Doctrine\Common\Collections\ArrayCollection; //2024/12/03　追記　田中
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
     * @param ProductRepository $productRepository ;    // (HDN)
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
        HdnOrderListService $hdnOrderListService,
        ProductRepository $productRepository
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
        $this->productRepository = $productRepository;
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
        /* //配送先住所情報　2024/09/18 田中
         if ( $searchForm->get('h_postal_code') ) {
             $objHpostalcode = $searchForm->get('h_postal_code')->getData();
         }*/

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
     * 受注部門商品集計画面.
     *
     * - 検索条件
     *   - 催事（必須）
     *   - 店舗（任意）
     *   - 部門（任意）
     * - Viewへの引渡（主要項目）
     *   - searchForm
     *   - posOfDate（日付横並びの配置）
     *   - lines（リスト）
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
        //sum_bumon_item_02.twig　受注期間ソート作成　2024/09/18 田中
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
            //->addSelect('u.shippipng.ukedate_date')//2024/09/18 追加
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
            //->addGroupBy('u.shippipng.ukedate_date')//2024/09/18 追加
            ->addGroupBy('s.shipping_delivery_date')
            ->addGroupBy('os.id')
            ->having('oi.product_code is not null')
            ->orderBy('saiji_id')
            ->addOrderBy('tenpo_id')
            ->addOrderBy('bumon_id')
            ->addOrderBy('oi.product_code')
            ->addOrderBy('s.shipping_delivery_date');
        //->addOrderBy('u.shippipng.ukedate_date');//2024/09/18 追加

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
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['shukka_quantity'][$posOfDate[$wDate]] += $dtl['quantity'];
                }
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
     * 受注部門商品集計画面(02) Ver.2022.05.xx
     *
     * - 検索条件
     *   - O 催事（必須）
     *   - O お引き渡し日（全日,期間の日付）※無くても良いのでは？
     *   - X 店舗（廃止）=> 店舗を横並び表示
     *   - 部門（任意）
     * - Viewへの引渡（主要項目）
     *   - searchForm
     *   - posOfTenpo（店舗横並びの配置）
     *   - lines（リスト）
     *
     * @Route("/%eccube_admin_route%/order/sum_bumon_item_02", name="admin_order_sum_bumon_item_02")
     * @Route("/%eccube_admin_route%/order/sum_bumon_item_02/{saiji_id}", requirements={"saiji_id" = "\d+"}, name="admin_order_sum_bumon_item_02_saiji")
     * @Template("@admin/Order/sum_bumon_item_02.twig")
     */
    public function sumBumonItem02BK(Request $request, $saiji_id = null, PaginatorInterface $paginator)
    {
        log_info('[受注部門商品集計(02]Request',$request->request->all());

        // (☆☆☆HDN) 受注検索FORMの受渡日改修版とする
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

        log_info('[受注部門商品集計(02]searchData',$searchData);

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
                'posOfTenpo' => null,
                'lines' => [],
            ];
        }

        /*
         * (HDN) 受注部門商品集計(02)
         *  ①催事対象店舗のリストを取得
         *  ②店舗のポジションをセット
         *  ③催事/日付/部門/商品/店舗の実績を取得
         *  ④実績を店舗で展開
         *  ⑤作成したリストを数量表示用とする
         *  ⑥金額表示用にリストをCOPYし、リストの後続にマージする
         */

        // EntityManager取得
        $em = $this->getDoctrine()->getEntityManager();

        // ①催事対象店舗のリストを取得
        $Tenpos = $this->hdnTenpoRepository->findBySaiji($objSaiji->getId());
        log_info('[受注部門商品集計(02]Tenpos by saiji',$Tenpos);

        // ②店舗のポジションをセット
        $pos = 0;
        $posOfTenpo = $namesOfTenpo = [];
        foreach ( $Tenpos as $tenpo ) {
            //$posOfTenpo[$tenpo->getId()] = $pos;
            $posOfTenpo[$tenpo->getTenpoRyakuName()] = $pos;
            $namesOfTenpo[$pos] = $tenpo->getTenpoRyakuName();
            $pos++;
        }
        log_info('[受注部門商品集計(02]posOfTenpo',$posOfTenpo);

        // ③催事/日付/部門/商品/店舗の実績を取得
        // QueryBuilderを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            ->addSelect('sj.name as saiji_name')
            ->addSelect('s.shipping_delivery_date')
            ->addSelect('bm.id as bumon_id')
            ->addSelect('bm.name as bumon_name')
            ->addSelect('oi.product_code')
            ->addSelect('max(oi.product_name) as product_name')
            ->addSelect('tp.id as tenpo_id')
            ->addSelect('tp.tenpo_ryaku_name as tenpo_name')
            ->addSelect('os.id as order_status_id')
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
            ->addGroupBy('s.shipping_delivery_date')
            ->addGroupBy('bumon_id')
            ->addGroupBy('oi.product_code')
            ->addGroupBy('tenpo_id')
            ->addGroupBy('os.id')
            ->having('oi.product_code is not null')
            ->orderBy('saiji_id')
            ->addOrderBy('s.shipping_delivery_date')
            ->addOrderBy('product_name')
            ->addOrderBy('bumon_id')
            ->addOrderBy('tenpo_id');

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
        log_info('[受注部門商品集計(02]dtls by execute()',$dtls);

        // ④実績を店舗で展開
        // (HDN) 商品行 & 部門行 & ヘッダー
        $lines = $headerLine = $itemLine = $sumLine = [];
        $pre['saiji_id'] = '';
        $pre['shipping_delivery_date'] = '';
        $pre['bumon_id'] = '';
        $pre['product_code'] = '';
        // (HDN) 実績を展開
        while ( $dtl = current($dtls) ) {
            // 受渡日集計行の切り替わり時
            // ヘッダー行の出力と受渡日集計行の初期化を行う
            if ( !isset($sumLine['sbt']) ) {
                // ヘッダー行を出力
                $headerLine['sbt'] = 'quantity';
                $headerLine['kbn'] = 'header';
                $headerLine['saiji_id'] = $dtl['saiji_id'];
                $headerLine['saiji_name'] = $dtl['saiji_name'];
                $headerLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $headerLine['tenpo_name'][$i] = $namesOfTenpo[$i];
                }
                $lines[] = $headerLine;
                // 受渡日集計行の初期化
                $sumLine['sbt'] = 'quantity';
                $sumLine['kbn'] = 'sum';
                $sumLine['saiji_id'] = $dtl['saiji_id'];
                $sumLine['saiji_name'] = $dtl['saiji_name'];
                $sumLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                $sumLine['bumon_id'] = '';
                $sumLine['bumon_name'] = '';
                $sumLine['product_code'] = '';
                $sumLine['product_name'] = '';
                $sumLine['sum_quantity'] = 0;
                $sumLine['sum_shukka_quantity'] = 0;
                $sumLine['sum_kingaku'] = 0;
                $sumLine['sum_base_kingaku'] = 0;
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $sumLine['quantity'][$i]      = 0;
                    $sumLine['shukka_quantity'][$i] = 0;
                    $sumLine['kingaku'][$i]       = 0;
                    $sumLine['base_kingaku'][$i]  = 0;
                }
            }
            // 商品行の初期化
            if ( $pre['saiji_id'] != $dtl['saiji_id'] ||
                $pre['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ||
                $pre['bumon_id'] != $dtl['bumon_id'] ||
                $pre['product_code'] != $dtl['product_code'] ) {
                // 商品行の初期化
                $itemLine['sbt'] = 'quantity';
                $itemLine['kbn'] = 'item';
                $itemLine['saiji_id'] = $dtl['saiji_id'];
                $itemLine['saiji_name'] = $dtl['saiji_name'];
                $itemLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                $itemLine['bumon_id'] = $dtl['bumon_id'];
                $itemLine['bumon_name'] = $dtl['bumon_name'];
                $itemLine['product_code'] = $dtl['product_code'];
                $itemLine['product_name'] = $dtl['product_name'] ;
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $itemLine['quantity'][$i]      = 0;
                    $itemLine['shukka_quantity'][$i]      = 0;
                    $itemLine['kingaku'][$i]       = 0;
                    $itemLine['base_kingaku'][$i]  = 0;
                }
                $itemLine['sum_quantity'] = 0;
                $itemLine['sum_shukka_quantity'] = 0;
                $itemLine['sum_kingaku'] = 0;
                $itemLine['sum_base_kingaku'] = 0;
            }
            // 明細の編集
            if ( !is_null($dtl['tenpo_name']) ) {
                $wTenpoPos = $posOfTenpo[$dtl['tenpo_name']];
                // 商品行へのセット
                $itemLine['quantity'][$wTenpoPos] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                }
                $itemLine['kingaku'][$wTenpoPos] += $dtl['kingaku'];
                $itemLine['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];
                // 商品行の加算
                $itemLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $itemLine['sum_kingaku'] += $dtl['kingaku'];
                $itemLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                // 受渡日行への加算
                $sumLine['quantity'][$wTenpoPos] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $sumLine['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                }
                $sumLine['kingaku'][$wTenpoPos] += $dtl['kingaku'];
                $sumLine['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];
                $sumLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $sumLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $sumLine['sum_kingaku'] += $dtl['kingaku'];
                $sumLine['sum_base_kingaku'] += $dtl['base_kingaku'];
            }
            $pre = $dtl;
            $post = next($dtls);
            // 行の出力
            if ( !$post ||
                $post['saiji_id'] != $dtl['saiji_id'] ||
                $post['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ) {
                // 受渡日BREAK時は明細行と受渡日集計行を出力
                $lines[] = $itemLine;
                $itemLine = [];
                $lines[] = $sumLine;
                $sumLine = [];
            } else if ( $post['product_code'] != $dtl['product_code'] ) {
                // 商品BREAK時は明細行を出力
                $lines[] = $itemLine;
                $itemLine = [];
            }
        }
        log_info('[受注部門商品集計(02]lines',$lines);

        // ⑤作成したリストを数量表示用(sbt=quantity)とする
        // ⑥数量表示用リストを金額表示用にCOPY(sbtをkingakuに書き換え)し、リストの後続にマージする
        $num = count($lines);
        for ( $i=0; $i<$num; $i++ ) {
            $newLine = $lines[$i];
            $newLine['sbt'] = 'kingaku';
            $lines[] = $newLine;
        }

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
            'posOfTenpo' => $posOfTenpo,
            'lines' => $lines,
        ];
    }

    /**
     * 受注部門商品集計画面(02) Ver.2022.05.xx
     *
     * - 検索条件
     *   - O 催事（必須）
     *   - O お引き渡し日（全日,期間の日付）※無くても良いのでは？
     *   - X 店舗（廃止）=> 店舗を横並び表示
     *   - 部門（任意）
     * - Viewへの引渡（主要項目）
     *   - searchForm
     *   - posOfTenpo（店舗横並びの配置）
     *   - lines（リスト）
     *
     * @Route("/%eccube_admin_route%/order/sum_bumon_item_02", name="admin_order_sum_bumon_item_02")
     * @Route("/%eccube_admin_route%/order/sum_bumon_item_02/{saiji_id}", requirements={"saiji_id" = "\d+"}, name="admin_order_sum_bumon_item_02_saiji")
     * @Template("@admin/Order/sum_bumon_item_02.twig")
     */
    public function sumBumonItem02(Request $request, $saiji_id = null, PaginatorInterface $paginator)
    {
        log_info('[受注部門商品集計(02]Request',$request->request->all());

        // (☆☆☆HDN) 受注検索FORMの受渡日改修版とする
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

        log_info('[受注部門商品集計(02]searchData',$searchData);

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
                'posOfTenpo' => null,
                'lines' => [],
            ];
        }

        /*
         * (HDN) 受注部門商品集計(02)
         *  ①催事対象店舗のリストを取得
         *  ②店舗のポジションをセット
         *  ②'対象商品のリストを取得
         *  ③全日の実績取得SQLを準備
         *  ④催事が複数日か判定
         *  ⑤複数日であれば
         *      1) 催事/部門/商品/店舗の実績(全日の実績)を取得
         *      2) 全日の実績を店舗で展開
         *  ⑥日付毎の実績取得SQLを準備
         *  ⑦催事/日付/部門/商品/店舗の実績(日付毎の集計)を取得
         *  ⑧日付毎の実績を店舗で展開
         *  ⑨作成したリストを数量表示用とする
         *  ⑩金額表示用にリストをCOPYし、リストの後続にマージする
         */

        // EntityManager取得
        $em = $this->getDoctrine()->getEntityManager();

        // ①催事対象店舗のリストを取得
        $Tenpos = $this->hdnTenpoRepository->findBySaiji($objSaiji->getId());
        log_info('[受注部門商品集計(02]Tenpos by saiji',$Tenpos);

        // ②店舗のポジションをセット
        $pos = 0;
        $posOfTenpo = $namesOfTenpo = [];
        foreach ( $Tenpos as $tenpo ) {
            //$posOfTenpo[$tenpo->getId()] = $pos;
            if ($tenpo->getId() != 999) {
                $posOfTenpo[$tenpo->getTenpoRyakuName()] = $pos;
                $namesOfTenpo[$pos] = $tenpo->getTenpoRyakuName();
                $pos++;
            }
        }
        log_info('[受注部門商品集計(02]posOfTenpo',$posOfTenpo);

        // ②'対象商品のリストを取得
        if ( $objTenpo ) {
            $arrProducts = $this->productRepository->findProductsWithSaiji2($objSaiji->getId(),$objTenpo->getId());
        } else {
            $arrProducts = $this->productRepository->findProductsWithSaiji2($objSaiji->getId());
        }

        // ③全日の実績取得SQLを準備
        // QueryBuilderを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            ->addSelect('sj.name as saiji_name')
            //->addSelect('s.shipping_delivery_date')
            ->addSelect('bm.id as bumon_id')
            ->addSelect('bm.name as bumon_name')
            ->addSelect('oi.product_code')
            ->addSelect('max(oi.product_name) as product_name')
            ->addSelect('tp.id as tenpo_id')
            ->addSelect('tp.tenpo_ryaku_name as tenpo_name')
            ->addSelect('os.id as order_status_id')
            ->addSelect('sum(oi.quantity) as quantity')
            ->addSelect('sum(oi.quantity*oi.base_price) as base_kingaku')
            ->addSelect('sum(oi.quantity*oi.price) as kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_a_gaku) as wari_a_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_b_gaku) as wari_b_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_kikan_gaku) as wari_kikan_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_matome_gaku) as wari_matome_kingaku')
            ->leftJoin('o.OrderItems', 'oi')
            //->leftJoin('oi.Shipping', 's')
            ->leftJoin('o.Saiji', 'sj')
            ->leftJoin('o.Tenpo', 'tp')
            ->leftJoin('oi.Bumon', 'bm')
            ->leftJoin('o.OrderStatus', 'os')
            ->where('o.Saiji = :Saiji')
            ->andWhere('o.OrderStatus not in (3,8)')
            ->andWhere('oi.product_code is not null')
            ->andWhere('tp.id <> 999')
            ->groupBy('saiji_id')
            //->addGroupBy('s.shipping_delivery_date')
            ->addGroupBy('bumon_id')
            ->addGroupBy('oi.product_code')
            ->addGroupBy('tenpo_id')
            ->addGroupBy('os.id')
            ->having('oi.product_code is not null')
            ->orderBy('saiji_id')
            //->addOrderBy('s.shipping_delivery_date')
            ->addOrderBy('product_name')
            ->addOrderBy('bumon_id')
            ->addOrderBy('tenpo_id');

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

        $lines = [];
        // ④催事が複数日かを判定
        if ( $objSaiji->getDeliveryStartDt() != $objSaiji->getDeliveryEndDt() ) {
            // ⑤ 1) 催事/日付/部門/商品/店舗の実績を取得
            $dtls = $qb->getQuery()->execute();
            //log_debug('[受注部門商品集計(02]dtls by execute()',$dtls);
            // ⑤ 2) 全日の実績を店舗で展開
            //$lines = $this->makeItemLines($dtls,$namesOfTenpo,$posOfTenpo);   // (HDN) 22.06.xx 実績商品のみ表示
            $lines = $this->makeAllItemLines($dtls,$namesOfTenpo,$posOfTenpo,$arrProducts);  // (HDN) 22.07.03 対象全商品を表示
            log_debug('[受注部門商品集計(02]lines of all days',$lines);
        }

        // ⑥日付毎(催事/日付/部門/商品/店舗)の実績取得SQLを準備
        $qb
//            ->addSelect('s.shipping_delivery_date')
            ->addSelect('o.ukedate')
            ->leftJoin('oi.Shipping', 's')
//            ->addGroupBy('s.shipping_delivery_date')
            ->addGroupBy('o.ukedate')
            ->orderBy('saiji_id')
//            ->addOrderBy('s.shipping_delivery_date')
            ->addOrderBy('o.ukedate')
            ->addOrderBy('product_name')
            ->addOrderBy('bumon_id')
            ->addOrderBy('tenpo_id')
            ->having('o.ukedate is not null');

        // ⑦日付毎の実績を取得
        $dtls = $qb->getQuery()->execute();
        log_debug('[受注部門商品集計(02]dtls by execute()',$dtls);

        // ⑧日付毎の実績を店舗で展開して追記
        //$linesByDate = $this->makeItemLines($dtls,$namesOfTenpo,$posOfTenpo);   // (HDN) 22.06.xx 実績商品のみ表示
        $linesByDate = $this->makeAllItemLines($dtls,$namesOfTenpo,$posOfTenpo,$arrProducts);   // (HDN) 22.07.03 対象全商品を表示
        log_debug('[受注部門商品集計(02]lines by days',$linesByDate);
        $lines = array_merge($lines,$linesByDate);
        log_debug('[受注部門商品集計(02]all lines',$lines);

        log_info('[受注部門商品集計(02]lines',$lines);

        // ⑨作成したリストを数量表示用(sbt=quantity)とする
        // ⑩数量表示用リストを金額表示用にCOPY(sbtをkingakuに書き換え)し、リストの後続にマージする
        $num = count($lines);
        for ( $i=0; $i<$num; $i++ ) {
            $newLine = $lines[$i];
            $newLine['sbt'] = 'kingaku';
            $lines[] = $newLine;
        }

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
            'posOfTenpo' => $posOfTenpo,
            'lines' => $lines,
        ];
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

    /**
     * 未引渡商品一覧画面(02) Ver.2022.05.xx
     *
     * - 検索条件
     *   - O 催事（必須）
     *   - O お引き渡し日（全日,期間の日付）※無くても良いのでは？
     *   - X 店舗（廃止）=> 店舗を横並び表示
     *   - 部門（任意）
     * - Viewへの引渡（主要項目）
     *   - searchForm
     *   - posOfTenpo（店舗横並びの配置）
     *   - lines（リスト）
     *
     * @Route("/%eccube_admin_route%/order/sum_minou_item_02", name="admin_order_sum_minou_item_02")
     * @Route("/%eccube_admin_route%/order/sum_minou_item_02/{saiji_id}", requirements={"saiji_id" = "\d+"}, name="admin_order_sum_minou_item_02_saiji")
     * @Template("@admin/Order/sum_minou_item_02.twig")
     */
    public function sumMinouItem02BK(Request $request, $saiji_id = null, PaginatorInterface $paginator)
    {
        log_info('未引渡商品一覧(02)：Request',$request->request->all());

        // (☆☆☆HDN) 受注検索FORMの受渡日改修版とする
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

        log_info('[受注部門商品集計(02]searchData',$searchData);

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
                'posOfTenpo' => null,
                'lines' => [],
            ];
        }

        /*
         * (HDN) 受注部門商品集計(02)
         *  ①催事対象店舗のリストを取得
         *  ②店舗のポジションをセット
         *  ③催事/日付/部門/商品/店舗の実績を取得
         *  ④実績を店舗で展開
         *  ⑤作成したリストを数量表示用とする
         *  ⑥金額表示用にリストをCOPYし、リストの後続にマージする
         */

        // EntityManager取得
        $em = $this->getDoctrine()->getEntityManager();

        // ①催事対象店舗のリストを取得
        $Tenpos = $this->hdnTenpoRepository->findBySaiji($objSaiji->getId());
        log_info('[受注部門商品集計(02]Tenpos by saiji',$Tenpos);

        // ②店舗のポジションをセット
        $pos = 0;
        $posOfTenpo = $namesOfTenpo = [];
        foreach ( $Tenpos as $tenpo ) {
            //$posOfTenpo[$tenpo->getId()] = $pos;
            $posOfTenpo[$tenpo->getTenpoRyakuName()] = $pos;
            $namesOfTenpo[$pos] = $tenpo->getTenpoRyakuName();
            $pos++;
        }
        log_info('[受注部門商品集計(02]posOfTenpo',$posOfTenpo);

        // ③催事/日付/部門/商品/店舗の実績を取得
        // QueryBuilderを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            ->addSelect('sj.name as saiji_name')
            ->addSelect('s.shipping_delivery_date')
            ->addSelect('bm.id as bumon_id')
            ->addSelect('bm.name as bumon_name')
            ->addSelect('oi.product_code')
            ->addSelect('max(oi.product_name) as product_name')
            ->addSelect('tp.id as tenpo_id')
            ->addSelect('tp.tenpo_ryaku_name as tenpo_name')
            ->addSelect('os.id as order_status_id')
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
            ->addGroupBy('s.shipping_delivery_date')
            ->addGroupBy('bumon_id')
            ->addGroupBy('oi.product_code')
            ->addGroupBy('tenpo_id')
            ->addGroupBy('os.id')
            ->having('oi.product_code is not null')
            ->orderBy('saiji_id')
            ->addOrderBy('s.shipping_delivery_date')
            ->addOrderBy('product_name')
            ->addOrderBy('bumon_id')
            ->addOrderBy('tenpo_id');

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
        log_info('[受注部門商品集計(02]dtls by execute()',$dtls);

        // ④実績を店舗で展開
        // (HDN) 商品行 & 部門行 & ヘッダー
        $lines = $headerLine = $itemLine = $sumLine = [];
        $pre['saiji_id'] = '';
        $pre['shipping_delivery_date'] = '';
        $pre['bumon_id'] = '';
        $pre['product_code'] = '';
        // (HDN) 実績を展開
        while ( $dtl = current($dtls) ) {
            // 受渡日集計行の切り替わり時
            // ヘッダー行の出力と受渡日集計行の初期化を行う
            if ( !isset($sumLine['sbt']) ) {
                // ヘッダー行を出力
                $headerLine['sbt'] = 'quantity';
                $headerLine['kbn'] = 'header';
                $headerLine['saiji_id'] = $dtl['saiji_id'];
                $headerLine['saiji_name'] = $dtl['saiji_name'];
                $headerLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $headerLine['tenpo_name'][$i] = $namesOfTenpo[$i];
                }
                $lines[] = $headerLine;
                // 受渡日集計行の初期化
                $sumLine['sbt'] = 'quantity';
                $sumLine['kbn'] = 'sum';
                $sumLine['saiji_id'] = $dtl['saiji_id'];
                $sumLine['saiji_name'] = $dtl['saiji_name'];
                $sumLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                $sumLine['bumon_id'] = '';
                $sumLine['bumon_name'] = '';
                $sumLine['product_code'] = '';
                $sumLine['product_name'] = '';
                $sumLine['sum_quantity'] = 0;
                $sumLine['sum_shukka_quantity'] = 0;
                $sumLine['sum_kingaku'] = 0;
                $sumLine['sum_base_kingaku'] = 0;
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $sumLine['quantity'][$i]      = 0;
                    $sumLine['shukka_quantity'][$i] = 0;
                    $sumLine['kingaku'][$i]       = 0;
                    $sumLine['base_kingaku'][$i]  = 0;
                }
            }
            // 商品行の初期化
            if ( $pre['saiji_id'] != $dtl['saiji_id'] ||
                $pre['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ||
                $pre['bumon_id'] != $dtl['bumon_id'] ||
                $pre['product_code'] != $dtl['product_code'] ) {
                // 商品行の初期化
                $itemLine['sbt'] = 'quantity';
                $itemLine['kbn'] = 'item';
                $itemLine['saiji_id'] = $dtl['saiji_id'];
                $itemLine['saiji_name'] = $dtl['saiji_name'];
                $itemLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                $itemLine['bumon_id'] = $dtl['bumon_id'];
                $itemLine['bumon_name'] = $dtl['bumon_name'];
                $itemLine['product_code'] = $dtl['product_code'];
                $itemLine['product_name'] = $dtl['product_name'] ;
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $itemLine['quantity'][$i]      = 0;
                    $itemLine['shukka_quantity'][$i]      = 0;
                    $itemLine['kingaku'][$i]       = 0;
                    $itemLine['base_kingaku'][$i]  = 0;
                }
                $itemLine['sum_quantity'] = 0;
                $itemLine['sum_shukka_quantity'] = 0;
                $itemLine['sum_kingaku'] = 0;
                $itemLine['sum_base_kingaku'] = 0;
            }
            // 明細の編集
            if ( !is_null($dtl['tenpo_name']) ) {
                $wTenpoPos = $posOfTenpo[$dtl['tenpo_name']];
                // 商品行へのセット
                $itemLine['quantity'][$wTenpoPos] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                }
                $itemLine['kingaku'][$wTenpoPos] += $dtl['kingaku'];
                $itemLine['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];
                // 商品行の加算
                $itemLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $itemLine['sum_kingaku'] += $dtl['kingaku'];
                $itemLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                // 受渡日行への加算
                $sumLine['quantity'][$wTenpoPos] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $sumLine['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                }
                $sumLine['kingaku'][$wTenpoPos] += $dtl['kingaku'];
                $sumLine['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];
                $sumLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $sumLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $sumLine['sum_kingaku'] += $dtl['kingaku'];
                $sumLine['sum_base_kingaku'] += $dtl['base_kingaku'];
            }
            $pre = $dtl;
            $post = next($dtls);
            // 行の出力
            if ( !$post ||
                $post['saiji_id'] != $dtl['saiji_id'] ||
                $post['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ) {
                // 受渡日BREAK時は明細行と受渡日集計行を出力
                $lines[] = $itemLine;
                $itemLine = [];
                $lines[] = $sumLine;
                $sumLine = [];
            } else if ( $post['product_code'] != $dtl['product_code'] ) {
                // 商品BREAK時は明細行を出力
                $lines[] = $itemLine;
                $itemLine = [];
            }
        }
        log_info('[受注部門商品集計(02]lines',$lines);

        // ⑤作成したリストを数量表示用(sbt=quantity)とする

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
            'posOfTenpo' => $posOfTenpo,
            'lines' => $lines,
        ];
    }

    /**
     * 未引渡商品一覧画面(02) Ver.2022.05.xx
     *
     * - 検索条件
     *   - O 催事（必須）
     *   - O お引き渡し日（全日,期間の日付）※無くても良いのでは？
     *   - X 店舗（廃止）=> 店舗を横並び表示
     *   - 部門（任意）
     * - Viewへの引渡（主要項目）
     *   - searchForm
     *   - posOfTenpo（店舗横並びの配置）
     *   - lines（リスト）
     *
     * @Route("/%eccube_admin_route%/order/sum_minou_item_02", name="admin_order_sum_minou_item_02")
     * @Route("/%eccube_admin_route%/order/sum_minou_item_02/{saiji_id}", requirements={"saiji_id" = "\d+"}, name="admin_order_sum_minou_item_02_saiji")
     * @Route("/%eccube_admin_route%/order/list/minou", name="admin_order_list_minou")
     * @Template("@admin/Order/sum_minou_item_02.twig")
     */
    public function sumMinouItem02(Request $request, $saiji_id = null, PaginatorInterface $paginator)
    {
        log_info('未引渡商品一覧(02)：Request',$request->request->all());

        // (☆☆☆HDN) 受注検索FORMの受渡日改修版とする
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

        log_info('[未引渡商品一覧(02]searchData',$searchData);

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
                'posOfTenpo' => null,
                'lines' => [],
            ];
        }

        /*
         * (HDN) 未引渡商品一覧(02)
         *  ①催事対象店舗のリストを取得
         *  ②店舗のポジションをセット
         *  ③全日の実績取得SQLを準備
         *  ④催事が複数日か判定
         *  ⑤複数日であれば
         *      1) 催事/部門/商品/店舗の実績(全日の実績)を取得
         *      2) 全日の実績を店舗で展開
         *  ⑥日付毎の実績取得SQLを準備
         *  ⑦催事/日付/部門/商品/店舗の実績(日付毎の集計)を取得
         *  ⑧日付毎の実績を店舗で展開
         *  ⑨作成したリストを数量表示用とする
         *  ⑩金額表示用にリストをCOPYし、リストの後続にマージする
         */

        // EntityManager取得
        $em = $this->getDoctrine()->getEntityManager();

        // ①催事対象店舗のリストを取得
        $Tenpos = $this->hdnTenpoRepository->findBySaiji($objSaiji->getId());
        log_info('[未引渡商品一覧(02]Tenpos by saiji',$Tenpos);

        // ②店舗のポジションをセット
        $pos = 0;
        $posOfTenpo = $namesOfTenpo = [];
        foreach ( $Tenpos as $tenpo ) {
            //$posOfTenpo[$tenpo->getId()] = $pos;
            $posOfTenpo[$tenpo->getTenpoRyakuName()] = $pos;
            $namesOfTenpo[$pos] = $tenpo->getTenpoRyakuName();
            $pos++;
        }
        log_info('[未引渡商品一覧(02]posOfTenpo',$posOfTenpo);

        // ③全日の実績取得SQLを準備
        // QueryBuilderを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            ->addSelect('sj.name as saiji_name')
            //->addSelect('s.shipping_delivery_date')
            ->addSelect('bm.id as bumon_id')
            ->addSelect('bm.name as bumon_name')
            ->addSelect('oi.product_code')
            ->addSelect('max(oi.product_name) as product_name')
            ->addSelect('tp.id as tenpo_id')
            ->addSelect('tp.tenpo_ryaku_name as tenpo_name')
            ->addSelect('os.id as order_status_id')
            ->addSelect('sum(oi.quantity) as quantity')
            ->addSelect('sum(oi.quantity*oi.base_price) as base_kingaku')
            ->addSelect('sum(oi.quantity*oi.price) as kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_a_gaku) as wari_a_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_b_gaku) as wari_b_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_kikan_gaku) as wari_kikan_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_matome_gaku) as wari_matome_kingaku')
            ->leftJoin('o.OrderItems', 'oi')
            //->leftJoin('oi.Shipping', 's')
            ->leftJoin('o.Saiji', 'sj')
            ->leftJoin('o.Tenpo', 'tp')
            ->leftJoin('oi.Bumon', 'bm')
            ->leftJoin('o.OrderStatus', 'os')
            ->where('o.Saiji = :Saiji')
            ->andWhere('o.OrderStatus not in (3,8)')
            ->andWhere('oi.product_code is not null')
            ->groupBy('saiji_id')
            //->addGroupBy('s.shipping_delivery_date')
            ->addGroupBy('bumon_id')
            ->addGroupBy('oi.product_code')
            ->addGroupBy('tenpo_id')
            ->addGroupBy('os.id')
            ->having('oi.product_code is not null')
            ->orderBy('saiji_id')
            //->addOrderBy('s.shipping_delivery_date')
            ->addOrderBy('product_name')
            ->addOrderBy('bumon_id')
            ->addOrderBy('tenpo_id');

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

        $lines = [];
        // ④催事が複数日かを判定（単日の場合は全日集計をOmit）
        if ( !$objSaiji->getDeliveryStartDt() || !$objSaiji->getDeliveryEndDt() || $objSaiji->getDeliveryStartDt() != $objSaiji->getDeliveryEndDt() ) {
            // ⑤ 1) 催事/日付/部門/商品/店舗の実績を取得
            $dtls = $qb->getQuery()->execute();
            //log_debug('[未引渡商品一覧(02]dtls by execute()',$dtls);
            // ⑤ 2) 全日の実績を店舗で展開
            $lines = $this->makeItemLines($dtls,$namesOfTenpo,$posOfTenpo);
            log_debug('[未引渡商品一覧(02]lines of all days',$lines);
        }

        // ⑥日付毎(催事/日付/部門/商品/店舗)の実績取得SQLを準備
        $qb
            ->addSelect('s.shipping_delivery_date')
            ->leftJoin('oi.Shipping', 's')
            ->addGroupBy('s.shipping_delivery_date')
            ->orderBy('saiji_id')
            ->addOrderBy('s.shipping_delivery_date')
            ->addOrderBy('product_name')
            ->addOrderBy('bumon_id')
            ->addOrderBy('tenpo_id');

        // ⑦日付毎の実績を取得
        $dtls = $qb->getQuery()->execute();
        log_debug('[未引渡商品一覧(02]dtls by execute()',$dtls);

        // ⑧日付毎の実績を店舗で展開して追記
        $linesByDate = $this->makeItemLines($dtls,$namesOfTenpo,$posOfTenpo);
        log_debug('[未引渡商品一覧(02]lines by days',$linesByDate);
        $lines = array_merge($lines,$linesByDate);
        log_debug('[未引渡商品一覧(02]all lines',$lines);

        log_info('[未引渡商品一覧(02]lines',$lines);

        // (HDN)
        if ( $request->request->get('list_type') ) {
            //$this->hdnOrderListService = new HdnOrderListService();
            log_info('受注：帳票作成：list_type='.$request->request->get('list_type'));
            // query実行
            if ( $request->request->get('list_type') == 'minou' ) {
                $status = $this->hdnOrderListService->makeMinouExcel($searchData,$posOfTenpo,$lines);
            } else {
                $status = false;
            }
            // 異常終了した場合の処理
            if (!$status) {
                $this->addError('EXCELの生成に失敗しました。条件をご確認ください。', 'admin');
                log_info('Unable to create excel files! Process have problems!');
                return [
                    'searchForm' => $searchForm->createView(),
                    'has_errors' => true,
                    'posOfTenpo' => $posOfTenpo,
                    'lines' => $lines,
                ];
            }
            // 暫定的に
            return [
                'searchForm' => $searchForm->createView(),
                'has_errors' => false,
                'posOfTenpo' => $posOfTenpo,
                'lines' => $lines,
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

        return [
            'searchForm' => $searchForm->createView(),
            'has_errors' => false,
            'posOfTenpo' => $posOfTenpo,
            'lines' => $lines,
        ];
    }

    /**
     * 商品集計行の作成
     *
     * @return array
     */
    private function makeItemLines($dtls, $namesOfTenpo, $posOfTenpo) {
        // ④実績を店舗で展開
        // (HDN) 商品行 & 部門行 & ヘッダー
        $lines = $headerLine = $itemLine = $sumLine = [];
        $pre['saiji_id'] = '';
        $pre['shipping_delivery_date'] = '';
        $pre['bumon_id'] = '';
        $pre['product_code'] = '';
        // (HDN) 実績を展開
        while ( $dtl = current($dtls) ) {
            // 全日の場合は日付に初期値をセット
            if ( !isset($dtl['shipping_delivery_date']) ) {
                $dtl['shipping_delivery_date'] = '';
            }
            // 受渡日集計行の切り替わり時
            // ヘッダー行の出力と受渡日集計行の初期化を行う
            if ( !isset($sumLine['sbt']) ) {
                // ヘッダー行を出力
                $headerLine['sbt'] = 'quantity';
                $headerLine['kbn'] = 'header';
                $headerLine['saiji_id'] = $dtl['saiji_id'];
                $headerLine['saiji_name'] = $dtl['saiji_name'];
                $headerLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $headerLine['tenpo_name'][$i] = $namesOfTenpo[$i];
                }
                $lines[] = $headerLine;
                // 受渡日集計行の初期化
                $sumLine['sbt'] = 'quantity';
                $sumLine['kbn'] = 'sum';
                $sumLine['saiji_id'] = $dtl['saiji_id'];
                $sumLine['saiji_name'] = $dtl['saiji_name'];
                $sumLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                $sumLine['bumon_id'] = '';
                $sumLine['bumon_name'] = '';
                $sumLine['product_code'] = '';
                $sumLine['product_name'] = '';
                $sumLine['sum_quantity'] = 0;
                $sumLine['sum_shukka_quantity'] = 0;
                $sumLine['sum_kingaku'] = 0;
                $sumLine['sum_base_kingaku'] = 0;
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $sumLine['quantity'][$i]      = 0;
                    $sumLine['shukka_quantity'][$i] = 0;
                    $sumLine['kingaku'][$i]       = 0;
                    $sumLine['base_kingaku'][$i]  = 0;
                }
            }
            // 商品行の初期化
            if ( $pre['saiji_id'] != $dtl['saiji_id'] ||
                $pre['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ||
                $pre['bumon_id'] != $dtl['bumon_id'] ||
                $pre['product_code'] != $dtl['product_code'] ) {
                // 商品行の初期化
                $itemLine['sbt'] = 'quantity';
                $itemLine['kbn'] = 'item';
                $itemLine['saiji_id'] = $dtl['saiji_id'];
                $itemLine['saiji_name'] = $dtl['saiji_name'];
                $itemLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                $itemLine['bumon_id'] = $dtl['bumon_id'];
                $itemLine['bumon_name'] = $dtl['bumon_name'];
                $itemLine['product_code'] = $dtl['product_code'];
                $itemLine['product_name'] = $dtl['product_name'] ;
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $itemLine['quantity'][$i]      = 0;
                    $itemLine['shukka_quantity'][$i]      = 0;
                    $itemLine['kingaku'][$i]       = 0;
                    $itemLine['base_kingaku'][$i]  = 0;
                }
                $itemLine['sum_quantity'] = 0;
                $itemLine['sum_shukka_quantity'] = 0;
                $itemLine['sum_kingaku'] = 0;
                $itemLine['sum_base_kingaku'] = 0;
            }
            // 明細の編集
            if ( !is_null($dtl['tenpo_name']) ) {
                $wTenpoPos = $posOfTenpo[$dtl['tenpo_name']];
                // 商品行へのセット
                $itemLine['quantity'][$wTenpoPos] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                }
                $itemLine['kingaku'][$wTenpoPos] += $dtl['kingaku'];
                $itemLine['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];
                // 商品行の加算
                $itemLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $itemLine['sum_kingaku'] += $dtl['kingaku'];
                $itemLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                // 受渡日行への加算
                $sumLine['quantity'][$wTenpoPos] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $sumLine['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                }
                $sumLine['kingaku'][$wTenpoPos] += $dtl['kingaku'];
                $sumLine['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];
                $sumLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $sumLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $sumLine['sum_kingaku'] += $dtl['kingaku'];
                $sumLine['sum_base_kingaku'] += $dtl['base_kingaku'];
            }
            $pre = $dtl;
            $post = next($dtls);
            // 全日の場合は日付に初期値をセット
            if ( $post && !isset($post['shipping_delivery_date']) ) {
                $post['shipping_delivery_date'] = '';
            }
            // 行の出力
            if ( !$post ||
                $post['saiji_id'] != $dtl['saiji_id'] ||
                $post['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ) {
                // 受渡日BREAK時は明細行と受渡日集計行を出力
                $lines[] = $itemLine;
                $itemLine = [];
                $lines[] = $sumLine;
                $sumLine = [];
            } else if ( $post['product_code'] != $dtl['product_code'] ) {
                // 商品BREAK時は明細行を出力
                $lines[] = $itemLine;
                $itemLine = [];
            }
        }
        log_debug('[部門商品集計共通(02]lines',$lines);
        return $lines;
    }
    /**
     * 商品集計行の作成(対象全商品パターン)
     *
     * @return array
     */
    private function makeAllItemLines($dtls, $namesOfTenpo, $posOfTenpo, $arrProducts) {
        // 対象商品の行位置をセット
        $lineNo = 0;
        $lineNoOfProduct = [];
        foreach ( $arrProducts as $product ) {
            $lineNoOfProduct[$product['code']] = $lineNo;
            $lineNo++;
        }
        log_info('[受注部門商品集計(02]lineNoOfProduct',$lineNoOfProduct);

        // ④実績を店舗で展開
        // (HDN) 商品行 & 部門行 & ヘッダー
        $lines = $headerLine = $itemLinePool = $itemLine = $sumLine = [];
        $pre['saiji_id'] = '';
        $pre['shipping_delivery_date'] = '';
        $pre['bumon_id'] = '';
        $pre['product_code'] = '';
        // (HDN) 実績を展開
        while ( $dtl = current($dtls) ) {
            // 全日の場合は日付に初期値をセット
            if ( !isset($dtl['shipping_delivery_date']) ) {
                $dtl['shipping_delivery_date'] = '';
            }
            // 受渡日集計行の切り替わり時
            // ヘッダー行の出力と受渡日集計行の初期化を行う
            if ( !isset($sumLine['sbt']) ) {
                // ヘッダー行を出力
                $headerLine['sbt'] = 'quantity';
                $headerLine['kbn'] = 'header';
                $headerLine['saiji_id'] = $dtl['saiji_id'];
                $headerLine['saiji_name'] = $dtl['saiji_name'];
                $headerLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $headerLine['tenpo_name'][$i] = $namesOfTenpo[$i];
                }
                $lines[] = $headerLine;
                // 受渡日集計行の初期化
                $sumLine['sbt'] = 'quantity';
                $sumLine['kbn'] = 'sum';
                $sumLine['saiji_id'] = $dtl['saiji_id'];
                $sumLine['saiji_name'] = $dtl['saiji_name'];
                $sumLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                $sumLine['bumon_id'] = '';
                $sumLine['bumon_name'] = '';
                $sumLine['product_code'] = '';
                $sumLine['product_name'] = '';
                $sumLine['sum_quantity'] = 0;
                $sumLine['sum_shukka_quantity'] = 0;
                $sumLine['sum_kingaku'] = 0;
                $sumLine['sum_base_kingaku'] = 0;
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $sumLine['quantity'][$i]      = 0;
                    $sumLine['shukka_quantity'][$i] = 0;
                    $sumLine['kingaku'][$i]       = 0;
                    $sumLine['base_kingaku'][$i]  = 0;
                }
                // 商品行POOLを初期化
                foreach ( $arrProducts as $product ) {
                    // 商品行の初期化
                    $itemLine['sbt'] = 'quantity';
                    $itemLine['kbn'] = 'item';
                    $itemLine['saiji_id'] = $dtl['saiji_id'];
                    $itemLine['saiji_name'] = $dtl['saiji_name'];
                    $itemLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                    $itemLine['bumon_id'] = $product['bumon_id'];
                    $itemLine['bumon_name'] = $product['bumon_name'];
                    $itemLine['product_code'] = $product['code'];
                    $itemLine['product_name'] = $product['name'] ;
                    for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                        $itemLine['quantity'][$i]      = 0;
                        $itemLine['shukka_quantity'][$i]      = 0;
                        $itemLine['kingaku'][$i]       = 0;
                        $itemLine['base_kingaku'][$i]  = 0;
                    }
                    $itemLine['sum_quantity'] = 0;
                    $itemLine['sum_shukka_quantity'] = 0;
                    $itemLine['sum_kingaku'] = 0;
                    $itemLine['sum_base_kingaku'] = 0;

                    // 商品行POOLにセット
                    $j = $lineNoOfProduct[$product['code']];
                    $itemLinePool[$j] = $itemLine;

                }
            }
            // 商品行の初期化
            /*
            if ( $pre['saiji_id'] != $dtl['saiji_id'] ||
                 $pre['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ||
                 $pre['bumon_id'] != $dtl['bumon_id'] ||
                 $pre['product_code'] != $dtl['product_code'] ) {
                // 商品行の初期化
                $itemLine['sbt'] = 'quantity';
                $itemLine['kbn'] = 'item';
                $itemLine['saiji_id'] = $dtl['saiji_id'];
                $itemLine['saiji_name'] = $dtl['saiji_name'];
                $itemLine['shipping_delivery_date'] = $dtl['shipping_delivery_date'];
                $itemLine['bumon_id'] = $dtl['bumon_id'];
                $itemLine['bumon_name'] = $dtl['bumon_name'];
                $itemLine['product_code'] = $dtl['product_code'];
                $itemLine['product_name'] = $dtl['product_name'] ;
                for ( $i=0; $i<count($namesOfTenpo); $i++ ) {
                    $itemLine['quantity'][$i]      = 0;
                    $itemLine['shukka_quantity'][$i]      = 0;
                    $itemLine['kingaku'][$i]       = 0;
                    $itemLine['base_kingaku'][$i]  = 0;
                }
                $itemLine['sum_quantity'] = 0;
                $itemLine['sum_shukka_quantity'] = 0;
                $itemLine['sum_kingaku'] = 0;
                $itemLine['sum_base_kingaku'] = 0;
            }
            */
            // 明細の編集
            if ( !is_null($dtl['tenpo_name']) ) {
                // 店舗位置
                $wTenpoPos = $posOfTenpo[$dtl['tenpo_name']];
                // 商品行位置
                $wItemLineNo = $lineNoOfProduct[$dtl['product_code']];
                // 商品行へのセット
                $itemLinePool[$wItemLineNo]['quantity'][$wTenpoPos] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLinePool[$wItemLineNo]['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                }
                $itemLinePool[$wItemLineNo]['kingaku'][$wTenpoPos] += $dtl['kingaku'];
                $itemLinePool[$wItemLineNo]['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];
                // 商品行の加算
                $itemLinePool[$wItemLineNo]['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $itemLinePool[$wItemLineNo]['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $itemLinePool[$wItemLineNo]['sum_kingaku'] += $dtl['kingaku'];
                $itemLinePool[$wItemLineNo]['sum_base_kingaku'] += $dtl['base_kingaku'];
                // 受渡日行への加算
                $sumLine['quantity'][$wTenpoPos] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $sumLine['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                }
                $sumLine['kingaku'][$wTenpoPos] += $dtl['kingaku'];
                $sumLine['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];
                $sumLine['sum_quantity'] += $dtl['quantity'];
                if ($dtl['order_status_id'] == 5) {
                    $sumLine['sum_shukka_quantity'] += $dtl['quantity'];
                }
                $sumLine['sum_kingaku'] += $dtl['kingaku'];
                $sumLine['sum_base_kingaku'] += $dtl['base_kingaku'];
            }
            $pre = $dtl;
            $post = next($dtls);
            // 全日の場合は日付に初期値をセット
            if ( $post && !isset($post['shipping_delivery_date']) ) {
                $post['shipping_delivery_date'] = '';
            }
            // 行の出力
            if ( !$post ||
                $post['saiji_id'] != $dtl['saiji_id'] ||
                $post['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ) {
                // 受渡日BREAK時は明細行と受渡日集計行を出力
                foreach($itemLinePool as $itemLine) {
                    $lines[] = $itemLine;
                }
                $itemLinePool = [];
                $lines[] = $sumLine;
                $sumLine = [];
                /*
                } else if ( $post['product_code'] != $dtl['product_code'] ) {
                    // 商品BREAK時は明細行を出力
                    $lines[] = $itemLine;
                    $itemLine = [];
                */
                /* //テスト用
                 if ($dtl['kingaku'] != 0) {
                     // 店舗位置
                     if (isset($posOfTenpo[$dtl['tenpo_name']])) {
                         $wTenpoPos = $posOfTenpo[$dtl['tenpo_name']];
                     } else {
                         // エラーハンドリング
                         error_log("店舗名が見つかりません: " . $dtl['tenpo_name']);
                         continue;
                     }

                     // 商品行位置
                     if (isset($lineNoOfProduct[$dtl['product_code']])) {
                         $wItemLineNo = $lineNoOfProduct[$dtl['product_code']];
                     } else {
                         // エラーハンドリング
                         error_log("商品コードが見つかりません: " . $dtl['product_code']);
                         continue;
                     }

                     // 商品行へのセット
                     if (!isset($itemLinePool[$wItemLineNo])) {
                         $itemLinePool[$wItemLineNo] = [
                             'quantity' => [],
                             'shukka_quantity' => [],
                             'kingaku' => [],
                             'base_kingaku' => [],
                             'sum_quantity' => 0,
                             'sum_shukka_quantity' => 0,
                             'sum_kingaku' => 0,
                             'sum_base_kingaku' => 0,
                         ];
                     }

                     if (!isset($itemLinePool[$wItemLineNo]['quantity'][$wTenpoPos])) {
                         $itemLinePool[$wItemLineNo]['quantity'][$wTenpoPos] = 0;
                     }
                     $itemLinePool[$wItemLineNo]['quantity'][$wTenpoPos] += $dtl['quantity'];

                     if ($dtl['order_status_id'] == 5) {
                         if (!isset($itemLinePool[$wItemLineNo]['shukka_quantity'][$wTenpoPos])) {
                             $itemLinePool[$wItemLineNo]['shukka_quantity'][$wTenpoPos] = 0;
                         }
                         $itemLinePool[$wItemLineNo]['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                     }

                     if (!isset($itemLinePool[$wItemLineNo]['kingaku'][$wTenpoPos])) {
                         $itemLinePool[$wItemLineNo]['kingaku'][$wTenpoPos] = 0;
                     }
                     $itemLinePool[$wItemLineNo]['kingaku'][$wTenpoPos] += $dtl['kingaku'];

                     if (!isset($itemLinePool[$wItemLineNo]['base_kingaku'][$wTenpoPos])) {
                         $itemLinePool[$wItemLineNo]['base_kingaku'][$wTenpoPos] = 0;
                     }
                     $itemLinePool[$wItemLineNo]['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];

                     // 商品行の加算
                     $itemLinePool[$wItemLineNo]['sum_quantity'] += $dtl['quantity'];
                     if ($dtl['order_status_id'] == 5) {
                         $itemLinePool[$wItemLineNo]['sum_shukka_quantity'] += $dtl['quantity'];
                     }
                     $itemLinePool[$wItemLineNo]['sum_kingaku'] += $dtl['kingaku'];
                     $itemLinePool[$wItemLineNo]['sum_base_kingaku'] += $dtl['base_kingaku'];

                     // 受渡日行への加算
                     if (!isset($sumLine['quantity'][$wTenpoPos])) {
                         $sumLine['quantity'][$wTenpoPos] = 0;
                     }
                     $sumLine['quantity'][$wTenpoPos] += $dtl['quantity'];

                     if ($dtl['order_status_id'] == 5) {
                         if (!isset($sumLine['shukka_quantity'][$wTenpoPos])) {
                             $sumLine['shukka_quantity'][$wTenpoPos] = 0;
                         }
                         $sumLine['shukka_quantity'][$wTenpoPos] += $dtl['quantity'];
                     }

                     if (!isset($sumLine['kingaku'][$wTenpoPos])) {
                         $sumLine['kingaku'][$wTenpoPos] = 0;
                     }
                     $sumLine['kingaku'][$wTenpoPos] += $dtl['kingaku'];

                     if (!isset($sumLine['base_kingaku'][$wTenpoPos])) {
                         $sumLine['base_kingaku'][$wTenpoPos] = 0;
                     }
                     $sumLine['base_kingaku'][$wTenpoPos] += $dtl['base_kingaku'];

                     $sumLine['sum_quantity'] += $dtl['quantity'];
                     if ($dtl['order_status_id'] == 5) {
                         $sumLine['sum_shukka_quantity'] += $dtl['quantity'];
                     }
                     $sumLine['sum_kingaku'] += $dtl['kingaku'];
                     $sumLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                 } else {
                     // エラーハンドリング
                     error_log("通常価格が0です: " . $dtl['kingaku']);
                 }*/
            }
        }
        log_debug('[部門商品集計共通(02]lines',$lines);
        return $lines;
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
     * 受注店舗部門集計画面(02) Ver.2022.05.xx
     *
     * - 検索条件
     *   - 催事（必須）
     *   - 店舗（任意）
     *   - 部門（任意）
     *
     * @Route("/%eccube_admin_route%/order/sum_tenpo_bumon_02", name="admin_order_sum_tenpo_bumon_02")
     * @Route("/%eccube_admin_route%/order/sum_tenpo_bumon_02/{saiji_id}", requirements={"saiji_id" = "\d+"}, name="admin_order_sum_tenpo_bumon_02_saiji")
     * @Template("@admin/Order/sum_tenpo_bumon_02.twig")
     */
    public function sumTenpoBumon02(Request $request, $saiji_id = null, PaginatorInterface $paginator)
    {
        log_info('[受注店舗部門集計(02)]Request',$request->request->all());

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

        log_info('[受注店舗部門集計(02)]searchData',$searchData);

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
                'posOfPayment' => null,
                'lines' => [],
            ];
        }

        /*
         * (HDN) 受注店舗部門集計
         *  ①支払方法リストを取得
         *  ②支払方法の配置を設定
         *  ③催事/店舗/受渡日/部門の実績を取得
         *  ④下記集計/編集を行う
         *  　(0) ヘッダー：header1Line,header2Line
         *  　(1) 店舗/受渡日/部門：tenpoDateBumonLine
         *  　(2) 店舗/受渡日：sumTenpoDateLine
         *  　(3) 店舗/部門：sumTenpoBumonLine
         *  　(4) 店舗：sumTenpoLine
         *  ※受渡日が単日の場合は(3)(4)不要
         */

        //-------------------------
        // ①支払方法リストを取得
        //-------------------------
        $paymentRepository = $this->entityManager->getRepository(Payment::class);
        $Payments = $paymentRepository->findBy(['visible' => 1],['sort_no' => 'asc']);
        log_info('[受注店舗部門集計(02)]shippingDates by getResult()',$Payments);

        //-------------------------
        // ②支払方法の配置を設定
        //-------------------------
        $pos = 0;
        $posOfPayment = [];
        foreach ( $Payments as $Payment ) {
            $posOfPayment[$Payment->getMethod()] = $pos;
            $pos++;
        }
        log_info('[受注店舗部門集計(02)]posOfPayment',$posOfPayment);

        //-------------------------
        // ③催事/店舗/受渡日/部門/支払方法の実績を取得
        //-------------------------
        // QueryBuilderを取得
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->select('sj.id as saiji_id')
            ->addSelect('sj.name as saiji_name')
            ->addSelect('tp.id as tenpo_id')
            ->addSelect('tp.tenpo_name as tenpo_name')
            ->addSelect('s.shipping_delivery_date')
            ->addSelect('bm.id as bumon_id')
            ->addSelect('bm.name as bumon_name')
            ->addSelect('pm.method as payment_method')
            ->addSelect('sum(oi.quantity) as quantity')
            ->addSelect('sum(oi.quantity*oi.base_price) as base_kingaku')
            ->addSelect('sum(oi.quantity*oi.price) as kingaku')
            ->addSelect('sum(oi.quantity*oi.tax) as tax_gaku')
            ->addSelect('sum(oi.quantity*oi.wari_a_gaku) as wari_a_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_b_gaku) as wari_b_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_kikan_gaku) as wari_kikan_kingaku')
            ->addSelect('sum(oi.quantity*oi.wari_matome_gaku) as wari_matome_kingaku')
            ->leftJoin('o.OrderItems', 'oi')
            ->leftJoin('oi.Shipping', 's')
            ->leftJoin('o.Saiji', 'sj')
            ->leftJoin('o.Tenpo', 'tp')
            ->leftJoin('oi.Bumon', 'bm')
            ->leftJoin('o.Payment', 'pm')
            ->where('o.Saiji = :Saiji')
            ->andWhere('o.OrderStatus not in (3,8)')
            ->andWhere('oi.product_code is not null')
            ->groupBy('saiji_id')
            ->addGroupBy('tenpo_id')
            ->addGroupBy('s.shipping_delivery_date')
            ->addGroupBy('bumon_id')
            ->addGroupBy('payment_method')
            ->orderBy('saiji_id')
            ->addOrderBy('tenpo_id')
            ->addOrderBy('s.shipping_delivery_date')
            ->addOrderBy('bumon_id');

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
        log_info('[受注店舗部門集計(02)]dtls by execute()',$dtls);

        //-------------------------
        // ④下記集計/編集を行う
        //  (0) 店舗ヘッダー：$headerLine
        //  (1) 店舗/受渡日/部門：$tenpoDateBumonLine
        //  (2) 店舗/受渡日：$sumTenpoDateLine
        //  (3) 店舗/部門：$sumTenpoBumonLine
        //  (4) 店舗：$sumTenpoLine
        //  ※受渡日が単日の場合は(3)(4)不要
        //  -> $line[]に出力
        //-------------------------
        // (HDN) 使用する行（実際の初期化はBREAK時に行う）
        $lines = [];                // Viewに渡す出力行
        $header1Line = [];          // 店舗ヘッダー用
        $header2Line = [];          // 項目ヘッダー用
        $tenpoDateBumonLine = [];   // 店舗受渡日部門行
        $sumTenpoDateLine = [];     // 店舗受渡日集計行
        $sumTenpoBumonLine = [];    // 店舗部門集計行
        $sumTenpoLine = [];         // 店舗集計行
        // (HDN) KEYの初期化
        $pre['saiji_id'] = '';
        $pre['tenpo_id'] = '';
        $pre['shipping_delivery_date'] = '';
        $pre['bumon_id'] = '';
        // (HDN) 実績を展開
        while ( $dtl = current($dtls) ) {
            // 初期化
            if ( $pre['saiji_id'] != $dtl['saiji_id'] || $pre['tenpo_id'] != $dtl['tenpo_id'] ) {
                // 【店舗BREAK】
                // 店舗ヘッダー初期化(出力まで)
                $header1Line = $this->initLine(__FUNCTION__,'header1Line',$dtl,$posOfPayment);
                $lines[] = $header1Line;
                // 項目ヘッダー初期化(出力まで)
                $header2Line = $this->initLine(__FUNCTION__,'header2Line',$dtl,$posOfPayment);
                $lines[] = $header2Line;
                // 店舗集計行初期化
                $sumTenpoLine = $this->initLine(__FUNCTION__,'sumTenpoLine',$dtl,$posOfPayment);
                // 店舗部門集計行はクリア
                $sumTenpoBumonLine = [];
                // 店舗受渡日集計行初期化
                $sumTenpoDateLine = $this->initLine(__FUNCTION__,'sumTenpoDateLine',$dtl,$posOfPayment);
                // 店舗受渡日部門行初期化
                $tenpoDateBumonLine = $this->initLine(__FUNCTION__,'tenpoDateBumonLine',$dtl,$posOfPayment);
            } else if ( $pre['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ) {
                // 【日付BREAK】
                // 店舗受渡日集計行初期化
                $sumTenpoDateLine = $this->initLine(__FUNCTION__,'sumTenpoDateLine',$dtl,$posOfPayment);
                // 店舗受渡日部門行初期化
                $tenpoDateBumonLine = $this->initLine(__FUNCTION__,'tenpoDateBumonLine',$dtl,$posOfPayment);
            } else if ( $pre['bumon_id'] != $dtl['bumon_id'] ) {
                // 【部門BREAK】
                // 店舗受渡日部門行初期化
                $tenpoDateBumonLine = $this->initLine(__FUNCTION__,'tenpoDateBumonLine',$dtl,$posOfPayment);
            }

            // 店舗部門集計行初期化(存在しなければ初期化)
            if ( !array_key_exists($dtl['bumon_id'],$sumTenpoBumonLine) ) {
                $sumTenpoBumonLine[$dtl['bumon_id']] = $this->initLine(__FUNCTION__,'sumTenpoBumonLine',$dtl,$posOfPayment);
            }

            // 明細を各行へ加算
            if ( !is_null($dtl['payment_method']) ) {
                $wPos = $posOfPayment[$dtl['payment_method']];
                // 店舗受渡日部門行への加算
                $tenpoDateBumonLine['sum_komi'] += $dtl['tax_gaku']+$dtl['kingaku'];
                $tenpoDateBumonLine['sum_tax_gaku'] += $dtl['tax_gaku'];
                $tenpoDateBumonLine['sum_kingaku'] += $dtl['kingaku'];
                $tenpoDateBumonLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                $tenpoDateBumonLine['sum_wari_a_kingaku'] += $dtl['wari_a_kingaku'];
                $tenpoDateBumonLine['sum_wari_b_kingaku'] += $dtl['wari_b_kingaku'];
                $tenpoDateBumonLine['sum_wari_kikan_kingaku'] += $dtl['wari_kikan_kingaku'];
                $tenpoDateBumonLine['sum_wari_matome_kingaku'] += $dtl['wari_matome_kingaku'];
                $tenpoDateBumonLine['sum_payment_komi'][$wPos] += $dtl['kingaku']+$dtl['tax_gaku'];
                $tenpoDateBumonLine['sum_payment_nuki'][$wPos] += $dtl['kingaku'];
                // 店舗受渡日集計行への加算
                $sumTenpoDateLine['sum_komi'] += $dtl['tax_gaku']+$dtl['kingaku'];
                $sumTenpoDateLine['sum_tax_gaku'] += $dtl['tax_gaku'];
                $sumTenpoDateLine['sum_kingaku'] += $dtl['kingaku'];
                $sumTenpoDateLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                $sumTenpoDateLine['sum_wari_a_kingaku'] += $dtl['wari_a_kingaku'];
                $sumTenpoDateLine['sum_wari_b_kingaku'] += $dtl['wari_b_kingaku'];
                $sumTenpoDateLine['sum_wari_kikan_kingaku'] += $dtl['wari_kikan_kingaku'];
                $sumTenpoDateLine['sum_wari_matome_kingaku'] += $dtl['wari_matome_kingaku'];
                $sumTenpoDateLine['sum_payment_komi'][$wPos] += $dtl['kingaku']+$dtl['tax_gaku'];
                $sumTenpoDateLine['sum_payment_nuki'][$wPos] += $dtl['kingaku'];
                // 店舗部門集計行への加算
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_komi'] += $dtl['tax_gaku']+$dtl['kingaku'];
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_tax_gaku'] += $dtl['tax_gaku'];
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_kingaku'] += $dtl['kingaku'];
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_base_kingaku'] += $dtl['base_kingaku'];
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_wari_a_kingaku'] += $dtl['wari_a_kingaku'];
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_wari_b_kingaku'] += $dtl['wari_b_kingaku'];
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_wari_kikan_kingaku'] += $dtl['wari_kikan_kingaku'];
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_wari_matome_kingaku'] += $dtl['wari_matome_kingaku'];
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_payment_komi'][$wPos] += $dtl['kingaku']+$dtl['tax_gaku'];
                $sumTenpoBumonLine[$dtl['bumon_id']]['sum_payment_nuki'][$wPos] += $dtl['kingaku'];
                // 店舗集計行への加算
                $sumTenpoLine['sum_komi'] += $dtl['tax_gaku']+$dtl['kingaku'];
                $sumTenpoLine['sum_tax_gaku'] += $dtl['tax_gaku'];
                $sumTenpoLine['sum_kingaku'] += $dtl['kingaku'];
                $sumTenpoLine['sum_base_kingaku'] += $dtl['base_kingaku'];
                $sumTenpoLine['sum_wari_a_kingaku'] += $dtl['wari_a_kingaku'];
                $sumTenpoLine['sum_wari_b_kingaku'] += $dtl['wari_b_kingaku'];
                $sumTenpoLine['sum_wari_kikan_kingaku'] += $dtl['wari_kikan_kingaku'];
                $sumTenpoLine['sum_wari_matome_kingaku'] += $dtl['wari_matome_kingaku'];
                $sumTenpoLine['sum_payment_komi'][$wPos] += $dtl['kingaku']+$dtl['tax_gaku'];
                $sumTenpoLine['sum_payment_nuki'][$wPos] += $dtl['kingaku'];
            }

            $pre = $dtl;
            $post = next($dtls);

            // BREAK時に出力
            if ( !$post || $post['saiji_id'] != $dtl['saiji_id'] || $post['tenpo_id'] != $dtl['tenpo_id'] ) {
                // 【店舗BREAK】※最終行も
                // 店舗受渡日部門行
                $lines[] = $tenpoDateBumonLine;
                $tenpoDateBumonLine = [];
                // 店舗受渡日集計行
                $lines[] = $sumTenpoDateLine;
                $sumTenpoDateLine = [];
                // 店舗部門集計行
                ksort($sumTenpoBumonLine);
                foreach ($sumTenpoBumonLine as $bumonLine) {
                    $lines[] = $bumonLine;
                }
                $sumTenpoBumonLine = [];
                // 店舗集計行
                $lines[] = $sumTenpoLine;
                $sumTenpoLine = [];
            } else if ( $post['shipping_delivery_date'] != $dtl['shipping_delivery_date'] ) {
                // 【受渡日BREAK】
                // 店舗受渡日部門行
                $lines[] = $tenpoDateBumonLine;
                $tenpoDateBumonLine = [];
                // 店舗受渡日集計行
                $lines[] = $sumTenpoDateLine;
                $sumTenpoDateLine = [];
            } else if ( $post['bumon_id'] != $dtl['bumon_id'] ) {
                // 【部門BREAK】
                // 店舗受渡日部門行
                $lines[] = $tenpoDateBumonLine;
                $tenpoDateBumonLine = [];
            }
        }
        log_info('[受注店舗部門集計(02)]lines',$lines);

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
            'posOfPayment' => $posOfPayment,
            'lines' => $lines,
        ];
    }

    /**
     * 行初期化
     *
     * @return array
     */
    private function initLine($argFunc,$argKbn, $argDtl, $argPosition) {
        $line = [];
        // 使用機能により振り分け
        switch ( $argFunc ) {
            case 'sumTenpoBumon02' :
                // 行の種別をセット
                $line['kbn'] = $argKbn;
                // 指定形式によりクリア内容をコントロール
                switch ( $argKbn ) {
                    case 'header1Line' :
                    case 'header2Line' :
                    case 'sumTenpoLine' :
                        $line['saiji_id'] = $argDtl['saiji_id'];
                        $line['saiji_name'] = $argDtl['saiji_name'];
                        $line['tenpo_id'] = $argDtl['tenpo_id'];
                        $line['tenpo_name'] = $argDtl['tenpo_name'];
                        $line['shipping_delivery_date'] = '';
                        $line['bumon_id'] = '';
                        $line['bumon_name'] = '';
                        break;
                    case 'sumTenpoDateLine' :
                        $line['saiji_id'] = $argDtl['saiji_id'];
                        $line['saiji_name'] = $argDtl['saiji_name'];
                        $line['tenpo_id'] = $argDtl['tenpo_id'];
                        $line['tenpo_name'] = $argDtl['tenpo_name'];
                        $line['shipping_delivery_date'] = $argDtl['shipping_delivery_date']->format('Y-m-d');
                        $line['bumon_id'] = '';
                        $line['bumon_name'] = '';
                        break;
                    case 'sumTenpoBumonLine' :
                        $line['saiji_id'] = $argDtl['saiji_id'];
                        $line['saiji_name'] = $argDtl['saiji_name'];
                        $line['tenpo_id'] = $argDtl['tenpo_id'];
                        $line['tenpo_name'] = $argDtl['tenpo_name'];
                        $line['shipping_delivery_date'] = '';
                        $line['bumon_id'] = $argDtl['bumon_id'];
                        $line['bumon_name'] = $argDtl['bumon_name'];
                        break;
                    case 'tenpoDateBumonLine' :
                        $line['saiji_id'] = $argDtl['saiji_id'];
                        $line['saiji_name'] = $argDtl['saiji_name'];
                        $line['tenpo_id'] = $argDtl['tenpo_id'];
                        $line['tenpo_name'] = $argDtl['tenpo_name'];
                        $line['shipping_delivery_date'] = $argDtl['shipping_delivery_date']->format('Y-m-d');
                        $line['bumon_id'] = $argDtl['bumon_id'];
                        $line['bumon_name'] = $argDtl['bumon_name'];
                        break;
                }
                // 集計値を初期化
                $line['sum_komi'] = 0;
                $line['sum_tax_gaku'] = 0;
                $line['sum_kingaku'] = 0;
                $line['sum_base_kingaku'] = 0;
                // 割引ごと
                $line['sum_wari_a_kingaku']        = 0;
                $line['sum_wari_b_kingaku']        = 0;
                $line['sum_wari_kikan_kingaku']    = 0;
                $line['sum_wari_matome_kingaku']   = 0;
                // 支払エリア
                foreach ( $argPosition as $method => $pos ) {
                    if ( $argKbn == "header2Line" ) {
                        $line['sum_payment_method'][$pos] = $method;
                    } else {
                        $line['sum_payment_komi'][$pos] = 0;
                        $line['sum_payment_nuki'][$pos] = 0;
                    }
                }
                break;
        }
        return $line;
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
     //ヤマト配送用CSV 2024/12/02
    /**
     * @param Request $request
     * @param $csvTypeId
     * @param string $fileName
     * @Route("/%eccube_admin_route%/order/export/yamato", name="admin_order_export_yamato")
     *
     * @return StreamedResponse
     */
    public function exportYamato(Request $request)
    {
        // タイムアウトを無効にする.
        set_time_limit(0);

        // sql loggerを無効にする.
        $em = $this->entityManager;
        $em->getConfiguration()->setSQLLogger(null);

        $response = new StreamedResponse();
        $response->setCallback(function () use ($request) {
            // CSV種別を元に初期化.
            $this->csvExportService->initCsvType(CsvType::CSV_TYPE_YAMATO);

            // ヘッダ行の出力.
            $this->csvExportService->exportHeader();
            // 受注データ検索用のクエリビルダを取得.
            //$qb = $this->orderRepository->createQueryBuilder('o');
            $qb = $this->csvExportService
                ->getOrderQueryBuilder($request)
                ->andWhere('o.uketori = :uketori')
                ->setParameter('uketori', 'ヤマト配送');

                // データ行の出力.
                $this->csvExportService->setExportQueryBuilder($qb);
                $this->csvExportService->exportData(function ($entity, $csvService) use ($request) {

                $Csvs = $csvService->getCsvs();
                log_info('csvs', $Csvs);

                $Order = $entity;

                $OrderItems = $Order->getOrderItems();

                foreach ($OrderItems as $OrderItem) {
                    $ExportCsvRow = new ExportCsvRow();

                    // CSV出力項目と合致するデータを取得.
                    foreach ($Csvs as $Csv) {
                        //log_info( (string)$Csv);
                        // 受注データを検索.
                        //$wData = $csvService->getData($Csv, $Order);
                        //log_info((string)$wData);
                        $ExportCsvRow->setData($csvService->getData($Csv, $Order));
                        if ($ExportCsvRow->isDataNull()) {
                            // 受注データにない場合は, 受注明細を検索.
                            $ExportCsvRow->setData($csvService->getData($Csv, $OrderItem));
                            log_info($csvService->getData($Csv, $OrderItem));
                        }
                        if ($ExportCsvRow->isDataNull() && $Shipping = $OrderItem->getShipping()) {
                            // 受注明細データにない場合は, 出荷を検索.
                            $ExportCsvRow->setData($csvService->getData($Csv, $Shipping));
                            log_info($csvService->getData($Csv, $Shipping));
                        }

                        $event = new EventArgs(
                            [
                                'csvService' => $csvService,
                                'Csv' => $Csv,
                                'OrderItem' => $OrderItem,
                                'ExportCsvRow' => $ExportCsvRow,
                            ],
                            $request
                        );
                        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_ORDER_CSV_EXPORT_ORDER, $event);
                        log_info($request);
                        $ExportCsvRow->pushData();

                        //var_dump('ExportCsvRow',$ExportCsvRow);

                        }
                    }
                    //$row[] = number_format(memory_get_usage(true));
                    //データ行を配列に加工
                    $rowData = (array)$ExportCsvRow->getRow();
                    log_info('rowData', $rowData);

                    //ここをgetでの値取得に修正
                    $fullname01 = $Order->getName01() . $Order->getName02();
                    $fullname02 = $Order->getkana01() . $Order->getkana02();
                    $kana01 = $Order->getKana01() . $Order->getKana02();
                    $kana02 = $Order->getH_kana1() . $Order->getH_kana2();
                    $addr01 = $Order->getPref() . $Order->getAddr01();
                    $addr02 = $Order->getH_pref() . $Order->getH_addr1();
                    $hpn = $Order->getH_phone_number();
                    $hpostal = $Order->getH_postal_code();
                    $addr03 = $Order->getH_addr2();
                    //$addr04 = $Order->getAddr02();

                    //それぞれの行にセット
                    $rowData[39] = '0962861691';//請求先コード
                    $rowData[8] = $hpn;//お届け先電話番号
                    $rowData[10] = $hpostal;//お届け先郵便番号
                    $rowData[11] = $addr02;//お届け先住所
                    $rowData[12] = $addr03;//お届け先マンション名
                    $rowData[15] = $fullname02;//お届け先名
                    $rowData[16] = $kana02;//お届け先名(ｶﾅ)
                    $rowData[22] = $addr01;//ご依頼主住所
                    $rowData[24] = $fullname01;//ご依頼主名
                    $rowData[25] = $kana01;//ご依頼主名(ｶﾅ)

                    //B列（０：発払い）、C列（１：クール便）、E列（2024/12/28）のデフォルト値
                    $rowData[1] = 0;
                    $rowData[2] = 1;
                    $rowData[17] = '様';

                    //※今後ここを変える必要あり　ロッキーの2024年おせち発送日　2024/10/22 田中
                    $rowData[4] = '2024/12/28';
                    // log_info($rowData[1]);
                    // log_info($rowData[2]);

                    //配達日時変換　2024/10/22 田中 Fix 2024/10/23
                    if(!empty($rowData[5])){
                    $shippingDeliveryDate = (new \DateTime($rowData[5]))->format('Y/m/d');
                    $rowData[5] = $shippingDeliveryDate;
                    }
                    //log_info('配達日', $rowData[5]);
                    log_info('配送時間: ' . $rowData[6]);
                    //配達時間の変換・セット　2024/10/23 田中
                    //switch文で処理
                    switch ($rowData[6]) {
                        case '08～12時':
                        case '午前中':
                            $rowData[6] = '0812';
                            break;
                        case '14〜16時':
                            $rowData[6] = '1416';
                            break;
                        case '16〜18時':
                            $rowData[6] = '1618';
                            break;
                        case '18〜20時':
                            $rowData[6] = '1820';
                            break;
                        case '19〜21時':
                            $rowData[6] = '1921';
                            break;
                        default:
                            $rowData[6] = '指定なし';
                            break;
                    }


                    // var_dump('時間帯',$deliveryTime);
                    log_info('rowData2', $rowData);

                    //$wColの文字形式変換s
                    //mb_convert_encoding($rowData[6],'SJIS', 'UTF-8');

                    //ここでrowDataを初期化
                    $wCol = new ArrayCollection($rowData);
                    /*
                    $rowData = new ArrayCollection();
                        foreach ($rowData as $key => $value) {
                            $rowData->set($key, $value);
                        }
                        log_info($rowData->toArray());
                    */
                    //CSV出力
                    //$csvService->fputcsv($wCol);
                    $csvService->fputcsv($rowData);
                    //$csvService->fputcsv($rowData[6]);
                    //$csvService->fputcsv($rowData);//ヤマト配送用に修正　2024/10/18 田中
            });
        });
        $fileName = 'yamatoB2_'.(new \DateTime())->format('YmdHis').'.csv';
        $response->headers->set('Content-Type', 'application/octet-stream');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$fileName);
        $response->send();
        return $response;
    }
}
