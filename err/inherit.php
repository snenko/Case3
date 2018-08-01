<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 30.07.2018
 * Time: 13:00
 */
class FileSystemException extends Exception{
    private $name;
    public function __construct($name)
    {
        parent::__construct($name);
        $this->name=$name;
    }
    public function getName(){return $this->name;}
}
class FileNotFoundException extends FileSystemException{}
class FileWriteException extends FileSystemException{}
try{
    if(!file_exists("spoon"))
        throw new FileNotFoundException("spoon");
}catch (FileSystemException $e){
    echo "Ошибка при работе с файлом ".$e->getName().".<br/>";
}catch (Exception $e){
    echo "Другое исключение: {$e->getDirName()}";
}
