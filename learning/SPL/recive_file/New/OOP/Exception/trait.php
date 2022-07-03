<?php

class T_trait{
   public function __construct($name, $age)
   {
      if($age<18){
         throw new Exception(" Your program is not ok\n",5040);
      }elseif($age>25){
         throw new Exception(" Too old",5041);
      }
      echo "My name is $name and my age $age\n";
   }
}

try{
   $a = new T_trait("Rahad",49);
}catch(Exception $age){
   echo $age->getCode().":",$age->getMessage();
}