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

/* EntityForm/Entity/ProductUrlTrait.php */
class __TwigTemplate_62338078c081bd9d8d16a06a867d58cae678fd5411fc758d9315d4c1ac55adf5 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EntityForm/Entity/ProductUrlTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EntityForm/Entity/ProductUrlTrait.php"));

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

namespace Plugin\\EntityForm\\Entity;

use Eccube\\Annotation\\EntityExtension;
use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * @EntityExtension(\"Eccube\\Entity\\Product\")
 */
trait ProductUrlTrait
{
    /**
     * @ORM\\Column(type=\"string\", nullable=true, options={ \"eccube_form_options\": { \"auto_render\": true, \"form_theme\": \"EntityForm/Form/product_url.twig\" } })
     * @Assert\\Url(message=\"外部の商品ページURLを入力してください。\")
     */
    public \$url;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EntityForm/Entity/ProductUrlTrait.php";
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

namespace Plugin\\EntityForm\\Entity;

use Eccube\\Annotation\\EntityExtension;
use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * @EntityExtension(\"Eccube\\Entity\\Product\")
 */
trait ProductUrlTrait
{
    /**
     * @ORM\\Column(type=\"string\", nullable=true, options={ \"eccube_form_options\": { \"auto_render\": true, \"form_theme\": \"EntityForm/Form/product_url.twig\" } })
     * @Assert\\Url(message=\"外部の商品ページURLを入力してください。\")
     */
    public \$url;
}
", "EntityForm/Entity/ProductUrlTrait.php", "/var/www/htdocs/ec922501/app/Plugin/EntityForm/Entity/ProductUrlTrait.php");
    }
}
