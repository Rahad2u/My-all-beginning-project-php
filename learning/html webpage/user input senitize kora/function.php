<?php

function isCheked($inputName, $value){
    if(isset($_REQUEST [$inputName]) and is_array($_REQUEST [$inputName]) && in_array($value, $_REQUEST[$inputName])){
        echo "checked";
    }
}

function nameCheked($value){
    if(isset($_REQUEST ['fruits']) and is_array($_REQUEST ['fruits']) && in_array($value, $_REQUEST['fruits'])){
        echo "checked";
    }
}