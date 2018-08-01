<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 01.08.2018
 * Time: 23:44
 */
class FSDirectory implements IteratorAggregate{
    public $path ;
    public function __construct($path)
    {
        $this->path = $path;
    }
    public function getIterator()
    {
        return new FSDirectory($this);// TODO: Implement getIterator() method.
    }
}
class FSDirectoryIterator implements IteratorAggregate{
    private $owner;
    private $d = null;
    private $cur = false;

    public function __construct($owner)
    {
        $this->owner = $owner;
        $this->d = opendir($owner->path);
        $this->rewind();
    }
    public function rewind(){
        rewinddir($this->d);
        $this->cur = readdir($this->d);

    }
    public function valid(){
        return $this->cur !==false;
    }
    public function key(){
        return $this->cur;
    }
    public function current(){
        $path = $this->owner->path."/".$this->cur;
        return is_dir($path)? new FSDirectory($path): new FSFile($path);
    }
    public function next(){
        $this->cur = readdir($this->d);
    }
}
class  FSFile
{
    public $path;
    public function __construct($path)
    {
        $this->path = $path;
    }
    public function getSize(){
        return filesize($this->path);
    }

}