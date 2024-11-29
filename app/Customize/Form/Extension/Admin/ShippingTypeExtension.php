<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

//namespace Eccube\Form\Type\Admin;
namespace Customize\Form\Extension\Admin;

use Eccube\Form\Type\Admin\ShippingType; // 元のFormType

use Symfony\Component\Form\AbstractTypeExtension;   // これが必要

use Eccube\Common\EccubeConfig;
use Eccube\Entity\Shipping;
use Eccube\Form\Type\AddressType;
use Eccube\Form\Type\PostalType;
use Eccube\Util\StringUtil;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ShippingTypeExtension extends AbstractTypeExtension
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * ShippingType constructor.
     *
     * @param EccubeConfig $eccubeConfig
     */
    public function __construct(
        EccubeConfig $eccubeConfig
    ) {
        $this->eccubeConfig = $eccubeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('postal_code')
            ->add('postal_code', PostalType::class, [
                'required' => false,
            ])
            ->remove('address')
            ->add('address', AddressType::class, [
                'required' => false,
                'pref_options' => [
                    'required' => false,
                ],
                'addr01_options' => [
                    'required' => false,
                ],
                'addr02_options' => [
                    'required' => false,
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ShippingType::class;
    }
}
