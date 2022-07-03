<?php 

class ObjectChaining{
    private $string;
    private $search;
    function __construct($string)
    {
        $this->string = $string;
    }

    function search($s_string){
        $this->search = $s_string;
        return $this;
    }
    function replache($replace){
        if(!isset($this->search)){
            throw new Exception("Please searce first");
        }
        $this->string = str_replace($this->search, $replace, $this->string);
        return $this;
    }
    function upercase(){
        $this->string = strtoupper($this->string);
        return $this;
    }
    function lowarcase(){
        $this->string = strtolower($this->string);
        return $this;
    }
    function Display(){
        echo $this->string;
    }
}

$objectChaineing = new ObjectChaining("Hello My country name Bangladesh");

$objectChaineing->search("Bangladesh")
->replache("United States")
->search("Hello")
->replache("Hi")
->upercase()
->Display();