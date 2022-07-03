<?php 

trait SetTrait{
    static $number;

    abstract function name();
}

class Use_Trait{
    use SetTrait;

    function name()
    {
        echo "Hello, I'm computer";
    }
}
class Use_TraitB{
    use SetTrait;

    function name()
    {
        echo "Hello, I'm computer";
    }
}

Use_Trait::$number = 12 ."\n";
echo Use_Trait::$number;

// Set trait another class

Use_TraitB::$number = 20 ."\n";
echo Use_TraitB::$number;


$a = new Use_Trait();
echo $a::$number;
$b = new Use_TraitB();
echo $b::$number;

$b->name();

