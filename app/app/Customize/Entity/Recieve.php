<?php

namespace Customize\Entity;

use Customize\Repository\RecieveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="dtb_hdn_recieve")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass=RecieveRepository::class)
 */
class Recieve
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
    private $uketori;

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

    public function getUketori(): ?string
    {
        return $this->uketori;
    }

    public function setUketori($uketori): self
    {
        $this->uketori = $uketori;

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
