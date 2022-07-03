<?php

//array manipulation Php

// $array = [
//     "Rohim",
//     "Korim",
//     "Rofiq",
//     123656,
//     "Saymon",

// ];


//$tet= array_pop($array);//out last
//$tey= array_shift($array);//out first
//$ght= array_unshift($array, "Kamal");//in first 
//$bd= array_push($array, "jerin");// in last 
//$array[]="sofiq";//in last []

/*$array[3] = "Rahad";

$n = count($array);

for($i=0;$i<$n;$i++){
    echo $array[$i]."\n";
}
*/

// array_shift()Out data
//array_pop()Out data
//array_unshift()Data entry
//array_push()Data entry
echo PHP_EOL;

$ddd = array(
    "rofiq",
    "rohim",
    456778,
    "cattar",
    "korim",
);

$tgy = array_unshift($ddd, "tanvir");
$ary = array_shift($ddd);
$b= count($ddd);

for($i=0;$i<$b; $i++){
    echo $ddd[$i]."\n";
};

