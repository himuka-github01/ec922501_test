<?php
/*----------------------------------------
 * NonMemberTypeExtension
 *----------------------------------------
 * 2022.05.09 add shipping, payment, message by inok
 * 2021.08.01 new by inok
 *----------------------------------------*/

namespace Customize\Form\Extension;

use Eccube\Common\EccubeConfig;
use Eccube\Entity\Delivery;
use Eccube\Entity\DeliveryTime;
use Eccube\Form\Type\Front\NonMemberType;
use Eccube\Form\Type\AddressType;
use Eccube\Form\Type\KanaType;
use Eccube\Form\Type\NameType;
use Eccube\Form\Type\RepeatedEmailType;
use Eccube\Form\Type\PhoneNumberType;
use Eccube\Form\Type\PostalType;
use Eccube\Repository\CategoryRepository;
use Eccube\Repository\DeliveryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class NonMemberTypeExtension extends AbstractTypeExtension
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var DeliveryRepository
     */
    protected $deliveryRepository;

    /**
     * @var EccubeConfig
     */
    public function __construct(
        CategoryRepository $categoryRepository,
        DeliveryRepository $deliveryRepository,
        EccubeConfig $eccubeConfig
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->deliveryRepository = $deliveryRepository;
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

        // (HDN) 受渡日配列を作成
        /*
        $Shipping = $event->getData();
        if (is_null($Shipping) || !$Shipping->getId()) {
            return;
        }
        */
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
        //$endDt = $saiji->getDispEndDt(); 
        if ( $saiji->getDeliveryEndDt() ) {
            $endDt = $saiji->getDeliveryEndDt();
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

        // (HDN) 受渡時刻配列を生成
        $ShippingDeliveryTime = null;
        $DeliveryTimes = [];

        //$Delivery = $Shipping->getDelivery();
        // Repositoryを用いて特定の$Deliveryを取得（delivery_idは設定値とする）
        $Delivery = $this->deliveryRepository->find($this->eccubeConfig['hdn_tenpo_delivery_id']);

        if ($Delivery) {
            $DeliveryTimes = $Delivery->getDeliveryTimes();
            $DeliveryTimes = $DeliveryTimes->filter(function (DeliveryTime $DeliveryTime) {
                return $DeliveryTime->isVisible();
            });

            /*
            foreach ($DeliveryTimes as $deliveryTime) {
                if ($deliveryTime->getId() == $Shipping->getTimeId()) {
                    $ShippingDeliveryTime = $deliveryTime;
                    break;
                }
            }
            */
        }
        // (HDN) 支払方法配列を生成
        $Payments = [];
        $PaymentOptions = $Delivery->getPaymentOptions();
        foreach ($PaymentOptions as $PaymentOption) {
            /** @var Payment $Payment */
            $Payment = $PaymentOption->getPayment();
            if ($Payment->isVisible()) {
                $Payments[] = $Payment;
            }
        }


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
        ])
        // (HDN) 2022.05.09 追加
        ->add('message', TextareaType::class, [
            'required' => false,
            'constraints' => [
                new Length(['min' => 0, 'max' => 3000]),
            ],
        ])
        // (HDN) 2022.05.09 追加
        ->add('shipping_delivery_date', ChoiceType::class, [
            'choices' => array_flip($deliveryDurations),
            'required' => true,
            'placeholder' => 'common.select__unspecified',
            'mapped' => false,
            //'data' => $Shipping->getShippingDeliveryDate() ? $Shipping->getShippingDeliveryDate()->format('Y/m/d') : null,
        ])
        // (HDN) 2022.05.09 追加
        ->add('DeliveryTime', EntityType::class, [
            'label' => 'front.shopping.delivery_time',
            'class' => 'Eccube\Entity\DeliveryTime',
            'choice_label' => 'deliveryTime',
            'choices' => $DeliveryTimes,
            //'required' => true,
            'required' => $this->eccubeConfig['hdn_delivery_time_required'],
            'placeholder' => 'common.select__unspecified',
            'mapped' => false,
            //'data' => $ShippingDeliveryTime,
        ])
        // (HDN) 2022.05.09 追加
        ->add('Payment', EntityType::class, [
            'class' => 'Eccube\Entity\Payment',
            'choice_label' => 'method',
            'expanded' => true,
            'multiple' => false,
            'placeholder' => false,
            'choices' => $Payments,
            //'data' => $data,
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