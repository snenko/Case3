<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 11.08.2018
 * Time: 18:43
 */
$string = $_SERVER['QUERY_STRING'] ?? "Created by MiJunior";
//загружаем рисунок фона с диска
$im = imagecreatefromgif("button.gif");
//создаем в палитре новый цвет - черный
$color = imagecolorallocate($im,0,0,0);
//вычесляем размеры текста который будет выведен
$px = (imageSX($im)-6.5*strlen($string))/2;
//Выводим строку поверх того что было в загреженом изображении
imagestring($im,3,$px,1,$string,$color);
//сообщаем что далее идет рисунок png
Header("Content-type: image/png");
//Отправляем данные картинки в выходной поток т.е. браузер
imagepng($im);
//освобождаем память занятую картинкой
imagedestroy($im);
