<?php

class object1{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

}

$a = new object1("Rahad");
$b = new object1("Rahad");

if($a === $b){
    echo "same data";
}else{
    echo "deference data";
}
