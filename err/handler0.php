<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 29.07.2018
 * Time: 15:02
 */
function MyErrorHandler($errno, $msg, $file, $line)
{
    echo '<div style="border-style: inset; border-width:2">';
    echo "Произошла ошибка с кодом <b> $errno  </b>";
    echo "File: <tt> $file </tt>, строка $line .";
    echo "Текст ошибки: $msg";
    echo '</div>';
}
set_error_handler("MyErrorHandler", E_ALL);
filemtime("spoon");


