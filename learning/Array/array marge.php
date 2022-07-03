<?php

/*

array_marge ninye alocola

*/

$fruits= array('Apple','Apricot','Butter Fruit','Coconut','Dry Plums','Figs','Grapefruit');
$asosiative = array('a'=>'10', 'b'=>'20', 'c'=>'30', 'd'=>'40', 'e'=>'50', 10=>55, 11=>58,'f'=>'60', 'g'=>'70');

$decok1= array_slice($fruits,0,3,true);
$decok2= array_slice($fruits,3,null,true);

$f_fruits= array_merge($decok1,$decok2);

print_r($decok1);
print_r($decok2);
print_r($f_fruits);

$f_fruits2= $decok1 + $decok2;
//print_r($f_fruits2);

// $a_asosiative= array_slice($asosiative,2,null,true);
// print_r($a_asosiative);

$a_asosiative= array_splice($asosiative,2,2,array("y"=>49,"z"=>69));
// print_r($a_asosiative);
// print_r($asosiative);

