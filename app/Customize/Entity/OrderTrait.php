<?php
/*----------------------------------------
 * OrderTrait
 *----------------------------------------
 * 2022.05.05 add uketsuke_tenpo_id by inok
 * 2021.08.01 new by inok
 *----------------------------------------*/

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;
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

    public function getSaijiCd(): ?int
    {
        return $this->saiji_cd;
    }

    public function setSaijiCd(?int $saiji_cd): self
    {
        $this->saiji_cd = $saiji_cd;

        return $this;
    }

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

    /**
     * Set UketsukeTenpo.
     *
     * @param \Customize\Entity\HdnTenpo|null $uketsukeTenpo
     *
     * @return Order
     */
    public function setUketsukeTenpo(\Customize\Entity\HdnTenpo $uketsukeTenpo = null)
    {
        $this->UketsukeTenpo = $uketsukeTenpo;

        return $this;
    }
    /**
     * Get UketsukeTenpo.
     *
     * @return \Customize\Entity\HdnTenpo|null
     */
    public function getUketsukeTenpo()
    {
        return $this->UketsukeTenpo;
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
