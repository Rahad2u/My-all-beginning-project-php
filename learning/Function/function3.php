<?php

// recursion//recursive functon 

function prientn($i){//recursive function
    if ($i>=10){
        return;
    }
    echo $i."\n";

    $i++;
    prientn($i);
}
// prientn(1);

echo PHP_EOL;

function printNumber($counter, $end, $stepping=1){
    if($counter>$end){
        return;
    }

    echo $counter."\n";
    $counter+=$stepping;
    printNumber($counter,$end,$stepping);
    
}
// printNumber(10,29,4);


echo PHP_EOL;

function fibonacci($old,$new,$bad){
    
    static $good;
    $
    $good= $good ?? 1;


    if($good>$bad){
        return;
    }
    $good++;

    echo $old."\n";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old,$new,$bad);

 }
//  fibonacci(0,1,15);
echo PHP_EOL;


// function factorial($n)    
// {    
//     if ($n < 0)    
//         return -1; /*Wrong value*/    
//     if ($n == 0)    
//         return 1; /*Terminating condition*/    
//     return ($n * factorial ($n - 1));    
// }    
    
// echo factorial(5);     null coles oparetor === ??

function computer($pc,$mouce,$speaker){
    static $monitor;
    $monitor = $monitor ?? 1;

    if($monitor>$speaker){
        return;
    }
    $monitor++;
                    echo $pc." ";
                    $_tempo = $pc + $mouce;
                    $pc = $mouce;
                    $mouce = $_tempo;
    computer($pc,$mouce,$speaker);

}
computer(0,1,15);

