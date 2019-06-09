<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'betaal_index' => [[], ['_controller' => 'App\\Controller\\BetaalController::index'], [], [['text', '/betaal/']], [], []],
        'betaal_new' => [[], ['_controller' => 'App\\Controller\\BetaalController::new'], [], [['text', '/betaal/new']], [], []],
        'betaal_show' => [['id'], ['_controller' => 'App\\Controller\\BetaalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/betaal']], [], []],
        'betaal_edit' => [['id'], ['_controller' => 'App\\Controller\\BetaalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/betaal']], [], []],
        'betaal_delete' => [['id'], ['_controller' => 'App\\Controller\\BetaalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/betaal']], [], []],
        'default' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
        'extras_index' => [[], ['_controller' => 'App\\Controller\\ExtrasController::index'], [], [['text', '/extras/']], [], []],
        'extras_new' => [[], ['_controller' => 'App\\Controller\\ExtrasController::new'], [], [['text', '/extras/new']], [], []],
        'extras_show' => [['id'], ['_controller' => 'App\\Controller\\ExtrasController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/extras']], [], []],
        'extras_edit' => [['id'], ['_controller' => 'App\\Controller\\ExtrasController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/extras']], [], []],
        'extras_delete' => [['id'], ['_controller' => 'App\\Controller\\ExtrasController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/extras']], [], []],
        'image_index' => [[], ['_controller' => 'App\\Controller\\ImageController::index'], [], [['text', '/image/']], [], []],
        'image_new' => [[], ['_controller' => 'App\\Controller\\ImageController::new'], [], [['text', '/image/new']], [], []],
        'image_show' => [['id'], ['_controller' => 'App\\Controller\\ImageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/image']], [], []],
        'image_edit' => [['id'], ['_controller' => 'App\\Controller\\ImageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/image']], [], []],
        'image_delete' => [['id'], ['_controller' => 'App\\Controller\\ImageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/image']], [], []],
        'kamer_index' => [[], ['_controller' => 'App\\Controller\\KamerController::index'], [], [['text', '/kamer/']], [], []],
        'kamer_new' => [[], ['_controller' => 'App\\Controller\\KamerController::new'], [], [['text', '/kamer/new']], [], []],
        'kamer_show' => [['id'], ['_controller' => 'App\\Controller\\KamerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/kamer']], [], []],
        'kamer_edit' => [['id'], ['_controller' => 'App\\Controller\\KamerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/kamer']], [], []],
        'kamer_delete' => [['id'], ['_controller' => 'App\\Controller\\KamerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/kamer']], [], []],
        'kamers' => [[], ['_controller' => 'App\\Controller\\KamersController::index'], [], [['text', '/kamers']], [], []],
        'reservering_index' => [[], ['_controller' => 'App\\Controller\\ReserveringController::index'], [], [['text', '/reservering/']], [], []],
        'reservering_new' => [[], ['_controller' => 'App\\Controller\\ReserveringController::new'], [], [['text', '/reservering/new']], [], []],
        'reservering_show' => [['id'], ['_controller' => 'App\\Controller\\ReserveringController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservering']], [], []],
        'reservering_edit' => [['id'], ['_controller' => 'App\\Controller\\ReserveringController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservering']], [], []],
        'reservering_delete' => [['id'], ['_controller' => 'App\\Controller\\ReserveringController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservering']], [], []],
        'seizoen_index' => [[], ['_controller' => 'App\\Controller\\SeizoenController::index'], [], [['text', '/seizoen/']], [], []],
        'seizoen_new' => [[], ['_controller' => 'App\\Controller\\SeizoenController::new'], [], [['text', '/seizoen/new']], [], []],
        'seizoen_show' => [['id'], ['_controller' => 'App\\Controller\\SeizoenController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/seizoen']], [], []],
        'seizoen_edit' => [['id'], ['_controller' => 'App\\Controller\\SeizoenController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/seizoen']], [], []],
        'seizoen_delete' => [['id'], ['_controller' => 'App\\Controller\\SeizoenController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/seizoen']], [], []],
        'soort_index' => [[], ['_controller' => 'App\\Controller\\SoortController::index'], [], [['text', '/soort/']], [], []],
        'soort_new' => [[], ['_controller' => 'App\\Controller\\SoortController::new'], [], [['text', '/soort/new']], [], []],
        'soort_show' => [['id'], ['_controller' => 'App\\Controller\\SoortController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/soort']], [], []],
        'soort_edit' => [['id'], ['_controller' => 'App\\Controller\\SoortController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/soort']], [], []],
        'soort_delete' => [['id'], ['_controller' => 'App\\Controller\\SoortController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/soort']], [], []],
        'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
        'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
        'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
        'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
        'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
        'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/admin/']], [], []],
        'fos_user_security_login' => [[], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login']], [], []],
        'fos_user_security_check' => [[], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check']], [], []],
        'fos_user_security_logout' => [[], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout']], [], []],
        'fos_user_profile_show' => [[], ['_controller' => 'fos_user.profile.controller:showAction'], [], [['text', '/profile/']], [], []],
        'fos_user_profile_edit' => [[], ['_controller' => 'fos_user.profile.controller:editAction'], [], [['text', '/profile/edit']], [], []],
        'fos_user_registration_register' => [[], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/register/']], [], []],
        'fos_user_registration_check_email' => [[], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/register/check-email']], [], []],
        'fos_user_registration_confirm' => [['token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/register/confirm']], [], []],
        'fos_user_registration_confirmed' => [[], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/register/confirmed']], [], []],
        'fos_user_resetting_request' => [[], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request']], [], []],
        'fos_user_resetting_send_email' => [[], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email']], [], []],
        'fos_user_resetting_check_email' => [[], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email']], [], []],
        'fos_user_resetting_reset' => [['token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/resetting/reset']], [], []],
        'fos_user_change_password' => [[], ['_controller' => 'fos_user.change_password.controller:changePasswordAction'], [], [['text', '/profile/change-password']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
