<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 03.08.2018
 * Time: 16:26
 */

function recursion_dir($path){
    static $depth = 0;
    $dir = opendir($path);
    while (($file  = readdir($dir)) !== false){
        if ($file == '.' || $file == '..') continue;
        echo str_repeat("-",$depth)." $file<br/>";
        if(is_dir("$path/$file")){
            $depth++;
            recursion_dir("$path/$file");
            $depth--;
        }
    }
    closedir($dir);
}
recursion_dir('.');