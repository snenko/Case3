<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 11.08.2018
 * Time: 21:54
 */
## Увеличение картинки со сглаживанием
$tile = imageCreateFromJpeg("sample1.jpg");
$im   = imageCreateTrueColor(800,600);
imageFill($im,0,0,imagecolorallocate($im,0,255,0));
imageSetTile($im,$tile);
//создаем масив точек со случайными координатами
$p = [];
for($i = 0; $i<3;$i++){
    array_push($p,mt_rand(0, imageSX($im)),mt_rand(0, imageSY($im)));
}
//рисуем закрашеный многоугольник
imagefilledpolygon($im, $p, count($p)/2,IMG_COLOR_TILED);
//выводим результат
header("Content-type: image/jpeg");
imagejpeg($im);
#header("Content-type: image/png");
#imagepng($im);
imagedestroy($im);