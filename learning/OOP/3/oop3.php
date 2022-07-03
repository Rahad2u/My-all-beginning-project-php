<?php 

class count{
    public $found;
    function __construct($I_found=0){
        $this->found= $I_found;
    }
    public function addFound($money){
        $this->found += $money;
    }
    public function deductFound($money){
        $this->found -= $money;
    }
    public function getTotal(){
        echo "Get total found {$this->found}";
    }
}

$h1 = new count(100);
// $h1->getTotal();
// $h1->addFound(10);
 $h1->deductFound(10);
$h1->getTotal();