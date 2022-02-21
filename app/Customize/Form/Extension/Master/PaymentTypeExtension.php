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

//namespace Eccube\Form\Type\Master;
namespace Customize\Form\Extension\Master;

use Eccube\Form\Type\Master\PaymentType; // 元のFormType

use Doctrine\ORM\EntityRepository;
use Eccube\Form\Type\MasterType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractTypeExtension;

class PaymentTypeExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'class' => 'Eccube\Entity\Payment',
            'choice_label' => 'method',
            'placeholder' => '-',
            // fixme 何故かここはDESC
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('m')
                ->where('m.visible = true')
                ->orderBy('m.sort_no', 'DESC');
            },
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return PaymentType::class;
    }
}
