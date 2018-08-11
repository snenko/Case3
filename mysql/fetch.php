<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 10.08.2018
 * Time: 17:00
 */
require_once ('db_connect.php');
header("Content-Type: text/html; charset=utf-8");

$query = "SELECT * FROM catalogs";

$cat = $pdo->query($query);

try{
    while($catalog = $cat->fetch())
        echo $catalog['name']."<br/>";
}catch (PDOException $e){
    echo "Ошибка выполнения запроса: ".$e->getMessage();
}

