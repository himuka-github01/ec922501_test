<?php
/*----------------------------------------
 * HdnStartController
 * 受注入力開始コントローラ
 *----------------------------------------
 * 2022.05.05 upd セッションに受付店舗を保持 (by inok)
 * 2021.08.01 new (by inok)
 *----------------------------------------*/

//namespace Eccube\Controller;
namespace Customize\Controller;

use Eccube\Controller\AbstractController;
use Eccube\Entity\Category;
use Eccube\Repository\CategoryRepository;
use Eccube\Service\CartService;
use Customize\Entity\HdnTenpo;
use Customize\Repository\HdnTenpoRepository;
use Customize\Entity\HdnSaijiTenpo;
use Customize\Repository\HdnSaijiTenpoRepository;
use Eccube\Service\OrderHelper; // (HDN) 定数取得のため
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HdnStartController extends AbstractController
{
    /**
     * @var CategoryRepository
     * @var HdnTenpoRepository
     * @var HdnSaijiTenpoRepository
     * @var CartService
     */
    protected $categoryRepository;
    protected $hdnTenpoRepository;
    protected $cartService;

    /**
     * CategoryController constructor.
     *
     * @param CategoryRepository $categoryRepository
     * @param HdnTenpoRepository $hdnTenpoRepository
     * @param HdnSaijiTenpoRepository $hdnSaijiTenpoRepository
     * @param CartService $cartService
     */
    public function __construct(
        CategoryRepository $categoryRepository,
        HdnTenpoRepository $hdnTenpoRepository,
        HdnSaijiTenpoRepository $hdnSaijiTenpoRepository,
        CartService $cartService
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->hdnTenpoRepository = $hdnTenpoRepository;
        $this->hdnSaijiTenpoRepository = $hdnSaijiTenpoRepository;
        $this->cartService = $cartService;
    }

    /**
     * @Route("/clear", name="clear")
     */
    public function clear(Request $request)
    {
        // 検証用：セッションの主要情報をクリア
        $this->session->remove('saiji_id');
        $this->session->remove('tenpo_id');
        // 検証用：Cartをクリア
        //$this->cartService->clear();
        // 検証用：リダイレクト
        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/start", name="start")
     */
    public function start(Request $request)
    {
        // 店舗コードを受け取る
        $tenpo_cd = $request->get('tenpo_cd');

        if ( $tenpo_cd ) {
            // セッションに格納
            $this->session->set( 'tenpo_cd' , $tenpo_cd );
            // 店舗コードから店舗Entityを取得
            $Tenpo = $this->hdnTenpoRepository->findOneBy(array('tenpo_cd' => $tenpo_cd));

            if ( $Tenpo ) {
                // 店舗Entityから店舗IDを取得
                $tenpo_id = $Tenpo->getId();
                // 店舗IDをセッションに格納
                $this->session->set( 'tenpo_id' , $tenpo_id );
                // 2022.05.05 受付店舗IDをセッションに格納
                $this->session->set( 'uketsuke_tenpo_id' , $tenpo_id );
            }
        }
        // Cartをクリア
        $this->cartService->clear();
        // 会員情報をクリア
        $this->session->set(OrderHelper::SESSION_NON_MEMBER,'');
        // 催事一覧にリダイレクト
        return $this->redirectToRoute('start/list_saiji');
    }

    /**
     * @Route("/start/list_saiji", name="start/list_saiji")
     * @Template("/start/list_saiji.twig")
     */
    public function listSaiji(Request $request)
    {
        $Parent = $this->categoryRepository->find(7);
        //$Saijies = $this->categoryRepository->getList($Parent);
        $Saijies = $this->categoryRepository->getSaijiList();
        return [
            'Saijies' => $Saijies,
            'tenpo_cd' => $this->session->get('tenpo_cd'),
            'tenpo_id' => $this->session->get('tenpo_id')
        ];
    }

    /**
     * @Route("/start/choice_saiji", name="start/choice_saiji")
     */
    public function choiceSaiji(Request $request)
    {
        $saiji_id = $request->get('saiji_id');
        $this->session->set( 'saiji_id' , $saiji_id );
        return $this->redirectToRoute('start/list_tenpo');
    }

    /**
     * @Route("/start/list_tenpo", name="start/list_tenpo")
     * @Template("start/list_tenpo.twig")
     */
    public function listTenpo(Request $request)
    {
        $saiji_id = $this->session->get('saiji_id');
        $Tenpos = $this->hdnTenpoRepository->findBySaiji($saiji_id);
        return [
            'saiji_id' => $saiji_id,
            'tenpo_id' => $this->session->get('tenpo_id'),
            'Tenpos'   => $Tenpos
        ];
    }

    /**
     * @Route("/start/choice_tenpo", name="start/choice_tenpo")
     */
    public function choiceTenpo(Request $request)
    {
        $tenpo_id = $request->get('tenpo_id');
        $this->session->set( 'tenpo_id' , $tenpo_id );
        return $this->redirectToRoute('product_list');
    }
}
