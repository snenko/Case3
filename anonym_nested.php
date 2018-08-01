<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 24.07.2018
 * Time: 20:38
 */
class Container
{

    private $title = "Class Container";
    protected $id = 1;
    public function anon(){

        return new class($this->title) extends Container{

            private $name;

            public function __construct($title)
            {
                $this->name = $title;
            }

            public function print1(){
                echo "{$this->name} ($this->id)";
            }
        };
    }
}
(new Container)->anon()->print1();