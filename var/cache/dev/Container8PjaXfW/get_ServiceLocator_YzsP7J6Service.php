<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.yzsP7J6' shared service.

return $this->privates['.service_locator.yzsP7J6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'repo' => ['privates', 'App\\Repository\\ResgistrationStageRepository', 'getResgistrationStageRepositoryService.php', true],
], [
    'repo' => 'App\\Repository\\ResgistrationStageRepository',
]);
