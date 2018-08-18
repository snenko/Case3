<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 16.08.2018
 * Time: 14:49
 */
ob_start();
//буфер 1
echo "Текст в буфере 1";
//откладываем на время буфер 1 и открываем второй
ob_start();
echo "буфер 2";
$sec = ob_get_contents();
ob_end_clean();
echo "это опять первый буфер";
$first = ob_get_contents();
ob_end_clean();
$first = preg_replace('/^/m', '&nbsp;&nbsp', trim($first));
$sec   = preg_replace('/^/m', '&nbsp;&nbsp', trim($sec));

echo "<i>Содержимое первого буфера:</i> <br /> $first <br />";
echo "<i>Содержимое второго буфера:</i> <br /> $sec <br />";
