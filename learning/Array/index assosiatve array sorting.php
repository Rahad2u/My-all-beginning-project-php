<?php

/*

index assosiative array sorting 

sort() - sort arrays in ascending order  === index array
rsort() - sort arrays in descending order === index array
asort() - sort associative arrays in ascending order, according to the value === associative order use
arsort() - sort associative arrays in descending order, according to the value === associative order use 
ksort() - sort associative arrays in ascending order, according to the key
krsort() - sort associative arrays in descending order, according to the key




natcasesort()
natsort()
array_multisort()
array_reverse()

*/ 


// sort() - sort arrays in ascending order
$fruits= array('Apricot','Butter Fruit','Coconut','Dry Plums','Figs','Grapefruit','Apple');

$number= array(11,14,1,4,7,8,10);

sort($fruits);
//print_r($fruits);

sort($number);
//print_r($number);



//  asort() - sort associative arrays in ascending order, according to the value
$fruits2= array('a'=>'Apricot','b'=>'Butter Fruit','d'=>'Coconut','k'=>'Dry Plums','m'=>'Figs','v'=>'Grapefruit','q'=>'Apple');
$number2= array(11,14,1,4,7,8,10);

asort($fruits2);
//print_r($fruits2);

asort($number2);
//print_r($number2);



//  arsort() - sort associative arrays in descending order, according to the value
$fruits3= array('a'=>'Apricot','b'=>'Butter Fruit','d'=>'Coconut','k'=>'Dry Plums','m'=>'Figs','v'=>'Grapefruit','q'=>'Apple');
$number3= array(11,14,1,4,7,8,10);

arsort($fruits3);
//print_r($fruits3);

arsort($number3);
//print_r($number3);


//ksort() - sort associative arrays in ascending order, according to the key
$fruits4= array('a'=>'Apricot','b'=>'Butter Fruit','d'=>'Coconut','k'=>'Dry Plums','m'=>'Figs','v'=>'Grapefruit','q'=>'Apple');
$number4= array(11,14,1,4,7,8,10);

ksort($fruits4);
//print_r($fruits4);

ksort($number4);
//print_r($number4);



//krsort() - sort associative arrays in ascending order, according to the key
$fruits5= array('a'=>'Apricot','b'=>'Butter Fruit','d'=>'Coconut','k'=>'Dry Plums','m'=>'Figs','v'=>'Grapefruit','q'=>'Apple');
$number5= array(11,14,1,4,7,8,10);

krsort($fruits5);
//print_r($fruits5);

krsort($number5);
//print_r($number5);


//SORT_STRING 
$fruits6= array('a'=>'Apricot','b'=>'Butter Fruit','d'=>'Coconut','k'=>'Dry Plums','m'=>'Figs','v'=>'Grapefruit','q'=>'Apple');
$number6= array(11,14,1,4,7,8,10);

sort($fruits6, SORT_STRING);
//print_r($fruits6);

sort($number6, SORT_STRING);
//print_r($number6);


//case sensitive

$fruits7= array('a'=>'Apricot','b'=>'Butter Fruit','d'=>'Coconut','k'=>'Dry Plums','t'=>'apple','m'=>'Figs','v'=>'Grapefruit','q'=>'Apple');
$number7= array(11,14,1,4,7,8,10);

sort($fruits7, SORT_STRING | SORT_FLAG_CASE);
print_r($fruits7);





// lopp php
// for($i=0; $i<count($number); $i++){
//     echo $number [$i]."\n";
// }


// foreach($number as $numbers){
//         echo $numbers."\n";
// }

