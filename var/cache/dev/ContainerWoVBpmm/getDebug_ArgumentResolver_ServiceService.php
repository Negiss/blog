<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\CategoryController::articleById' => function () {
    return ($this->privates['.service_locator.zv3hrPg'] ?? $this->load('get_ServiceLocator_Zv3hrPgService.php'));
}, 'App\\Controller\\CategoryController::categoryById' => function () {
    return ($this->privates['.service_locator.koD3dBr'] ?? $this->load('get_ServiceLocator_KoD3dBrService.php'));
}, 'App\\Controller\\CategoryController:articleById' => function () {
    return ($this->privates['.service_locator.zv3hrPg'] ?? $this->load('get_ServiceLocator_Zv3hrPgService.php'));
}, 'App\\Controller\\CategoryController:categoryById' => function () {
    return ($this->privates['.service_locator.koD3dBr'] ?? $this->load('get_ServiceLocator_KoD3dBrService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));