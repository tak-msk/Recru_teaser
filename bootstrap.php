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

$sex = array(
    'MALE' => '男性(Male)',
    'FEMALE' => '女性(Female)',
);
$graduating = array(
    '2015' => '2015年度',
    '2016' => '2016年度',
    '2017' => '2017年度',
    '2018' => '2018年度',
    '1'    => '既卒',
);

$role = array(
    'HACKER' => 'Hacker',
    'DIRECTOR' => 'Director',
    'DESIGNER' => 'Designer',
);

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
                'file' => APPPATH .'log/internship.log',
                'append' => true,
            ),
        ),
    ),
));
