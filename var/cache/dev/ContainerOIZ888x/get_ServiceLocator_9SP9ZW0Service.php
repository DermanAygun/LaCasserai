<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.9SP9ZW0' shared service.

return $this->privates['.service_locator.9SP9ZW0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'imageRepository' => ['privates', 'App\\Repository\\ImageRepository', 'getImageRepositoryService.php', true],
]);
