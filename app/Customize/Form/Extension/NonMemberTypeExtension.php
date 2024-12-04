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
use Customize\Entity\Recieve;//受け取り方法追加　2024/08/23 田中
use Customize\Entity\Visit;
use Customize\Repository\RecieveRepository;//受け取り方法追加　2024/08/23 田中
//use Customize\Repository\ShiharaiRepository;//支払い状況追加　2024/09/02 田中 支払い方法が「支払い済み」だけになった　2024/10/11
use Customize\Repository\HdnTenpoRepository;//受取店鋪追加　2024/09/03 田中
use Customize\Repository\VisitRepository;//来店時間追加　2024/09/09 田中
use Customize\Repository\TenposRepository;//受取店鋪追加　2024/09/10 田中
use Customize\Repository\HprefRepository;//県情報取得追加　2024/09/13 田中
use Doctrine\ORM\Mapping\Entity;
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
     * @var RecieveRepository
     */
    protected $recieveRepository;

    /**
     * @var HdnTenpoRepository
     */
    protected $hdnTenpoRepository;

    //来店時間のプルダウンリスト作成　2024/09/09
    /**
     * @var VisitRepository
     */
    protected $visitRepository;

    //受付店鋪のプルダウンリスト作成　2024/09/10 田中
    /**
     * @var  TenposRepository
     */
    protected $tenposRepository;
    //県情報プルダウン作成　2024/09/13
    /**
     * @var HprefRepository
     */
    protected $hprefRepository;

    /**
     * @var EccubeConfig
     */

    public function __construct(
        RecieveRepository $recieveRepository,
        CategoryRepository $categoryRepository,
        DeliveryRepository $deliveryRepository,
        //店鋪一覧取得　2024/09/06 田中
        HdnTenpoRepository $hdnTenpoRepository,
        //来店時間プルダウン　2024/09/09 田中
        VisitRepository $visitRepository,
        //受付店鋪プルダウン　2024/09/10 田中
        TenposRepository $tenposRepository,
        //県情報プルダウン　2024/09/13 田中
        HprefRepository $hprefRepository,
        EccubeConfig $eccubeConfig
        
    ) {
        $this->recieveRepository = $recieveRepository;
        $this->categoryRepository = $categoryRepository;
        $this->deliveryRepository = $deliveryRepository;
        $this->hdnTenpoRepository = $hdnTenpoRepository;
        $this->visitRepository = $visitRepository;
        $this->tenposRepository = $tenposRepository;
        $this->hprefRepository = $hprefRepository;
        $this->eccubeConfig = $eccubeConfig;
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
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

        //受渡日の作成　2024/09/19 田中　修正2024/09/21 元のDeliveryを流用して別配列に
        $Ukedates = [];
        $Ukedate = new \DatePeriod(
            $startDt,
            new \DateInterval('P1D'),
            $endDt->modify('+1 days')
        );
        $dateFormatter = \IntlDateFormatter::create(
              'ja_JP',
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::FULL,
            'Asia/Tokyo',
            \IntlDateFormatter::GREGORIAN,
            'E'
        );
        //オブジェクトから配列へ変換　2024/09/21 田中
        //2024/09/24 UkeDateArrayをUkeDateへ変更
        foreach ($Ukedate as $day) {
            $Ukedates[$day->format('Y/m/d')] = $day->format('Y/m/d').'('.$dateFormatter->format($day).')';
         }
         
         //datetimeへの変換　2024/09/24 田中
         //$DateTimez =[];
         //ここでDateTimeオブジェクトを生成しているが、失敗しているためfalseが返ってくる　2024/09/25 田中
         /*foreach($UkeDateArray as $formattedDate){
            //
            $DateTimez[] = \DateTime::createFromFormat('Y-m-d', substr($formattedDate, 0, 10));
            }*/
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

        //受け取り方法設定　2024/08/23 田中
        $Recieve = $this->recieveRepository->findAll();
        log_info('[受取方法]：', array($Recieve));

        //支払い状況追加　2024/09/02 田中 支払い方法が「支払い済み」だけになったので不要　2024/10/11
        //$Shiharai = $this->shiharaiRepository->findAll();
        //log_info('[支払い状況]：', array($Shiharai));

        //来店時間追加　2024/09/09 田中
        $Visit = $this->visitRepository->findAll();
        log_info('[来店時間]', array($Visit));

        //店鋪一覧取得　2024/09/10 田中
        $Tenpos = $this->tenposRepository->findall();

        //県情報プルダウン　2024/09/13 田中
        $Hpref = $this->hprefRepository->findAll();


        $builder
        ->add('name', NameType::class, [
            'required' => true,
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
            'required' => false,
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
            'required' => false,
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
            'required' => false,
            //'data' => '1',
        ])
        //受け取り方法追加　2024/08/23 田中
        ->add('Recieve', EntityType::class, [
            'required' => true,
            'class' => 'Customize\Entity\Recieve',
            'choice_label'=> 'uketori',
            'expanded' => true,
            'multiple' => false,
            'placeholder' => false,
            'choices' => $Recieve,
            //'data' => $this->RecieveRepository->findBy(['id' => [1]]),
        ])
        //支払い状況追加　2024/09/02 田中
        // ->add('Shiharai', ChoiceType::class, [
        //     'required'=> false,
        //     //'class' => 'Customize\Entity\Shiharai',
        //     //'choice_label'=> '支払い状況',
        //     'expanded' => true,
        //     'multiple' => false,
        //     'placeholder' => '支払い済み',
        //     'choices' =>  
        //     [
        //         trans('支払い済み') => 1,
        //     ],
        //     'data' => '1',
        // ])
        ->add('Shiharai', ChoiceType::class, [
            'required' => false,
            'expanded' => true,
            'multiple' => false,
            'placeholder' => '支払い済み',
            'data' => '1'
        ])
        //来店時間追加　2024/09/06 田中
        ->add('Visit', ChoiceType::class, [
            'choices' => $Visit,
            'choice_label' => 'visit_t',
            'label' => 'front.shopping.delivery_time',
            'required' => false,
            'expanded' => false,
            'multiple' => false,
            'placeholder' => 'common.select__unspecified',
            'mapped' => false,
        ])
         //受付店鋪追加　2024/09/10 田中
         ->add('Tenpos', ChoiceType::class, [
            'choices' => $Tenpos,
            'choice_label' => 'uke_tenpo',
            'label' => 'front.shopping.tentou_ukestuke',
            'required' => true,
            'expanded' => false,
            'multiple' => false,
            'placeholder' => 'common.select__unspecified',
            'mapped' => false,
        ])
        //配送先住所追加　2024/09/11 修正　2024/09/13 田中
        ->add('h_name1', TextType::class, [
            'required' => false,
        ])
        ->add('h_name2', TextType::class, [
            'required' => false,
        ])
        ->add('h_kana1', TextType::class, [
            'required' => false,
        ])
        ->add('h_kana2', TextType::class, [
            'required' => false,
        ])
        ->add('h_postal_code', PostalType::class, [
            'required' => false,
        ])
        ->add('h_addr1', TextType::class, [
            'required' => false,
        ])
        ->add('h_addr2', TextType::class, [
            'required' => false,
        ])
        ->add('h_phone_number', TextType::class, [
            'required' => false,
        ])
        //受付店鋪追加　2024/09/10 田中
        ->add('Hpref', ChoiceType::class, [
            'choices' => $Hpref,
            'choice_label' => 'h_pref',
            //'label' => '',
            'required' => false,
            'expanded' => false,
            'multiple' => false,
            'placeholder' => '都道府県を選択',
            'mapped' => false,
        ])
        //店頭受取来店時間　2024/09/19 田中　＊元の曜日配列を流用
        ->add('Ukedate', ChoiceType::class, [
            'choices' => Array_flip($Ukedates), 
            'placeholder' => '日付を選択してください。',
            'mapped' => false,
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