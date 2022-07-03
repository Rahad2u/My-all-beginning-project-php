<?php
// include "Auto_loading_one.php";
// include "Auto_loading_two.php";
// function __autoload($name){
//     include "{$name}".'.php';
// }


function autoload($name){
    include "{$name}.php";
}
spl_autoload_register('autoload');
(new Auto_loading_one)->test_name();

