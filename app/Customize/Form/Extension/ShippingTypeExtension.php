<?php

namespace Customize\Form\Extension;

use Eccube\Common\EccubeConfig;
use Eccube\Entity\Category; // カテゴリ（催事）
use Eccube\Form\Type\Shopping\ShippingType;
use Eccube\Entity\Delivery;
use Eccube\Entity\DeliveryTime;
use Eccube\Entity\Shipping;
use Eccube\Repository\DeliveryFeeRepository;
use Eccube\Repository\DeliveryRepository;
use Eccube\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class ShippingTypeExtension extends AbstractTypeExtension
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @param CategoryRepository $categoryRepository
     * @param EccubeConfig $eccubeConfig
     */
    public function __construct(
        CategoryRepository $categoryRepository,
        EccubeConfig $eccubeConfig
    ) {
        $this->categoryRepository = $categoryRepository;
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

        // (HDN) お届け日のプルダウンを生成(上書き)
        // (HDN) 直接addするとShippingTypeへの上書きが出来ない
        // (HDN) addEventListnerにてaddすることで上書きが可能となる
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $Shipping = $event->getData();
                if (is_null($Shipping) || !$Shipping->getId()) {
                    return;
                }

                // (HDN) session
                $session = new Session();
                // (HDN) 対象イベントの取得
                $saiji = $this->categoryRepository->find($session->get('saiji_id'));
                // (HDN) 期間を取得
                if ( !$saiji ) {
                    return false;
                }
                //$startDt = $saiji->getDispStartDt();
                if ( $saiji->getDeliveryStartDt() ) {
                    $startDt = $saiji->getDeliveryStartDt();
                } else {
                    $startDt = new \DateTime();
                    $startDt->modify('+'.$this->eccubeConfig['hdn_delivery_leadtime'].' days');
                }
                // (HDN) イミュータブルにしないとmodify等によってEntity値自体が変化してしまう
                //$endDt = $saiji->getDispEndDt(); 
                //$endDt = \DateTimeImmutable::createFromMutable($saiji->getDispEndDt());
                if ( $saiji->getDeliveryEndDt() ) {
                    //$endDt = $saiji->getDeliveryEndDt();
                    $endDt = \DateTimeImmutable::createFromMutable($saiji->getDeliveryEndDt());
                } else {
                    // ※HDN)イミュータブルにしないとmodify等によって元の値自体が変化してしまう
                    $endDt = \DateTimeImmutable::createFromMutable($startDt);
                    $endDt = $endDt->modify('+'.$this->eccubeConfig['hdn_delivery_kikan'].' days');
                }

                // 配達最大日数期間を設定
                $deliveryDurations = [];

                // 配送日数が設定されている
                // (HDN) 期間に最終日が入るように翌日をセット
                $period = new \DatePeriod(
                    $startDt,
                    new \DateInterval('P1D'),
                    $endDt->modify('+1 days')
                );

                // 曜日設定用
                $dateFormatter = \IntlDateFormatter::create(
                    'ja_JP@calendar=japanese',
                    \IntlDateFormatter::FULL,
                    \IntlDateFormatter::FULL,
                    'Asia/Tokyo',
                    \IntlDateFormatter::TRADITIONAL,
                    'E'
                );
                // (HDN) 配送日を配列に
                foreach ($period as $day) {
                    $deliveryDurations[$day->format('Y/m/d')] = $day->format('Y/m/d').'('.$dateFormatter->format($day).')';
                }

                log_info('[配送日FORM] 催事ID='.$session->get('saiji_id')." 開始=".$startDt->format('Y-m-d')." 終了=".$endDt->format('Y-m-d')." 日数=".count($deliveryDurations),(array)$period);
                log_info('[配送日FORM] 配送日群：',$deliveryDurations);

                // (HDN) ここで上書き
                // (HDN) ☆☆画面を戻った時に指定配送日(時間も)がリセットされている
                $form = $event->getForm();
                $form
                ->add(
                    'shipping_delivery_date',
                    ChoiceType::class,
                    [
                        'choices' => array_flip($deliveryDurations),
                        'required' => true,
                        'placeholder' => 'common.select__unspecified',
                        'mapped' => false,
                        'data' => $Shipping->getShippingDeliveryDate() ? $Shipping->getShippingDeliveryDate()->format('Y/m/d') : null,
                    ]
                );
            }
        );

        // お届け時間のプルダウンを生成
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                /** @var Shipping $Shipping */
                $Shipping = $event->getData();
                if (is_null($Shipping) || !$Shipping->getId()) {
                    return;
                }

                $ShippingDeliveryTime = null;
                $DeliveryTimes = [];
                $Delivery = $Shipping->getDelivery();
                if ($Delivery) {
                    $DeliveryTimes = $Delivery->getDeliveryTimes();
                    $DeliveryTimes = $DeliveryTimes->filter(function (DeliveryTime $DeliveryTime) {
                        return $DeliveryTime->isVisible();
                    });

                    foreach ($DeliveryTimes as $deliveryTime) {
                        if ($deliveryTime->getId() == $Shipping->getTimeId()) {
                            $ShippingDeliveryTime = $deliveryTime;
                            break;
                        }
                    }
                }

                $form = $event->getForm();
                $form->add(
                    'DeliveryTime',
                    EntityType::class,
                    [
                        'label' => 'front.shopping.delivery_time',
                        'class' => 'Eccube\Entity\DeliveryTime',
                        'choice_label' => 'deliveryTime',
                        'choices' => $DeliveryTimes,
                        'required' => true,
                        'placeholder' => 'common.select__unspecified',
                        'mapped' => false,
                        'data' => $ShippingDeliveryTime,
                    ]
                );
            }
        );
        /*
        $builder
        ->add(
            'shipping_delivery_date2',
            ChoiceType::class,
            [
                'choices' => array_flip($deliveryDurations),
                'required' => false,
                'placeholder' => 'common.select__unspecified',
                'mapped' => false,
            ]
        );
        */
        /*
        $builder
        ->add(
            'shipping_delivery_date',
            ChoiceType::class,
            [
                'choices' => array_flip($deliveryDurations),
                'required' => false,
                'placeholder' => 'common.select__unspecified',
                'mapped' => false,
                'data' => $builder->getShippingDeliveryDate() ? $builder->getShippingDeliveryDate()->format('Y/m/d') : null,
            ]
        );
        */
        /*
        ->add('uketsuke_name', TextType::class, [
            'required' => false,
            'constraints' => [
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_stext_len'],
                ]),
            ],
        ])
        */

    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ShippingType::class;
    }
}