<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 03.08.2018
 * Time: 15:53
 */
$dir = new DirectoryIterator('..');
foreach ($dir as $file){
    echo $file."<br/>";
}
