<?php
class C_clone{
    public $name;
    public function __construct($name)
    {
     $this->name= $name;   
    }
    public function name_S($name){
        $this->name = $name;
    }
    public function __toString()
    {
        return "MY name is {$this->name}.";
    }
}

$a = new C_clone("Rahad");
echo $a;