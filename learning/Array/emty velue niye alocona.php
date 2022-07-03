<?php

/* 

Class topoic 

empty velue niye alocona

*/

$name='';

if(isset($name)){
    echo "name is set";
}else {
     echo "name is not set";
}
echo PHP_EOL;

if(empty($name)){
    echo "name is empty";
}else {
     echo "name is not empty";
}
echo PHP_EOL;

if(isset($name) && is_numeric($name) || $name != ''){
    echo "Name is set and it's not emtey";
}else {
    echo "Name is ether not set or it's emtey";
}
echo "\n";
if(isset($name) && is_numeric($name) || $name !=''){
    echo "Name is set and it's not emtey";
}else {
    echo "Name is ether not set or it's emtey";
}

