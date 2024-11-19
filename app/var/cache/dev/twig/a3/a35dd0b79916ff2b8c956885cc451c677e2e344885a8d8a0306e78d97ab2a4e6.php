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

/* ProductOption/Controller/Admin/PdfController.php */
class __TwigTemplate_274525cee3f70c404c60a6c4455089db73a8041e38734e479bbb10fb6c399db9 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Controller/Admin/PdfController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Controller/Admin/PdfController.php"));

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

namespace Plugin\\ProductOption\\Controller\\Admin;

use Eccube\\Controller\\AbstractController;
use Eccube\\Form\\Type\\Admin\\OrderPdfType;
use Eccube\\Repository\\OrderPdfRepository;
use Plugin\\ProductOption\\Service\\ProductOptionOrderPdfService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\UnsupportedMediaTypeHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class PdfController extends AbstractController
{
    protected \$orderPdfRepository;

    public function __construct(
        OrderPdfRepository \$orderPdfRepository
    ) {
        \$this->orderPdfRepository = \$orderPdfRepository;
    }

    /**
     * @Route(\"/%eccube_admin_route%/order/export/pdf/download\", name=\"admin_order_pdf_download\")
     * @Template(\"@admin/Order/order_pdf.twig\")
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function exportPdfDownload(Request \$request, ProductOptionOrderPdfService \$orderPdfService)
    {
        /**
         * @var FormBuilder
         */
        \$builder = \$this->formFactory->createBuilder(OrderPdfType::class);

        /* @var \\Symfony\\Component\\Form\\Form \$form */
        \$form = \$builder->getForm();
        \$form->handleRequest(\$request);

        // Validation
        if (!\$form->isValid()) {
            log_info('The parameter is invalid!');

            return \$this->render('@admin/Order/order_pdf.twig', [
                'form' => \$form->createView(),
            ]);
        }

        \$arrData = \$form->getData();

        // 購入情報からPDFを作成する
        \$status = \$orderPdfService->makePdf(\$arrData);

        // 異常終了した場合の処理
        if (!\$status) {
            \$this->addError('admin.order.export.pdf.download.failure', 'admin');
            log_info('Unable to create pdf files! Process have problems!');

            return \$this->render('@admin/Order/order_pdf.twig', [
                'form' => \$form->createView(),
            ]);
        }

        // ダウンロードする
        \$response = new Response(
            \$orderPdfService->outputPdf(),
            200,
            ['content-type' => 'application/pdf']
        );

        \$downloadKind = \$form->get('download_kind')->getData();

        // レスポンスヘッダーにContent-Dispositionをセットし、ファイル名を指定
        if (\$downloadKind == 1) {
            \$response->headers->set('Content-Disposition', 'attachment; filename=\"'.\$orderPdfService->getPdfFileName().'\"');
        } else {
            \$response->headers->set('Content-Disposition', 'inline; filename=\"'.\$orderPdfService->getPdfFileName().'\"');
        }

        log_info('OrderPdf download success!', ['Order ID' => implode(',', \$request->get('ids', []))]);

        \$isDefault = isset(\$arrData['default']) ? \$arrData['default'] : false;
        if (\$isDefault) {
            // Save input to DB
            \$arrData['admin'] = \$this->getUser();
            \$this->orderPdfRepository->save(\$arrData);
        }

        return \$response;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Controller/Admin/PdfController.php";
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

namespace Plugin\\ProductOption\\Controller\\Admin;

use Eccube\\Controller\\AbstractController;
use Eccube\\Form\\Type\\Admin\\OrderPdfType;
use Eccube\\Repository\\OrderPdfRepository;
use Plugin\\ProductOption\\Service\\ProductOptionOrderPdfService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\UnsupportedMediaTypeHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class PdfController extends AbstractController
{
    protected \$orderPdfRepository;

    public function __construct(
        OrderPdfRepository \$orderPdfRepository
    ) {
        \$this->orderPdfRepository = \$orderPdfRepository;
    }

    /**
     * @Route(\"/%eccube_admin_route%/order/export/pdf/download\", name=\"admin_order_pdf_download\")
     * @Template(\"@admin/Order/order_pdf.twig\")
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function exportPdfDownload(Request \$request, ProductOptionOrderPdfService \$orderPdfService)
    {
        /**
         * @var FormBuilder
         */
        \$builder = \$this->formFactory->createBuilder(OrderPdfType::class);

        /* @var \\Symfony\\Component\\Form\\Form \$form */
        \$form = \$builder->getForm();
        \$form->handleRequest(\$request);

        // Validation
        if (!\$form->isValid()) {
            log_info('The parameter is invalid!');

            return \$this->render('@admin/Order/order_pdf.twig', [
                'form' => \$form->createView(),
            ]);
        }

        \$arrData = \$form->getData();

        // 購入情報からPDFを作成する
        \$status = \$orderPdfService->makePdf(\$arrData);

        // 異常終了した場合の処理
        if (!\$status) {
            \$this->addError('admin.order.export.pdf.download.failure', 'admin');
            log_info('Unable to create pdf files! Process have problems!');

            return \$this->render('@admin/Order/order_pdf.twig', [
                'form' => \$form->createView(),
            ]);
        }

        // ダウンロードする
        \$response = new Response(
            \$orderPdfService->outputPdf(),
            200,
            ['content-type' => 'application/pdf']
        );

        \$downloadKind = \$form->get('download_kind')->getData();

        // レスポンスヘッダーにContent-Dispositionをセットし、ファイル名を指定
        if (\$downloadKind == 1) {
            \$response->headers->set('Content-Disposition', 'attachment; filename=\"'.\$orderPdfService->getPdfFileName().'\"');
        } else {
            \$response->headers->set('Content-Disposition', 'inline; filename=\"'.\$orderPdfService->getPdfFileName().'\"');
        }

        log_info('OrderPdf download success!', ['Order ID' => implode(',', \$request->get('ids', []))]);

        \$isDefault = isset(\$arrData['default']) ? \$arrData['default'] : false;
        if (\$isDefault) {
            // Save input to DB
            \$arrData['admin'] = \$this->getUser();
            \$this->orderPdfRepository->save(\$arrData);
        }

        return \$response;
    }
}
", "ProductOption/Controller/Admin/PdfController.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Controller/Admin/PdfController.php");
    }
}
