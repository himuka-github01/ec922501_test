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

/* ProductOption/Util/CommonUtil.php */
class __TwigTemplate_0164836718af24514707b15d41435a26ed656f5b75ad8a77b3aee77950c0095a extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Util/CommonUtil.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Util/CommonUtil.php"));

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

namespace Plugin\\ProductOption\\Util;

class CommonUtil
{

    static function compareArray(\$array1, \$array2)
    {
        if(!is_array(\$array1))\$array1 = [];
        if(!is_array(\$array2))\$array2 = [];
        if (empty(\$array1) && empty(\$array2)) {
            return true;
        } elseif(
            (empty(\$array1) && !empty(\$array2))
            || (!empty(\$array1) && empty(\$array2))
        ) {
            return false;
        } elseif(
            (is_array(\$array1) && !is_array(\$array2))
            || (!is_array(\$array1) && is_array(\$array2))
        ) {
            return false;
        }

        if(count(\$array1) !== count(\$array2))return false;

        foreach(\$array1 as \$key => \$value){
            if(!array_key_exists(\$key, \$array2))return false;
        }
        foreach(\$array2 as \$key => \$value){
            if(!array_key_exists(\$key, \$array1))return false;
        }

        foreach(\$array1 as \$key => \$value) {
            if (is_array(\$value)) {
                if (!isset(\$array2[\$key])) {
                    return false;
                } elseif(!is_array(\$array2[\$key])) {
                    return false;
                } elseif (!self::compareArray(\$value, \$array2[\$key])) {
                    return false;
                }
            } elseif(\$array2[\$key] !== \$value) {
                return false;
            }
        }

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Util/CommonUtil.php";
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

namespace Plugin\\ProductOption\\Util;

class CommonUtil
{

    static function compareArray(\$array1, \$array2)
    {
        if(!is_array(\$array1))\$array1 = [];
        if(!is_array(\$array2))\$array2 = [];
        if (empty(\$array1) && empty(\$array2)) {
            return true;
        } elseif(
            (empty(\$array1) && !empty(\$array2))
            || (!empty(\$array1) && empty(\$array2))
        ) {
            return false;
        } elseif(
            (is_array(\$array1) && !is_array(\$array2))
            || (!is_array(\$array1) && is_array(\$array2))
        ) {
            return false;
        }

        if(count(\$array1) !== count(\$array2))return false;

        foreach(\$array1 as \$key => \$value){
            if(!array_key_exists(\$key, \$array2))return false;
        }
        foreach(\$array2 as \$key => \$value){
            if(!array_key_exists(\$key, \$array1))return false;
        }

        foreach(\$array1 as \$key => \$value) {
            if (is_array(\$value)) {
                if (!isset(\$array2[\$key])) {
                    return false;
                } elseif(!is_array(\$array2[\$key])) {
                    return false;
                } elseif (!self::compareArray(\$value, \$array2[\$key])) {
                    return false;
                }
            } elseif(\$array2[\$key] !== \$value) {
                return false;
            }
        }

        return true;
    }
}
", "ProductOption/Util/CommonUtil.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Util/CommonUtil.php");
    }
}
