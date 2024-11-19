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

/* QueryCustomize/Repository/AdminCustomerCustomizer.php */
class __TwigTemplate_5a7078ac8487b42c8c8806da2e00d89d58ac35d09625701a579ad59beeb97aac extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "QueryCustomize/Repository/AdminCustomerCustomizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "QueryCustomize/Repository/AdminCustomerCustomizer.php"));

        // line 1
        echo "<?php

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

namespace Plugin\\QueryCustomize\\Repository;

use Eccube\\Doctrine\\Query\\WhereClause;
use Eccube\\Doctrine\\Query\\WhereCustomizer;
use Eccube\\Repository\\QueryKey;

class AdminCustomerCustomizer extends WhereCustomizer
{
    /**
     * 1回以上購入している会員を抽出
     *
     * @param array \$params
     * @param \$queryKey
     *
     * @return WhereClause[]
     */
    protected function createStatements(\$params, \$queryKey)
    {
        // travis-ciのテストが通らないため、コメントアウト
        // 試してみるにはコメントアウトを解除してください.
        //return [WhereClause::gte('c.buy_times', ':buy_times', ['buy_times' => 1])];

        return [];
    }

    /**
     * カスタマイズ対象のキーを返します。
     *
     * @return string
     */
    public function getQueryKey()
    {
        return QueryKey::CUSTOMER_SEARCH;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "QueryCustomize/Repository/AdminCustomerCustomizer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

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

namespace Plugin\\QueryCustomize\\Repository;

use Eccube\\Doctrine\\Query\\WhereClause;
use Eccube\\Doctrine\\Query\\WhereCustomizer;
use Eccube\\Repository\\QueryKey;

class AdminCustomerCustomizer extends WhereCustomizer
{
    /**
     * 1回以上購入している会員を抽出
     *
     * @param array \$params
     * @param \$queryKey
     *
     * @return WhereClause[]
     */
    protected function createStatements(\$params, \$queryKey)
    {
        // travis-ciのテストが通らないため、コメントアウト
        // 試してみるにはコメントアウトを解除してください.
        //return [WhereClause::gte('c.buy_times', ':buy_times', ['buy_times' => 1])];

        return [];
    }

    /**
     * カスタマイズ対象のキーを返します。
     *
     * @return string
     */
    public function getQueryKey()
    {
        return QueryKey::CUSTOMER_SEARCH;
    }
}
", "QueryCustomize/Repository/AdminCustomerCustomizer.php", "/var/www/htdocs/ec922501/app/Plugin/QueryCustomize/Repository/AdminCustomerCustomizer.php");
    }
}
