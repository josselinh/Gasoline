<?php

use Frwoph\Vendor\Frwoph\Router\RouterConfig;

$routesConfig = new RouterConfig();
$routesConfig->add('home', '/', 'home', 'index');
$routesConfig->add('users_index', '/users/index', 'users', 'index');
$routesConfig->add('users_index_root', '/users', 'users', 'index');
$routesConfig->add('users_view', '/users/view/{id}', 'users', 'view');
