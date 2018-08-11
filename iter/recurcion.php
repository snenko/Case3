<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 03.08.2018
 * Time: 16:45
 */
$dir = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator('..'), true
);

foreach ($dir as $file){
    echo str_repeat("-", $dir->getDepth())." $file <br />";
}