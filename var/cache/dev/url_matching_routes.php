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
        '/gpscompany' => [[['_route' => 'gpscompany', '_controller' => 'App\\Controller\\GpscompanyController::index'], null, null, null, false, false, null]],
        '/socialnetwork' => [[['_route' => 'socialnetwork_index', '_controller' => 'App\\Controller\\SocialnetworkController::index'], null, ['GET' => 0], null, true, false, null]],
        '/socialnetwork/new' => [[['_route' => 'socialnetwork_new', '_controller' => 'App\\Controller\\SocialnetworkController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mapTest' => [[['_route' => 'mapTest', '_controller' => 'App\\Controller\\TestMapController::index'], null, null, null, false, false, null]],
        '/authorPannel' => [[['_route' => 'authorPannel_index', '_controller' => 'App\\Controller\\back\\AuthorPannelController::index'], null, null, null, false, false, null]],
        '/authorPannel/create' => [[['_route' => 'authorPannel_create', '_controller' => 'App\\Controller\\back\\AuthorPannelController::form'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\back\\ContactController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\back\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\back\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\back\\SecurityController::logout'], null, null, null, false, false, null]],
        '/administration' => [[['_route' => 'users', '_controller' => 'App\\Controller\\back\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/administration/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\back\\UserController::form'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/userpro' => [[['_route' => 'user_pro_index', '_controller' => 'App\\Controller\\back\\UserProController::index'], null, ['GET' => 0], null, true, false, null]],
        '/userpro/new' => [[['_route' => 'user_pro_new', '_controller' => 'App\\Controller\\back\\UserProController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/actus' => [[['_route' => 'actus_index', '_controller' => 'App\\Controller\\front\\ActuController::actus'], null, null, null, false, false, null]],
        '/company' => [[['_route' => 'company_index', '_controller' => 'App\\Controller\\front\\CompanyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/company/new' => [[['_route' => 'company_new', '_controller' => 'App\\Controller\\front\\CompanyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\front\\HomeController::index'], null, null, null, false, false, null]],
        '/rechercher' => [[['_route' => 'rechercher_index', '_controller' => 'App\\Controller\\front\\RechercheController::rechercher'], null, null, null, false, false, null]],
        '/rechercher/batiment' => [[['_route' => 'rechercher_batiment', '_controller' => 'App\\Controller\\front\\RechercheController::requestBatiment'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/beaute' => [[['_route' => 'rechercher_beaute', '_controller' => 'App\\Controller\\front\\RechercheController::requestbeaute'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/sante' => [[['_route' => 'rechercher_sante', '_controller' => 'App\\Controller\\front\\RechercheController::requestsante'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/hotellerie' => [[['_route' => 'rechercher_hotellerie', '_controller' => 'App\\Controller\\front\\RechercheController::requesthotellerie'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/restauration' => [[['_route' => 'rechercher_restauration', '_controller' => 'App\\Controller\\front\\RechercheController::requestrestauration'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/jardin' => [[['_route' => 'rechercher_jardin', '_controller' => 'App\\Controller\\front\\RechercheController::requestjardin'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/sport' => [[['_route' => 'rechercher_sport', '_controller' => 'App\\Controller\\front\\RechercheController::requestsport'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/transport' => [[['_route' => 'rechercher_transport', '_controller' => 'App\\Controller\\front\\RechercheController::requesttransport'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/servicepro' => [[['_route' => 'rechercher_servicepro', '_controller' => 'App\\Controller\\front\\RechercheController::requestservicepro'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/serviceperso' => [[['_route' => 'rechercher_serviceperso', '_controller' => 'App\\Controller\\front\\RechercheController::requestserviceperso'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/association' => [[['_route' => 'rechercher_association', '_controller' => 'App\\Controller\\front\\RechercheController::requestassociation'], null, ['GET' => 0], null, false, false, null]],
        '/rechercher/divers' => [[['_route' => 'rechercher_divers', '_controller' => 'App\\Controller\\front\\RechercheController::requestdivers'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/socialnetwork/([^/]++)(?'
                    .'|(*:195)'
                    .'|/edit(*:208)'
                    .'|(*:216)'
                .')'
                .'|/a(?'
                    .'|uthorPannel/([^/]++)/(?'
                        .'|update(*:260)'
                        .'|delete(*:274)'
                    .')'
                    .'|dministration/([^/]++)/(?'
                        .'|edit(*:313)'
                        .'|read(*:325)'
                        .'|delete(*:339)'
                    .')'
                    .'|ctus/([^/]++)(*:361)'
                .')'
                .'|/userpro/([^/]++)(?'
                    .'|(*:390)'
                    .'|/edit(*:403)'
                    .'|(*:411)'
                .')'
                .'|/company/([^/]++)(?'
                    .'|(*:440)'
                    .'|/edit(*:453)'
                    .'|(*:461)'
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
        195 => [[['_route' => 'socialnetwork_show', '_controller' => 'App\\Controller\\SocialnetworkController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'socialnetwork_edit', '_controller' => 'App\\Controller\\SocialnetworkController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'socialnetwork_delete', '_controller' => 'App\\Controller\\SocialnetworkController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        260 => [[['_route' => 'authorPannel_update', '_controller' => 'App\\Controller\\back\\AuthorPannelController::form'], ['id'], null, null, false, false, null]],
        274 => [[['_route' => 'authorPannel_delete', '_controller' => 'App\\Controller\\back\\AuthorPannelController::delete'], ['id'], null, null, false, false, null]],
        313 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\back\\UserController::form'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        325 => [[['_route' => 'read', '_controller' => 'App\\Controller\\back\\UserController::read'], ['id'], null, null, false, false, null]],
        339 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\back\\UserController::delete'], ['id'], null, null, false, false, null]],
        361 => [[['_route' => 'actus_show', '_controller' => 'App\\Controller\\front\\ActuController::show'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'user_pro_show', '_controller' => 'App\\Controller\\back\\UserProController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        403 => [[['_route' => 'user_pro_edit', '_controller' => 'App\\Controller\\back\\UserProController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        411 => [[['_route' => 'user_pro_delete', '_controller' => 'App\\Controller\\back\\UserProController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        440 => [[['_route' => 'company_show', '_controller' => 'App\\Controller\\front\\CompanyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        453 => [[['_route' => 'company_edit', '_controller' => 'App\\Controller\\front\\CompanyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [
            [['_route' => 'company_delete', '_controller' => 'App\\Controller\\front\\CompanyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
