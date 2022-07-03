<?php
namespace Astronomi;
// use Astronomi\Project;
include "name_space.php";

include "name_space3.php";

class Test_nested_namespace{
    function get_name(){
        echo "My name is Jahid Junaif\n";
    }
}

$new = new planets\Test3(); //unqualified

$new->getName();

$new2 = new \Astronomi\planets\Test3(); //qualified

$new2->get_text();

