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
 * 
 * -------------------------------------------
 * 2021.07.26 TwigInitializeListenerから派生
 * -------------------------------------------
 * 
 */

//namespace Eccube\EventListener;
namespace Customize\EventListener;

use Doctrine\ORM\NoResultException;
use Eccube\Common\EccubeConfig;
use Eccube\Entity\AuthorityRole;
use Eccube\Entity\Layout;
use Eccube\Entity\Master\DeviceType;
use Eccube\Entity\Member;
use Eccube\Entity\Page;
use Eccube\Entity\PageLayout;
use Eccube\Repository\AuthorityRoleRepository;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\LayoutRepository;
use Eccube\Repository\Master\DeviceTypeRepository;
use Eccube\Repository\PageRepository;
use Eccube\Repository\PageLayoutRepository;
use Eccube\Repository\BlockPositionRepository;
use Eccube\Request\Context;
use SunCat\MobileDetectBundle\DeviceDetector\MobileDetector;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Twig\Environment;

class HdnEventListener implements EventSubscriberInterface
{
    /**
     * @var bool 初期化済かどうか.
     */
    protected $initialized = false;

    /**
     * @var Environment
     */
    protected $twig;

    /**
     * @var BaseInfoRepository
     */
    protected $baseInfoRepository;

    /**
     * @var DeviceTypeRepository
     */
    protected $deviceTypeRepository;

    /**
     * @var PageRepository
     */
    protected $pageRepository;

    /**
     * @var PageLayoutRepository
     */
    protected $pageLayoutRepository;

    /**
     * @var BlockPositionRepository
     */
    protected $blockPositionRepository;

    /**
     * @var Context
     */
    protected $requestContext;

    /**
     * @var AuthorityRoleRepository
     */
    private $authorityRoleRepository;

    /**
     * @var EccubeConfig
     */
    private $eccubeConfig;

    /**
     * @var MobileDetector
     */
    private $mobileDetector;

    /**
     * @var UrlGeneratorInterface
     */
    private $router;

    /**
     * @var LayoutRepository
     */
    private $layoutRepository;

    /**
     * TwigInitializeListener constructor.
     *
     * @param Environment $twig
     * @param BaseInfoRepository $baseInfoRepository
     * @param PageRepository $pageRepository
     * @param PageLayoutRepository $pageLayoutRepository
     * @param BlockPositionRepository $blockPositionRepository
     * @param DeviceTypeRepository $deviceTypeRepository
     * @param AuthorityRoleRepository $authorityRoleRepository
     * @param EccubeConfig $eccubeConfig
     * @param Context $context
     * @param MobileDetector $mobileDetector
     * @param UrlGeneratorInterface $router
     * @param LayoutRepository $layoutRepository
     */
    public function __construct(
        Environment $twig,
        BaseInfoRepository $baseInfoRepository,
        PageRepository $pageRepository,
        PageLayoutRepository $pageLayoutRepository,
        BlockPositionRepository $blockPositionRepository,
        DeviceTypeRepository $deviceTypeRepository,
        AuthorityRoleRepository $authorityRoleRepository,
        EccubeConfig $eccubeConfig,
        Context $context,
        MobileDetector $mobileDetector,
        UrlGeneratorInterface $router,
        LayoutRepository $layoutRepository
    ) {
        $this->twig = $twig;
        $this->baseInfoRepository = $baseInfoRepository;
        $this->pageRepository = $pageRepository;
        $this->pageLayoutRepository = $pageLayoutRepository;
        $this->blockPositionRepository = $blockPositionRepository;
        $this->deviceTypeRepository = $deviceTypeRepository;
        $this->authorityRoleRepository = $authorityRoleRepository;
        $this->eccubeConfig = $eccubeConfig;
        $this->requestContext = $context;
        $this->mobileDetector = $mobileDetector;
        $this->router = $router;
        $this->layoutRepository = $layoutRepository;
    }

    /**
     * @param GetResponseEvent $event
     *
     * @throws NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        if ($this->initialized) {
            return;
        }

        //$this->twig->addGlobal('BaseInfo', $this->baseInfoRepository->get());

        if ($this->requestContext->isAdmin()) {
            $this->setAdminGlobals($event);
        } else {
            // (HDN) セッション無効時は開始ページへリダイレクト
            $session = new Session();
            if ( !$session->has('saiji_id') ) {
                $session->set('saiji_id','');   // 空値をセットしてLoopを防ぐ
                $url = $this->router->generate('start');
                $response = new RedirectResponse($url);
                $event->setResponse($response);
            }
            $this->setFrontVariables($event);
        }

        $this->initialized = true;
    }

    /**
     * @param GetResponseEvent $event
     *
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function setFrontVariables(GetResponseEvent $event)
    {
    }

    /**
     * @param GetResponseEvent $event
     */
    public function setAdminGlobals(GetResponseEvent $event)
    {
        // メンバー取得
        $Member = $this->requestContext->getCurrentUser();
        $session = new Session();
        if ($Member instanceof Member) {
            $tenpoCd = $Member->getDepartment();
            $this->twig->addGlobal('tenpo_cd', $tenpoCd);
            $session->set('tenpo_cd', $tenpoCd);
        } else {
            $this->twig->addGlobal('tenpo_cd', "");
            $session->set('tenpo_cd', '');
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [
                // SecurityServiceProviderで、認証処理が完了した後に実行.
                ['onKernelRequest', 6],
            ],
        ];
    }
}
