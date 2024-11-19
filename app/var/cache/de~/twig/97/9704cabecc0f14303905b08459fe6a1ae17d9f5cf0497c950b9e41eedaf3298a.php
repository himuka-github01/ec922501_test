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

/* Block/select_tenpo.twig */
class __TwigTemplate_f388c81d7f0c2426348bcdcaa28053c7604b5d66cc90ef32e128d94a54e29b96 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/select_tenpo.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/select_tenpo.twig"));

        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 12
        echo "
<script>
    window.addEventListener('load',event => {
    //window.onload = event => {
        console.log('onload select_tenpo')
        const select_url = document.querySelector('.selectform').action
        const select_tenpo = document.getElementById('tenpo_id')
        select_tenpo.addEventListener('change', event => {
            console.log('onchange select_tenpo')
            if (select_tenpo.value=='') {
                alert('店舗を選択して下さい');
                return;
            }
            if (!window.confirm('受取店舗を変更しますか？')) {
                return;
            }
            const select_path = select_url + '/' + select_tenpo.value
            fetch(select_path, {
                method: 'post',
                headers: {
                    'x-csrf-token': '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("x-csrf-token"), "html", null, true);
        echo "'
                }
            })
            .then((res) => {
                if (res.ok) {
                    if ( confirm('受取店舗を変更しました。商品を入れ替えますか？') ) {
                        location.reload();
                    }
                } else {
                    alert('受取店舗の変更に失敗しました')
                }
            })
        })
    })
</script>

<style>
    .select-tenpo select {
        width: 120px;
    }
</style>

<div class=\"ec-headerSearch\">
    <form method=\"get\" class=\"selectform\" action=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_select_tenpo");
        echo "\">
        <div class=\"\">
            <div class=\"ec-select ec-select_search select-tenpo\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "tenpo_id", [], "any", false, false, false, 58), 'widget', ["id" => "tenpo_id", "attr" => ["class" => "tenpo_id"]]);
        echo "
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/select_tenpo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 58,  93 => 55,  67 => 32,  45 => 12,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% form_theme form 'Form/form_div_layout.twig' %}

<script>
    window.addEventListener('load',event => {
    //window.onload = event => {
        console.log('onload select_tenpo')
        const select_url = document.querySelector('.selectform').action
        const select_tenpo = document.getElementById('tenpo_id')
        select_tenpo.addEventListener('change', event => {
            console.log('onchange select_tenpo')
            if (select_tenpo.value=='') {
                alert('店舗を選択して下さい');
                return;
            }
            if (!window.confirm('受取店舗を変更しますか？')) {
                return;
            }
            const select_path = select_url + '/' + select_tenpo.value
            fetch(select_path, {
                method: 'post',
                headers: {
                    'x-csrf-token': '{{ csrf_token('x-csrf-token') }}'
                }
            })
            .then((res) => {
                if (res.ok) {
                    if ( confirm('受取店舗を変更しました。商品を入れ替えますか？') ) {
                        location.reload();
                    }
                } else {
                    alert('受取店舗の変更に失敗しました')
                }
            })
        })
    })
</script>

<style>
    .select-tenpo select {
        width: 120px;
    }
</style>

<div class=\"ec-headerSearch\">
    <form method=\"get\" class=\"selectform\" action=\"{{ url('block_select_tenpo') }}\">
        <div class=\"\">
            <div class=\"ec-select ec-select_search select-tenpo\">
                {{ form_widget(form.tenpo_id, {'id': 'tenpo_id', 'attr': {'class': 'tenpo_id'}}) }}
            </div>
        </div>
    </form>
</div>
", "Block/select_tenpo.twig", "/var/www/htdocs/ec922501/app/template/default/Block/select_tenpo.twig");
    }
}
