<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 30.07.2018
 * Time: 13:37
 */
require_once 'Exception.php';

try{
    printDocument();
}catch (iFileException $e){
    echo "Файловая ошибка {$e->getMessage()}. <br />";
}catch (Exception $e){
    echo "Неизвестное исключение <pre>".$e."</pre>";
}

function printDocument(){
    $printer = "//./printer";
    if(!file_exists($printer))
        throw new NetPrintedWriteException($printer);
}