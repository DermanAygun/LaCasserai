<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.6f9it22' shared service.

return $this->privates['.service_locator.6f9it22'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'reserveringRepository' => ['privates', 'App\\Repository\\ReserveringRepository', 'getReserveringRepositoryService.php', true],
]);
