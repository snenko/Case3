<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 24.07.2018
 * Time: 20:34
 */
class Dumper{
    public static function printing($obj){
        print_r($obj);
    }
}
Dumper::printing(new class{
    public $title;
    public function __construct()
    {
        $this->title= "Hello world!";
    }
});