<?php ## Изменение пера
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 11.08.2018
 * Time: 21:31
 */
//создаем новое зображение
$im = imageCreate(100, 100);
$w  = imageColorAllocate($im, 255, 255,255);
$c1 = imageColorAllocate($im, 0, 0, 255);
$c2 = imageColorAllocate($im, 0, 255, 0);
//очищаем фон
imageFilledRectangle($im, 0,0, imageSX($im), imageSY($im), $w);
//устанавливаем стиль пера
$style = array($c2, $c2, $c2, $c2, $c2, $c2, $c2, $c1, $c1, $c1, $c1);
imageSetStyle($im, $style);
//устанавливаем толщину пера
imageSetThickness($im,2);
//рисуем линию
imageLine($im,0,0,100,100,IMG_COLOR_STYLED);
//выводим в браузер
header("Content-type: image/png");
imagePng($im);
