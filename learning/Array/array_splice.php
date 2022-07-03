<?php

/*

Class topic array_splice();
Remove elements from an array and replace it with new elements


*/

$fruits= array('Apple','Apricot','Butter Fruit','Coconut','Dry Plums','Figs','Grapefruit');

$newFruits= array("Jackfruits","Tamarind","Pineapple");

$someFruits=array_splice($fruits,-5,3,$newFruits);

print_r ($someFruits);
print_r($fruits);