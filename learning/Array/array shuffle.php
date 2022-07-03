<?php

/* 

        Class topic

        shuffle(); How to use shuffle function in array

*/

$number= range(31,60);
$v_random_n= mt_rand(0,70);
echo $v_random_n."\n";
//echo $number[$v_random_n];

$number= range(31,70);
$v_random_n= mt_rand(0,70);
echo $v_random_n."\n";
//echo $number[$v_random_n];

$bed = $number[$v_random_n];

if($bed%2==0){
    echo "win";
}else {
    echo "loss";
}
echo PHP_EOL;

// Use shuffle

shuffle($number);
print_r($number);
$shuffle_n=$number[6];
echo $shuffle_n;