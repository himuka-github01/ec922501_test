<?php

/*----------------------------------------
 * ShippingTrait
 *----------------------------------------
 * 2024/09/19 田中
 * dtb_shipping DB項目に追加 2024/09/19 田中
 * uke_tenpo  varchar(255)
 * h_name1	varchar(20)		
 * h_name2	varchar(20)
 * h_kana1	varchar(20)
 * h_kana2	varchar(20)
 * h_postal_code  varchar(11)
 * h_pref	varchar(255)
 * h_addr1	varchar(25)
 * h_addr2	varchar(25)
 * h_phone_number  varchar(14)
 * 
 *----------------------------------------*/
namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\Shipping;
use Eccube\Annotation as Eccube;//拡張する場合はここは必須
use Eccube\Service\Calculator\OrderItemCollection;
use Eccube\Service\PurchaseFlow\ItemCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Shipping")
 */

trait ShippingTrait 
{
    /**
     * @var \Customize\Entity\Tenpos
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\HdnTenpo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uke_tenpo", referencedColumnName="uke_tenpo")
     * })
     */

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $uke_tenpo;

    /**
     * string
     *
     * @ORM\Column(name="h_name1", type="string", length=255,nullable=true)
     */
    private $h_name1;

    /**
     * @ORM\Column(name="h_name2", type="string", length=255,nullable=true)
     */
    private $h_name2;

    /**
     * @ORM\Column(name="h_kana1", type="string", length=255,nullable=true)
     */
    private $h_kana1;

    /**
     * @ORM\Column(name="h_kana2", type="string", length=255,nullable=true)
     */
    private $h_kana2;

    /**
     * @ORM\Column(name="h_postal_code", type="string", length=7,nullable=true)
     */
    private $h_postal_code;
    
    /**
     * @ORM\Column(name="h_pref", type="string", length=7,nullable=true)
     */
    private $h_pref;
    
    /**
     * @ORM\Column(name="h_addr1", type="string", length=255,nullable=true)
     */
    private $h_addr1;

    /**
     * @ORM\Column(name="h_addr2", type="string", length=255,nullable=true)
     */
    private $h_addr2;

    /**
     * @ORM\Column(name="h_phone_number", type="string", length=14,nullable=true)
     */
    private $h_phone_number;

    /**
     * @ORM\Column(name="ukedate", type="datetimetz",nullable=true)
     */
    private $ukedate;

    /**
     * getter/setter
     */
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

    public function setH_postal_code(?string $h_postal_code): self
    {
        $this->h_postal_code = $h_postal_code;
        return $this;
    }

    public function getH_pref()
    {
        return $this->h_pref;
    }

    public function setH_pref(?string $h_pref): self
    {
        $this->h_pref = $h_pref;
        return $this;
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

    /**
     * @param  \DateTime $ukedate
     * @return $this
     */
    public function setUkeDate($ukedate): self
    {
        $this->ukedate = $ukedate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUkeDate()
    {
        return $this->ukedate;
    }
}