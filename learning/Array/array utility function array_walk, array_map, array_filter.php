<?php

/*

                Class topoic

            array utility function 

    array_walk(); array_map(); array_filter()

*/

// array_walk(); 

$number = array(1,2,3,4,5,6,7,8,9,10,11,12,13);

function awalk($n){
    printf("Square of %d is %d \n",$n, $n*$n);
}
array_walk($number,'awalk');

//array_map()
echo "\n";
echo "\n";
echo "Array map"."\n";
function amap($m){
    return $m*$m*$m;
}

echo PHP_EOL;

$arraymap = array_map('amap', $number);
//print_r($number);
print_r($arraymap);

//array_filter()
echo "\n";
echo "\n";
echo "Array filter";
echo "\n";
echo "\n";
function filtera($f){
    return $f%2==0;
    return $f%2==1;
}

$filtera = array_filter($number,'filtera');//Call back function
print_r($filtera);


$studentName = array('rofiq','korim','shajjad','rabbi','selim','mominul');

function StudentN($name){
    return $name[0]=='s';
}

$snameS = array_filter($studentName,'StudentN');
print_r($snameS);