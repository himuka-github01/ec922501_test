<?php
/*----------------------------------------
 * ProductClassTrait
 *----------------------------------------
 * 2022.05.05 add one_day_limit by inok
 * 2022.05.05 new by inok
 *----------------------------------------*/

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;
use Customize\Entity\Master\Bumon;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Eccube\EntityExtension("Eccube\Entity\ProductClass")
 */
trait ProductClassTrait
{
    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $one_day_limit;

    public function getOneDayLimit(): ?string
    {
        return $this->one_day_limit;
    }

    public function setOneDayLimit(?string $one_day_limit): self
    {
        $this->one_day_limit = $one_day_limit;

        return $this;
    }

}
