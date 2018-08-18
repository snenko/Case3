<?php
define("GBook", "gbook.dat");
require_once "model.php";

//Исполняемая часть сценария
// Сначала загрузка  гостевой книги.
$book = loadBook(GBook);
//обработка формы если сценарий вызван через нее
//если сценарий запущен через кнопку Send
if(!empty(@$_REQUEST['doAdd'])){
    //добавление в книгу записей пользователя
    //запись добавляется в начало книги
    $book = [time()=> $_REQUEST['new']] + $book;
    //записать книгу на диск
    saveBook(GBook, $book);
}

include "view.php";
