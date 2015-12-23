<?php

use Frwoph\Vendor\Frwoph\DependencyInjection\DependencyInjectionConfig;

$dependencyInjectionConfig = new DependencyInjectionConfig();
$dependencyInjectionConfig->add('controller.users', 'Gasoline\Controllers\Users\UsersController', array('@service.user'));
$dependencyInjectionConfig->add('service.user', 'Gasoline\Services\User\UserService', array('@repository.user'));
$dependencyInjectionConfig->add('repository.user', 'Gasoline\Repositories\User\UserRepository', array('@pdo.default'));
$dependencyInjectionConfig->add('pdo.default', 'Frwoph\Vendor\Frwoph\ePdo\ePdo', array('mysql', 'localhost', 'gasoline', 'gasoline', 'DfzaRYtSn5dUM94f'));
