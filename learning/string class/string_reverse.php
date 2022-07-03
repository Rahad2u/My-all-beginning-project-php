<?php

$string = "Hello world";

$s_len = strlen($string)-1;
for($i=$s_len; $i>=0; $i--){
    echo $string[$i];
}
echo PHP_EOL;

$as_len = strlen($string);
for($i=1; $i<=$as_len; $i++){
    echo $string[$i*-1];
}

echo PHP_EOL;

echo strrev($string);