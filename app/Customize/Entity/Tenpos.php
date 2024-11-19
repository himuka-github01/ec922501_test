<?php

namespace Customize\Entity;

use Customize\Repository\TenposRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;

/**
 * @ORM\Table(name="dtb_hdn_tenpos")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass=TenposRepository::class)
 */
class Tenpos
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
    private $uketenpo;

    /**
     * @ORM\Column(type="integer")
     */
    private $sort_no;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $visible;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUketenpo(): ?string
    {
        return $this->uketenpo;
    }

    public function setUketenpo($uketenpo): self
    {
        $this->uketenpo = $uketenpo;

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
}
