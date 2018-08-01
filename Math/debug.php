<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 24.07.2018
 * Time: 16:01
 */
require_once 'Logger.php';

class FileLoggerDebug extends FileLogger {
    public function __construct($fname)
    {
        parent::__construct(basename($fname), $fname);
    }
    public function debug($s , $level = 0){
        $stack = debug_backtrace();
        $file = basename($stack[$level]['file']);
        $line = $stack[$level]['file'];
        $this ->log(
            "[at $file line $line] $s"
        );
    }
}