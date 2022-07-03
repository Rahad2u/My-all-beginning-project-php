<?php

/* 

        Class topic

Array copy by velue and copy by refarence

*/

$name = array('fname'=>'Rahad','lname'=>'Hasan');
//print_r($name);

$newName = &$name;
$newName['lname'] = 'Rahad';

print_r($name);
print_r($newName);

/*
1,
 ( Copy by velue || deep copy 
 $newName = $name; )

2,
 ( copy by refarence || shalow copy 
        $newName = &$name;
 )

 */

 function printData($name){
        $name['fname'].=" Hasan";
        print_r($name);
 }

print_r($name);
printData($name);

