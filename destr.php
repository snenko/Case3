<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 23.07.2018
 * Time: 18:20
 */
require_once 'Math/Logger.php';
for ($n= 0; $n <10; $n++){
    $logger= new FileLogger("test$n" , "test.log");
    $logger->log("Hello");
}
exit();

