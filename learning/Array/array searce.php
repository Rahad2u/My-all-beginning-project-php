<?php

/*

array searce seystem

*/

$fruits = array('a'=>'Apricot','b'=>'Butter Fruit','d'=>'Coconut','k'=>'Dry Plums','m'=>'Figs','v'=>'Grapefruit','q'=>'Apple');

$number = array(11,14,1,4,7,8,10,66,5,44,21,12,45,63);

if(in_array(44,$number)){
    echo '44 is found'."\n";
}

//value position check

$offset= array_search(10,$number);
echo $offset."\n";

$offset2= array_search('Butter Fruit',$fruits);
echo $offset2."\n";

$number2 = array(11,14,1,'4',7,8,10,66,5,44,21,12,45,63);// important issues

if(in_array(4,$number2,true)){
    echo '4 is found'."\n";
}

$offset2 = array_search(4,$number2,true);
echo $offset2;



// Key searce function


$fruits2 = array('a'=>'Apricot','b'=>'Butter Fruit','d'=>'Coconut','k'=>'Dry Plums','m'=>'Figs','v'=>'Grapefruit','q'=>'Apple');

if(key_exists('b',$fruits2)){
    echo 'b key exists';
}else {
    echo 'I can\'not find this key';
}


