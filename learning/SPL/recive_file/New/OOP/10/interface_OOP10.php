<?php

interface Rahad{
   public function Shape1();
   public function Shape12();
}

class Shape implements Rahad{
    function Shape1()
    {
        echo "MY name is Rahad Hasan {$this->Shape12()} \n";
    }
    function Shape12()
    {
        return 7+8;
    }
}
interface Winter extends Rahad{
   public function Shape1();
   public function Shape12();
}

class Summer implements Winter{
  function Shape1(){
      echo "Computer \n";
  }
   function Shape12(){
      echo "Laptop \n";
  }
} 
abstract class abstractBase implements Rahad{
    abstract function read();
    abstract function readWrite();
}
class ClassName extends abstractBase
{
    function Shape1(){
        echo "Computer \n";
    }
     function Shape12(){
        echo "Laptop \n";
    }
    function read(){
        echo "My phone";
    }
    function readWrite(){
        echo "My computer";
    }
}

$newObject= new Summer("");
$newObject->Shape1();

echo $newObject instanceof Summer;

$object1 = new ClassName();
echo $object1->readWrite();