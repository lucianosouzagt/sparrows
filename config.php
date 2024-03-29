<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/sparrows/");
	$config['dbname'] = 'sparrows';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://sparrows.etm.srv.br/sparrows/");
	$config['dbname'] = 'sparrows';
	$config['host'] = 'sparrows.mysql.dbaas.com.br';
	$config['dbuser'] = 'sparrows';
	$config['dbpass'] = 'Admin@123';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);