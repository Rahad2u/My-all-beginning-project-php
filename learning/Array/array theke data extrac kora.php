<?php

/*

Class topic

main array thik rekhe kicu data instrac kora

*/
$fruits= array('Apple','Apricot','Butter Fruit','Coconut','Dry Plums','Figs','Grapefruit');

$asosiative = array('a'=>'10', 'b'=>'20', 'c'=>'30', 'd'=>'40', 'e'=>'50', '10'=>55,'f'=>'60', 'g'=>'70');


//$somefruits=array_slice($fruits,2);
// $somefruits=array_slice($fruits,2,3);
// $somefruits=array_slice($fruits,2,-2);
// $somefruits=array_slice($fruits,-4,3);
// $somefruits=array_slice($fruits,-4,-2);
 $somefruits=array_slice($fruits,3,3,true);
 //print_r($somefruits);
 $asosiative= array_slice($asosiative,3,null,true);
//$asosiative= array_slice($asosiative,3,-2,true);

print_r($asosiative);


