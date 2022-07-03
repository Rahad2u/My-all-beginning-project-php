<?php

// $n = "12";

$fruits = array(
    "Apple",
    "Orange",
    12345,
    "Banana",
    "Coconut",
);

$x = count($fruits);
// for($i=0; $i<$x;$i++){
//     echo $fruits[$i]."\n";
// }

for($i= $x-1; $i>=0; $i--){
    echo $fruits[$i]."\n";
}