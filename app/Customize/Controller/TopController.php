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

use Eccube\Controller\TopController as BaseTopController;   // 元のコントローラ

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class TopController extends BaseTopController
{
    /**
     * @Route("/", name="homepage")
     * @Template("index.twig")
     */
    public function index()
    {
        // 催事一覧にリダイレクト
        return $this->redirectToRoute('start');
        //return [];
    }
}
