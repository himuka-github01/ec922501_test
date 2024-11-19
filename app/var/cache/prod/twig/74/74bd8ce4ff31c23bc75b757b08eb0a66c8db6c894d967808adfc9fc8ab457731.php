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

/* Product/detail.twig */
class __TwigTemplate_59cef11ddecacda75267d40ed1c66ab98ba2ee8f50479be568b7f54e36594f29 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/detail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <style>

        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

    </style>
";
    }

    // line 95
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    <script>
        eccube.classCategories = ";
        // line 97
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson(($context["Product"] ?? null));
        echo ";

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 108)) {
            // line 109
            echo "        fnSetClassCategories(
            \$('#form1'), ";
            // line 110
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "value", [], "any", false, false, false, 110));
            echo "
        );
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 112
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 112)) {
            // line 113
            echo "        eccube.checkStock(\$('#form1'), ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 113), "html", null, true);
            echo ", ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113));
            echo ", null);
        ";
        }
        // line 115
        echo "    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });

            \$('.item_visual').slick({
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        dots: true
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            })
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 145)) {
            // line 146
            echo "                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.product_class_unselected"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                ";
        }
        // line 154
        echo "
                ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 155)) {
            // line 156
            echo "                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.product_class_unselected"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                ";
        }
        // line 164
        echo "
                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.invalid_quantity"), "html", null, true);
        echo "');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                // (HDN) ProductClassのコントロール
                \$('#ProductClass').val(\$('#product_class_id').val());

                event.preventDefault();
                \$form = \$('#form1');
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').html(this);
                    });

                    \$('.ec-modal').show()

                    // カートブロックを更新する
                    \$.ajax({
                        url: \"";
        // line 197
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("block_cart");
        echo "\",
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart_error"), "html", null, true);
        echo "');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });

            \$('.amountDown_icon').on('click', function(e){
                var \$form = \$(this).parents('form');
                var \$quantity = \$form.find('.quantity');
                if (\$quantity.val() > 1) {
                    \$q = parseInt(\$quantity.val())-1;
                    \$quantity.val(\$q);
                }
            });

            \$('.amountUp_icon').on('click', function(e){
                var \$form = \$(this).parents('form');
                var \$quantity = \$form.find('.quantity');
                \$q = parseInt(\$quantity.val())+1;
                \$quantity.val(\$q);
            });
        });

        \$('.ec-modal-wrap').on('click', function(e) {
            // モーダル内の処理は外側にバブリングさせない
            e.stopPropagation();
        });
        \$('.ec-modal-overlay, .ec-modal, .ec-modal-close, .ec-inlineBtn--cancel').on('click', function() {
            \$('.ec-modal').hide()
        });
    </script>

    <style>
        img.amountDown_img {
            width: 30px;
            height: 30px;
            border: 2px solid;
            border-radius: 20px;
            padding: 3px;
        }

        img.amountUp_img {
            width: 30px;
            height: 30px;
            border: 2px solid;
            border-radius: 20px;
            padding: 3px;
        }

        .hiddenItem {
            display: none;
        }
    </style>
";
    }

    // line 260
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 261
        echo "    <div class=\"ec-productRole\">
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole\">

                    <div class=\"item_visual\">
                        ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductImage", [], "any", false, false, false, 267));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 268
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\"></div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 270
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\"/></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "                    </div>
                    <div class=\"item_nav\">
                        ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductImage", [], "any", false, false, false, 274));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 275
            echo "                            <div class=\"slideThumb\" data-index=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 275), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\"></div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                    </div>
                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    ";
        // line 283
        echo "                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">";
        // line 284
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 284), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 287
        echo "                    <ul class=\"ec-productRole__tags\">
                        ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Tags", [], "any", false, false, false, 288));
        foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
            // line 289
            echo "                            <li class=\"ec-productRole__tag tag_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 289), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["Tag"], "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                    </ul>
                    ";
        // line 293
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, false, 293)) {
            // line 294
            echo "<div class=\"ec-productRole__priceRegular\">
                            ";
            // line 295
            if (( !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Min", [], "any", false, false, false, 295)) && (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 295) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMax", [], "any", false, false, false, 295)))) {
                // line 296
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 296)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 297
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                            ";
            } elseif (( !(null === twig_get_attribute($this->env, $this->source,             // line 298
($context["Product"] ?? null), "getPrice01Min", [], "any", false, false, false, 298)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Max", [], "any", false, false, false, 298)))) {
                // line 299
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 299)), "html", null, true);
                echo "～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMax", [], "any", false, false, false, 299)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 300
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                            ";
            }
            // line 302
            echo "                        </div>
                    ";
        } else {
            // line 304
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Max", [], "any", false, false, false, 304))) {
                // line 305
                echo "                            <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 305)), "html", null, true);
                echo "</span>
                            <span class=\"ec-productRole__priceRegularTax\">";
                // line 306
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 308
            echo "                    ";
        }
        // line 309
        echo "                    ";
        // line 310
        echo "                    <div class=\"ec-productRole__price\">
                        ";
        // line 311
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, false, 311)) {
            // line 312
            if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 312) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMax", [], "any", false, false, false, 312))) {
                // line 313
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 314
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02Min", [], "any", false, false, false, 314)), "html", null, true);
                echo "</span>
                                    (
                                    <span class=\"ec-price__tax\">";
                // line 316
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__price price02-default\">";
                // line 317
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Customize\Twig\Extension\TaxExtension']->getPriceIncTaxForDisp(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02Min", [], "any", false, false, false, 317), ($context["Product"] ?? null))), "html", null, true);
                echo "
                                    )
                                </div>
                            ";
            } else {
                // line 321
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 322
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 322)), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMax", [], "any", false, false, false, 322)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 323
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            }
            // line 326
            echo "                        ";
        } else {
            // line 327
            echo "                            <div class=\"ec-price\">
                                <span class=\"ec-price__price price02-default\">";
            // line 328
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02Min", [], "any", false, false, false, 328)), "html", null, true);
            echo "</span>
                                (
                                <span class=\"ec-price__tax\">";
            // line 330
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
            echo "</span>
                                <span class=\"ec-price__price\">";
            // line 331
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Customize\Twig\Extension\TaxExtension']->getPriceIncTaxForDisp(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02Min", [], "any", false, false, false, 331), ($context["Product"] ?? null))), "html", null, true);
            echo "</span>
                                )
                            </div>
                        ";
        }
        // line 335
        echo "                    </div>
                    ";
        // line 337
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, false, 337))) {
            // line 338
            echo "                        <div class=\"ec-productRole__code\">
                            ";
            // line 339
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.code"), "html", null, true);
            echo "： <span class=\"product-code-default\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, false, 339), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, false, 339) != twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_max", [], "any", false, false, false, 339))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_max", [], "any", false, false, false, 339), "html", null, true);
            }
            echo "</span>
                        </div>
                    ";
        }
        // line 342
        echo "                    ";
        // line 343
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 343))) {
            // line 344
            echo "                        <div class=\"ec-productRole__category hiddenItem\">
                            <div>";
            // line 345
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.related_category"), "html", null, true);
            echo "</div>
                            ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 346));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 347
                echo "                                <ul>
                                    <li>
                                        ";
                // line 349
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 349), "path", [], "any", false, false, false, 349));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                    // line 350
                    echo "                                            <a href=\"";
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 350), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 350), "html", null, true);
                    echo "</a>";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 350) == false)) {
                        // line 351
                        echo "                                            <span>＞</span>";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 353
                echo "                                    </li>
                                </ul>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            echo "                        </div>
                    ";
        }
        // line 358
        echo "                    <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 358)]), "html", null, true);
        echo "\" method=\"post\" id=\"form1\" name=\"form1\">
                        ";
        // line 359
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "stock_find", [], "any", false, false, false, 359)) {
            // line 360
            echo "                            <div class=\"ec-productRole__actions\">
                                ";
            // line 361
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 361)) {
                // line 362
                echo "                                    <div class=\"ec-select hiddenItem\">
                                        ";
                // line 363
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 363), 'widget');
                echo "
                                        ";
                // line 364
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 364), 'errors');
                echo "
                                    </div>
                                    ";
                // line 366
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 366)) {
                    // line 367
                    echo "                                    <div class=\"ec-select hiddenItem\">
                                        ";
                    // line 368
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 368), 'widget');
                    echo "
                                        ";
                    // line 369
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 369), 'errors');
                    echo "
                                    </div>
                                    ";
                }
                // line 372
                echo "                                ";
            }
            // line 373
            echo "                                <div class=\"ec-numberInput\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.quantity"), "html", null, true);
            echo "</span>
                                    <span class=\"ec-cartRow__amountDownButton__icon amountDown_icon\"><img src=\"";
            // line 374
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus-dark.svg"), "html", null, true);
            echo "\" class=\"amountDown_img\" alt=\"reduce\"></span>
                                        ";
            // line 375
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 375), 'widget', ["attr" => ["class" => "quantity"]]);
            echo "
                                        ";
            // line 376
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 376), 'errors');
            echo "
                                    <span class=\"ec-cartRow__amountUpButton__icon amountUp_icon\"><img src=\"";
            // line 377
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/plus-dark.svg"), "html", null, true);
            echo "\" class=\"amountUp_img\" alt=\"increase\"></span>
                                </div>
                            </div>
                            <div class=\"ec-productRole__btn\">
                                <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                    ";
            // line 382
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart"), "html", null, true);
            echo "
                                </button>
                            </div>
                        ";
        } else {
            // line 386
            echo "                            <div class=\"ec-productRole__btn\">
                                <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                    ";
            // line 388
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.out_of_stock"), "html", null, true);
            echo "
                                </button>
                            </div>
                        ";
        }
        // line 392
        echo "
                        ";
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                    </form>
                    <div class=\"ec-modal\">
                        <div class=\"ec-modal-overlay\">
                            <div class=\"ec-modal-wrap\">
                                <span class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
        echo "\" alt=\"\"/></span></span>
                                <div id=\"ec-modal-header\" class=\"text-center\">";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart_complete"), "html", null, true);
        echo "</div>
                                <div class=\"ec-modal-box\">
                                    <div class=\"ec-role\">
                                        <span class=\"ec-inlineBtn--cancel\">";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.continue"), "html", null, true);
        echo "</span>
                                        <a href=\"";
        // line 403
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\" class=\"ec-inlineBtn--action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.go_to_cart"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 409
        if (((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "wari_matome_flg", [], "any", false, false, false, 409) == true) && (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "wari_matome_value1", [], "any", false, false, false, 409) != 0))) {
            // line 410
            echo "                    <div>
                        まとめ割&nbsp;
                        ";
            // line 412
            if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "wari_matome_israte", [], "any", false, false, false, 412) == true)) {
                // line 413
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "wari_matome_limit1", [], "any", false, false, false, 413), "html", null, true);
                echo "点";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "wari_matome_value1", [], "any", false, false, false, 413), "html", null, true);
                echo "%引き
                        ";
            } else {
                // line 415
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "wari_matome_limit1", [], "any", false, false, false, 415), "html", null, true);
                echo "点";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "wari_matome_value1", [], "any", false, false, false, 415), "html", null, true);
                echo "円引き
                        ";
            }
            // line 417
            echo "                    </div>
                    ";
        }
        // line 419
        echo "                    <div>
                        在庫数&nbsp;
                        ";
        // line 421
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getTenpoStock", [], "any", false, false, false, 421), "html", null, true);
        echo "
                    </div>
                    ";
        // line 423
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [], "any", false, false, false, 423)) {
            // line 424
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_add_favorite", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 424)]), "html", null, true);
            echo "\" method=\"post\">
                            <div class=\"ec-productRole__btn hiddenItem\">
                                ";
            // line 426
            if ((($context["is_favorite"] ?? null) == false)) {
                // line 427
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
                                        ";
                // line 428
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_favorite"), "html", null, true);
                echo "
                                    </button>
                                ";
            } else {
                // line 431
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\"
                                            disabled=\"disabled\">";
                // line 432
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_favorite_alrady"), "html", null, true);
                echo "
                                    </button>
                                ";
            }
            // line 435
            echo "                            </div>
                        </form>
                    ";
        }
        // line 438
        echo "                    <div class=\"ec-productRole__description\">";
        echo nl2br(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, false, 438));
        echo "
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 443
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "freearea", [], "any", false, false, false, 443)) {
            // line 444
            echo "             <div class=\"ec-productRole__description\">
                 ";
            // line 445
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "freearea", [], "any", false, false, false, 445)));
            echo "
            </div>
        ";
        }
        // line 448
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "Product/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  886 => 448,  880 => 445,  877 => 444,  875 => 443,  866 => 438,  861 => 435,  855 => 432,  852 => 431,  846 => 428,  843 => 427,  841 => 426,  835 => 424,  833 => 423,  828 => 421,  824 => 419,  820 => 417,  812 => 415,  804 => 413,  802 => 412,  798 => 410,  796 => 409,  785 => 403,  781 => 402,  775 => 399,  771 => 398,  763 => 393,  760 => 392,  753 => 388,  749 => 386,  742 => 382,  734 => 377,  730 => 376,  726 => 375,  722 => 374,  717 => 373,  714 => 372,  708 => 369,  704 => 368,  701 => 367,  699 => 366,  694 => 364,  690 => 363,  687 => 362,  685 => 361,  682 => 360,  680 => 359,  675 => 358,  671 => 356,  663 => 353,  648 => 351,  639 => 350,  622 => 349,  618 => 347,  614 => 346,  610 => 345,  607 => 344,  604 => 343,  602 => 342,  590 => 339,  587 => 338,  584 => 337,  581 => 335,  574 => 331,  570 => 330,  565 => 328,  562 => 327,  559 => 326,  553 => 323,  547 => 322,  544 => 321,  537 => 317,  533 => 316,  528 => 314,  525 => 313,  523 => 312,  521 => 311,  518 => 310,  516 => 309,  513 => 308,  508 => 306,  501 => 305,  498 => 304,  494 => 302,  489 => 300,  480 => 299,  478 => 298,  474 => 297,  467 => 296,  465 => 295,  462 => 294,  459 => 293,  456 => 291,  445 => 289,  441 => 288,  438 => 287,  433 => 284,  430 => 283,  423 => 277,  404 => 275,  387 => 274,  383 => 272,  374 => 270,  366 => 268,  361 => 267,  353 => 261,  349 => 260,  290 => 204,  280 => 197,  247 => 167,  242 => 164,  233 => 158,  229 => 156,  227 => 155,  224 => 154,  215 => 148,  211 => 146,  209 => 145,  177 => 115,  169 => 113,  167 => 112,  162 => 110,  159 => 109,  157 => 108,  143 => 97,  140 => 96,  136 => 95,  55 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/detail.twig", "/var/www/htdocs/ec922501/app/template/default/Product/detail.twig");
    }
}
