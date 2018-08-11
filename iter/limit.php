<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 03.08.2018
 * Time: 16:20
 */
require_once 'lib/filter.php';

$limit = new LimitIterator(
    new ExtensionFilter(new DirectoryIterator('.'), "php"),
        0,5);
foreach ($limit as $file){
    echo $file."<br/>";
}