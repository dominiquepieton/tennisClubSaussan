<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.X2y5U8b' shared service.

return $this->privates['.service_locator.X2y5U8b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'adherents' => ['privates', '.errored..service_locator.X2y5U8b.App\\Entity\\Adherent', NULL, 'Cannot autowire service ".service_locator.X2y5U8b": it references class "App\\Entity\\Adherent" but no such service exists.'],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
], [
    'adherents' => 'App\\Entity\\Adherent',
    'manager' => '?',
]);