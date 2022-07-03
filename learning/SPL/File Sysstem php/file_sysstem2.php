<?php

class dir{
    private $directoris = [];
    private $files = [];
    private $path;
    private $directoriObject = [];

    function __construct($path)
    {
        if(is_readable($path)){
            $this->path = $path;
            $entrys = scandir($path);
            foreach($entrys as $entry){
                if("."!=$entry && ".."!=$entry){
                    if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
                        array_push($this->directoris, $entry);
                    }else{
                        array_push($this->files, $entry);
                    }
                }
            }
        }
    }
    function dicrctory($index){
        if(isset($this->directoris[$index])){
            if(!isset($this->directoriObject[$index])){
                echo "Creating new object\n";
                $this->directoriObject[$index] = new Dir($this->path.DIRECTORY_SEPARATOR.$this->directoris[$index]);
            }else{
                echo "Creatiog old object\n";
            }
            return $this->directoriObject[$index];
        }else{
            throw new Exception("Directory doesn't exite");
        }
        return false;
    }
    function getDrectory(){
        return $this->directoris;
    }
    function getFiles(){
        return $this->files;
    }
}

$chack = new dir(getcwd());

print_r($chack->getDrectory());
print_r($chack->getFiles());

$oop = $chack->dicrctory(10);

print_r($oop->getDrectory());

$newfolder = $oop->dicrctory(4);

print_r($newfolder->getFiles());