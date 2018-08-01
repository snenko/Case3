<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 19.07.2018
 * Time: 22:12
 */
$file = "counter.dat";
fclose(fopen($file,"a+b"));
$f = fopen($file,"r+t");
flock($f,LOCK_EX);
$count = fread($f, 100);
$count = $count + 1;
ftruncate($f,0); // очищаем файл;
fseek($f,0,SEEK_SET);
fwrite($f,$count);
fclose($f);
echo $count;