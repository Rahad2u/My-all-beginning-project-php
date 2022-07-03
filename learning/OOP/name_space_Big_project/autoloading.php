<?php

spl_autoload_register(function($class_name){
    $path = strtolower(str_replace("Myproject\\","",$class_name)).".php";
    $path = str_replace("\\","/",$path);
    include "$path";
 //   echo $path;
 //   die;
 });