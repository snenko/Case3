<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 16.07.2018
 * Time: 17:37
 */
function dumper($obj){
    echo "<pre>", htmlspecialchars(dumperGet($obj)),
    "</pre>";
}
function dumperGet($obj, $leftSp = ""){
    if(is_array($obj)){
        $type = " Array[".count($obj)."]";
    }elseif(is_object($obj)){
        $type = "Object";
    }elseif(gettype($obj)=="boolean"){
        return $obj? "true" : "false";
    }else{
        return "\"$obj\"";

    }
    $buf = $type;
    $leftSp .= "    ";
    for (Reset($obj);list($k, $v)= each($obj);){
        if($k === "GLOBALS") continue;
        $buf .= "\n$leftSp$k => ".dumperGet($v, $leftSp);
    }
    return $buf;
}