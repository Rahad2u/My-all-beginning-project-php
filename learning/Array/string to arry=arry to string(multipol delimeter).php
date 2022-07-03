<?php

/*

        Class topic 

string to array= array to string(multipol delimeter)

explode(', ',')= this delimeter;
join(', ',)= this glue


*/





// $foods = 'Apple, Orange, banana, mango, graps';


/*

$foods = explode(', ','Apple, Orange, banana, mango, graps,cherry,lemon,coconut');// string to array = explode (', ',') 
var_dump($foods);
echo $foods[4];
echo PHP_EOL;

*/

/*

$foodsString = join(',' ,$foods);// arry to string == join(', ',)

echo $foodsString."\n";
var_dump($foodsString);

*/


/*

$foods = preg_split('/(, |,)/','Apple, Orange, banana, mango, graps,coconut,cherry,lemon');
print_r($foods);

*/

/*

$vegetable = 'collord, capcicum, ladys finger, raddish, cucumber';
var_dump ($vegetable);

*/

/*

$vegetable = explode(', ','collord, capcicum, ladys finger, raddish, cucumber');

var_dump ($vegetable);

$vegetableName= join(', ',$vegetable);
var_dump ($vegetableName);
echo $vegetableName;

*/

$speker = explode(', ',"Rahd, Fahad, Tanvir, Tanjim, Lion");
var_dump($speker);
echo $speker[2];

$spekerSound = join($speker);
echo $spekerSound;

