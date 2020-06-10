<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'gpscompany' => [[], ['_controller' => 'App\\Controller\\GpscompanyController::index'], [], [['text', '/gpscompany']], [], []],
    'socialnetwork_index' => [[], ['_controller' => 'App\\Controller\\SocialnetworkController::index'], [], [['text', '/socialnetwork/']], [], []],
    'socialnetwork_new' => [[], ['_controller' => 'App\\Controller\\SocialnetworkController::new'], [], [['text', '/socialnetwork/new']], [], []],
    'socialnetwork_show' => [['id'], ['_controller' => 'App\\Controller\\SocialnetworkController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/socialnetwork']], [], []],
    'socialnetwork_edit' => [['id'], ['_controller' => 'App\\Controller\\SocialnetworkController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/socialnetwork']], [], []],
    'socialnetwork_delete' => [['id'], ['_controller' => 'App\\Controller\\SocialnetworkController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/socialnetwork']], [], []],
    'mapTest' => [[], ['_controller' => 'App\\Controller\\TestMapController::index'], [], [['text', '/mapTest']], [], []],
    'authorPannel_index' => [[], ['_controller' => 'App\\Controller\\back\\AuthorPannelController::index'], [], [['text', '/authorPannel']], [], []],
    'authorPannel_create' => [[], ['_controller' => 'App\\Controller\\back\\AuthorPannelController::form'], [], [['text', '/authorPannel/create']], [], []],
    'authorPannel_update' => [['id'], ['_controller' => 'App\\Controller\\back\\AuthorPannelController::form'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/authorPannel']], [], []],
    'authorPannel_delete' => [['id'], ['_controller' => 'App\\Controller\\back\\AuthorPannelController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/authorPannel']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\back\\ContactController::index'], [], [['text', '/contact']], [], []],
    'security_registration' => [[], ['_controller' => 'App\\Controller\\back\\SecurityController::registration'], [], [['text', '/inscription']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\back\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\back\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\back\\UserController::index'], [], [['text', '/administration/']], [], []],
    'new' => [[], ['_controller' => 'App\\Controller\\back\\UserController::form'], [], [['text', '/administration/new']], [], []],
    'edit' => [['id'], ['_controller' => 'App\\Controller\\back\\UserController::form'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/administration']], [], []],
    'read' => [['id'], ['_controller' => 'App\\Controller\\back\\UserController::read'], [], [['text', '/read'], ['variable', '/', '[^/]++', 'id', true], ['text', '/administration']], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\back\\UserController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/administration']], [], []],
    'user_pro_index' => [[], ['_controller' => 'App\\Controller\\back\\UserProController::index'], [], [['text', '/userpro/']], [], []],
    'user_pro_new' => [[], ['_controller' => 'App\\Controller\\back\\UserProController::new'], [], [['text', '/userpro/new']], [], []],
    'user_pro_show' => [['id'], ['_controller' => 'App\\Controller\\back\\UserProController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/userpro']], [], []],
    'user_pro_edit' => [['id'], ['_controller' => 'App\\Controller\\back\\UserProController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/userpro']], [], []],
    'user_pro_delete' => [['id'], ['_controller' => 'App\\Controller\\back\\UserProController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/userpro']], [], []],
    'actus_index' => [[], ['_controller' => 'App\\Controller\\front\\ActuController::actus'], [], [['text', '/actus']], [], []],
    'actus_show' => [['id'], ['_controller' => 'App\\Controller\\front\\ActuController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/actus']], [], []],
    'company_index' => [[], ['_controller' => 'App\\Controller\\front\\CompanyController::index'], [], [['text', '/company/']], [], []],
    'company_new' => [[], ['_controller' => 'App\\Controller\\front\\CompanyController::new'], [], [['text', '/company/new']], [], []],
    'company_show' => [['id'], ['_controller' => 'App\\Controller\\front\\CompanyController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/company']], [], []],
    'company_edit' => [['id'], ['_controller' => 'App\\Controller\\front\\CompanyController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/company']], [], []],
    'company_delete' => [['id'], ['_controller' => 'App\\Controller\\front\\CompanyController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/company']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\front\\HomeController::index'], [], [['text', '/']], [], []],
    'rechercher_index' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::rechercher'], [], [['text', '/rechercher']], [], []],
    'rechercher_batiment' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestBatiment'], [], [['text', '/rechercher/batiment']], [], []],
    'rechercher_beaute' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestbeaute'], [], [['text', '/rechercher/beaute']], [], []],
    'rechercher_sante' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestsante'], [], [['text', '/rechercher/sante']], [], []],
    'rechercher_hotellerie' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requesthotellerie'], [], [['text', '/rechercher/hotellerie']], [], []],
    'rechercher_restauration' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestrestauration'], [], [['text', '/rechercher/restauration']], [], []],
    'rechercher_jardin' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestjardin'], [], [['text', '/rechercher/jardin']], [], []],
    'rechercher_sport' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestsport'], [], [['text', '/rechercher/sport']], [], []],
    'rechercher_transport' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requesttransport'], [], [['text', '/rechercher/transport']], [], []],
    'rechercher_servicepro' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestservicepro'], [], [['text', '/rechercher/servicepro']], [], []],
    'rechercher_serviceperso' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestserviceperso'], [], [['text', '/rechercher/serviceperso']], [], []],
    'rechercher_association' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestassociation'], [], [['text', '/rechercher/association']], [], []],
    'rechercher_divers' => [[], ['_controller' => 'App\\Controller\\front\\RechercheController::requestdivers'], [], [['text', '/rechercher/divers']], [], []],
];