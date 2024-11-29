<?php

namespace Customize\Form\Extension\Admin;

use Eccube\Common\EccubeConfig;
use Eccube\Form\Type\Admin\CategoryType; // 元のFormType

use Customize\Entity\HdnTenpo;    // Entity
use Customize\Repository\HdnTenpoRepository;    // Repository
//use Customize\Entity\HdnSaijiTenpo;    // Entity
//use Customize\Repository\HdnSaijiTenpoRepository;    // Repository

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\DependencyInjection\ContainerInterface;

class CategoryTypeExtension extends AbstractTypeExtension
{
    /**
     * @var HdnTenpoRepository
     */
    protected $tenpoRepository;

    /**
     * @var EccubeConfig
     */
    public function __construct(
        EccubeConfig $eccubeConfig,
        HdnTenpoRepository $tenpoRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->tenpoRepository = $tenpoRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $Tenpos = $this->tenpoRepository->getList();
        /*
        $options = $builder->get('company_name')->getOptions();

        $options['required'] = true;
        $options['constraints'] = [ new NotBlank() ];
        $options['attr']['placeholder'] = '会社名';

        $builder->add('company_name', TextType::class, $options);
        */

        $builder
        ->add('Tenpo', ChoiceType::class, [
            'choice_label' => 'tenpoName',
            'choices' => $Tenpos,
            'choice_value' => function (HdnTenpo $Tenpo = null) {
                return $Tenpo ? $Tenpo->getId() : null ;
            },
            'mapped' => false,
            'expanded' => true,
            'multiple' => true,
            'placeholder' => false,
            'required' => false,
        ]);
}

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return CategoryType::class;
    }
}