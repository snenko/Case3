<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 23.07.2018
 * Time: 17:25
 */
require_once 'Math/Complex.php';

$obj = new MathComplex;
$obj->re = 0;
$obj->im = 0;


$obj->add(19.06,107);
echo "({$obj->re}, {$obj->im})";

