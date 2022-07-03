<?php

define('DB',"Rahad");
const Rahad= "Bangladesh";
// echo Rahad." ".DB;

class TestConst{
   const Country = "Bangladesh";
 public function testing(){
       echo "My country name is"." ".TestConst::Country;
   }
}

$m = new TestConst();
$m->testing();

