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
use Customize\Form\Type\HdnSelectTenpoBlockType;
/* EntityとRepository */
use Customize\Entity\HdnTenpo;
use Customize\Repository\HdnTenpoRepository;

use Eccube\Service\CartService;
use Eccube\Service\OrderHelper; // (HDN) 定数取得のため

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;

class HdnSelectTenpoController extends AbstractController
{
    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var HdnTenpoRepository
     * @var CartService
     */
    protected $hdnTenpoRepository;
    protected $cartService;

    /**
     * HdnSelectTenpoRepository constructor.
     *
     * @param HdnTenpoRepository $hdnTenpoRepository
     */
    public function __construct(
        RequestStack $requestStack,
        HdnTenpoRepository $hdnTenpoRepository,
        CartService $cartService
    ) {
        $this->requestStack = $requestStack;
        $this->hdnTenpoRepository = $hdnTenpoRepository;
        $this->cartService = $cartService;
    }

    /**
     * @Route("/block/select_tenpo", name="block_select_tenpo")
     * @Template("Block/select_tenpo.twig")
     */
    public function index(Request $request)
    {
        /* session */
        $session = $this->get('session');
        //$session->set('tenpo_id', 9);
        //log_info('this->session:'.serialize($this->session));
        //$this->session->set('tenpo_id',10);
        //log_info('session:'.serialize($session));
        log_info("tenpo_id=".$session->get('tenpo_id'));
        /* ここでセッションの店舗コードを使って該当店舗を取得 */
        $objTenpo = null;
        if ( $session->get('tenpo_id') ) {
            $objTenpo = $this->hdnTenpoRepository->find($session->get('tenpo_id'));
            if (null === $objTenpo) {
                throw new NotFoundHttpException();
            }
        }

        $builder = $this->formFactory
            ->createNamedBuilder('', HdnSelectTenpoBlockType::class)
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
        $form->get('tenpo_id')->setData($objTenpo);

        $form->handleRequest($request);

        return [
            'form' => $form->createView(),
        ];
    }
    /**
     * @Route("/block/select_tenpo/{id}", name="block_select_tenpo_change")
     */
    public function change(Request $request, $id)
    {
        /* session */
        $session = $this->get('session');
        $session->set('tenpo_id', $id);
        log_info("tenpo_id=".$session->get('tenpo_id'));

        /* ここでセッションの店舗コードを使って該当店舗を取得 */
        $objTenpo = null;
        if ( $session->get('tenpo_id') ) {
            $objTenpo = $this->hdnTenpoRepository->find($session->get('tenpo_id'));
            if (null === $objTenpo) {
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
