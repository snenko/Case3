<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 23.07.2018
 * Time: 17:45
 */
class MathComplex2{
    public $re, $im;

    function __construct($re=0, $im=0)
    {
        $this->im=$im;
        $this->re=$re;
    }
    function add(MathComplex2 $y){
        $this -> re += $y->re;
        $this -> im += $y->im;
    }
    function __toString(){
        return "({$this->re}), ({$this->im})";
    }
}