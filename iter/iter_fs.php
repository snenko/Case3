<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 02.08.2018
 * Time: 00:30
 */
require_once 'lib/FS.php';

$d = new FSDirectory("C:/xampp/htdocs/dashboard/images");
foreach ($d as $path => $entry) {
    if($entry instanceof FSFile){
        echo "<tt> $path </tt>: ".$entry->getSize()."<br/>";
    }
}