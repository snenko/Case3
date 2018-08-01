<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 29.07.2018
 * Time: 16:24
 */
echo "Начало программы </br>";
try{
    //код в котором перехватываются исключения
    echo "Все что имеет начало </br>";
    //генерируем исключения
    throw new Exception("Hello");
}catch (Exception $e){
    echo "Исключение: {$e->getMessage()} </br>";
}
echo "Конец программы";