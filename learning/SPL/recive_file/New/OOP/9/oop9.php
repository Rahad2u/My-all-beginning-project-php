<?php

class Shaps{

    protected $name;

    public function __construct()
    {
        $this->name = array();
    }

    public function AddShaps(Shaps $addShaps){
        array_push($this->name, $addShaps);
    }
    public function TotalShaps(){
        return count($this->name);
    }
}
class Tringgle1 extends Shaps{}
class Tringgle2 extends Shaps{}
class Tringgle3{}

$a = new Shaps();
$a->AddShaps(new Tringgle1());
$a->AddShaps(new Tringgle2());
// $a->AddShaps(new Tringgle3());
echo $a->TotalShaps();