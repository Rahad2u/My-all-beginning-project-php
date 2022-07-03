<?php

interface Dependency_i{
    function display_name();
}

class Update_S implements Dependency_i{
    private $name;
    private $title;
    function __construct($name,$title)
    {
        $this->name = $name;
        $this->title = $title;
    }
    function display_name()
    {
        echo "My country name is {$this->title} {$this->name}";
    }
}

class Create_dependency_i implements Dependency_i{
    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function display_name()
    {
        echo "My country name is ".$this->name;
    }
}

// class Testing_dependency{
//     function introduceStudent($name){
//         $set = new Create_dependency_i($name);
//         $set->display_name();
//     }
// }


// Dependenci learning

class Testing_dependency{
    function introduceStudent(Dependency_i $student){
        $student->display_name();
    }
}



$st = new Create_dependency_i("Bangladesh");

$use_title = new Update_S("Bangladesh","Poor");

$create_O = new Testing_dependency();

$create_O->introduceStudent($st);