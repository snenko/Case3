<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 10.08.2018
 * Time: 14:18
 */
try{
    $db_user = 'study';
    $db_pass = '1111';
    $pdo = new PDO(
        'mysql:host=localhost;dbname=forum',
        $db_user,
        $db_pass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",// UTF-8
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]));//обработка ошибок
}catch (PDOException $e){
    echo "Невозможно подключится к БД. Обратитесь к администратору.";
}
