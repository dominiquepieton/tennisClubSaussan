<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'account_login', '_controller' => 'App\\Controller\\AccountController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'account_logout', '_controller' => 'App\\Controller\\AccountController::logout'], null, null, null, false, false, null]],
        '/admin/account/register' => [[['_route' => 'admin_account_register', '_controller' => 'App\\Controller\\AccountController::register'], null, null, null, false, false, null]],
        '/account/profile' => [[['_route' => 'account_profile', '_controller' => 'App\\Controller\\AccountController::profile'], null, null, null, false, false, null]],
        '/account/password-update' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountController::updatePassword'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_account_login', '_controller' => 'App\\Controller\\AdminAccountController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_account_logout', '_controller' => 'App\\Controller\\AdminAccountController::logout'], null, null, null, false, false, null]],
        '/admin/adherents' => [[['_route' => 'admin_adherent_index', '_controller' => 'App\\Controller\\AdminAdherentController::index'], null, null, null, false, false, null]],
        '/ad/article' => [[['_route' => 'index_article', '_controller' => 'App\\Controller\\AdminArticleController::index'], null, null, null, false, false, null]],
        '/admin/article/new' => [[['_route' => 'admin_article_create', '_controller' => 'App\\Controller\\AdminArticleController::create'], null, null, null, false, false, null]],
        '/admin/contact' => [[['_route' => 'admin_contact_index', '_controller' => 'App\\Controller\\AdminContactController::index'], null, null, null, false, false, null]],
        '/contact/new' => [[['_route' => 'contact_create', '_controller' => 'App\\Controller\\AdminContactController::create'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/registration' => [[['_route' => 'admin_registration_index', '_controller' => 'App\\Controller\\AdminPreRegistrationController::index'], null, null, null, false, false, null]],
        '/admin/registration/new' => [[['_route' => 'admin_registration_create', '_controller' => 'App\\Controller\\AdminPreRegistrationController::create'], null, null, null, false, false, null]],
        '/admin/stage' => [[['_route' => 'admin_stage_index', '_controller' => 'App\\Controller\\AdminRegistrationStageController::index'], null, null, null, false, false, null]],
        '/admin/stage/new' => [[['_route' => 'admin_stage_create', '_controller' => 'App\\Controller\\AdminRegistrationStageController::create'], null, null, null, false, false, null]],
        '/admin/res' => [[['_route' => 'admin_res_index', '_controller' => 'App\\Controller\\AdminResController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservation/new' => [[['_route' => 'reservation_create', '_controller' => 'App\\Controller\\ReservationController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
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
                .'|/ad(?'
                    .'|/([^/]++)(*:184)'
                    .'|min/(?'
                        .'|registration/(?'
                            .'|([^/]++)(*:223)'
                            .'|edit/([^/]++)(*:244)'
                        .')'
                        .'|stage/(?'
                            .'|([^/]++)(*:270)'
                            .'|edit/([^/]++)(*:291)'
                        .')'
                    .')'
                .')'
                .'|/contact/([^/]++)(*:319)'
                .'|/edit/([^/]++)(*:341)'
                .'|/reservation/(?'
                    .'|delete/([^/]++)(?'
                        .'|(*:383)'
                    .')'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:411)'
                            .'|delete(*:425)'
                        .')'
                        .'|(*:434)'
                    .')'
                .')'
                .'|/user/([^/]++)(*:458)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        184 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\AdminArticleController::show'], ['slug'], null, null, false, true, null]],
        223 => [[['_route' => 'admin_registration_show', '_controller' => 'App\\Controller\\AdminPreRegistrationController::show'], ['id'], null, null, false, true, null]],
        244 => [[['_route' => 'admin_registration_edit', '_controller' => 'App\\Controller\\AdminPreRegistrationController::edit'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'admin_stage_show', '_controller' => 'App\\Controller\\AdminRegistrationStageController::show'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'admin_stage_edit', '_controller' => 'App\\Controller\\AdminRegistrationStageController::edit'], ['id'], null, null, false, true, null]],
        319 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\AdminContactController::show'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'contact_edit', '_controller' => 'App\\Controller\\AdminContactController::edit'], ['id'], null, null, false, true, null]],
        383 => [
            [['_route' => 'admin_contact_delete', '_controller' => 'App\\Controller\\AdminContactController::delete'], ['id'], null, null, false, true, null],
            [['_route' => 'admin_registration_delete', '_controller' => 'App\\Controller\\AdminPreRegistrationController::delete'], ['id'], null, null, false, true, null],
            [['_route' => 'admin_stage_delete', '_controller' => 'App\\Controller\\AdminRegistrationStageController::delete'], ['id'], null, null, false, true, null],
        ],
        411 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], null, null, false, false, null]],
        425 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], null, null, false, false, null]],
        434 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], null, null, false, true, null]],
        458 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'], ['firstName'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
