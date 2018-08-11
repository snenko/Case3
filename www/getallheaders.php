<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 05.08.2018
 * Time: 13:48
 */
$headers = getallheaders();
Header("Content-type: text/plain");
print_r($headers);