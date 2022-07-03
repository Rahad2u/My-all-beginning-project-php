<?php

function sum( int...$numbers):int{// function e anlimited argument accept kora 
    $rslt = 0;
    for($i=0;$i<count($numbers);$i++){
        $rslt += $numbers[$i];
    }
    return $rslt;
}

echo sum(5,6,7,1,2,3,4);


echo PHP_EOL;

echo PHP_EOL;

function tiger($x,$y, int ...$n):int{ // function e anlimited argument accept kora 

    echo $x." ";
    echo $y;
    echo "\n";
    $rst = 0;
   
    for($f=0;$f<count($n);$f++){
        $rst += $n[$f];
    }
    return $rst;
}

echo tiger(2,3,4,5,6,7,8,9);

echo "\n";

