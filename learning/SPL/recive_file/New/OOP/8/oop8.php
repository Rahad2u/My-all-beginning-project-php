<?php

abstract class Shape1{
    protected $number;
    public function __construct($number)
    {
        $this->n = $number;
    }
    public function Trianggle(){
        echo "Hi";
    }
   abstract function name();
}

class Country extends Shape1{
    protected $number;
    public function __construct($number)
    {
        $this->number = $number;
    }
 public function name(){
     echo "My name is Rahad Hasan my age {$this->number} \n";
 }
}
class Mycountry extends Shape1{
   protected $myRoll;
   protected $myAge;
    public function __construct($roll1, $roll2)
    {
        $this->myRoll = $roll1;
        $this->myAge = $roll2;
        $this->name();
    }
    function name(){
        return $this->myRoll * $this->myAge;
    }
}
$a = new Country(40);
$a->name();
$b = new Mycountry(10,20);
$b->name();