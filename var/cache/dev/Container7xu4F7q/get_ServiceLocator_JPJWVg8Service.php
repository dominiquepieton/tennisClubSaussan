<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.JPJWVg8' shared service.

return $this->privates['.service_locator.JPJWVg8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'preRegistration' => ['privates', '.errored..service_locator.JPJWVg8.App\\Entity\\PreRegistration', NULL, 'Cannot autowire service ".service_locator.JPJWVg8": it references class "App\\Entity\\PreRegistration" but no such service exists.'],
], [
    'manager' => '?',
    'preRegistration' => 'App\\Entity\\PreRegistration',
]);
