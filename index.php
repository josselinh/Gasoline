<?php

require_once '../Frwoph/Frwoph.php';
require_once 'Configurations/RoutesConfig.php';
require_once 'Configurations/DependencyInjectionConfig.php';

$bootstrap = new Frwoph\Bootstrap(__DIR__);
$bootstrap->addConfig('routes', $routesConfig);
$bootstrap->addConfig('dependencies', $dependencyInjectionConfig);
$bootstrap->execute();
