<?php

/*

         Class topic

 associative array shuffle problem

*/

$a_array= array('a'=>'apple','b'=>'bat','c'=>'cat','d'=>'doll','e'=>'earth');

shuffle($a_array);
//print_r($a_array);
$k_array=array_rand($a_array);

print_r($a_array[$k_array]);

