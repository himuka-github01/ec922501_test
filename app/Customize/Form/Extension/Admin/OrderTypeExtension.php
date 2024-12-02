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

use Customize\Repository\VisitRepository;
use Eccube\Form\Type\Admin\OrderType; // 元のFormType

use Eccube\Form\Type\PhoneNumberType;
use Symfony\Component\Form\AbstractTypeExtension;   // これが必要

use Doctrine\Common\Collections\ArrayCollection;
use Eccube\Common\EccubeConfig;
use Eccube\Form\DataTransformer;
use Eccube\Form\Type\AddressType;
use Eccube\Form\Type\PostalType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType; //2024/11/15 田中
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class OrderTypeExtension extends AbstractTypeExtension
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    protected $visitRepository;

    protected $hprefRepository;
    /**
     * OrderType constructor.
     *
     * @param EccubeConfig $eccubeConfig
     */
    public function __construct(
        EccubeConfig $eccubeConfig,
        VisitRepository $visitRepository,
        HPrefRepository $hprefRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        // $Ukedate = $form['ukedate'];
        $this->visitRepository = $visitRepository;
        $this->hprefRepository = $hprefRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // $order =

        $Visit = $this->visitRepository->findAll();
//        $list = [];
//        foreach($Visit as $item) {
//            $list[$item->getId()] = $item->getVisitT();
//        }

        $Hpref = $this->hprefRepository->findAll();

        $builder
            ->remove('postal_code')
            ->add('postal_code', PostalType::class, [
                'required' => false,
            ])
            ->remove('address')
            ->add('address', AddressType::class, [
                'required' => false,
                'addr01_options' => [
                    'required' => false,
                ],
                'addr02_options' => [
                    'required' => false,
                ],
            ])
            ->add('uketsuke_name', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ]),
                ],
            ])
            ->add('shoukai_name', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ]),
                ],
            ])
            ->add('receipt_no', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['hdn_receipt_no_len'],
                    ]),
                ],
            ])
            ->add('Ukedate', DateType::class, [
                'widget' => 'single_text',
                // 'format' => 'yyyy-MM-dd',
                'required' => false,
                'by_reference' => true,
//                'mapped' => false,
                // エンティティから取得した日付データを表示
                //'data' => $order->getUkedate() ?? new \DateTime(),
            ])
            ->add('VisitT', ChoiceType::class, [
                'choices' => $Visit,
                'choice_label' => 'visit_t',
                'required' => false,
                'expanded' => false,
                'multiple' => false,
                'placeholder' => 'common.select__unspecified',
                'mapped' => false,
            ])
            ->add('h_name1', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ])
                ],
            ])
            ->add('h_name2', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ])
                ],
            ])
            ->add('h_kana1', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ])
                ],
            ])
            ->add('h_kana2', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ])
                ],
            ])
            ->add('h_postal_code', PostalType::class, [
                'required' => false,
            ])
            ->add('h_pref', ChoiceType::class, [
                'choices' => $Hpref,
                'choice_label' => 'h_pref',
                'required' => false,
                'expanded' => false,
                'multiple' => false,
                'placeholder' => '都道府県を選択',
            ])
            ->add('h_aaddress', AddressType::class, [
                'required' => false,
                'h_addr1_options' => [
                    'required' => false,
                ],
                'h_addr2_options' => [
                    'required' => false,
                ],
            ])
            ->add('h_phone_number', PhoneNumberType::class, [
                'required' => false,
            ])
             //受け取り方法追加　2024/08/23 田中
            /*->add('uketori', TextType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])*/
       /* //支払い状況追加　2024/09/02 田中
        ->add('shiharai_s', TextType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])*/
        //来店時間追加　2024/09/06 田中
        /*->add('visit_t', TextType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])*/
         //受付店鋪追加　2024/09/10 田中
         /*->add('uke_tenpo', TextType::class, [
            'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ]),
                ],
            ])*/
        //配送先住所追加　2024/09/11 修正　2024/09/13 田中
        /*->add('h_name1', TextType::class, [
            'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ]),
                ],
            ])
        ->add('h_name2', TextType::class, [
            'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ]),
                ],
            ])
        ->add('h_kana1', TextType::class, [
            'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ]),
                ],
            ])
        ->add('h_kana2', TextType::class, [
            'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ]),
                ],
            ])*/
        /*->add('h_postal_code', TextType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])
        ->add('h_addr1', TextType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])
        ->add('h_addr2', TextType::class, [
            'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ]),
                ],
            ])
            ->add('h_postal_code', PostalType::class, [
                'label' => 'dmin.common.h_postal',
                'required' => false,
            ])
        /*->add('h_phone_number', PhoneNumberType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])*/
        //受付店鋪追加　2024/09/10 田中
        /*->add('h_pref', TextType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])*/;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return OrderType::class;
    }

    public static function getExtendedTypes(): iterable
    {
        yield OrderType::class;
    }
}
