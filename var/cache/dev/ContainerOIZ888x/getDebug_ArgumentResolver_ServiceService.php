<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\BetaalController::delete' => ['privates', '.service_locator.nVaURA1', 'get_ServiceLocator_NVaURA1Service.php', true],
    'App\\Controller\\BetaalController::edit' => ['privates', '.service_locator.nVaURA1', 'get_ServiceLocator_NVaURA1Service.php', true],
    'App\\Controller\\BetaalController::index' => ['privates', '.service_locator.D3jgiPx', 'get_ServiceLocator_D3jgiPxService.php', true],
    'App\\Controller\\BetaalController::show' => ['privates', '.service_locator.nVaURA1', 'get_ServiceLocator_NVaURA1Service.php', true],
    'App\\Controller\\ExtrasController::delete' => ['privates', '.service_locator.kWj_cef', 'get_ServiceLocator_KWjCefService.php', true],
    'App\\Controller\\ExtrasController::edit' => ['privates', '.service_locator.kWj_cef', 'get_ServiceLocator_KWjCefService.php', true],
    'App\\Controller\\ExtrasController::index' => ['privates', '.service_locator.Lr7tYbh', 'get_ServiceLocator_Lr7tYbhService.php', true],
    'App\\Controller\\ExtrasController::show' => ['privates', '.service_locator.kWj_cef', 'get_ServiceLocator_KWjCefService.php', true],
    'App\\Controller\\ImageController::delete' => ['privates', '.service_locator.zz2VFiA', 'get_ServiceLocator_Zz2VFiAService.php', true],
    'App\\Controller\\ImageController::edit' => ['privates', '.service_locator.zz2VFiA', 'get_ServiceLocator_Zz2VFiAService.php', true],
    'App\\Controller\\ImageController::index' => ['privates', '.service_locator.9SP9ZW0', 'get_ServiceLocator_9SP9ZW0Service.php', true],
    'App\\Controller\\ImageController::show' => ['privates', '.service_locator.zz2VFiA', 'get_ServiceLocator_Zz2VFiAService.php', true],
    'App\\Controller\\KamerController::delete' => ['privates', '.service_locator.RV65.Hz', 'get_ServiceLocator_RV65_HzService.php', true],
    'App\\Controller\\KamerController::edit' => ['privates', '.service_locator.RV65.Hz', 'get_ServiceLocator_RV65_HzService.php', true],
    'App\\Controller\\KamerController::index' => ['privates', '.service_locator.MVcLjn_', 'get_ServiceLocator_MVcLjnService.php', true],
    'App\\Controller\\KamerController::show' => ['privates', '.service_locator.RV65.Hz', 'get_ServiceLocator_RV65_HzService.php', true],
    'App\\Controller\\ReserveringController::delete' => ['privates', '.service_locator.t.d.l3U', 'get_ServiceLocator_T_D_L3UService.php', true],
    'App\\Controller\\ReserveringController::edit' => ['privates', '.service_locator.t.d.l3U', 'get_ServiceLocator_T_D_L3UService.php', true],
    'App\\Controller\\ReserveringController::index' => ['privates', '.service_locator.6f9it22', 'get_ServiceLocator_6f9it22Service.php', true],
    'App\\Controller\\ReserveringController::show' => ['privates', '.service_locator.t.d.l3U', 'get_ServiceLocator_T_D_L3UService.php', true],
    'App\\Controller\\SeizoenController::delete' => ['privates', '.service_locator.IB3xp6Q', 'get_ServiceLocator_IB3xp6QService.php', true],
    'App\\Controller\\SeizoenController::edit' => ['privates', '.service_locator.IB3xp6Q', 'get_ServiceLocator_IB3xp6QService.php', true],
    'App\\Controller\\SeizoenController::index' => ['privates', '.service_locator._C7mJYY', 'get_ServiceLocator_C7mJYYService.php', true],
    'App\\Controller\\SeizoenController::show' => ['privates', '.service_locator.IB3xp6Q', 'get_ServiceLocator_IB3xp6QService.php', true],
    'App\\Controller\\SoortController::delete' => ['privates', '.service_locator.y3AzfhI', 'get_ServiceLocator_Y3AzfhIService.php', true],
    'App\\Controller\\SoortController::edit' => ['privates', '.service_locator.y3AzfhI', 'get_ServiceLocator_Y3AzfhIService.php', true],
    'App\\Controller\\SoortController::index' => ['privates', '.service_locator.gvnHNoU', 'get_ServiceLocator_GvnHNoUService.php', true],
    'App\\Controller\\SoortController::show' => ['privates', '.service_locator.y3AzfhI', 'get_ServiceLocator_Y3AzfhIService.php', true],
    'App\\Controller\\UserController::delete' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\UserController::edit' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\UserController::show' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\BetaalController:delete' => ['privates', '.service_locator.nVaURA1', 'get_ServiceLocator_NVaURA1Service.php', true],
    'App\\Controller\\BetaalController:edit' => ['privates', '.service_locator.nVaURA1', 'get_ServiceLocator_NVaURA1Service.php', true],
    'App\\Controller\\BetaalController:index' => ['privates', '.service_locator.D3jgiPx', 'get_ServiceLocator_D3jgiPxService.php', true],
    'App\\Controller\\BetaalController:show' => ['privates', '.service_locator.nVaURA1', 'get_ServiceLocator_NVaURA1Service.php', true],
    'App\\Controller\\ExtrasController:delete' => ['privates', '.service_locator.kWj_cef', 'get_ServiceLocator_KWjCefService.php', true],
    'App\\Controller\\ExtrasController:edit' => ['privates', '.service_locator.kWj_cef', 'get_ServiceLocator_KWjCefService.php', true],
    'App\\Controller\\ExtrasController:index' => ['privates', '.service_locator.Lr7tYbh', 'get_ServiceLocator_Lr7tYbhService.php', true],
    'App\\Controller\\ExtrasController:show' => ['privates', '.service_locator.kWj_cef', 'get_ServiceLocator_KWjCefService.php', true],
    'App\\Controller\\ImageController:delete' => ['privates', '.service_locator.zz2VFiA', 'get_ServiceLocator_Zz2VFiAService.php', true],
    'App\\Controller\\ImageController:edit' => ['privates', '.service_locator.zz2VFiA', 'get_ServiceLocator_Zz2VFiAService.php', true],
    'App\\Controller\\ImageController:index' => ['privates', '.service_locator.9SP9ZW0', 'get_ServiceLocator_9SP9ZW0Service.php', true],
    'App\\Controller\\ImageController:show' => ['privates', '.service_locator.zz2VFiA', 'get_ServiceLocator_Zz2VFiAService.php', true],
    'App\\Controller\\KamerController:delete' => ['privates', '.service_locator.RV65.Hz', 'get_ServiceLocator_RV65_HzService.php', true],
    'App\\Controller\\KamerController:edit' => ['privates', '.service_locator.RV65.Hz', 'get_ServiceLocator_RV65_HzService.php', true],
    'App\\Controller\\KamerController:index' => ['privates', '.service_locator.MVcLjn_', 'get_ServiceLocator_MVcLjnService.php', true],
    'App\\Controller\\KamerController:show' => ['privates', '.service_locator.RV65.Hz', 'get_ServiceLocator_RV65_HzService.php', true],
    'App\\Controller\\ReserveringController:delete' => ['privates', '.service_locator.t.d.l3U', 'get_ServiceLocator_T_D_L3UService.php', true],
    'App\\Controller\\ReserveringController:edit' => ['privates', '.service_locator.t.d.l3U', 'get_ServiceLocator_T_D_L3UService.php', true],
    'App\\Controller\\ReserveringController:index' => ['privates', '.service_locator.6f9it22', 'get_ServiceLocator_6f9it22Service.php', true],
    'App\\Controller\\ReserveringController:show' => ['privates', '.service_locator.t.d.l3U', 'get_ServiceLocator_T_D_L3UService.php', true],
    'App\\Controller\\SeizoenController:delete' => ['privates', '.service_locator.IB3xp6Q', 'get_ServiceLocator_IB3xp6QService.php', true],
    'App\\Controller\\SeizoenController:edit' => ['privates', '.service_locator.IB3xp6Q', 'get_ServiceLocator_IB3xp6QService.php', true],
    'App\\Controller\\SeizoenController:index' => ['privates', '.service_locator._C7mJYY', 'get_ServiceLocator_C7mJYYService.php', true],
    'App\\Controller\\SeizoenController:show' => ['privates', '.service_locator.IB3xp6Q', 'get_ServiceLocator_IB3xp6QService.php', true],
    'App\\Controller\\SoortController:delete' => ['privates', '.service_locator.y3AzfhI', 'get_ServiceLocator_Y3AzfhIService.php', true],
    'App\\Controller\\SoortController:edit' => ['privates', '.service_locator.y3AzfhI', 'get_ServiceLocator_Y3AzfhIService.php', true],
    'App\\Controller\\SoortController:index' => ['privates', '.service_locator.gvnHNoU', 'get_ServiceLocator_GvnHNoUService.php', true],
    'App\\Controller\\SoortController:show' => ['privates', '.service_locator.y3AzfhI', 'get_ServiceLocator_Y3AzfhIService.php', true],
    'App\\Controller\\UserController:delete' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\UserController:edit' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\UserController:show' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
])), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
