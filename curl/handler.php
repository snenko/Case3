<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 12.08.2018
 * Time: 13:03
 */
if(!empty($_POST)){
    echo "Имя - ".htmlspecialchars($_POST['name'])."<br>";
    echo "Пароль - ".htmlspecialchars($_POST['passwd'])."<br>";
}