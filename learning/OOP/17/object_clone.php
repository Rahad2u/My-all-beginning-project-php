<?php

class Color{
    public $color;

    public function __construct($C_name)
    {
        $this->color = $C_name;
    }

    public function set_color($color){
        $this->color = $color;
    }

}
class Object_clone{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color= new Color($color);
    }
    public function set_C($name){
        $this->name = $name;
    }
    // public function get(){
    //    return $this->name;
    // }
    public function Setcolor($color){
        $this->color->set_color($color);
    }
    public function __clone()
    {
        $this->color = clone $this->color;
    }
}

$object1 = new Object_clone("Bangladesh","Red");
$object2 = clone $object1;
print_r($object2);
$object2->Setcolor("Green");
print_r($object1);
print_r($object2);
