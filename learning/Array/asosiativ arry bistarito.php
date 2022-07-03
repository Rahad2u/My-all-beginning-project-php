<?php

/*$student = [
    '10d'=>'Kalam',
    '11'=>'Salam',
    '12d'=>'Rofiq',
    '13d'=>'Hasan',
];

echo $student['13d'];
*/

$foods = [ //asosiativ arry
    'vegetables'=>'potato, Tomato, Brinjal, Carrot',
    'froots'=>'Apple, Banana, Orange, Mango, Grapes',
    'drinks'=>'Water, Milk',
];


// $foods['froots'] .=", coconut";
// $foods['drinks'] .=", coldrinks";
// foreach($foods as $key=>$value){
//     echo $key."=".$value."\n";
// }

$ghyt = count($foods);

$keys = array_keys($foods);
for($i=0;$i<$ghyt; $i++){
    $key= $keys[$i];
    echo $foods[$key]."\n";
}

//$foods['drinks'] = $foods['drinks'].", Orang juce";

$foods['drinks'] .=", Orang juce";


/*foreach($foods as $key=>$value){
    echo $key."=".$value."\n";
}*/

$countf = count($foods);
//echo $countf;
$keys = array_keys($foods);
//print_r($keys);

// for($i=0; $i<$countf; $i++){
//     $key = $keys[$i];
//     echo $foods[$key]."\n"."<br>";
// }

$values = array_keys($foods);
//print_r ($keys);// array print korte ( print_r () )

// for($i= 0; $i<$countf; $i++){
//     $key = $values[$i];
//     echo $key."\n";
// }



// echo PHP_EOL;
// echo count ($foods)."\n";
// echo $foods['vegetables']."\n";
// echo $foods['froots']."\n";
// echo $foods['drinks'];

