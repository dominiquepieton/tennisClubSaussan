<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.MkYQhkN' shared service.

return $this->privates['.service_locator.MkYQhkN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'pagination' => ['privates', 'App\\service\\Pagination', 'getPaginationService.php', true],
    'repo' => ['privates', 'App\\Repository\\AdherentRepository', 'getAdherentRepositoryService.php', true],
], [
    'pagination' => 'App\\service\\Pagination',
    'repo' => 'App\\Repository\\AdherentRepository',
]);
