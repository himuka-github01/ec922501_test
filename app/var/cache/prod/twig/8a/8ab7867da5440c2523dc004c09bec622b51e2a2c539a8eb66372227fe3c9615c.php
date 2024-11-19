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

/* Block/select_saiji.twig */
class __TwigTemplate_4f4b85f5e7fee53af86b773a52fe1e3c1f5cecf895f3c2ef53b6c0c260bc0b8a extends \Eccube\Twig\Template
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
        console.log('onload select_saiji')
        const select_url = document.querySelector('.selectform_saiji').action
        const select_saiji = document.getElementById('saiji_id')
        select_saiji.addEventListener('change', event => {
            console.log('onchange select_saiji')
            if (select_saiji.value=='') {
                alert('イベントを選択して下さい');
                return;
            }
            if (!window.confirm('イベントを変更しますか？')) {
                return;
            }
            const select_path = select_url + '/' + select_saiji.value
            fetch(select_path, {
                method: 'post',
                headers: {
                    'x-csrf-token': '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("x-csrf-token"), "html", null, true);
        echo "'
                }
            })
            .then((res) => {
                if (res.ok) {
                    if ( confirm('イベントを変更しました。商品を入れ替えますか？') ) {
                        location.reload();
                    }
                } else {
                    alert('イベントの変更に失敗しました')
                }
            })
        })
    })
</script>

<style>
    .select-saiji select {
        width: 120px;
    }
</style>

<div class=\"ec-headerSearch\">
    <form method=\"get\" class=\"selectform_saiji\" action=\"";
        // line 54
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("block_select_saiji");
        echo "\">
        <div class=\"\">
            <div class=\"ec-select ec-select_search select-saiji\">
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "saiji_id", [], "any", false, false, false, 57), 'widget', ["id" => "saiji_id", "attr" => ["class" => "saiji_id"]]);
        echo "
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "Block/select_saiji.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 57,  86 => 54,  60 => 31,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/select_saiji.twig", "/var/www/htdocs/ec922501/app/template/default/Block/select_saiji.twig");
    }
}
