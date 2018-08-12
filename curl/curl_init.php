<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 12.08.2018
 * Time: 11:58
 */
// задаем адрес удаленного сервера
$curl = curl_init("http://php.net");
//устанавливаем параметры соеденения
curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);
$content = curl_exec($curl);
//закрываем curl-соеденение
curl_close($curl);
//выводим содержимое
echo $content;