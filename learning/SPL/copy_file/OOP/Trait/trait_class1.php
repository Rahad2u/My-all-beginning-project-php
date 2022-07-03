<?php 

trait Logic1{
    function set(){
        echo "I'm learnig php trait function";
    }
}

trait Logic2{
    function get(){
        echo "Who I'm";
    }
}

class Aproval{
    use Logic1,Logic2;
}

$a = new Aproval();

$a->get();