<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/betaal' => [[['_route' => 'betaal_index', '_controller' => 'App\\Controller\\BetaalController::index'], null, ['GET' => 0], null, true, false, null]],
            '/betaal/new' => [[['_route' => 'betaal_new', '_controller' => 'App\\Controller\\BetaalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
            '/extras' => [[['_route' => 'extras_index', '_controller' => 'App\\Controller\\ExtrasController::index'], null, ['GET' => 0], null, true, false, null]],
            '/extras/new' => [[['_route' => 'extras_new', '_controller' => 'App\\Controller\\ExtrasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/image' => [[['_route' => 'image_index', '_controller' => 'App\\Controller\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
            '/image/new' => [[['_route' => 'image_new', '_controller' => 'App\\Controller\\ImageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/kamer' => [[['_route' => 'kamer_index', '_controller' => 'App\\Controller\\KamerController::index'], null, ['GET' => 0], null, true, false, null]],
            '/kamer/new' => [[['_route' => 'kamer_new', '_controller' => 'App\\Controller\\KamerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/kamers' => [[['_route' => 'kamers', '_controller' => 'App\\Controller\\KamersController::index'], null, null, null, false, false, null]],
            '/reservering' => [[['_route' => 'reservering_index', '_controller' => 'App\\Controller\\ReserveringController::index'], null, ['GET' => 0], null, true, false, null]],
            '/reservering/new' => [[['_route' => 'reservering_new', '_controller' => 'App\\Controller\\ReserveringController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/seizoen' => [[['_route' => 'seizoen_index', '_controller' => 'App\\Controller\\SeizoenController::index'], null, ['GET' => 0], null, true, false, null]],
            '/seizoen/new' => [[['_route' => 'seizoen_new', '_controller' => 'App\\Controller\\SeizoenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/soort' => [[['_route' => 'soort_index', '_controller' => 'App\\Controller\\SoortController::index'], null, ['GET' => 0], null, true, false, null]],
            '/soort/new' => [[['_route' => 'soort_new', '_controller' => 'App\\Controller\\SoortController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
            '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
            '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
            '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
            '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
            '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
            '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
            '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
            '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
            '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
            '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/betaal/([^/]++)(?'
                        .'|(*:188)'
                        .'|/edit(*:201)'
                        .'|(*:209)'
                    .')'
                    .'|/extras/([^/]++)(?'
                        .'|(*:237)'
                        .'|/edit(*:250)'
                        .'|(*:258)'
                    .')'
                    .'|/image/([^/]++)(?'
                        .'|(*:285)'
                        .'|/edit(*:298)'
                        .'|(*:306)'
                    .')'
                    .'|/kamer/([^/]++)(?'
                        .'|(*:333)'
                        .'|/edit(*:346)'
                        .'|(*:354)'
                    .')'
                    .'|/re(?'
                        .'|se(?'
                            .'|rvering/([^/]++)(?'
                                .'|(*:393)'
                                .'|/edit(*:406)'
                                .'|(*:414)'
                            .')'
                            .'|tting/reset/([^/]++)(*:443)'
                        .')'
                        .'|gister/confirm/([^/]++)(*:475)'
                    .')'
                    .'|/s(?'
                        .'|eizoen/([^/]++)(?'
                            .'|(*:507)'
                            .'|/edit(*:520)'
                            .'|(*:528)'
                        .')'
                        .'|oort/([^/]++)(?'
                            .'|(*:553)'
                            .'|/edit(*:566)'
                            .'|(*:574)'
                        .')'
                    .')'
                    .'|/user/([^/]++)(?'
                        .'|(*:601)'
                        .'|/edit(*:614)'
                        .'|(*:622)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            188 => [[['_route' => 'betaal_show', '_controller' => 'App\\Controller\\BetaalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            201 => [[['_route' => 'betaal_edit', '_controller' => 'App\\Controller\\BetaalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            209 => [[['_route' => 'betaal_delete', '_controller' => 'App\\Controller\\BetaalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            237 => [[['_route' => 'extras_show', '_controller' => 'App\\Controller\\ExtrasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            250 => [[['_route' => 'extras_edit', '_controller' => 'App\\Controller\\ExtrasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            258 => [[['_route' => 'extras_delete', '_controller' => 'App\\Controller\\ExtrasController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            285 => [[['_route' => 'image_show', '_controller' => 'App\\Controller\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            298 => [[['_route' => 'image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            306 => [[['_route' => 'image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            333 => [[['_route' => 'kamer_show', '_controller' => 'App\\Controller\\KamerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            346 => [[['_route' => 'kamer_edit', '_controller' => 'App\\Controller\\KamerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            354 => [[['_route' => 'kamer_delete', '_controller' => 'App\\Controller\\KamerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            393 => [[['_route' => 'reservering_show', '_controller' => 'App\\Controller\\ReserveringController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            406 => [[['_route' => 'reservering_edit', '_controller' => 'App\\Controller\\ReserveringController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            414 => [[['_route' => 'reservering_delete', '_controller' => 'App\\Controller\\ReserveringController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            443 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            475 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
            507 => [[['_route' => 'seizoen_show', '_controller' => 'App\\Controller\\SeizoenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            520 => [[['_route' => 'seizoen_edit', '_controller' => 'App\\Controller\\SeizoenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            528 => [[['_route' => 'seizoen_delete', '_controller' => 'App\\Controller\\SeizoenController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            553 => [[['_route' => 'soort_show', '_controller' => 'App\\Controller\\SoortController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            566 => [[['_route' => 'soort_edit', '_controller' => 'App\\Controller\\SoortController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            574 => [[['_route' => 'soort_delete', '_controller' => 'App\\Controller\\SoortController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            601 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            614 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            622 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
