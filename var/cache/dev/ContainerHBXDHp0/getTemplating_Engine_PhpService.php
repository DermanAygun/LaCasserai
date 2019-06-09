<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.engine.php' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\EngineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\PhpEngine.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Templating\\EngineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Templating\\PhpEngine.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Templating\\TimedPhpEngine.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Templating\\GlobalVariables.php';

$this->privates['templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine(($this->privates['templating.name_parser'] ?? ($this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'templating.helper.actions' => ['privates', 'templating.helper.actions', 'getTemplating_Helper_ActionsService.php', true],
    'templating.helper.assets' => ['privates', 'templating.helper.assets', 'getTemplating_Helper_AssetsService.php', true],
    'templating.helper.code' => ['privates', 'templating.helper.code', 'getTemplating_Helper_CodeService.php', true],
    'templating.helper.form' => ['privates', 'templating.helper.form', 'getTemplating_Helper_FormService.php', true],
    'templating.helper.logout_url' => ['privates', 'templating.helper.logout_url', 'getTemplating_Helper_LogoutUrlService.php', true],
    'templating.helper.request' => ['privates', 'templating.helper.request', 'getTemplating_Helper_RequestService.php', true],
    'templating.helper.router' => ['privates', 'templating.helper.router', 'getTemplating_Helper_RouterService.php', true],
    'templating.helper.security' => ['privates', 'templating.helper.security', 'getTemplating_Helper_SecurityService.php', true],
    'templating.helper.session' => ['privates', 'templating.helper.session', 'getTemplating_Helper_SessionService.php', true],
    'templating.helper.slots' => ['privates', 'templating.helper.slots', 'getTemplating_Helper_SlotsService.php', true],
    'templating.helper.stopwatch' => ['privates', 'templating.helper.stopwatch', 'getTemplating_Helper_StopwatchService.php', true],
    'templating.helper.translator' => ['privates', 'templating.helper.translator', 'getTemplating_Helper_TranslatorService.php', true],
    'vich_uploader.templating.helper.uploader_helper' => ['services', 'vich_uploader.templating.helper.uploader_helper', 'getVichUploader_Templating_Helper_UploaderHelperService', false],
]), ($this->services['templating.loader'] ?? $this->load('getTemplating_LoaderService.php')), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this));

$instance->setCharset('UTF-8');
$instance->setHelpers(['slots' => 'templating.helper.slots', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'assets' => 'templating.helper.assets', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'vich_uploader' => 'vich_uploader.templating.helper.uploader_helper']);

return $instance;
