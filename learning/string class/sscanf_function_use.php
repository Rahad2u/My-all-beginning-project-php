<?php

$my_name= "Rahad Hasan 01733675223 rahadhasan33675@gmail.com";

$a_n= sscanf($my_name," %s %s %s %s");
print_r($a_n);

$a_n2= sscanf($my_name," %s %s %s %s",$f_name,$l_name,$mobile,$email);
echo $mobile;
echo "\n";
echo "\n";
$hexcolor= "#ff8050";
$colorcode= sscanf($hexcolor,"#%2x%2x%2x", $red,$green, $blue);
echo $red;
echo "\n";
echo $green;
echo "\n";
echo $blue;