<?php

//configuration
require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/');
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

//$config->set('dbhost', 'localhost');
//$config->set('dbname', 'gestion_estudiantil');
//$config->set('dbuser', 'root');
//$config->set('dbpass', '');
$config->set('dbhost', '163.178.107.10');
$config->set('dbname', 'bd_bazartcu');
$config->set('dbuser', 'laboratorios');
$config->set('dbpass', 'UCRSA.118');
?>