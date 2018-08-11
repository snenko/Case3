<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 11.08.2018
 * Time: 19:28
 */
$size = 300;
$im = imagecreatetruecolor($size, $size);
$back = imagecolorallocate($im, 255,255,255);
imagefilledrectangle($im,0,0,$size-1,$size-1,$back);
//Создаем идентифекаторы полупрозрачных цветов
$yellow  = imagecolorallocatealpha($im,255,255,0,75);
$red     = imagecolorallocatealpha($im,255,0,0,75);
$blue    = imagecolorallocatealpha($im,0,0,255,75);
//Рисуем 3 пересекающихся круга
$radius = 150;
imagefilledellipse($im,100,75, $radius,$radius, $yellow);
imagefilledellipse($im,120,165, $radius,$radius,$red);
imagefilledellipse($im,187,125, $radius,$radius,$blue);
//выводим в браузер
Header('Content-type: image/png');
imagepng($im);
