<?php

class C_clone{
    public $name;
    public function __construct($name)
    {
     $this->name= $name;   
    }
    public function name_S($name){
        $this->name = $name;
        $this->name = new T_clone($name);
    }
}
class T_clone{
    public $A_name;

    public function __construct($name)
    {
        $this->A_name = $name;
    }
    public function __clone()
    {
        $this->A_name = clone $this->A_name;
    }
}
$a = new C_clone("Rahad");

$b = clone $a;

$b->name_S("Rofiq");
print_r($a);
print_r($b->name);
