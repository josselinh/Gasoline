<?php

$routesConfig = new Frwoph\Vendors\FrwophRouter\FrwophRouterConfig();
$routesConfig->addRoute(new Frwoph\Vendors\FrwophRouter\FrwophRouterRoute('/', 'home', 'index'), 'home');
$routesConfig->addRoute(new Frwoph\Vendors\FrwophRouter\FrwophRouterRoute('/users/index', 'users', 'index'), 'users_index');
$routesConfig->addRoute(new Frwoph\Vendors\FrwophRouter\FrwophRouterRoute('/users', 'users', 'index'), 'users_index_root');
$routesConfig->addRoute(new Frwoph\Vendors\FrwophRouter\FrwophRouterRoute('/users/view/{id}/{format}', 'users', 'view'), 'users_view');