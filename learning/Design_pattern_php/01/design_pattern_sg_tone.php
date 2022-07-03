<?php

// Design pattern learn php Singgle tone pattern

class PatternPHP{
    static $interface;
    private $name;
    function __construct($name)
    {
        $this->name = $name;
        echo "Create new data \n";
    }
    static function Singgle_tone($name){
        if(!self::$interface){
            if($name){
            self::$interface =  new PatternPHP($name);
            }else{
            self::$interface =  new PatternPHP("");
            }
        }else{
            echo "Create old data \n";
        }
        return self::$interface;
    }
    function Sayname(){
       echo $this->name;
    }
}

$ob1 = PatternPHP::Singgle_tone("Rohim\n");
$ob2 = PatternPHP::Singgle_tone("Korim");
$ob3 = PatternPHP::Singgle_tone("");
$ob4 = PatternPHP::Singgle_tone("");

$ob1->Sayname();
$ob2->Sayname();