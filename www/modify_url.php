<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 05.08.2018
 * Time: 14:12
 */
require_once 'lib/http_build_url.php';
//URL с которым будем работать
$url = "http://user@example.com:80/path?arg=value#anchor";
//разбираем  URL на части
$parsed = parse_url($url);
//разбираем одну из частей, QUERY_STRING, на элементы массива
parse_str(@$parsed['query'],$query);
//добавляем новый элемент в массив QUERY_STRING
$query['names']['read'] = 'serhii';
//Собираем QUERY_STRING из массива
$parsed['query'] = http_build_query($query);
//создаем результирующий URL
$new_url = http_build_url($parsed);
//вывод
echo "Старый URL: $url <br />";
echo "Новый URL: $new_url <br />";
