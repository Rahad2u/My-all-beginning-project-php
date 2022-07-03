<?php

class BD_playar_collaction implements IteratorAggregate, Countable{
    private $playarName;
    public function __construct()
    {
        $this->playarName = array();
    }
    public function addPlayar($name){
        array_push($this->playarName, $name);
    }
    public function getPlayar(){
       return $this->playarName;
    }
     function getIterator():Traversable{
         return new ArrayIterator($this->playarName);
    }
    public function count():int{
        return count($this->playarName);
    }
   
}

$a = new BD_playar_collaction();
$a->addPlayar("Sakib Al Hasan");
$a->addPlayar("Musfuqur Rohim");
$a->addPlayar("Masrafi Mortaja");
$a->addPlayar("Rubel");
$a->addPlayar("Mustafijur Rohman");
$a->addPlayar("Afif Hosen");
$a->addPlayar("Mehedi Hasan Miraz");

$getPlayar =  $a->getPlayar();
// print_r($getPlayar);
foreach($a as $_readPlayar){
    echo $_readPlayar."\n";
}
echo count($a);