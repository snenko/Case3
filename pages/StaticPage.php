<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 24.07.2018
 * Time: 21:39
 */
require_once 'Cached.php';
class StaticPage extends Cached{
    public function __construct($id)
    {
        //проверяем нет ли такой страницы в кэше
        if($this->isCached($this->id($id))){
            //есть - инициализируем объект содержимим кэша
            parent::__construct($this->title(), $this->content());
        }else{
            //данные пока не кэшированы - собираем с БД
           // $query = "SELECT * FROM static_pages WHERE id = :id LIMIT 1";
           // $sth = $dbh->prepare($query);
           // $sth = $dbh->execute($query, [$id]);
            //$page = $sth->fetch(PDO::FETCH_ASSOC);
            //parent::__construct($page['title'], $page['title']);
            parent::__construct("Контакты", "Содержимое страницы Контакты");
        }
    }

    //уникальный ключ для кэша
    public function id($name)
    {
      return "static_page_{$name}";
    }
}