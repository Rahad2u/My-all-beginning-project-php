<?php

/* 

        Class topic

    array_reduce(); function php

*/

$number = array(1,2,3,4,5,6,7,8,9,10);

// function newfunction($oldvalue, $newvalue){
//     return $oldvalue+$newvalue;
// }

//$aredice= array_reduce($number, 'newfunction');
//print_r($aredice);

function anofunction($onumber, $nNumber){
    if($nNumber%2==0){
        return $onumber+$nNumber;
    }return $onumber;
    
}
$anareduce = array_reduce($number,'anofunction');
print_r($anareduce);