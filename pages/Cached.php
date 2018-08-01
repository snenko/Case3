<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 24.07.2018
 * Time: 21:15
 */
require_once "Page.php";
class Cached extends Page{
    //время действия кэша
    protected $expired;
    //хранилище
    protected $store;

    public function __construct($title = ' ', $content = ' ', $expired=0)
    {
        parent::__construct($title, $content);
        //установка времени жизни кэша
        $this->expired=$expired;
        //подготовка хранилища
       // $this->store= new Memcached();
        //$this->store->addServer('localhost', 80);
        //размещение данных в хранилище
        $this->set($this->id('title'), $title);
        $this->set($this->id('content'), $content);
    }
    // проверить есть ли значение $key в кэше
    protected function isCached($key){
        // return (bool) $this->store->get($key);
    }
    protected function set($key, $value, $force = false)
    {
        // if ($force) {
        //   $this->store->set($key, $value, $this->expires);
        // } else {
        //   if($this->isCached($key)) {
        //     $this->store->set($key, $value, $this->expires);
        //   }
        // }
    }
    // Извлечение значения $key из кэша
    protected function get($key)
    {
        // return $this->store->get($key);
    }
    // Формируем уникальный ключ для хранилища
    public function id($name)
    {
        die("Что здесь делать? Неизвестно!");
    }
    // Получение заголовка страницы
    public final function title()
    {
        // if ($this->isCached($this->id('title'))) {
        //   return $this->get($this->id('title'));
        // } else {
        return parent::title();
        // }
    }
    // Получение содержимое страницы
    public final function content()
    {
        // if ($this->isCached($this->id('content'))) {
        //   return $this->get($this->id('content'));
        // } else {
        return parent::content();
        // }
    }

}