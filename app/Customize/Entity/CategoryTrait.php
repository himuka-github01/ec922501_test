<?php

//namespace Plugin\HdnCategoryEx\Entity;
namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Category")
 */
trait CategoryTrait {

    /**
     * @ORM\Column(name="disp_start_dt", type="date", nullable=true)
     * @Eccube\FormAppend(
     *  auto_render=true,
     *  type="\Symfony\Component\Form\Extension\Core\Type\DateType",
     *  options={
     *    "required": true,
     *    "label": "表示開始日"
     *  }
     * )
     * @Assert\NotBlank(message="表示開始日を入力してください")
     */
    private $dispStartDt;

    public function getDispStartDt() {
        return $this->dispStartDt;
    }
    public function setDispStartDt($dispStartDt) {
        $this->dispStartDt = $dispStartDt;
        return $this;
    }

    /**
     * @ORM\Column(name="disp_end_dt", type="date", nullable=true)
     * @Eccube\FormAppend(
     *  auto_render=true,
     *  type="\Symfony\Component\Form\Extension\Core\Type\DateType",
     *  options={
     *    "required": true,
     *    "label": "表示終了日"
     *  }
     * )
     * @Assert\NotBlank(message="表示終了日を入力してください")
     */
    private $dispEndDt;

    public function getDispEndDt() {
        return $this->dispEndDt;
    }
    public function setDispEndDt($dispEndDt) {
        $this->dispEndDt = $dispEndDt;
        return $this;
    }

    /**
     * @ORM\Column(name="saiji_cd", type="integer", nullable=true, options={"unsigned":true, "default":0})
     * @Eccube\FormAppend(
     *  auto_render=true,
     *  type="\Symfony\Component\Form\Extension\Core\Type\IntegerType",
     *  options={
     *    "required": true,
     *    "label": "コード"
     *  }
     * )
     * @Assert\NotBlank(message="コードを入力してください")
     */
    private $saijiCd;

    public function getSaijiCd() {
        return $this->saijiCd;
    }
    public function setSaijiCd($saijiCd) {
        $this->saijiCd = $saijiCd;
        return $this;
    }

    /**
     * @ORM\Column(name="delivery_start_dt", type="date", nullable=true)
     * @Eccube\FormAppend(
     *  auto_render=true,
     *  type="\Symfony\Component\Form\Extension\Core\Type\DateType",
     *  options={
     *    "required": false,
     *    "label": "受渡開始日"
     *  }
     * )
     */
    // Assert\NotBlank(message="受渡開始日を入力してください")
    private $deliveryStartDt;

    public function getDeliveryStartDt() {
        return $this->deliveryStartDt;
    }
    public function setDeliveryStartDt($deliveryStartDt) {
        $this->deliveryStartDt = $deliveryStartDt;
        return $this;
    }

    /**
     * @ORM\Column(name="delivery_end_dt", type="date", nullable=true)
     * @Eccube\FormAppend(
     *  auto_render=true,
     *  type="\Symfony\Component\Form\Extension\Core\Type\DateType",
     *  options={
     *    "required": false,
     *    "label": "受渡終了日"
     *  }
     * )
     */
    // @Assert\NotBlank(message="受渡終了日を入力してください")
    private $deliveryEndDt;

    public function getDeliveryEndDt() {
        return $this->deliveryEndDt;
    }
    public function setDeliveryEndDt($deliveryEndDt) {
        $this->deliveryEndDt = $deliveryEndDt;
        return $this;
    }

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true, options={"default":0})
     * @Eccube\FormAppend(
     *  auto_render=false,
     *  type="\Symfony\Component\Form\Extension\Core\Type\IntegerType",
     *  options={
     *    "required": false,
     *    "label": "ＦＣ割％"
     *  }
     * )
     */
    // @Assert\NotBlank(message="ＦＣ割引率を入力してください")
    private $wari_a_value = 0;

    public function getWariAValue(): ?string
    {
        return $this->wari_a_value;
    }
    public function setWariAValue(?string $wari_a_value): self
    {
        if ( $wari_a_value ) {
            $this->wari_a_value = $wari_a_value;
        }
        return $this;
    }

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true, options={"default":0})
     * @Eccube\FormAppend(
     *  auto_render=false,
     *  type="\Symfony\Component\Form\Extension\Core\Type\IntegerType",
     *  options={
     *    "required": false,
     *    "label": "社員割％"
     *  }
     * )
     */
    // @Assert\NotBlank(message="社員割引率を入力してください")
    private $wari_b_value = 0;

    public function getWariBValue(): ?string
    {
        return $this->wari_b_value;
    }
    public function setWariBValue(?string $wari_b_value): self
    {
        if ( $wari_b_value ) {
            $this->wari_b_value = $wari_b_value;
        }
        return $this;
    }

    /**
     * @ORM\Column(type="decimal", precision=8, scale=1, nullable=true, options={"default":0})
     * @Eccube\FormAppend(
     *  auto_render=false,
     *  type="\Symfony\Component\Form\Extension\Core\Type\IntegerType",
     *  options={
     *    "required": false,
     *    "label": "早割％"
     *  }
     * )
     */
    // @Assert\NotBlank(message="早割割引率を入力してください")
    private $wari_kikan_value = 0;

    public function getWariKikanValue(): ?string
    {
        return $this->wari_kikan_value;
    }
    public function setWariKikanValue(?string $wari_kikan_value): self
    {
        if ( $wari_kikan_value ) {
            $this->wari_kikan_value = $wari_kikan_value;
        }
        return $this;
    }

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Eccube\FormAppend(
     *  auto_render=false,
     *  type="\Symfony\Component\Form\Extension\Core\Type\DateType",
     *  options={
     *    "required": false,
     *    "label": "早割終了日"
     *  }
     * )
     */
    // @Assert\NotBlank(message="早割終了日を入力してください")
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Customize\Entity\HdnSaijiTenpo", mappedBy="Saiji", cascade={"persist","remove"})
     */
    private $SaijiTenpos;

    /**
     * Add HdnSaijiTenpo.
     *
     * @param \Customize\Entity\HdnSaijiTenpo $saijiTenpo
     *
     * @return Category
     */
    public function addSaijiTenpo(\Customize\Entity\HdnSaijiTenpo $saijiTenpo)
    {
        if ( !$this->SaijiTenpos ) {
            $this->SaijiTenpos = new \Doctrine\Common\Collections\ArrayCollection();
        }
        $this->SaijiTenpos[] = $saijiTenpo;

        return $this;
    }

    /**
     * Remove HdnSaijiTenpo.
     *
     * @param \Customize\Entity\HdnSaijiTenpo $saijiTenpo
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSaijiTenpo(\Customize\Entity\HdnSaijiTenpo $saijiTenpo)
    {
        if ( !$this->SaijiTenpos ) {
            $this->SaijiTenpos = new \Doctrine\Common\Collections\ArrayCollection();
        }
        return $this->SaijiTenpos->removeElement($saijiTenpo);
    }

    /**
     * Get SaijiTenpos.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaijiTenpos()
    {
        return $this->SaijiTenpos;
    }

}