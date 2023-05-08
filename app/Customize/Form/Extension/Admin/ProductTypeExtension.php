<?php

namespace Customize\Form\Extension\Admin;

use Eccube\Common\EccubeConfig;
use Eccube\Form\Type\Admin\ProductType;
use Customize\Repository\Master\BumonRepository;    // Repository
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\DependencyInjection\ContainerInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    /**
     * @var BumonRepository
     */
    protected $bumonRepository;

    /**
     * @var EccubeConfig
     */
    public function __construct(
        EccubeConfig $eccubeConfig,
        BumonRepository $bumonRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->bumonRepository = $bumonRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
        $options = $builder->get('company_name')->getOptions();

        $options['required'] = true;
        $options['constraints'] = [ new NotBlank() ];
        $options['attr']['placeholder'] = '会社名';

        $builder->add('company_name', TextType::class, $options);
        */

        $arrWariMatomeIsrate = [true => '％', false => '円'];

        $builder
        // 商品略称
        ->add('product_ryaku_name', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Length(['max' => $this->eccubeConfig['eccube_stext_len']]),
            ],
        ])
        ->add('bumon_cd', TextType::class, [
            'label' => '部門コード',
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['hdn_bumon_cd_keta'],
                ]),
            ],
        ])
        ->add('Bumon', EntityType::class, [
            'class' => 'Customize\Entity\Master\Bumon',
            'placeholder' => 'common.select',
            'choice_label' => 'name',
            'choices' => $this->bumonRepository->findAll(),
            'required' => true,
            'constraints' => [
                new Assert\NotBlank(),
            ],
        ])
        ->add('wari_a_flg', CheckboxType::class, [
            'label' => 'ＦＣ割',
            'value' => '1',
            'required' => false,
        ])
        ->add('wari_b_flg', CheckboxType::class, [
            'label' => '社員割',
            'value' => '1',
            'required' => false,
        ])
        ->add('wari_kikan_flg', CheckboxType::class, [
            'label' => '早割',
            'value' => '1',
            'required' => false,
        ])
        ->add('wari_matome_flg', CheckboxType::class, [
            'label' => 'まとめ割',
            'required' => false,
        ])
        ->add('wari_matome_israte', ChoiceType::class, [
            'label' => '％/円',
            'choices' => array_flip($arrWariMatomeIsrate),
            'expanded' => false,
            'multiple' => false,
            'constraints' => [
                new Assert\NotBlank(),
            ],
        ])
        ->add('wari_matome_value1', TextType::class, [
            'label' => 'まとめ割引率',
            'required' => false,
            'constraints' => [
                new Assert\Range(['min' => 0, 'max' => 999]),
                new Assert\Regex([
                    'pattern' => "/[+-]?([0-9]+(\.[0-9]*)?|\.[0-9]+)([eE][+-]?[0-9]+)?/",
                    'message' => 'form_error.numeric_only',
            ]),
            ],
        ])
        ->add('wari_matome_limit1', TextType::class, [
            'label' => 'まとめ割条件',
            'required' => false,
            'constraints' => [
                new Assert\Range(['min' => 0, 'max' => 99999]),
                new Assert\Regex([
                    'pattern' => "/^\d+$/u",
                    'message' => 'form_error.numeric_only',
            ]),
            ],
        ])
        ->add('wari_matome_group', TextType::class, [
            'label' => 'グループ',
            'required' => false,
        ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ProductType::class;
    }
}