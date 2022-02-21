<?php

namespace Customize\Form\Extension\Admin;

use Eccube\Common\EccubeConfig;
use Eccube\Form\Type\Admin\SearchProductType; // 元のFormType
use Eccube\Form\Type\Master\PaymentType;

use Eccube\Entity\Category;    // Entity
use Customize\Repository\CategoryRepository;    // Repository
use Customize\Repository\HdnTenpoRepository;    // Repository
use Customize\Repository\Master\BumonRepository;    // Repository
use Eccube\Repository\PaymentRepository;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class SearchProductTypeExtension extends AbstractTypeExtension
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var HdnTenpoRepository
     */
    protected $hdnTenpoRepository;

    /**
     * @var BumonRepository
     */
    protected $bumonRepository;

    /**
     * @var PaymentRepository
     */
    protected $paymentRepository;

    /**
     * @var EccubeConfig
     */
    public function __construct(
        EccubeConfig $eccubeConfig,
        CategoryRepository $categoryRepository,
        HdnTenpoRepository $hdnTenpoRepository,
        BumonRepository $bumonRepository,
        PaymentRepository $paymentRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->categoryRepository = $categoryRepository;
        $this->hdnTenpoRepository = $hdnTenpoRepository;
        $this->bumonRepository = $bumonRepository;
        $this->paymentRepository = $paymentRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // 催事リスト
        $Saijis = $this->categoryRepository
            ->getSaijiList();
        // 店舗リスト(店舗ログインの場合は該当店舗のみ)
        $session = new Session();
        $Tenpo = $this->hdnTenpoRepository->findBy(['tenpo_cd' => $session->get('tenpo_cd')]);
        if ( $Tenpo ) {
            $Tenpos = $Tenpo;
            $tenpoPlaceHolder = false;
        } else {
            $Tenpos = $this->hdnTenpoRepository->getList();
            $tenpoPlaceHolder = 'common.select';
        }
        // 部門リスト
        $Bumons = $this->bumonRepository
            ->findAll();
        
        /*
        $options = $builder->get('company_name')->getOptions();

        $options['required'] = true;
        $options['constraints'] = [ new NotBlank() ];
        $options['attr']['placeholder'] = '会社名';

        $builder->add('company_name', TextType::class, $options);
        */

        $builder
        ->add('saiji_id', EntityType::class, [
            'class' => 'Eccube\Entity\Category',
            'choice_label' => 'name',
            'choices' => $Saijis,
            'placeholder' => 'common.select',
            'required' => false,
        ])
        ->add('tenpo_id', EntityType::class, [
            'class' => 'Customize\Entity\HdnTenpo',
            'choice_label' => 'tenpo_name',
            'choices' => $Tenpos,
            'placeholder' => $tenpoPlaceHolder,
            'required' => false,
        ])
        ->add('bumon_id', EntityType::class, [
            'class' => 'Customize\Entity\Master\Bumon',
            'choice_label' => 'name',
            'choices' => $Bumons,
            'placeholder' => 'common.select',
            'required' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return SearchProductType::class;
    }
}