<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.kWj_cef' shared service.

return $this->privates['.service_locator.kWj_cef'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'extra' => ['privates', '.errored..service_locator.kWj_cef.App\\Entity\\Extras', NULL, 'Cannot autowire service ".service_locator.kWj_cef": it references class "App\\Entity\\Extras" but no such service exists.'],
]);