<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 23.07.2018
 * Time: 19:13
 */
class FileLogger{
    static public $loggers = [];
    private function __construct()
    {
        $this->time= microtime(true);
    }
    public static function create($fname){
        if(isset(self::$loggers[$fname])) return self::$loggers[$fname];
    return self::$loggers[$fname] = new self($fname);
    }
    public function getTime(){
        return $this->time;
    }


}
#$loger = new FileLogger("a"); // Нельзя доступ закрыт;
$logger = FileLogger::create("file.log");
sleep(10);
$logger2 = FileLogger::create("file.log");
echo "{$logger->getTime()}, {$logger2->getTime()}";
