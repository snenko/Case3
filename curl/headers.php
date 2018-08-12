<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 12.08.2018
 * Time: 12:11
 */
function get_content($hostname){
    $curl = curl_init($hostname);

    //вернуть результат в виде строки
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);
    // включаем http заголовки
    curl_setopt($curl,CURLOPT_HEADER, 1);
    //ИСКЛЮЧИТЬ ТЕЛО HTTP-ДОКУМЕНТА
    curl_setopt($curl,CURLOPT_NOBODY, 1);

    //получаем http заголовки
    $content = curl_exec($curl);
    curl_close($curl);

    return explode("\r\n", $content);
}

$hostname = "http://php.net";
$out = get_content($hostname);
echo '<pre>';
print_r($out);
echo '<pre/>';
