<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Vich\UploaderBundle\Naming\PropertyDirectoryNamer' shared service.

include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Naming\\DirectoryNamerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Naming\\ConfigurableInterface.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Naming\\PropertyDirectoryNamer.php';

return $this->services['Vich\UploaderBundle\Naming\PropertyDirectoryNamer'] = new \Vich\UploaderBundle\Naming\PropertyDirectoryNamer(($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()));
