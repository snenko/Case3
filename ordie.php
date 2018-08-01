<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 18.07.2018
 * Time: 21:00
 */
function makeHex($st){
    for($i = 0; $i<strlen($st); $i++)
        $hex[] = sprintf("%02X", ord($st[$i]));
    return join("", $hex);
}

$f = fopen(__FILE__, "rb");
echo "binary: ".makeHex(fgets($f, 100))."<br/>";
$f = fopen(__FILE__, "rt");
echo "text: ".makeHex(fgets($f, 100))."<br/>";
