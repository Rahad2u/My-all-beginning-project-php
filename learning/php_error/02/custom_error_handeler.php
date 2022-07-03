<?php 

function coustom_error($severity, $msg, $file, $line){
    echo "Error {$severity}: $msg in $file on line number $line";
}

set_error_handler("coustom_error");

$string = str_replace("Hello","HI","what");
trigger_error("This is an error");