<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 01.08.2018
 * Time: 18:26
 */
$date = new DateTime('2018-02-23 0:0:0');
$now = new DateTime();

$interval = $now->diff($date);

echo $date->format('d-m-Y H:i:s')."<br/>";
echo $now->format('d-m-Y H:i:s')."<br/>";
echo $interval->format('%d-%m-%Y %H:%i:%s')."<br/>";

echo '<pre>';
var_dump($interval);