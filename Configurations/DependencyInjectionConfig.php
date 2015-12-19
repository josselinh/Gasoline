<?php

/*

  $pdo = new PDO($connector . ':host=' . $host . ';dbname=' . $dbname, $login, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
  $pdo->exec('SET NAMES utf8');
 * 
 * 
 */

$dependencyInjectionConfig = new \Frwoph\Vendors\FrwophDependencyInjection\FrwophDependencyInjectionConfig();
$dependencyInjectionConfig->add('controller.users', 'Gasoline\Controllers\Users\UsersController', array('@service.user'));
$dependencyInjectionConfig->add('service.user', 'Gasoline\Services\User\UserService', array('@repository.user'));
$dependencyInjectionConfig->add('repository.user', 'Gasoline\Repositories\User\UserRepository', array('@pdo.default'));
$dependencyInjectionConfig->add('pdo.default', 'Frwoph\Vendors\FrwophPdo\FrwophPdo', array('mysql', 'localhost', 'gasoline', 'gasoline', 'DfzaRYtSn5dUM94f'));
