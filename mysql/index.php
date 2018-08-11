<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 10.08.2018
 * Time: 14:28
 */
require_once 'db_connect.php';

$query = "SELECT VERSION() AS version";
$ver = $pdo->query($query);

$version = $ver->fetch();
echo $version['version'];