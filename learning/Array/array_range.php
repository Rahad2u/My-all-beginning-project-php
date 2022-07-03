<?php

/*

        Class topic

    $array =renge(), function use


*/

$name= array();
for($i=1;$i<20; $i++){
    array_push($name, $i);
}
//print_r($name);

$frange = range(0,30,5);
//print_r($frange);

foreach(range(1,30,3) as $loop_n){
    echo $loop_n."\n";
};

