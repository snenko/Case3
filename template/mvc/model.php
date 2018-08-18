<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 18.08.2018
 * Time: 16:59
 */
function loadBook($fname){
    if(!file_exists($fname)) return [];
    $Book = unserialize(file_get_contents($fname));
    return $Book;
}
function saveBook($fname, $book){
    file_put_contents($fname, serialize($book));
}