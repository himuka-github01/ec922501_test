<?php

namespace Customize\Entity;

use Customize\Repository\HdnSaijiTenpoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="dtb_hdn_saiji_tenpo")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass=HdnSaijiTenpoRepository::class)
 */
class HdnSaijiTenpo
{
    /**
     * @ORM\Column(name="saiji_id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $saiji_id;

    /**
     * @ORM\Column(name="tenpo_id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tenpo_id;

    /**
     * @var \Eccube\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Category", inversedBy="SaijiTenpos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="saiji_id", referencedColumnName="id")
     * })
     */
    private $Saiji;

    /**
     * @var \Customize\Entity\HdnTenpo
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\HdnTenpo", inversedBy="SaijiTenpos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tenpo_id", referencedColumnName="id")
     * })
     */
    private $Tenpo;

    public function getSaijiId(): ?int
    {
        return $this->saiji_id;
    }

    public function setSaijiId(int $saiji_id): self
    {
        $this->saiji_id = $saiji_id;

        return $this;
    }

    public function getTenpoId(): ?int
    {
        return $this->tenpo_id;
    }

    public function setTenpoId(int $tenpo_id): self
    {
        $this->tenpo_id = $tenpo_id;

        return $this;
    }
    /**
     * Set Saiji.
     *
     * @param \Eccube\Entity\Category|null $saiji
     *
     * @return HdnSaijiTenpo
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

    /**
     * Set Tenpo.
     *
     * @param \Customize\Entity\HdnTenpo|null $tenpo
     *
     * @return HdnSaijiTenpo
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
}
