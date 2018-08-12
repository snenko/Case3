<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 12.08.2018
 * Time: 13:09
 */
$curl = curl_init("http://localhost/TestProject/curl/handler.php");

// передача данных осуществляется методом POST
curl_setopt($curl, CURLOPT_POST, 1);
//задаем post-данные
$data = "name=".urlencode("Сергей")."&passwd=".urlencode("Пароль")."\r\n\r\n";
curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
//выполняем запрос
curl_exec($curl);
// закрываем curl-соеденение
curl_close($curl);
