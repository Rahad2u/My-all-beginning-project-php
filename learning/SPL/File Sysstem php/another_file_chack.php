<?php

class FileSystem{
    private $dirctory = [];
    private $files = [];
    private $path;
    private $directory_object = [];
    function __construct($path)
    {
        if(is_readable($path)){
            $this->path = $path;
            $entries = scandir($path);
            foreach($entries as $entry){
                if("."!=$entry && ".."!=$entry){
                    if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
                        array_push($this->dirctory, $entry);
                    }else{
                        array_push($this->files, $entry);
                    }
                }
            }
        }    
    }
    function readDirectory($inputFiles){
        echo "Show file";
       if(isset($this->dirctory[$inputFiles])){
           if(!isset($this->directory_object[$inputFiles])){
               echo "Creating new object\n";
            return $this->directory_object[$inputFiles] = new FileSystem($this->path.DIRECTORY_SEPARATOR.$this->dirctory[$inputFiles]);
           }else{
               echo "Creating old object\n";
           }
           return $this->directory_object[$inputFiles];
       }else{
           throw new Exception("File not Exist");
       }
       return false;
    }
    function get_directory(){
        return $this->dirctory;
    }
    function get_files(){
        return $this->files;
    }
}

$a = new FileSystem(getcwd());

print_r($a->get_directory());
print_r($a->get_files());

$read = $a->readDirectory(2);
print_r($read->get_directory());

$read = $a->readDirectory(2);
print_r($read->get_directory());

$file_put_and_file_lock = $read->readDirectory(6);
print_r($file_put_and_file_lock->get_files());