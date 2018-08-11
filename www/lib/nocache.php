<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 05.08.2018
 * Time: 13:40
 */
##Функиця для отключения кэша
function nocache(){
    header("Expires: Thu, 19 Feb 1998 13:24:18 GMT");
    header("Last-Modified ".gmdate("D, d M Y H:i:s")." GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0");
    header("Cache-Control: max-age=0");
    header("Pragma: no-cache");
}