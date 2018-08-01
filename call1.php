<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 23.07.2018
 * Time: 17:25
 */
require_once 'Math/Complex1.php';

$a = new MathComplex1;
$a->re = 314;
$a->im = 131;

$b = new MathComplex1;
$b->re = 200;
$b->im = 100;

$a->add($b);

echo $a->__toString();

echo "Значение: $a";
