<?php

class Staticlearn{
    static $name;
    static public function StaticTest($name){
        Staticlearn::$name = "Rahad";
        echo "My name is $name";
    }
    public function readStatic(){
        self::StaticTest("");
    }
}
class testStatic extends Staticlearn{
    public function MobilePhone(){
        self::StaticTest("");
    }
}
class B extends Staticlearn{
    static function StaticTest($name)
    {
        echo "Samsung\n";
        parent::StaticTest("Rahad");
    }
}
// $object = new testStatic();
// $object->MobilePhone();
// $object->readStatic();
// Staticlearn::readStatic();
B::StaticTest("Rahad");
// testStatic::

