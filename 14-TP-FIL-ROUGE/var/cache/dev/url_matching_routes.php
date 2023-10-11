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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'app_api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\CartController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deluxe' => [[['_route' => 'app_chambre_deluxe', '_controller' => 'App\\Controller\\ChambreController::index'], null, null, null, false, false, null]],
        '/junior' => [[['_route' => 'app_chambre_junior', '_controller' => 'App\\Controller\\ChambreController::chambreJunior'], null, null, null, false, false, null]],
        '/superieure' => [[['_route' => 'app_chambre_superieure', '_controller' => 'App\\Controller\\ChambreController::chambreSuperieure'], null, null, null, false, false, null]],
        '/chiffre/daffaires' => [[['_route' => 'app_chiffre_daffaires', '_controller' => 'App\\Controller\\ChiffreDaffairesController::index'], null, null, null, false, false, null]],
        '/confirmation' => [[['_route' => 'app_confirmation', '_controller' => 'App\\Controller\\ConfirmationController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/count/reservation' => [[['_route' => 'app_count_reservation', '_controller' => 'App\\Controller\\CountReservationController::index'], null, null, null, false, false, null]],
        '/chambreOcuppee' => [[['_route' => 'chambreOcuppee', '_controller' => 'App\\Controller\\FullRoomController::index'], null, null, null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/libre/chambre' => [[['_route' => 'app_libre_chambre', '_controller' => 'App\\Controller\\LibreChambreController::index'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'paiement', '_controller' => 'App\\Controller\\PaiementController::paiement'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pdf/generator' => [[['_route' => 'app_pdf_generator', '_controller' => 'App\\Controller\\PdfGeneratorController::index'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservations' => [
            [['_route' => 'app_reservation_crud_test_index', '_controller' => 'App\\Controller\\ReservationCrudTestController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_reservations', '_controller' => 'App\\Controller\\ReservationsController::index'], null, null, null, false, false, null],
        ],
        '/reservations/new' => [[['_route' => 'app_reservation_crud_test_new', '_controller' => 'App\\Controller\\ReservationCrudTestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vister/lhotel' => [[['_route' => 'app_vister_lhotel', '_controller' => 'App\\Controller\\VisterLhotelController::index'], null, null, null, false, false, null]],
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
                .'|/rese(?'
                    .'|rvation(?'
                        .'|/(?'
                            .'|([^/]++)(*:199)'
                            .'|chambres\\-libres(*:223)'
                            .'|new(*:234)'
                            .'|([^/]++)(?'
                                .'|/edit(*:258)'
                                .'|(*:266)'
                            .')'
                        .')'
                        .'|s/([^/]++)(?'
                            .'|(*:289)'
                            .'|/edit(*:302)'
                            .'|(*:310)'
                        .')'
                    .')'
                    .'|t\\-password/reset(?:/([^/]++))?(*:351)'
                .')'
                .'|/delete/([^/]++)(*:376)'
                .'|/paiement/([^/]++)(*:402)'
                .'|/tra(?'
                    .'|duction/([^/]++)(*:433)'
                    .'|nslation/([^/]++)(*:458)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:484)'
                    .'|/edit(*:497)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], ['GET' => 0], null, false, true, null]],
        223 => [[['_route' => 'chambres_libres', '_controller' => 'App\\Controller\\ReservationController::afficherChambresLibres'], [], ['GET' => 0], null, false, false, null]],
        234 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        289 => [[['_route' => 'app_reservation_crud_test_show', '_controller' => 'App\\Controller\\ReservationCrudTestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_reservation_crud_test_edit', '_controller' => 'App\\Controller\\ReservationCrudTestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'app_reservation_crud_test_delete', '_controller' => 'App\\Controller\\ReservationCrudTestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        376 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        402 => [[['_route' => 'app_paiement', '_controller' => 'App\\Controller\\PaiementController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'app_traduction', '_controller' => 'App\\Controller\\TraductionController::changeLocale'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        458 => [[['_route' => 'app_translation', '_controller' => 'App\\Controller\\TranslationController::changeLocale'], ['_locale'], null, null, false, true, null]],
        484 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        497 => [
            [['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
