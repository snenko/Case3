<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 03.08.2018
 * Time: 23:21
 */
require_once 'lib/Complex2.php';
//Пусть имя класса хранится в переменной $classname
$classname = 'MathComplex2';
//а параметре его конструктора в $args
$args = [1,2];
//ReflectionClass - создает обьект хранящий всю информацию о классе
$class = new ReflectionClass($classname);
//создаем обьект класса явно (аргументы указывались явно)
$obj = $class->newInstance(101,303);
echo "Первый обьект $obj";
//создаем обьект класса не явно
$obj = call_user_func_array([$class, "newInstance"], $args);
echo "Второй обьект $obj";
