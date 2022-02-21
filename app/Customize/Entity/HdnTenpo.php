<?php

namespace Customize\Entity;

use Customize\Repository\HdnTenpoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="dtb_hdn_tenpo")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass=HdnTenpoRepository::class)
 */
class HdnTenpo
{
    /**
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tenpo_cd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tenpo_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $sort_no;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $visible;

    /**
     * @ORM\Column(type="string", length=14, nullable=true)
     */
    private $phone_number;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTenpoCd(): ?string
    {
        return $this->tenpo_cd;
    }

    public function setTenpoCd(string $tenpo_cd): self
    {
        $this->tenpo_cd = $tenpo_cd;

        return $this;
    }

    public function getTenpoName(): ?string
    {
        return $this->tenpo_name;
    }

    public function setTenpoName(string $tenpo_name): self
    {
        $this->tenpo_name = $tenpo_name;

        return $this;
    }

    public function getSortNo(): ?int
    {
        return $this->sort_no;
    }

    public function setSortNo(int $sort_no): self
    {
        $this->sort_no = $sort_no;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number = null): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Customize\Entity\HdnSaijiTenpo", mappedBy="Tenpo", fetch="EXTRA_LAZY")
     */
    private $SaijiTenpos;

    /**
     * Add HdnSaijiTenpo.
     *
     * @param \Customize\Entity\HdnSaijiTenpo $saijiTenpo
     *
     * @return HdnTenpo
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
