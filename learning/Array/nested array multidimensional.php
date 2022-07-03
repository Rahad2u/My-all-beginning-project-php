<?php

$multidimensional = [
    'vegetables'=> explode(', ','potato, tomato, radish, onion, carlic, pumpkin'),
    'fruits'=> explode(', ','apple, banana, orange, mango, grapes, pineapple, coconut'),
    'cold-drinks'=>explode(', ','speed, sevenUp, tiger, pranUp, guru, Rc'),
];

//print_r($multidimensional);

array_push($multidimensional['vegetables'],'green bean');
//print_r ($multidimensional);
//echo $multidimensional['cold-drinks'][5];


$array = [ // nested array multidimensional
    'array1'=>[
        'array2'=>[
            'Rose',
            'Lotus',
            'Jasmine',
            'Sunflower',
        ]
    ],
];

//echo $array['array1']['array2'][2];

$nested = [
    [1,2,3,4,5],
    [11,22,33,44,55],
    [111,222,333,444,555],
    [1111,2222,3333,4444,5555],
    [11111,22222,33333,44444,55555,[1,2,3,4,5,6]],
];

print_r($nested);
//echo $nested[4][1]."\n";
//echo $nested[4][5][4];