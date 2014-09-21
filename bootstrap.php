<?php
define('APPPATH', __DIR__ .'/');
define('DS', DIRECTORY_SEPARATOR);
require_once 'vendor/autoload.php';
require_once 'lib/autoloader.php';
Autoloader::register();
Session::start();

function __ ($string)
{
	return htmlentities($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

Logger::configure(array(
	'rootLogger' => array(
		'appenders' => array('default'),
	),
	'appenders' => array(
		'default' => array(
			'class' => 'LoggerAppenderFile',
			'layout' => array(
				'class' => 'LoggerLayoutSimple'
			),
			'params' => array(
				'file' => APPPATH .'log/recru.log',
				'append' => true,
			),
		),
	),
));
