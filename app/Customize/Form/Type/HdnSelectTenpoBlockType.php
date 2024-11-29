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

//namespace Eccube\Form\Type;
namespace Customize\Form\Type;

//use Eccube\Repository\CategoryRepository;
use Customize\Repository\HdnTenpoRepository;    // Repository

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HdnSelectTenpoBlockType extends AbstractType
{
    /**
     * @var HdnTenpoRepository
     */
    protected $hdnTenpoRepository;

    public function __construct(HdnTenpoRepository $hdnTenpoRepository)
    {
        $this->hdnTenpoRepository = $hdnTenpoRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $Tenpos = $this->hdnTenpoRepository
            ->getList(null);

        $builder->add('tenpo_id', EntityType::class, [
            'class' => 'Customize\Entity\HdnTenpo',
            'choice_label' => 'tenpo_name',
            'choices' => $Tenpos,
            'placeholder' => 'common.select',
            'required' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    /*
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false,
            'allow_extra_fields' => true,
        ]);
    }
    */

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'select_tenpo_block';
    }
}
