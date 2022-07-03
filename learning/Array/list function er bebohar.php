<?php

/*

        Class topic 

    list()=$veriable; function er bebohar

*/

$number= array(11,12,13);
list($code1,$code2,$code3)=$number;
echo $code1;

$color=array('red','green','blue','yellow');
list($color1,$color2,$color3)=array('red','green','blue','yellow');
print_r($color1, $color3);
echo "\n";

$rgbacolor=array(111,444,456);
list($rgba_c, ,$rgba_d)=$rgbacolor;
echo $rgba_d;