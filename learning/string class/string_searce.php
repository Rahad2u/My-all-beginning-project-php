<?php
$searce= "Effective paragraphs are the fundamental units of academic writing";
//echo $searce[60];
$searce2= strpos($searce, "fundamental");
//echo $searce2;
$searce3= stripos($searce, "Effective");

// if($searce3 !== false){
//     echo "Found";
// }else{
//     echo "Not Found";
// }

// case insensitive

// $searce4= stripos($searce, "Effective"); // case insensitive function

// if($searce4 !== false){
//     echo "found";
// }else{
//     echo "Not found";
// }

// reverse searce
//strrpos();
//strripos();
$searce5= strrpos($searce, "of"); // string searce reverse function
//echo $searce5;
if($searce5 !== false){
    echo "found";
}else{
    echo "Not found";
}