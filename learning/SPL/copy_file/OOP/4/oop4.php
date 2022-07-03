<?php
// #ff44tt hexadecimal to rgb convart
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode,'#');
        $this->Colorset();
    }

   public function getcolor(){
       return $this->color;
    }

   public function setcolor($colorCode){
        $this->color= ltrim($colorCode,'#');
        $this->Colorset();
    }

   public function getRGBcolor(){
        return array($this->red, $this->green, $this->blue);
   }

   public function readRGBcolor(){
       echo "Red {$this->red} Green {$this->green} Blue {$this->blue}";
       $this->Colorset();
   }

   private function Colorset(){
       if($this->color){
        list($this->red, $this->green, $this->blue)=sscanf($this->color,'%02x%02x%02x');
       }

    }
    
}

$CodeColor =  new RGB("#dfdfdf");
$CodeColor -> readRGBcolor();
