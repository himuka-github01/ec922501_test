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

//namespace Eccube\Controller;
namespace Customize\Controller;

use Eccube\Controller\ShoppingController as BaseShoppingController;   // 元のコントローラ

use Eccube\Entity\CustomerAddress;
use Eccube\Entity\Order;
use Eccube\Entity\Shipping;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Exception\ShoppingException;
use Eccube\Form\Type\Front\CustomerLoginType;
use Eccube\Form\Type\Front\ShoppingShippingType;
use Eccube\Form\Type\Shopping\CustomerAddressType;
use Eccube\Form\Type\Shopping\OrderType;
use Eccube\Repository\OrderRepository;
use Eccube\Service\CartService;
use Eccube\Service\MailService;
use Eccube\Service\OrderHelper;
use Eccube\Service\Payment\PaymentDispatcher;
use Eccube\Service\Payment\PaymentMethodInterface;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;   // (HDN)
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ShoppingController extends BaseShoppingController
{
    /**
     * 注文手続き画面を表示する
     *
     * 未ログインまたはRememberMeログインの場合はログイン画面に遷移させる.
     * ただし、非会員でお客様情報を入力済の場合は遷移させない.
     *
     * カート情報から受注データを生成し, `pre_order_id`でカートと受注の紐付けを行う.
     * 既に受注が生成されている場合(pre_order_idで取得できる場合)は, 受注の生成を行わずに画面を表示する.
     *
     * purchaseFlowの集計処理実行後, warningがある場合はカートど同期をとるため, カートのPurchaseFlowを実行する.
     *
     * @Route("/shopping", name="shopping")
     * @Template("Shopping/index.twig")
     */
    public function index(PurchaseFlow $cartPurchaseFlow)
    {
        $request = Request::createFromGlobals();
        //log_info('[注文手続] Request-Payment:',$request->request->get('_shopping_order'));
        //log_info('[注文手続] Request:'.$request->__toString());
        log_info('[注文手続] payment_id:'.$this->session->get('payment_id'));
        //log_info('[注文手続] shipping_delivery_date:'.$this->session->get('shipping_delivery_date'));
        //log_info('[注文手続] DeliveryTime:'.$this->session->get('DeliveryTime'));
        // ログイン状態のチェック.
        if ($this->orderHelper->isLoginRequired()) {
            log_info('[注文手続] 未ログインもしくはRememberMeログインのため, ログイン画面に遷移します.');

            //return $this->redirectToRoute('shopping_login');
            return $this->redirectToRoute('shopping_nonmember');
        }

        // カートチェック.
        $Cart = $this->cartService->getCart();
        if (!($Cart && $this->orderHelper->verifyCart($Cart))) {
            log_info('[注文手続] カートが購入フローへ遷移できない状態のため, カート画面に遷移します.');

            return $this->redirectToRoute('cart');
        }

        // 受注の初期化.
        log_info('[注文手続] 受注の初期化処理を開始します.');
        $Customer = $this->getUser() ? $this->getUser() : $this->orderHelper->getNonMember();
        $Order = $this->orderHelper->initializeOrder($Cart, $Customer);

        // 集計処理.
        log_info('[注文手続] 集計処理を開始します.', [$Order->getId()]);
        $flowResult = $this->executePurchaseFlow($Order, false);
        $this->entityManager->flush();

        if ($flowResult->hasError()) {
            log_info('[注文手続] Errorが発生したため購入エラー画面へ遷移します.', [$flowResult->getErrors()]);

            return $this->redirectToRoute('shopping_error');
        }

        if ($flowResult->hasWarning()) {
            log_info('[注文手続] Warningが発生しました.', [$flowResult->getWarning()]);

            // 受注明細と同期をとるため, CartPurchaseFlowを実行する
            $cartPurchaseFlow->validate($Cart, new PurchaseContext($Cart, $this->getUser()));

            // 注文フローで取得されるカートの入れ替わりを防止する
            // @see https://github.com/EC-CUBE/ec-cube/issues/4293
            $this->cartService->setPrimary($Cart->getCartKey());
        }

        // マイページで会員情報が更新されていれば, Orderの注文者情報も更新する.
        if ($Customer->getId()) {
            $this->orderHelper->updateCustomerInfo($Order, $Customer);
            $this->entityManager->flush();
        }

        log_info('[注文手続] Order.subtotal:'.$Order->getSubTotal().' tax:'.$Order->getTax());

        // (HDN) 2022.06.11 残数チェックを行う
        if ( $this->session->getFlashBag()->get('eccube.front.error') != '' ) {
            // (HDN) 商品IDリスト取得
            $wDeliveryDate = '';
            $ids = [];
            $orderItems = $Order->getOrderItems();
            foreach ($orderItems as $orderItem) {
                $p  = $orderItem->getProduct();
                $ids[] = $p->getId();
                $s  = $orderItem->getShipping()->getShippingDeliveryDate();
                if ( $s ) {
                    $wDeliveryDate = $s->format('Y-m-d');
                }
            }
            // (HDN) 日付指定済みであれば、残数チェックを行う
            if ( $wDeliveryDate != '' ) {
                //-------------------------------------------
                // (HDN) 2022.05.13 受渡日ごとの在庫状況を取得
                // 1) 催事を取得し受渡日のリストを作成 $shippingDates[]
                // 2) 商品毎(店舗)の受渡日別受注数を取得 $sumOrdersByTenpo
                // 3) 商品毎(全店)の受渡日別受注数を取得 $sumOrdersAllTenpo
                // 4) 商品毎の受渡日別受注状況をセット $infoByProductAndDate[]
                //-------------------------------------------
                $infoByProductAndDate
                = $this->orderRepository->getStockAndOrderInfo($this->session->get('saiji_id'),$this->session->get('tenpo_id'),$ids,$this->entityManager);

                //-------------------------------------------
                // (HDN) 2022.06.11 指定日での残数チェック
                // 1) 商品毎の在庫(出荷可能数)をチェック $infoByProductAndDate[$id][$day]
                //    date , limit , quantity , stock
                //-------------------------------------------
                $wError = [];
                foreach ($orderItems as $orderItem) {
                    $id = $orderItem->getProduct()->getId();
                    // チェック対象分のみ
                    if ( $infoByProductAndDate[$id] ) {
                        $d  = $orderItem->getShipping()->getShippingDeliveryDate()->format('Y-m-d');
                        $q  = $orderItem->getQuantity();
                        $s  = $infoByProductAndDate[$id][$d]['stock'];
                        if ( $q > $infoByProductAndDate[$id][$d]['stock'] ) {
                            $nm = $orderItem->getProductName();
                            $wError[] = '指定日での残数が不足しています（商品：'.$nm.' 日付：'.$d.' 残数：'.$s.'）';
                        }
                    }
                }
                if ( count($wError) > 0 ) {
                    $this->addError(implode('|',$wError));
                    log_info('[注文確認] 残数エラーのため, 注文手続き画面へ遷移します.', $wError);
                    //return $this->redirectToRoute('shopping');    
                }
            }
        }

        $form = $this->createForm(OrderType::class, $Order);

        return [
            'form' => $form->createView(),
            'Order' => $Order,
        ];
    }

    /**
     * 他画面への遷移を行う.
     *
     * お届け先編集画面など, 他画面へ遷移する際に, フォームの値をDBに保存してからリダイレクトさせる.
     * フォームの`redirect_to`パラメータの値にリダイレクトを行う.
     * `redirect_to`パラメータはpath('遷移先のルーティング')が渡される必要がある.
     *
     * 外部のURLやPathを渡された場合($router->matchで展開出来ない場合)は, 購入エラーとする.
     *
     * プラグインやカスタマイズでこの機能を使う場合は, twig側で以下のように記述してください.
     *
     * <button data-trigger="click" data-path="path('ルーティング')">更新する</button>
     *
     * data-triggerは, click/change/blur等のイベント名を指定してください。
     * data-pathは任意のパラメータです. 指定しない場合, 注文手続き画面へリダイレクトします.
     *
     * @Route("/shopping/redirect_to", name="shopping_redirect_to", methods={"POST"})
     * @Template("Shopping/index.twig")
     */
    public function redirectTo(Request $request, RouterInterface $router)
    {
        // ログイン状態のチェック.
        if ($this->orderHelper->isLoginRequired()) {
            log_info('[リダイレクト] 未ログインもしくはRememberMeログインのため, ログイン画面に遷移します.');

            //return $this->redirectToRoute('shopping_login');
            return $this->redirectToRoute('start');
        }

        // 受注の存在チェック.
        $preOrderId = $this->cartService->getPreOrderId();
        $Order = $this->orderHelper->getPurchaseProcessingOrder($preOrderId);
        if (!$Order) {
            log_info('[リダイレクト] 購入処理中の受注が存在しません.');

            return $this->redirectToRoute('shopping_error');
        }

        $form = $this->createForm(OrderType::class, $Order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            log_info('[リダイレクト] 集計処理を開始します.', [$Order->getId()]);
            $response = $this->executePurchaseFlow($Order);
            $this->entityManager->flush();

            if ($response) {
                return $response;
            }

            $redirectTo = $form['redirect_to']->getData();
            if (empty($redirectTo)) {
                log_info('[リダイレクト] リダイレクト先未指定のため注文手続き画面へ遷移します.');
                //log_info('[リダイレクト] Request:'.$request->__toString());
                //log_info('[リダイレクト] Request:Payment:'.$request->get('_shopping_order')['Payment']);
                //log_info('[リダイレクト] Request:Payment:',$request->get('_shopping_order'));
                // セッションに格納
                /*
                if ( $request->get('_shopping_order')['Payment'] ) {
                    $this->session->set( 'payment_id' , $request->get('_shopping_order')['Payment'] );
                }
                if ( $request->get('_shopping_order')['Shippings'][0]['shipping_delivery_date'] ) {
                    $this->session->set( 'shipping_delivery_date' , $request->get('_shopping_order')['Shippings'][0]['shipping_delivery_date'] );
                }
                if ( $request->get('_shopping_order')['Shippings'][0]['DeliveryTime'] ) {
                    $this->session->set( 'DeliveryTime' , $request->get('_shopping_order')['Shippings'][0]['DeliveryTime'] );
                }
                */

                return $this->redirectToRoute('shopping');
            }

            try {
                // リダイレクト先のチェック.
                $pattern = '/^'.preg_quote($request->getBasePath(), '/').'/';
                $redirectTo = preg_replace($pattern, '', $redirectTo);
                $result = $router->match($redirectTo);
                // パラメータのみ抽出
                $params = array_filter($result, function ($key) {
                    return 0 !== \strpos($key, '_');
                }, ARRAY_FILTER_USE_KEY);

                log_info('[リダイレクト] リダイレクトを実行します.', [$result['_route'], $params]);

                // pathからurlを再構築してリダイレクト.
                return $this->redirectToRoute($result['_route'], $params);
            } catch (\Exception $e) {
                log_info('[リダイレクト] URLの形式が不正です', [$redirectTo, $e->getMessage()]);

                return $this->redirectToRoute('shopping_error');
            }
        }

        log_info('[リダイレクト] フォームエラーのため, 注文手続き画面を表示します.', [$Order->getId()]);

        return [
            'form' => $form->createView(),
            'Order' => $Order,
        ];
    }

    /**
     * 注文確認画面を表示する.
     * (HDN)2022.05.12 非会員入力画面からの直接遷移に対応
     *   methodのPOST限定を外す
     *   methodのPOST限定を外す
     *
     * ここではPaymentMethod::verifyがコールされます.
     * PaymentMethod::verifyではクレジットカードの有効性チェック等, 注文手続きを進められるかどうかのチェック処理を行う事を想定しています.
     * PaymentMethod::verifyでエラーが発生した場合は, 注文手続き画面へリダイレクトします.
     *
     * *Route("/shopping/confirm", name="shopping_confirm", methods={"POST"})
     * @Route("/shopping/confirm", name="shopping_confirm")
     * @Template("Shopping/confirm.twig")
     */
    public function confirm(Request $request)
    {
        // (HDN) 催事等が未選択の場合はstartへリダイレクト
        $session = new Session();
        if ( empty($session->get('saiji_id')) || empty($session->get('tenpo_id')) ) {
            log_info('セッション無効：リダイレクト：催事ID：'.$session->get('saiji_id'));
            return $this->redirectToRoute('start');
        }
        log_info('[注文確認]催事ID='.$session->get('saiji_id')." 店舗ID=".$session->get('tenpo_id'));

        // ログイン状態のチェック.
        if ($this->orderHelper->isLoginRequired()) {
            log_info('[注文確認] 未ログインもしくはRememberMeログインのため, ログイン画面に遷移します.');

            //return $this->redirectToRoute('shopping_login');
            return $this->redirectToRoute('start');
        }

        // 受注の存在チェック
        $preOrderId = $this->cartService->getPreOrderId();
        $Order = $this->orderHelper->getPurchaseProcessingOrder($preOrderId);
        if (!$Order) {
            log_info('[注文確認] 購入処理中の受注が存在しません.', [$preOrderId]);

            return $this->redirectToRoute('shopping_error');
        }

        $form = $this->createForm(OrderType::class, $Order);
        $form->handleRequest($request);

        log_info('[注文確認] isSubmitted:'.$form->isSubmitted().' isValid:'.$form->isValid());
        log_info('[注文確認] form:',(array)$form);

        // (HDN)2022.05.12 非会員入力画面からの直接遷移に対応
        // (HDN) 先に異常条件を判定し、以外をOKとすることで、非会員入力画面からの遷移はそのまま通す
        //if ($form->isSubmitted() && $form->isValid()) {
        if ($form->isSubmitted() && !$form->isValid()) {
            log_info('[注文確認] フォームエラーのため, 注文手続画面を表示します.', [$Order->getId()]);

            // FIXME @Templateの差し替え.
            $request->attributes->set('_template', new Template(['template' => 'Shopping/index.twig']));
    
            return [
                'form' => $form->createView(),
                'Order' => $Order,
            ];
        } else {
            log_info('[注文確認] 集計処理を開始します.', [$Order->getId()]);
            $response = $this->executePurchaseFlow($Order);
            $this->entityManager->flush();

            if ($response) {
                return $response;
            }

            log_info('[注文確認] PaymentMethod::verifyを実行します.', [$Order->getPayment()->getMethodClass()]);
            $paymentMethod = $this->createPaymentMethod($Order, $form);
            $PaymentResult = $paymentMethod->verify();

            if ($PaymentResult) {
                if (!$PaymentResult->isSuccess()) {
                    $this->entityManager->rollback();
                    foreach ($PaymentResult->getErrors() as $error) {
                        $this->addError($error);
                    }

                    log_info('[注文確認] PaymentMethod::verifyのエラーのため, 注文手続き画面へ遷移します.', [$PaymentResult->getErrors()]);

                    return $this->redirectToRoute('shopping');
                }

                $response = $PaymentResult->getResponse();
                if ($response instanceof Response && ($response->isRedirection() || $response->isSuccessful())) {
                    $this->entityManager->flush();

                    log_info('[注文確認] PaymentMethod::verifyが指定したレスポンスを表示します.');

                    return $response;
                }
            }

            $this->entityManager->flush();

            // (HDN) 商品IDリスト取得
            $ids = [];
            $orderItems = $Order->getOrderItems();
            foreach ($orderItems as $orderItem) {
                $p  = $orderItem->getProduct();
                $ids[] = $p->getId();
            }
            //-------------------------------------------
            // (HDN) 2022.05.13 受渡日ごとの在庫状況を取得
            // 1) 催事を取得し受渡日のリストを作成 $shippingDates[]
            // 2) 商品毎(店舗)の受渡日別受注数を取得 $sumOrdersByTenpo
            // 3) 商品毎(全店)の受渡日別受注数を取得 $sumOrdersAllTenpo
            // 4) 商品毎の受渡日別受注状況をセット $infoByProductAndDate[]
            //-------------------------------------------
            $infoByProductAndDate
            = $this->orderRepository->getStockAndOrderInfo($session->get('saiji_id'),$session->get('tenpo_id'),$ids,$this->entityManager);

            //-------------------------------------------
            // (HDN) 2022.06.11 指定日での残数チェック
            // 1) 商品毎の在庫(出荷可能数)をチェック $infoByProductAndDate[$id][$day]
            //    date , limit , quantity , stock
            //-------------------------------------------
            $wError = [];
            foreach ($orderItems as $orderItem) {
                $id = $orderItem->getProduct()->getId();
                // チェック対象分のみ
                if ( $infoByProductAndDate[$id] ) {
                    $d  = $orderItem->getShipping()->getShippingDeliveryDate()->format('Y-m-d');
                    $q  = $orderItem->getQuantity();
                    $s  = $infoByProductAndDate[$id][$d]['stock'];
                    if ( $q > $infoByProductAndDate[$id][$d]['stock'] ) {
                        $nm = $orderItem->getProductName();
                        $wError[] = '指定日での残数が不足しています（商品：'.$nm.' 日付：'.$d.' 残数：'.$s.'）';
                    }
                }
            }
            if ( count($wError) > 0 ) {
                $this->addError(implode('|',$wError));
                log_info('[注文確認] 残数エラーのため, 注文手続き画面へ遷移します.', $wError);
                return $this->redirectToRoute('shopping');    
            }

            log_info('[注文確認] 注文確認画面を表示します.');

            return [
                'form' => $form->createView(),
                'Order' => $Order,
                'infoByProductAndDate' => $infoByProductAndDate,
            ];
        }

        /* (HDN) 2022.05.12 先にエラーを判定するために移動
        log_info('[注文確認] フォームエラーのため, 注文手続画面を表示します.', [$Order->getId()]);

        // FIXME @Templateの差し替え.
        $request->attributes->set('_template', new Template(['template' => 'Shopping/index.twig']));

        return [
            'form' => $form->createView(),
            'Order' => $Order,
        ];
        */
    }

    /**
     * PaymentMethodをコンテナから取得する.
     *
     * @param Order $Order
     * @param FormInterface $form
     *
     * @return PaymentMethodInterface
     */
    private function createPaymentMethod(Order $Order, FormInterface $form)
    {
        $PaymentMethod = $this->container->get($Order->getPayment()->getMethodClass());
        $PaymentMethod->setOrder($Order);
        $PaymentMethod->setFormType($form);

        return $PaymentMethod;
    }

}
