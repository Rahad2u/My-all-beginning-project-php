<?php
// str_replace(); case sensitive
// str_ireplace(); case insensitive

//str_replace("each","Each", $string,$count);
//echo $count;

$string= "Readers expect each paragraph to have a sentence or two that captures its main point";
$replaceString= str_replace("each","Each", $string);
//echo $replaceString;

//multipol change
$string2= "Quic brown fox jumps over the lazy dog";
$mul_change= str_replace(array('fox','dog'), array('tiger','lion'),$string2,$count);
echo $mul_change;
echo PHP_EOL;
echo "Total replacement: {$count}";