<?php 

trait A_print{
    function PrintA(){
        echo "Print A\n";
        parent::PrintA();
    }
   
}

trait B_print{
    function PrintB(){
        echo "Print B\n";
    }
}

class Fox1{
    function PrintA(){
        echo "Print ABCD\n";
    }
}

class Fox extends Fox1{
    use A_print;
}


$a = new Fox();

$a->PrintA();