<?php

/*

                 Class topic


    index and associative array difference

*/

 $fruits1 = array('a'=>'Apple', 'b'=>'Apricot','c'=>'Cherry','d'=>'Dates','e'=>'Grapefruit');
 $fruits2 = array('f'=>'Jujubes', 'c'=>'Apricot','y'=>'Lemon','a'=>'Cherry','l'=>'Mango','t'=>'tomato');
 
 $number1 = array(1,3,2,55,44,22,7,8,66,40,1,2);
 $number2 = array(11,32,40,5,2,3,20,55,60,1,65,4,40);

//$aintersect = array_intersect($fruits1, $fruits2);// array_intersect() Compare the values of two arrays, and return the matches
//print_r($aintersect);

//$aintersect2 = array_intersect($number1, $number2);
//print_r($aintersect2);

//$aintersect3 = array_intersect_assoc($fruits1, $fruits2);// array_intersect_assoc(); Compare the keys and values of two arrays, and return the matches
//print_r ($aintersect3);

//$diff = array_diff($fruits1, $fruits2);//arry_diff() Compare the values of two arrays, and return the differences
//print_r($diff);

//$diff2 = array_diff($fruits2, $fruits1);
//print_r($diff2);

//$difff = array_diff_assoc($fruits1, $fruits2);// array_diff_assoc(); Compare the keys and values of two arrays, and return the differences:
//print_r($difff);

// practice no: 2

$fruitsss = array('a'=>'Apple', 'b'=>'Apricot','c'=>'Cherry','d'=>'Dates','e'=>'Grapefruit');
$fruits22 = array('f'=>'Jujubes', 'c'=>'Apricot','y'=>'Lemon','a'=>'Cherry','l'=>'Mango','t'=>'tomato');

$numberrr1 = array(1,3,2,55,44,22,7,8,66,40,1,2);
$number333 = array(11,32,40,5,2,3,20,55,60,1,65,4,40);

$intersecta= array_intersect($fruitsss, $fruits22);
//print_r ($intersecta);
$numberrt = array_intersect($numberrr1,$number333);
//print_r($numberrt);

$aassok = array_intersect_assoc($fruitsss, $fruits22);
//print_r($aassok);

$adifff= array_diff($fruitsss, $fruits22);
print_r($adifff);

$adiff22= array_diff($fruits22, $fruitsss);
print_r($adiff22);

$difff = array_diff_assoc($fruitsss, $fruits22);
print_r($difff);

