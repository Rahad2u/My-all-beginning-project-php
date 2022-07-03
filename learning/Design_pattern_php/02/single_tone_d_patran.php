<?php 

class Singgletone_bugh{
    static $interface = [];
    private $name;
    function __construct($name)
    {
        $this->name = $name;
        echo "Create new data\n";
    }

    static function get_this($name){
        if(!isset(self::$interface[$name])){
            if($name){
                self::$interface[$name] =  new Singgletone_bugh($name);
            }else{
                self::$interface[$name] =  new Singgletone_bugh("");
            }
        }else{
            echo "Create old data\n";
        }
        return self::$interface[$name];
    }
    function weiteData($d_name){
        echo "Your data is {$this->name}";
    }
}

$ob1 = Singgletone_bugh::get_this("My file path is 0\n");
$ob2 = Singgletone_bugh::get_this("My file path is 1\n");
$ob3 = Singgletone_bugh::get_this("My file path is 2\n");

$ob1->weiteData("file_path1");
$ob2->weiteData("file_path2");
$ob3->weiteData("file_path3");