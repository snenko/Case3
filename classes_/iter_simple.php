<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 01.08.2018
 * Time: 23:32
 */
class Monolog{
    public $first = "we";
    protected $second = "go";
    public $third = "study";
    protected $fourth = "PHP";
    protected $fifth = "Mi";
    public $sixth = "Junior";
}
$monolog = new Monolog();
foreach ($monolog as $k=>$v){
    echo "$k: $v <br/>";
}