<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Customize\Repository\VisitRepository' shared autowired service.

include_once $this->targetDirs[3].'/app/Customize/Repository/VisitRepository.php';

return $this->services['Customize\\Repository\\VisitRepository'] = new \Customize\Repository\VisitRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
