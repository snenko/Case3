<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 12.08.2018
 * Time: 15:59
 */
require_once('./vendor/autoload.php');

$log = new Monolog\Logger('name');
$handler = new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING);
$log->pushHandler($handler);
$log->addWarning("WARNING BY MJ");
