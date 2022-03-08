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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/tasks/create' => [[['_route' => 'task_create', '_controller' => 'App\\Controller\\TaskController::createAction'], null, null, null, false, false, null]],
        '/tasks' => [[['_route' => 'task_list', '_controller' => 'App\\Controller\\TaskController::listAction'], null, null, null, false, false, null]],
        '/taskskanban' => [[['_route' => 'task_list_kanban', '_controller' => 'App\\Controller\\TaskController::listKanbanAction'], null, null, null, false, false, null]],
        '/tasksDone' => [[['_route' => 'task_done', '_controller' => 'App\\Controller\\TaskController::listActionDone'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/tasks/([^/]++)(?'
                    .'|(*:186)'
                    .'|/(?'
                        .'|edit(*:202)'
                        .'|toggle(*:216)'
                        .'|delete(*:230)'
                        .'|set(?'
                            .'|done(*:248)'
                            .'|todo(*:260)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        186 => [[['_route' => 'task_user_list', '_controller' => 'App\\Controller\\TaskController::listActionUser'], ['id'], null, null, false, true, null]],
        202 => [[['_route' => 'task_edit', '_controller' => 'App\\Controller\\TaskController::editAction'], ['id'], null, null, false, false, null]],
        216 => [[['_route' => 'task_toggle', '_controller' => 'App\\Controller\\TaskController::toggleTaskAction'], ['id'], null, null, false, false, null]],
        230 => [[['_route' => 'task_delete', '_controller' => 'App\\Controller\\TaskController::deleteTaskAction'], ['id'], null, null, false, false, null]],
        248 => [[['_route' => 'taskdone', '_controller' => 'App\\Controller\\TaskController::setDone'], ['id'], null, null, false, false, null]],
        260 => [
            [['_route' => 'tasktodo', '_controller' => 'App\\Controller\\TaskController::setTodo'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
