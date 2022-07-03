<?php

function is_even($n){ //this peramiter 
    if ($n%2==0){
        return true;
     }//else {
    //     return false;
    // }
    return false;
}

$x = 13;

if (is_even($x)){ // this argument
    echo "{$x} number is even number";
}else {
    echo "{$x} number is odd number";
}

echo PHP_EOL;

// function peramitare type hinting ba type chack PHP

function factorial (int $z){// function peramiter er type hinting/type chack
    if(gettype($z) != "integer"){ // rulls of PHP 7< 
        return "invalid";
    }
    $result = 1;
    for($i=$z; $i>1; $i--){
        $result*=$i;
    }
    return $result;
}

echo PHP_EOL;

function served($foodtype ="coffee",$numberOfitems="2 cup"){//function paramiter e defoult vealu/optional peramiter
    echo "{$numberOfitems} of {$foodtype} has been served";
}
echo PHP_EOL;

function jog($a= 32, $b=70){
    
              $in = $a + $b;
              echo "\n";
              $ew = $a - $b;
              echo "\n";
              $vb = $a * $b;
              echo "\n";
              $gh = $a / 70;
              echo "\n";
              $yt = $a % $b;
           echo "$in,$ew,$vb,$gh,$yt";
}

// jog ();
// echo PHP_EOL;
// function biog ($d=20, $r=10){
//     $tg = $d - $r;
//     echo "$tg";
// }

// biog ();

function rturn( $x, $y, $z):int{
    return $x + $y+ $z;
}

//echo rturn(4,5,6);
echo PHP_EOL;


