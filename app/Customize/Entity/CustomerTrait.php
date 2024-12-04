<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @Eccube\EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerTrait
{
    private $shain_flg = false;

    private $shoukai_name;

    private $uketsuke_name;

    //Nomember新規項目追加(受取方法)　2024/08/23 田中
    private $uketori;

    //支払い方法追加　2024/09/02 田中　修正　2024/10/11
    private $shiharai;

    //受取時間追加　2024/09/06
    private $visit_t;

    //受付店鋪追加　2024/09/10 田中
    private $uke_tenpo;

    //配送先追加項目　2024/09/11 田中
    private $h_name1;
    private $h_name2;
    private $h_kana1;
    private $h_kana2;
    private $h_postal_code;
    private $h_pref;
    private $h_addr1;
    private $h_addr2;
     /**
    * @var string|null
    *
    * @ORM\Column(name="h_phone_number", type="string", length=14, nullable=true)
    */
    private $h_phone_number;
    //ここまで
    //店頭受取日　2024/09/19 田中
    private $ukedate;

    //ヤマト配送日時　2024/09/20 田中
    //private $deliverytime;

    //private $shipping_delivery_date;

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

    //受け取り方法追加　2024/08/23 田中

    public function getUketori(): ?string
    {
        return $this->uketori;
    }
    public function setUketori(?string $uketori): self
    {
        $this->uketori = $uketori;
        return $this;
    
    }
    //支払い状況追加　2024/09/02 田中
    public function getShiharai()
    {
        return $this->shiharai;
    }
    public function setShiharai($shiharai)
    {
        $this->shiharai = $shiharai;
        return $this;
    }
    //受取時間追加 2024/09/06
    public function getVisit_t(): ?string
    {
        return $this->visit_t;
    }
    public function setVisit_t(?string $visit_t): self
    {
        $this->visit_t = $visit_t;
        return $this;
    }

    //受付店鋪追加　2024/09/10 田中
    public function getUkeTenpo(): ?string
    {
        return $this->uke_tenpo;
    }
    public function setUkeTenpo(?string $uke_tenpo): self
    {
        $this->uke_tenpo = $uke_tenpo;
        return $this;
    }
    //配送先追加項目　2024/09/11 田中
    public function getH_name1(): ?string
    {
        return $this->h_name1;
    }
    public function setH_name1(?string $h_name1): self
    {
        $this->h_name1 = $h_name1;
        return $this;
    }
    public function getH_name2(): ?string
    {
        return $this->h_name2;
    }
    public function setH_name2(?string $h_name2): self
    {
        $this->h_name2 = $h_name2;
        return $this;
    }
    public function getH_kana1(): ?string
    {
        return $this->h_kana1;
    }
    public function setH_kana1(?string $h_kana1): self
    {
        $this->h_kana1 = $h_kana1;
        return $this;
    }
    public function getH_kana2(): ?string
    {
        return $this->h_kana2;
    }
    public function setH_kana2(?string $h_kana2): self
    {
        $this->h_kana2 = $h_kana2;
        return $this;
    }
    public function getH_postal_code(): ?string
    {
        return $this->h_postal_code;
    }
    public function setH_postal_code(?string $h_postal_code): self
    {
        $this->h_postal_code = $h_postal_code;
        return $this;
    }
    public function getH_pref(): ?string
    {
        return $this->h_pref;
    }
    public function setH_pref(?string $h_pref): self
    {
        $this->h_pref = $h_pref;
        return $this;
    }
    public function getH_addr1(): ?string
    {
        return $this->h_addr1;
    }
    public function setH_addr1(?string $h_addr1): self
    {
        $this->h_addr1 = $h_addr1;
        return $this;
    }
    public function getH_addr2(): ?string
    {
        return $this->h_addr2;
    }
    public function setH_addr2(?string $h_addr2): self
    {
        $this->h_addr2 = $h_addr2;
        return $this;
    }
    public function getH_phone_number(): ?string
    {
        return $this->h_phone_number;
    }
    public function setH_phone_number(?string $h_phone_number): self
    {
        $this->h_phone_number = $h_phone_number;
        return $this;
    }
    //ここまで
    
    //店頭受取日　Getter\Setter　2024/09/19 田中
    /**
     * Summary of setUkeDate
     * @return Order
     */
    
     public function setUkedate(?\DateTimeInterface $ukedate): self
     {
         if ($ukedate !== null) {
             $this->ukedate = $ukedate;
         }
         
         return $this;
     }


    public function getUkedate()
    {
        return $this->ukedate;
    }

    //ヤマト配送日時　Setter/Getter　2024/09/20　田中
   /* public function setDeliverytime($deliverytime): self
    {
        if($deliverytime !== null){
        $this->deliverytime = $deliverytime;
        }
        return $this;
    }

    public function getDeliverytimete()
    {
        return $this->deliverytime;
    }
    public function setShipping_Delivery_Date(\DateTimeInterface $shipping_delivery_date): self
    {
        if($shipping_delivery_date !== null){
        $this->shipping_delivery_date = $shipping_delivery_date;
        }
        return $this;
    }

    public function getShipping_Delivery_Date()
    {
        return $this->shipping_delivery_date;
    }*/
}
