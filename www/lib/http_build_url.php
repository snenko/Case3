<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 05.08.2018
 * Time: 14:12
 */
## Функция обратна к parse_url().
function http_build_url($parsed)
{
    if (!is_array($parsed)) return false;
    // Задан протокол?
    if (isset($parsed['scheme'])) {
        $sep = (strtolower($parsed['scheme']) == 'mailto' ? ':' : '://');
        $url = $parsed['scheme'] . $sep;
    } else {
        $url = '';
    }
    // Задан пароль или имя пользователя?
    if (isset($parsed['pass'])) {
        $url .= "$parsed[user]:$parsed[pass]@";
    } elseif (isset($parsed['user'])) {
        $url .= "$parsed[user]@";
    }
    // QUERY_STRING представлена в виде массива?
    if (@!is_scalar($parsed['query'])) {
        // Преобразуем в строку.
        $parsed['query'] = http_build_query($parsed['query']);
    }
    // Дальше составляем URL.
    if (isset($parsed['host']))     $url .= $parsed['host'];
    if (isset($parsed['port']))     $url .= ":".$parsed['port'];
    if (isset($parsed['path']))     $url .= $parsed['path'];
    if (isset($parsed['query']))    $url .= "?".$parsed['query'];
    if (isset($parsed['fragment'])) $url .= "#".$parsed['fragment'];
    return $url;
}