<?php
/*----------------------------------------
 * OrderTrait
 *----------------------------------------
 * 2023.07.12 add receipt_no by inok
 * 2022.05.05 add uketsuke_tenpo_id by inok
 * 2021.08.01 new by inok
 *----------------------------------------*/

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;
use Eccube\Entity\Order;
use Eccube\Tests\Twig\Extension\FunctionsTest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Order")
 */
trait OrderTrait
{
    /**
     * @ORM\Column(type="integer", nullable=true, options={"unsigned":true})
     */
    private $saiji_cd;

    /**
     * @var \Eccube\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="saiji_id", referencedColumnName="id")
     * })
     */
    private $Saiji;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $tenpo_cd;

    /**
     * @var \Customize\Entity\HdnTenpo
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\HdnTenpo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tenpo_id", referencedColumnName="id")
     * })
     */
    private $Tenpo;

    /**
     * @var \Customize\Entity\HdnTenpo
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\HdnTenpo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uketsuke_tenpo_id", referencedColumnName="id")
     * })
     */
    private $UketsukeTenpo;

    //受付店舗追加 2024/09/10 田中　HdnTenpoを流用してプルダウンリスト作成
    /**
     * @var \Customize\Entity\Tenpos
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\HdnTenpo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uke_tenpo", referencedColumnName="uke_tenpo")
     * })
     */

    /**
     * @ORM\Column(name="uke_tenpo", type="string", length=255, nullable=true)
     */
    private $uke_tenpo;

    //受取方法追加　2024/08/26 田中
    /**
     * @var \Customize\Entity\Recieve
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\Recieve")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="uketori", referencedColumnName="uketori")
     * })
     */

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $uketori;


    //支払い方法が「支払い済み」のみになったため修正　2024/10/11
     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $shiharai;

    //来店時間追加　2024/09/09 田中
    /**
     * @var \Customize\Entity\Visit
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\Visit")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="visit_t", referencedColumnName="visit_t")
     * })
     */

     /**
      * @ORM\Column(type="string", length=255, nullable=true)
      */
    private $visit_t;

    //県情報プルダウン追加　2024/09/13 田中
    /**
     * @var \Customize\Entity\Hpref
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\Hpref")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="h_pref", referencedColumnName="h_pref")
     * })
     */

     /**
      * @ORM\Column(name="h_pref", type="string", length=255, nullable=true)
      */
    private $h_pref;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":false})
     */
    private $wari_a_flg = false;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":false})
     */
    private $wari_b_flg = false;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":false})
     */
    private $wari_c_flg = false;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":false})
     */
    private $wari_kikan_flg = false;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":false})
     */
    private $shain_flg = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $shoukai_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $uketsuke_name;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $receipt_no;
    //配送先追加項目　2024/09/11 田中
    /**
    * @ORM\Column(name="h_name1", type="string", length=20, nullable=true)
    */
    private $h_name1;
    /**
    * @ORM\Column(name="h_name2", type="string", length=20, nullable=true)
    */
    private $h_name2;
    /**
    * @ORM\Column(name="h_kana1", type="string", length=20, nullable=true)
    */
    private $h_kana1;
    /**
    * @ORM\Column(name="h_kana2", type="string", length=20, nullable=true)
    */
    private $h_kana2;
    /**
    * @ORM\Column(name="h_postal_code", type="integer", length=7, nullable=true)
    */
    private $h_postal_code;
    /**
    * @ORM\Column(name="h_addr1", type="string", length=25, nullable=true)
    */
    private $h_addr1;
    /**
    * @ORM\Column(name="h_addr2", type="string", length=25, nullable=true)
    */
    private $h_addr2;
    /**
    * @ORM\Column(name="h_phone_number", type="string", length=14, nullable=true)
    */
    private $h_phone_number;
    //ここまで
    //受取来店日追加　2024/09/19 田中
    /**
     * @ORM\Column(name="ukedate", type="datetime", nullable=true)
     */
    private $ukedate;

    //OrderTableにヤマト配送日時追加　2024/09/20 田中
    /**
     * @ORM\Column(name = "deliverytime", type="datetime", nullable=true)
     */
    private $deliverytime;

    /**
     * @ORM\Column(name = "shipping_delivery_date", type="datetime", nullable=true)
     */
    private $shipping_delivery_date;

    public function getSaijiCd(): ?int
    {
        return $this->saiji_cd;
    }

    public function setSaijiCd(?int $saiji_cd): self
    {
        $this->saiji_cd = $saiji_cd;

        return $this;
    }

    //受取方法追加　2024/08/26 田中
    /**
     * Summary of pref
     */
    public function setPref($pref): self
    {
        $this->pref = $pref;

        return $this;
    }
    /**
     * Get Uketori.
     */
    public function getPref()
    {
        return $this->pref;
    }
    //受取方法ここまで

    //受取方法追加　2024/08/26 田中
    /**
     * Summary of setUketori
     * @param \Customize\Entity\Recieve|null $uketori
     * @return mixed
     */
    public function setUketori(\Customize\Entity\Recieve $uketori): self
    {
        $this->uketori = $uketori;

        return $this;
    }
    /**
     *
     * Get Uketori.
     *
     * @param \Customize\Entity\Recieve|null $uketori
     *
     * @return Order
     */
    public function getUketori()
    {
        return $this->uketori;
    }
    //受取方法ここまで

    //支払い状況追加　2024/09/02 田中
    /**
     * Set Shiharai
     *
     */
    public function setShiharai( $shiharai): self
    {
        $this->shiharai = $shiharai;
        return $this;
    }
    /**
     *
     * Get Shiharai.
     *
     */
    public function getShiharai()
    {
        return $this->shiharai;
    }
    //支払い状況ここまで

    //来店時間追加　2024/09/09 田中
    /**
     * Summary of setVisit
     *
     * @param \Customize\Entity\Visit|null $visit_t
     * @return mixed
     */
    public function setVisit_t(\Customize\Entity\Visit $visit_t): self
    {
        $this->visit_t = $visit_t;
        return $this;
    }
    /**
     *
     * Get Visit.
     *
     * @param \Customize\Entity\Visit $visit_t
     *
     * @return Order
     */
    public function getVisit_t()
    {
        return $this->visit_t;
    }
    //来店時間ここまで

    /**
     * Summary of setVisit
     *
     * @param \Customize\Entity\Visit|null $visit_t
     * @return mixed
     */
    public function setVisitT(\Customize\Entity\Visit $visit_t): self
    {
        $this->visit_t = $visit_t;
        return $this;
    }
    /**
     *
     * Get Visit.
     *
     * @param \Customize\Entity\Visit $visit_t
     *
     * @return Order
     */
    public function getVisitT()
    {
        return $this->visit_t;
    }

    //受付店鋪追加　2024/09/10 田中
    /**
     * Set Tenpos.
     *
     * @param \Customize\Entity\Tenpos|null $uke_tenpo
     * @return $this
     */
    public function setTenpos(\Customize\Entity\Tenpos $uke_tenpo = null)
    {
        $this->uke_tenpo = $uke_tenpo;
        return $this;
    }

    /**
    * Get Tenpos.
    *
    * @return \Customize\Entity\Tenpos|null
    */
    public function getTenpos()
    {
        return $this->uke_tenpo;
    }
    //受付店鋪ここまで

    /**
     * Set UkeTenpo
     *
     * @param \Customize\Entity\Tenpos|null $uke_tenpo
     * @return $this
     */
    public function setUkeTenpo(\Customize\Entity\Tenpos $uke_tenpo = null)
    {
        $this->uke_tenpo = $uke_tenpo;
        return $this;
    }

    /**
     * Get UkeTenpo.
     *
     * @return \Customize\Entity\Tenpos|null
     */
    public function getUkeTenpo()
    {
        return $this->uke_tenpo;
    }

    //配送先住所追加　2024/09/11 修正　2024/09/13 田中
    public function getH_name1()
    {
        return $this->h_name1;
    }
    public function setH_name1(?string $h_name1): self
    {
        $this->h_name1 = $h_name1;
        return $this;
    }
    public function getH_name2()
    {
        return $this->h_name2;
    }
    public function setH_name2(?string $h_name2): self
    {
        $this->h_name2 = $h_name2;
        return $this;
    }
    public function getH_kana1()
    {
        return $this->h_kana1;
    }
    public function setH_kana1(?string $h_kana1): self
    {
        $this->h_kana1 = $h_kana1;
        return $this;
    }
    public function getH_kana2()
    {
        return $this->h_kana2;
    }
    public function setH_kana2(?string $h_kana2): self
    {
        $this->h_kana2 = $h_kana2;
        return $this;
    }
    public function getH_postal_code()
    {
        return $this->h_postal_code;
    }
    public function setH_postal_code(?int $h_postal_code): self
    {
        $this->h_postal_code = $h_postal_code;
        return $this;
    }

    /**
     * Set Hpref
     *
     * @param \Customize\Entity\Hpref|null $h_pref
     * @return mixed
     */
    public function setH_pref(\Customize\Entity\Hpref $h_pref): self
    {
        $this->h_pref = $h_pref;
        return $this;
    }
    /**
     *
     * Get Hpref.
     *
     * @param \Customize\Entity\Hpref $h_pref
     *
     * @return Order
     */
    public function getH_pref()
    {
        return $this->h_pref;
    }

    public function getH_addr1()
    {
        return $this->h_addr1;
    }
    public function setH_addr1(?string $h_addr1): self
    {
        $this->h_addr1 = $h_addr1;
        return $this;
    }
    public function getH_addr2()
    {
        return $this->h_addr2;
    }
    public function setH_addr2(?string $h_addr2): self
    {
        $this->h_addr2 = $h_addr2;
        return $this;
    }
    public function getH_phone_number()
    {
        return $this->h_phone_number;
    }
    public function setH_phone_number(?string $h_phone_number): self
    {
        $this->h_phone_number = $h_phone_number;
        return $this;
    }
    //ここまで

    //受取来店日Getter/Setter 2024/09/19 田中
    /**
     * Set Ukedate.
     *
     * @return Order
     */
    public function setUkedate(\DateTimeInterface $ukedate)
    {
        
        $this->ukedate = $ukedate;
        return $this;
    }

    /**
     * Get Ukedate.
     * 
     */
    public function getUkedate()
    {
        return $this->ukedate;
    }

    //ここまで

    //ヤマト配送日時Gtter・Setter 2024/09/20 田中　2024/09/25 @paramタグ修正
    /**
     * Set DeliveryTime.
     *
     * @param Eccube/Entity/DeliveryTime|null $deliverytime
     *
     * @return Order
     */
    public function setDeliverytime($deliverytime)
    {
        $this->deliverytime = $deliverytime;

        return $this;
    }

    /**
     * Get DeliveryTime.
     *
     * @return Eccube/Entity/DeliveryTime|null
     */
    public function getDeliveryTime()
    {
        return $this->deliverytime;
    }

    /**
     * Set shipping_delivery_date.
     *
     * @param Eccube/Entity/DeliveryTime|null
     *
     * @return Order
     */
    public function setShipping_delivery_date($shipping_delivery_date = null)
    {
        $this->shipping_delivery_date = $shipping_delivery_date;

        return $this;
    }

    /**
     * Get shipping_delivery_date.
     *
     * @return Eccube/Entity/Shipping|null
     */
    public function getShipping_delivery_date()
    {
        return $this->shipping_delivery_date;
    }
    //ヤマト配送日時Gtter・Setterここまで

    //店頭受取日
    //ここまで

    /**
     * Set Saiji.
     *
     * @param \Eccube\Entity\Category|null $saiji
     *
     * @return Order
     */
    public function setSaiji(\Eccube\Entity\Category $saiji = null)
    {
        $this->Saiji = $saiji;

        return $this;
    }
    /**
     * Get Saiji.
     *
     * @return \Eccube\Entity\Category|null
     */
    public function getSaiji()
    {
        return $this->Saiji;
    }

    public function getTenpoCd(): ?string
    {
        return $this->tenpo_cd;
    }

    public function setTenpoCd(?string $tenpo_cd): self
    {
        $this->tenpo_cd = $tenpo_cd;

        return $this;
    }

    /**
     * Set Tenpo.
     *
     * @param \Customize\Entity\HdnTenpo|null $tenpo
     *
     * @return Order
     */
    public function setTenpo(\Customize\Entity\HdnTenpo $tenpo = null)
    {
        $this->Tenpo = $tenpo;

        return $this;
    }

    /**
     * Get Tenpo.
     *
     * @return \Customize\Entity\HdnTenpo|null
     */
    public function getTenpo()
    {
        return $this->Tenpo;
    }

    public function getWariAFlg(): ?bool
    {
        return $this->wari_a_flg;
    }

    public function setWariAFlg(?bool $wari_a_flg): self
    {
        $this->wari_a_flg = $wari_a_flg;

        return $this;
    }

    public function getWariBFlg(): ?bool
    {
        return $this->wari_b_flg;
    }

    public function setWariBFlg(?bool $wari_b_flg): self
    {
        $this->wari_b_flg = $wari_b_flg;

        return $this;
    }

    public function getWariCFlg(): ?bool
    {
        return $this->wari_c_flg;
    }

    public function setWariCFlg(?bool $wari_c_flg): self
    {
        $this->wari_c_flg = $wari_c_flg;

        return $this;
    }

    public function getWariKikanFlg(): ?bool
    {
        return $this->wari_kikan_flg;
    }

    public function setWariKikanFlg(?bool $wari_kikan_flg): self
    {
        $this->wari_kikan_flg = $wari_kikan_flg;

        return $this;
    }

    public function getShainFlg(): ?bool
    {
        return $this->shain_flg;
    }

    public function setShainFlg(?bool $shain_flg): self
    {
        $this->shain_flg = $shain_flg;

        return $this;
    }

    public function getShoukaiName(): ?string
    {
        return $this->shoukai_name;
    }

    public function setShoukaiName(?string $shoukai_name): self
    {
        $this->shoukai_name = $shoukai_name;

        return $this;
    }

    public function getUketsukeName(): ?string
    {
        return $this->uketsuke_name;
    }

    public function setUketsukeName(?string $uketsuke_name): self
    {
        $this->uketsuke_name = $uketsuke_name;

        return $this;
    }

    public function getReceiptNo(): ?string
    {
        return $this->receipt_no;
    }

    public function setReceiptNo(?string $receipt_no): self
    {
        $this->receipt_no = $receipt_no;
        return $this;
    }
    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true, options={"default":0})
     */
    private $wari_a_value = 0;

    public function getWariAValue(): ?string
    {
        return $this->wari_a_value;
    }
    public function setWariAValue(string $wari_a_value): self
    {
        $this->wari_a_value = $wari_a_value;
        return $this;
    }

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true, options={"default":0})
     */
    private $wari_b_value = 0;

    public function getWariBValue(): ?string
    {
        return $this->wari_b_value;
    }
    public function setWariBValue(?string $wari_b_value): self
    {
        $this->wari_b_value = $wari_b_value;
        return $this;
    }

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true, options={"default":0})
     */
    private $wari_kikan_value = 0;

    public function getWariKikanValue(): ?string
    {
        return $this->wari_kikan_value;
    }
    public function setWariKikanValue(?string $wari_kikan_value): self
    {
        $this->wari_kikan_value = $wari_kikan_value;
        return $this;
    }

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $wari_kikan_end_dt;

    public function getWariKikanEndDt(): ?\DateTimeInterface
    {
        return $this->wari_kikan_end_dt;
    }
    public function setWariKikanEndDt(?\DateTimeInterface $wari_kikan_end_dt): self
    {
        $this->wari_kikan_end_dt = $wari_kikan_end_dt;
        return $this;
    }
    /**
     * @return \Eccube\Entity\Shipping
     */
    public function getShipping(): ?\Eccube\Entity\Shipping
    {
        $Shippings = $this->getShippings();
        if ( $Shippings ) {
            return $Shippings[0];
        }
        return null;
    }

    public function getHName1()
    {
        return $this->h_name1;
    }
    public function setHName1(?string $h_name1): self
    {
        $this->h_name1 = $h_name1;
        return $this;
    }
    public function getHName2()
    {
        return $this->h_name2;
    }
    public function setHName2(?string $h_name2): self
    {
        $this->h_name2 = $h_name2;
        return $this;
    }
    public function getHKana1()
    {
        return $this->h_kana1;
    }
    public function setHKana1(?string $h_kana1): self
    {
        $this->h_kana1 = $h_kana1;
        return $this;
    }
    public function getHKana2()
    {
        return $this->h_kana2;
    }
    public function setHKana2(?string $h_kana2): self
    {
        $this->h_kana2 = $h_kana2;
        return $this;
    }
    public function getHPostalCode()
    {
        return $this->h_postal_code;
    }
    public function setHPostalCode(?int $h_postal_code): self
    {
        $this->h_postal_code = $h_postal_code;
        return $this;
    }
    public function setHPref(\Customize\Entity\Hpref $h_pref): self
    {
        $this->h_pref = $h_pref;
        return $this;
    }
    public function getHPref()
    {
        return $this->h_pref;
    }

    public function getHAddr1()
    {
        return $this->h_addr1;
    }
    public function setHAddr1(?string $h_addr1): self
    {
        $this->h_addr1 = $h_addr1;
        return $this;
    }
    public function getHAddr2()
    {
        return $this->h_addr2;
    }
    public function setHAddr2(?string $h_addr2): self
    {
        $this->h_addr2 = $h_addr2;
        return $this;
    }
    public function getHPhoneNumber()
    {
        return $this->h_phone_number;
    }
    public function setHPhoneNumber(?string $h_phone_number): self
    {
        $this->h_phone_number = $h_phone_number;
        return $this;
    }

    /**
     * 同一商品の注文総数を取得
     * @param \Eccube\Entity\OrderItem|null $orderItem
     *
     */
    public function getQuantityByItem(\Eccube\Entity\OrderItem $orderItem = null)
    {
        $quantity = 0;
        foreach ($this->getItems() as $item) {
            if ( $orderItem->getProductClass() === $item->getProductClass() ) {
                $quantity += $item->getQuantity();
            }
        }
        return $quantity;
    }
    /**
     * まとめ割グループの注文総数を取得
     * @param \Eccube\Entity\OrderItem|null $orderItem
     *
     */
    public function getQuantityByGroup(\Eccube\Entity\OrderItem $orderItem = null)
    {
        $quantity = 0;
        foreach ($this->getItems() as $item) {
            $myGroup = $orderItem->getProduct()->getWariMatomeGroup();
            $group = $item->getProduct()->getWariMatomeGroup();
            if ( $myGroup === $group ) {
                $quantity += $item->getQuantity();
            }
        }
        return $quantity;
    }
}
