<?php

class PrantClass{
    protected $name;
    function __construct($what)
    {
        $this->name = $what;
        $this->P_class();
    }
    function P_class(){
       echo "Hello {$this->name}";
    }
}

class ChildClass extends PrantClass{
    function P_class(){
        parent::P_class();// Main calss function acceptes rulls
        echo "Hi {$this->name}";
     }
}

$New_object = new ChildClass("Rahad");