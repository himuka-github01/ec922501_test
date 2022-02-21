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
}
