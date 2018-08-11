<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 10.08.2018
 * Time: 17:50
 */
require_once ('db_connect.php');

try{
    if(empty($_POST['name'])) exit('Не заполнено Название');
    if(empty($_POST['content'])) exit('Не заполнено Содержимое');
    $query = "INSERT INTO news VALUES (NULL, :name, NOW())";
    $news = $pdo->prepare($query);
    $news-> execute(['name' => $_POST['name']]);

    $news_id = $pdo->lastInsertId();

    $query = "INSERT INTO news_contents
              VALUES (NULL, :content, :news_id)";
    $news = $pdo->prepare($query);
    $news ->execute(['content'=> $_POST['content'],'news_id' => $news_id]);
    header("Location: news.html");
}catch (PDOException $e){
    echo "Ошибка выполнения запроса: ".$e->getMessage();
}