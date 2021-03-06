<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    'account_login' => [[], ['_controller' => 'App\\Controller\\AccountController::login'], [], [['text', '/login']], [], []],
    'account_logout' => [[], ['_controller' => 'App\\Controller\\AccountController::logout'], [], [['text', '/logout']], [], []],
    'admin_account_register' => [[], ['_controller' => 'App\\Controller\\AccountController::register'], [], [['text', '/admin/account/register']], [], []],
    'account_profile' => [[], ['_controller' => 'App\\Controller\\AccountController::profile'], [], [['text', '/account/profile']], [], []],
    'account_password' => [[], ['_controller' => 'App\\Controller\\AccountController::updatePassword'], [], [['text', '/account/password-update']], [], []],
    'admin_account_login' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::login'], [], [['text', '/admin/login']], [], []],
    'admin_account_logout' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::logout'], [], [['text', '/admin/logout']], [], []],
    'admin_adherent_index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminAdherentController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/adherents']], [], []],
    'admin_adherent_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminAdherentController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/adherent']], [], []],
    'index_article' => [[], ['_controller' => 'App\\Controller\\AdminArticleController::index'], [], [['text', '/ad/article']], [], []],
    'admin_index_article' => [[], ['_controller' => 'App\\Controller\\AdminArticleController::adminIndex'], [], [['text', '/admin/article/index']], [], []],
    'article_show' => [['slug'], ['_controller' => 'App\\Controller\\AdminArticleController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/ad']], [], []],
    'admin_article_create' => [[], ['_controller' => 'App\\Controller\\AdminArticleController::create'], [], [['text', '/admin/article/new']], [], []],
    'admin_article_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminArticleController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'admin_contact_index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminContactController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/contact']], [], []],
    'contact_create' => [[], ['_controller' => 'App\\Controller\\AdminContactController::create'], [], [['text', '/contact/new']], [], []],
    'admin_contact_show' => [['id'], ['_controller' => 'App\\Controller\\AdminContactController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contact']], [], []],
    'contact_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminContactController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit']], [], []],
    'admin_contact_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminContactController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contact/delete']], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::index'], [], [['text', '/admin']], [], []],
    'admin_registration_index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminPreRegistrationController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/registration']], [], []],
    'admin_registration_create' => [[], ['_controller' => 'App\\Controller\\AdminPreRegistrationController::create'], [], [['text', '/admin/registration/new']], [], []],
    'admin_registration_show' => [['id'], ['_controller' => 'App\\Controller\\AdminPreRegistrationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/registration']], [], []],
    'admin_registration_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminPreRegistrationController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/registration/edit']], [], []],
    'admin_registration_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminPreRegistrationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/delete']], [], []],
    'admin_stage_index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminRegistrationStageController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/stage']], [], []],
    'admin_stage_create' => [[], ['_controller' => 'App\\Controller\\AdminRegistrationStageController::create'], [], [['text', '/admin/stage/new']], [], []],
    'admin_stage_show' => [['id'], ['_controller' => 'App\\Controller\\AdminRegistrationStageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/stage']], [], []],
    'admin_stage_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminRegistrationStageController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/stage/edit']], [], []],
    'admin_stage_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminRegistrationStageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/stage/delete']], [], []],
    'admin_res_index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminResController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/res']], [], []],
    'admin_res_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminResController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/res']], [], []],
    'admin_res_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminResController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/res']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], []],
    'reservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], []],
    'reservation_create' => [[], ['_controller' => 'App\\Controller\\ReservationController::create'], [], [['text', '/reservation/new']], [], []],
    'reservation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'reservation_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'reservation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'user_show' => [['firstName'], ['_controller' => 'App\\Controller\\UserController::index'], [], [['variable', '/', '[^/]++', 'firstName', true], ['text', '/user']], [], []],
];
