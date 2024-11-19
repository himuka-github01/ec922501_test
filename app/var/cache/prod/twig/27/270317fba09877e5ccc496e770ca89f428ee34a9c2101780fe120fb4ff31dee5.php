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

/* Product/option.twig */
class __TwigTemplate_c163e289e19e100e429e93e4d1589e71ab57faac81e85a360c43f68e0584a682 extends \Eccube\Twig\Template
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
        // line 10
        echo "
";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductOptions", [], "any", false, false, false, 11)) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductOptions", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                // line 13
                echo "            ";
                $context["value"] = ("productoption" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13));
                // line 14
                echo "            ";
                // line 15
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15) == twig_constant("Plugin\\ProductOption\\Entity\\Option::RADIO_TYPE"))) {
                    // line 16
                    echo "                <div class=\"ec-radio\" style=\"margin-top: 10px;\">
                    <div>
                        <label for=\"productoption";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["form"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 18), "label", [], "any", false, false, false, 18), "html", null, true);
                    echo "</label>";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["form"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 18), "required", [], "any", false, false, false, 18)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 19
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 19), "description_flg", [], "any", false, false, false, 19) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 20
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                        ";
                    }
                    // line 22
                    echo "                    </div>
                    ";
                    // line 23
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["form"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["value"] ?? null)] ?? null) : null), 'widget');
                    echo "
                </div>
            ";
                    // line 26
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 26), "type", [], "any", false, false, false, 26) == twig_constant("Plugin\\ProductOption\\Entity\\Option::CHECKBOX_TYPE"))) {
                    // line 27
                    echo "                <div class=\"ec-checkbox\" style=\"margin-top: 10px;\">
                    <div>
                        <label for=\"productoption";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["form"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 29), "label", [], "any", false, false, false, 29), "html", null, true);
                    echo "</label>";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 29), "require_min", [], "any", false, false, false, 29) > 0)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 30
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 30), "description_flg", [], "any", false, false, false, 30) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 31
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                        ";
                    }
                    // line 33
                    echo "                    </div>
                    ";
                    // line 34
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["form"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["value"] ?? null)] ?? null) : null), 'widget');
                    echo "
                </div>
            ";
                    // line 37
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 37), "type", [], "any", false, false, false, 37) == twig_constant("Plugin\\ProductOption\\Entity\\Option::SELECT_TYPE"))) {
                    // line 38
                    echo "                <div class=\"ec-select\" style=\"margin-top: 10px;\">
                    <div>
                        ";
                    // line 40
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["form"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["value"] ?? null)] ?? null) : null), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["form"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 40), "required", [], "any", false, false, false, 40)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 41
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 41), "description_flg", [], "any", false, false, false, 41) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 42
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 44
                    echo "                    </div>
                    <div ";
                    // line 45
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["form"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45))) {
                        echo "class=\"has-error\"";
                    }
                    echo ">
                        ";
                    // line 46
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["form"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["value"] ?? null)] ?? null) : null), 'widget');
                    echo "
                    ";
                    // line 47
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["form"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["value"] ?? null)] ?? null) : null), 'errors');
                    echo "
                    </div>
                </div>
            ";
                    // line 51
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 51), "type", [], "any", false, false, false, 51) == twig_constant("Plugin\\ProductOption\\Entity\\Option::NUMBER_TYPE"))) {
                    // line 52
                    echo "                <div class=\"ec-numberInput\">
                    <div>
                    ";
                    // line 54
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["form"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["value"] ?? null)] ?? null) : null), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["form"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 54), "required", [], "any", false, false, false, 54)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 55
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 55), "description_flg", [], "any", false, false, false, 55) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 56
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 56), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 56), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 58
                    echo "                    </div>
                    <div ";
                    // line 59
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["form"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59))) {
                        echo "class=\"has-error\"";
                    }
                    echo ">
                        ";
                    // line 60
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["form"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["value"] ?? null)] ?? null) : null), 'widget');
                    echo "
                    ";
                    // line 61
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["form"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["value"] ?? null)] ?? null) : null), 'errors');
                    echo "
                    </div>
                </div>
            ";
                    // line 65
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 65), "type", [], "any", false, false, false, 65) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DATE_TYPE"))) {
                    // line 66
                    echo "                <div class=\"ec-input\">
                    <div>
                    ";
                    // line 68
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["form"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["value"] ?? null)] ?? null) : null), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["form"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 68), "required", [], "any", false, false, false, 68)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 69
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 69), "description_flg", [], "any", false, false, false, 69) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 70
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 70), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 70), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 72
                    echo "                    </div>
                    <div ";
                    // line 73
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["form"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73))) {
                        echo "class=\"has-error\"";
                    }
                    echo " style=\"position: relative\">
                        ";
                    // line 74
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["form"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["value"] ?? null)] ?? null) : null), 'widget', ["attr" => ["data-target" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["form"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74))]]);
                    echo "
                    ";
                    // line 75
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["form"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["value"] ?? null)] ?? null) : null), 'errors');
                    echo "
                    </div>
                </div>
            ";
                    // line 79
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 79), "type", [], "any", false, false, false, 79) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXT_TYPE"))) {
                    // line 80
                    echo "                <div class=\"ec-input\" style=\"margin-top: 10px;\">
                    <div>
                    ";
                    // line 82
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["form"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["value"] ?? null)] ?? null) : null), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["form"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 82), "required", [], "any", false, false, false, 82)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 83
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 83), "description_flg", [], "any", false, false, false, 83) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 84
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 84), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 84), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 86
                    echo "                    </div>
                    <div ";
                    // line 87
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["form"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 87), "errors", [], "any", false, false, false, 87))) {
                        echo "class=\"has-error\"";
                    }
                    echo ">
                        ";
                    // line 88
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["form"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["value"] ?? null)] ?? null) : null), 'widget');
                    echo "
                    ";
                    // line 89
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["form"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["value"] ?? null)] ?? null) : null), 'errors');
                    echo "
                    </div>
                </div>
            ";
                    // line 93
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 93), "type", [], "any", false, false, false, 93) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXTAREA_TYPE"))) {
                    // line 94
                    echo "                <div class=\"ec-input\"　style=\"margin-top: 10px;\">
                    <div>
                        ";
                    // line 96
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["form"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["value"] ?? null)] ?? null) : null), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["form"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 96), "required", [], "any", false, false, false, 96)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 97
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 97), "description_flg", [], "any", false, false, false, 97) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 98
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 98), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 98), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 100
                    echo "                    </div>
                    <div ";
                    // line 101
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["form"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 101), "errors", [], "any", false, false, false, 101))) {
                        echo "class=\"has-error\"";
                    }
                    echo ">
                        ";
                    // line 102
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["form"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["value"] ?? null)] ?? null) : null), 'widget');
                    echo "
                    ";
                    // line 103
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["form"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[($context["value"] ?? null)] ?? null) : null), 'errors');
                    echo "
                    </div>
                </div>
            ";
                }
                // line 107
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "Product/option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 107,  366 => 103,  362 => 102,  356 => 101,  353 => 100,  341 => 98,  338 => 97,  331 => 96,  327 => 94,  324 => 93,  318 => 89,  314 => 88,  308 => 87,  305 => 86,  293 => 84,  290 => 83,  283 => 82,  279 => 80,  276 => 79,  270 => 75,  266 => 74,  260 => 73,  257 => 72,  245 => 70,  242 => 69,  235 => 68,  231 => 66,  228 => 65,  222 => 61,  218 => 60,  212 => 59,  209 => 58,  197 => 56,  194 => 55,  187 => 54,  183 => 52,  180 => 51,  174 => 47,  170 => 46,  164 => 45,  161 => 44,  149 => 42,  146 => 41,  139 => 40,  135 => 38,  132 => 37,  127 => 34,  124 => 33,  112 => 31,  109 => 30,  99 => 29,  95 => 27,  92 => 26,  87 => 23,  84 => 22,  72 => 20,  69 => 19,  59 => 18,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/option.twig", "/var/www/htdocs/ec922501/app/template/default/Product/option.twig");
    }
}
