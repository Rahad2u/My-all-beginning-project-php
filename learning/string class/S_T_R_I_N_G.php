<?php

$string= "Hello world, How are you";
$string2= "Hello Rahad, How are you";

$s_T= explode("," ,$string);
print_r($s_T);
echo PHP_EOL;

$join= join(",",$s_T);
echo $join;
echo PHP_EOL;

$a_T= str_split($string);
print_r($a_T);

echo PHP_EOL;

$str_T= strtok($string, " ,");
while($str_T!==false){
    echo $str_T."\n";
    $str_T= strtok(" ,");
}
echo "\n";
echo "\n";
$str_T2= strtok($string2, " ");
while($str_T2!==false){
    echo $str_T2."\n";
    $str_T2= strtok(" ,");
}
echo "\n";

// $print= preg_split("/ |,/",$string);
// printf($print);