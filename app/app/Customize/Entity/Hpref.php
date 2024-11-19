<?php

namespace Customize\Entity;

use Customize\Repository\HprefRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="dtb_hdn_hpref")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass=HprefRepository::class)
 */
class Hpref
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
    private $h_pref;

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

    public function getHPref(): ?string
    {
        return $this->h_pref;
    }

    public function setHPref(string $h_pref): self
    {
        $this->h_pref = $h_pref;

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
}
