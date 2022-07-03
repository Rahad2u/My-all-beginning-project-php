<?php 

trait PrintA{
    function print_name(){
        echo "My name is trait A\n";
    }
}
trait PrintB{
    function print_name(){
        echo "My name is trait B\n";
    }
}

class UseTrait{
    use PrintA,PrintB{
        PrintA::print_name as print_nameEE;
        PrintB::print_name as print_nameDD;
    }
    function print_name(){
        echo "Hello world\n";
    }
}

$a = new UseTrait();
$a->print_name();
$a->print_nameEE();
$a->print_nameDD();