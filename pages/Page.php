<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 24.07.2018
 * Time: 21:07
 */
class Page{
    // Заголовок
    protected $title;
    //контент
    protected $content;
    //конструктор класса
    public function __construct($title = ' ', $content = ' ')
    {
        $this->title= $title;
        $this->content= $content;
    }
    // получение заголовка страницы
    public function title(){
        return $this->title;
    }
    // получение содержимого страницы
    public function content(){
        return $this->content;
    }
    // рендер страницы
    public function render(){
        echo "<h1>".htmlspecialchars($this->title())."</h1>";
        echo "<p>".nl2br(htmlspecialchars($this->content()))."</p>";

    }

}