<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ZkKH95j' shared service.

return $this->privates['.service_locator.ZkKH95j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'article' => ['privates', '.errored..service_locator.ZkKH95j.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.ZkKH95j": it references class "App\\Entity\\Article" but no such service exists.'],
    'repo' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService.php', true],
], [
    'article' => 'App\\Entity\\Article',
    'repo' => 'App\\Repository\\ArticleRepository',
]);
