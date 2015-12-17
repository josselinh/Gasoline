<?php

require_once '../Frwoph/Frwoph.php';
require_once './Configurations/RoutesConfig.php';

$bootstrap = new Frwoph\Bootstrap(__DIR__);
$bootstrap->addRoutesConfig($routesConfig);
$bootstrap->execute();
