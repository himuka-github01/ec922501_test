<?php

namespace Customize\Form\Extension;

use Eccube\Common\EccubeConfig;
use Eccube\Form\Type\Front\NonMemberType;
use Eccube\Form\Type\AddressType;
use Eccube\Form\Type\KanaType;
use Eccube\Form\Type\NameType;
use Eccube\Form\Type\RepeatedEmailType;
use Eccube\Form\Type\PhoneNumberType;
use Eccube\Form\Type\PostalType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\DependencyInjection\ContainerInterface;

class NonMemberTypeExtension extends AbstractTypeExtension
{
    /**
     * @var EccubeConfig
     */
    public function __construct(EccubeConfig $eccubeConfig)
    {
        $this->eccubeConfig = $eccubeConfig;
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

        $builder
        ->add('name', NameType::class, [
            'required' => false,
        ])
        ->add('kana', KanaType::class, [
            'required' => true,
        ])
        ->add('company_name', TextType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])
        ->add('postal_code', PostalType::class, [
            'required' => false,
        ])
        ->add('address', AddressType::class, [
            'required' => false,
        ])
        ->add('phone_number', PhoneNumberType::class, [
            'required' => true,
        ])
        /*
        ->add('email', TextType::class, [
            'required' => false,
        ])
        */
        ->add('shoukai_name', TextType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])
        ->add('uketsuke_name', TextType::class, [
            'required' => true,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])
        ->add('shain_flg', CheckboxType::class, [
            'required' => false,
        ]);
}

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return NonMemberType::class;
    }
}