<?php
/*----------------------------------------
 * ProductTrait
 *----------------------------------------
 * 2022.05.13 add getTenpoOneDayLimit() by inok
 * 2022.05.05 add product_ryaku_name by inok
 * 2021.08.01 new by inok
 *----------------------------------------*/

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;
use Customize\Entity\Master\Bumon;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Product")
 */
trait ProductTrait
{
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $product_ryaku_name;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_a_flg = true;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_a_israte = true;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true)
     */
    private $wari_a_value;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_b_flg = true;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_b_israte = true;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true)
     */
    private $wari_b_value;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_c_flg = true;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_c_israte = true;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true)
     */
    private $wari_c_value;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_kikan_flg = true;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_kikan_israte = true;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true)
     */
    private $wari_kikan_value;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $wari_kikan_start_dt;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $wari_kikan_end_dt;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_matome_flg = true;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":true})
     */
    private $wari_matome_israte = true;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true, options={"default":0})
     */
    private $wari_matome_value1 = 0;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"unsigned":true,"default":9999})
     */
    private $wari_matome_limit1 = 99999;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true, options={"default":0})
     */
    private $wari_matome_value2 = 0;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"unsigned":true,"default":9999})
     */
    private $wari_matome_limit2 = 99999;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $wari_matome_group;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bumon_cd;

    /**
     * @var \Customize\Entity\Master\Bumon
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\Master\Bumon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bumon_id", referencedColumnName="id")
     * })
     */
    private $Bumon;

    public function getProductRyakuName(): ?string
    {
        return $this->product_ryaku_name;
    }

    public function setProductRyakuName(?string $product_ryaku_name): self
    {
        $this->product_ryaku_name = $product_ryaku_name;

        return $this;
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

    public function getWariAIsrate(): ?bool
    {
        return $this->wari_a_israte;
    }

    public function setWariAIsrate(?bool $wari_a_israte): self
    {
        $this->wari_a_israte = $wari_a_israte;

        return $this;
    }

    public function getWariAValue(): ?string
    {
        return $this->wari_a_value;
    }

    public function setWariAValue(?string $wari_a_value): self
    {
        $this->wari_a_value = $wari_a_value;

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

    public function getWariBIsrate(): ?bool
    {
        return $this->wari_b_israte;
    }

    public function setWariBIsrate(?bool $wari_b_israte): self
    {
        $this->wari_b_israte = $wari_b_israte;

        return $this;
    }

    public function getWariBValue(): ?string
    {
        return $this->wari_b_value;
    }

    public function setWariBValue(?string $wari_b_value): self
    {
        $this->wari_b_value = $wari_b_value;

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

    public function getWariCIsrate(): ?bool
    {
        return $this->wari_c_israte;
    }

    public function setWariCIsrate(?bool $wari_c_israte): self
    {
        $this->wari_c_israte = $wari_c_israte;

        return $this;
    }

    public function getWariCValue(): ?string
    {
        return $this->wari_c_value;
    }

    public function setWariCValue(?string $wari_c_value): self
    {
        $this->wari_c_value = $wari_c_value;

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

    public function getWariKikanIsrate(): ?bool
    {
        return $this->wari_kikan_israte;
    }

    public function setWariKikanIsrate(?bool $wari_kikan_israte): self
    {
        $this->wari_kikan_israte = $wari_kikan_israte;

        return $this;
    }

    public function getWariKikanValue(): ?string
    {
        return $this->wari_kikan_value;
    }

    public function setWariKikanValue(?string $wari_kikan_value): self
    {
        $this->wari_kikan_value = $wari_kikan_value;

        return $this;
    }

    public function getWariKikanStartDt(): ?\DateTimeInterface
    {
        return $this->wari_kikan_start_dt;
    }

    public function setWariKikanStartDt(?\DateTimeInterface $wari_kikan_start_dt): self
    {
        $this->wari_kikan_start_dt = $wari_kikan_start_dt;

        return $this;
    }

    public function getWariKikanEndDt(): ?\DateTimeInterface
    {
        return $this->wari_kikan_end_dt;
    }

    public function setWariKikanEndDt(?\DateTimeInterface $wari_kikan_end_dt): self
    {
        $this->wari_kikan_end_dt = $wari_kikan_end_dt;

        return $this;
    }

    public function getWariMatomeFlg(): ?bool
    {
        return $this->wari_matome_flg;
    }

    public function setWariMatomeFlg(?bool $wari_matome_flg): self
    {
        $this->wari_matome_flg = $wari_matome_flg;

        return $this;
    }

    public function getWariMatomeIsrate(): ?bool
    {
        return $this->wari_matome_israte;
    }

    public function setWariMatomeIsrate(?bool $wari_matome_israte): self
    {
        $this->wari_matome_israte = $wari_matome_israte;

        return $this;
    }

    public function getWariMatomeValue1(): ?string
    {
        return $this->wari_matome_value1;
    }

    public function setWariMatomeValue1(?string $wari_matome_value1): self
    {
        $this->wari_matome_value1 = $wari_matome_value1;

        return $this;
    }

    public function getWariMatomeLimit1(): ?int
    {
        return $this->wari_matome_limit1;
    }

    public function setWariMatomeLimit1(?int $wari_matome_limit1): self
    {
        $this->wari_matome_limit1 = $wari_matome_limit1;

        return $this;
    }

    public function getWariMatomeValue2(): ?string
    {
        return $this->wari_matome_value2;
    }

    public function setWariMatomeValue2(?string $wari_matome_value2): self
    {
        $this->wari_matome_value2 = $wari_matome_value2;

        return $this;
    }

    public function getWariMatomeLimit2(): ?int
    {
        return $this->wari_matome_limit2;
    }

    public function setWariMatomeLimit2(?int $wari_matome_limit2): self
    {
        $this->wari_matome_limit2 = $wari_matome_limit2;

        return $this;
    }

    public function getWariMatomeGroup(): ?string
    {
        return $this->wari_matome_group;
    }

    public function setWariMatomeGroup(?string $wari_matome_group): self
    {
        $this->wari_matome_group = $wari_matome_group;

        return $this;
    }

    public function getBumonCd(): ?string
    {
        return $this->bumon_cd;
    }

    public function setBumonCd(?string $bumon_cd): self
    {
        $this->bumon_cd = $bumon_cd;

        return $this;
    }

    /**
     * @return Bumon
     */
    public function getBumon()
    {
        return $this->Bumon;
    }
    /**
     * @param Bumon $Bumon
     */
    public function setBumon(Bumon $bumon = null)
    {
        $this->Bumon = $bumon;

        return $this;
    }

    /**
     * 商品コード取得
     */
    public function getCode(): ?string
    {
        $productClasses = $this->getProductClasses();
        if ( $productClasses ) {
            return $productClasses[0]->getCode();
        }
        return null;

    }
    /**
     * 店舗在庫取得
     */
    public function getTenpoStock($tenpoId = null): ?int
    {
        // 指定がなければ全体の最小値を戻す
        if ( is_null($tenpoId) ) {
            return $this->getStockMin();
        }
        // 店舗の在庫を取得して戻す
        $productClasses = $this->getProductClasses();
        if ( $productClasses ) {
            foreach ($productClasses as $pc) {
                if ( !$pc->isVisible() ) { continue; }
                if ( $pc->getClassCategory1() ) {
                    if ( $pc->getClassCategory1()->getId() != $tenpoId ) { continue; }
                }
                log_info('[ProductTrait]店舗在庫 ID:'.$this->getId().' PC:'.$pc->getId().' 店舗:'.$tenpoId.' getTenpoStock:'.$pc->getStock());
                return $pc->getStock();
            }
        }        
        return null;

    }
    /**
     * 店舗在庫日別制限取得
     */
    public function getTenpoOneDayLimit($tenpoId = null): ?int
    {
        // 店舗の日別上限値を取得して戻す
        $productClasses = $this->getProductClasses();
        if ( $productClasses ) {
            foreach ($productClasses as $pc) {
                //log_info('[ProductTrait] ID:'.$this->getId().' PC:'.$pc->getId());
                if ( !$pc->isVisible() ) { continue; }
                if ( $pc->getClassCategory1() ) {
                    //log_info('[ProductTrait] 店舗:'.$tenpoId.' cc:'.$pc->getClassCategory1()->getId());
                    if ( $pc->getClassCategory1()->getId() != $tenpoId ) { continue; }
                }
                log_info('[ProductTrait]日別上限 ID:'.$this->getId().' PC:'.$pc->getId().' 店舗:'.$tenpoId.' getOneDayLimit:'.$pc->getOneDayLimit());
                //log_info('[ProductTrait]',(array)$pc);
                return $pc->getOneDayLimit();
            }
        }
        return null;

    }
}
