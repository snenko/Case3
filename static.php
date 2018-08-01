<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 23.07.2018
 * Time: 19:01
 */
class Counter{
    private static $count = 0;
    public function __construct()
    {
        self::$count++;
    }
    public function __destruct()
    {
        self::$count--;// TODO: Implement __destruct() method.
    }
    public function getCount(){ return self::$count;}

}
for ($objs = [], $i =0; $i<6; $i++){
    $objs[] = new Counter();
}
echo "Now exist: {$objs[0]->getCount()} objects. <br/>";

$objs[5] = null;
echo "Now exist: {$objs[0]->getCount()} objects. <br/>";
$objs = [];
echo "Now exist:".Counter::getCount()." objects. <br/>";