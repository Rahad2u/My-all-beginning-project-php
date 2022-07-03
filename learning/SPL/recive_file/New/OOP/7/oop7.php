<?php

class Shape{
    private $name;
    protected $area;

    public function __construct($T_name)
    {
        $this->name = $T_name;
        $this->calculate_area();
    }
    public function get_shape(){
        echo "My name is {$this->name} and my area {$this->area}\n";
    }
    public function calculate_area(){}
}
class Chaild_class extends Shape{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
      $this->a = $a;
      $this->b = $b;
      $this->c = $c;
      parent ::__construct("Tringle");
      $this->Calculate_A();
    }
    public function Calculate_A(){
        $perimiter = ($this->a + $this->b + $this->c)/2;
        $this->area = sqrt($perimiter * ($perimiter-$this->a) * ($perimiter-$this->b) * ($perimiter-$this->c));
    }
}
class Rectanggle extends Shape{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
      $this->a = $a;
      $this->b = $b;
      parent ::__construct("Rectangle");
      $this->Calculate_area();
    }
    public function Calculate_area(){
       $this->area = $this->a * $this->b;
    }
}

$a = new Rectanggle(4,2);
$a->get_shape();
$b = new Chaild_class(11,12,13);
$b->get_shape();
$b->Calculate_A();

