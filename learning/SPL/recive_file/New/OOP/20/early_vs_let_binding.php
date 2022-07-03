<?php

class early_VS_Let_Binding{

    static public function name(){
       echo static::getname();
    }

    static public function getname(){
        return "Earth";
    }
}
class early_VS_Let_Binding2 extends early_VS_Let_Binding{
    static public function getname()
    {
        return "Jupiter";
    }
}
$a = new early_VS_Let_Binding();

early_VS_Let_Binding::name();

echo PHP_EOL;

early_VS_Let_Binding2::name();