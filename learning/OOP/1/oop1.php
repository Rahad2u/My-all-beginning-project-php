<?php 

class My_name{
    public $A_name;
    function name(){
        echo "My name is Rahad Hasan \n";
    }
    function F_country(){
        echo "My favorite country America \n";
}
    function topic(){
        echo "My Name is {$this->A_name} \n";
    }
}

class Name2{
    function name(){
        echo "My name is Rofiq \n";
    }
}

class Name3{
    function name(){
        echo "My name is saroar \n";
    }
}

$h1 = new My_name();
$h1->A_name="Manik\n";// Set
echo $h1->topic();
$h2 = new Name2();
$h3 = new Name3();

$h1->name();
echo $h1->A_name; // Get
$h1->F_country();

$h2->name();

$h3->name();