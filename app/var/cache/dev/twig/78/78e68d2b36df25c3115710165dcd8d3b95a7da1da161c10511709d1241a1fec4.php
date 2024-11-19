<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ProductOption/ProductOptionNav.php */
class __TwigTemplate_76e251b25748d7c164990c95bb3701c4ce9a29a47245bb2daef696b78e15102e extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/ProductOptionNav.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/ProductOptionNav.php"));

        // line 1
        echo "<?php
/*
* Plugin Name : ProductOption
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\\ProductOption;

use Eccube\\Common\\EccubeNav;

class ProductOptionNav implements EccubeNav
{
    /**
     * @return array
     */
    public static function getNav()
    {
        return [
            'product' => [
                'children' => [
                    'option' => [
                        'id' => 'admin_product_option',
                        'name' => 'productoption.admin.nav.product.option',
                        'url' => 'admin_product_option',
                    ],
                ],
            ],
            'content' => [
                'children' => [
                    'productoption' => [
                        'id' => 'admin_content_productoption',
                        'name' => 'productoption.admin.nav.content.productoption',
                        'children' => [
                            'option' => [
                                'id' => 'admin_content_productoption_option',
                                'name' => 'productoption.admin.nav.content.productoption.option',
                                'url' => 'admin_content_productoption_option',
                            ],
                            'description' => [
                                'id' => 'admin_content_productoption_description',
                                'name' => 'productoption.admin.nav.content.productoption.description',
                                'url' => 'admin_content_productoption_description',
                            ],
                            'css' => [
                                'id' => 'admin_content_productoption_css',
                                'name' => 'productoption.admin.nav.content.productoption.css',
                                'url' => 'admin_content_productoption_css',
                            ]
                        ]
                    ],
                ],
            ],
        ];
    }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/ProductOptionNav.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
* Plugin Name : ProductOption
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\\ProductOption;

use Eccube\\Common\\EccubeNav;

class ProductOptionNav implements EccubeNav
{
    /**
     * @return array
     */
    public static function getNav()
    {
        return [
            'product' => [
                'children' => [
                    'option' => [
                        'id' => 'admin_product_option',
                        'name' => 'productoption.admin.nav.product.option',
                        'url' => 'admin_product_option',
                    ],
                ],
            ],
            'content' => [
                'children' => [
                    'productoption' => [
                        'id' => 'admin_content_productoption',
                        'name' => 'productoption.admin.nav.content.productoption',
                        'children' => [
                            'option' => [
                                'id' => 'admin_content_productoption_option',
                                'name' => 'productoption.admin.nav.content.productoption.option',
                                'url' => 'admin_content_productoption_option',
                            ],
                            'description' => [
                                'id' => 'admin_content_productoption_description',
                                'name' => 'productoption.admin.nav.content.productoption.description',
                                'url' => 'admin_content_productoption_description',
                            ],
                            'css' => [
                                'id' => 'admin_content_productoption_css',
                                'name' => 'productoption.admin.nav.content.productoption.css',
                                'url' => 'admin_content_productoption_css',
                            ]
                        ]
                    ],
                ],
            ],
        ];
    }
}", "ProductOption/ProductOptionNav.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/ProductOptionNav.php");
    }
}
