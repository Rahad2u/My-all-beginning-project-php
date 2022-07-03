<?php

class My_name{
    public $A_name;
    public $A_age;
    public $T_test;
    function name(){
        echo "My name is Rahad Hasan \n";
    }
    function __construct($parsonName,$age=0){
        // echo "My country name Bangladesh \n";
        $this->A_name = $parsonName;
        $this->A_age  = $age;
    }
    function F_c(){
        //echo "My favorite country America \n";
        echo $this->topic();
}
    public function topic(){
        if($this->A_age!=""){
         echo "My Name is {$this->A_name} and my age {$this->A_age}\n";
        }else{
            echo "I don't know your name and age";
        }
    }
    function T_topic(){
        echo "test korbo sudhu {$this->T_test}";
    }
}

$test  = new My_name("Rahad","20");

$test2 = new My_name("Hasin","30");

$test3 = new My_name("Rakib");

$test->F_c();
$test2->topic();
