<?php

class S_tatic{
   private $number;
   static $froots;
   static function Test($name){
       echo self::Test2();
        echo "My name is {$name}\n";
   }
   static function Test2(){
       echo self::$froots;
    //    echo "My favourite fuits Orange\n";
   }
   public function Test3(){
       self::$froots = "Orange \n";
       self::Test2();
       $this->Test2();
   }
}

$a = new S_tatic;
$a->Test3();
$a->Test2();
S_tatic::Test("Rahad");
echo S_tatic::$froots;
// echo S_tatic::$froots;
