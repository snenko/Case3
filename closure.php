<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 16.07.2018
 * Time: 18:37
 */
$message = "Работа не может быть продолжена изза ошибок: <br/>";
$check = function (array $erorrs) use ($message){
    if(isset($erorrs)&& count($erorrs)>0){
        echo $message;
        foreach ($erorrs as $erorr) {
            echo "$erorr <br/>";

        }
    }
};

$check([]);
$erorrs[]= "Заполните имя пользователя";
$check($erorrs);
$message = "Список требований";
$erorrs = ["PHP", "MySQL", "memcache"];
$check($erorrs);