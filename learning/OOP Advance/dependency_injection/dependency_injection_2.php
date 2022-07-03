<?php 

// interface Basename{
//     function file_path($fn);
//     function write($data);
// }

// class Storege implements Basename{
//     private $fn;
//     private $mode;
//     function __construct($fn, $mode='')
//     {
//         $this->file_path($fn);
//     }

//     function file_path($fn)
//     {
//         $this->fn =$fn;
//     }

//     function write($data)
//     {
//         file_put_contents($this->fn, $data, $this->mode);
//     }


// }

// class DataMenegar{
//     function saveData($filename, $data){
//         $storage = new Storege($filename);
//         $storage->write($data);
//     }
// }

// $c_o = new DataMenegar();
// $c_o->saveData("./test.txt","My parsonal data");

interface BaseName{
    function file_path($fn);
    function write($data);
    function setMode($mode);
}

class Storage implements BaseName{
    private $fn;
    private $mode;
    function __construct($fn, $mode=null)
    {
        $this->file_path($fn);
        $this->mode = $mode;
    }

    function file_path($fn)
    {
        $this->fn = $fn;
    }

    function write($data)
    {
        file_put_contents($this->fn, $data, $this->mode);
    }
    
    function setMode($mode)
    {
        $this->mode = $mode;
    }

}

// class Datamanager{
//     function saveData($filename, $data){
//         $storage = new Storage($filename);
//         $storage->write($data);
//     }
// }

class Datamanager{
    function saveData(BaseName $storage, $data){
        $storage->write($data);
    }
}

$storage_o = new Storage("./testing.txt");
// $storage_o->setMode(FILE_APPEND);
$c_o = new Datamanager();
$c_o->saveData($storage_o, "My country name is Bangladesh");