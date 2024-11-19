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
class __TwigTemplate_26f07d120ee593ae4415e1f45c3f3af379e824ff70dec7f342ece81300b5b2c1 extends \Eccube\Twig\Template
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
        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("block_select_tenpo");
        echo "\">
        <div class=\"\">
            <div class=\"ec-select ec-select_search select-tenpo\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tenpo_id", [], "any", false, false, false, 58), 'widget', ["id" => "tenpo_id", "attr" => ["class" => "tenpo_id"]]);
        echo "
            </div>
        </div>
    </form>
</div>
";
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
        return array (  93 => 58,  87 => 55,  61 => 32,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/select_tenpo.twig", "/var/www/htdocs/ec922501/app/template/default/Block/select_tenpo.twig");
    }
}
