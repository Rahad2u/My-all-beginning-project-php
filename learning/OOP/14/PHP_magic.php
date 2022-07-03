<?php

class Magic{
    private $name;
    private $age;
    private $roll;

    public function __construct($name='', $age='', $roll='')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->roll = $roll;
}
public function __get($pro)
{
    return strtolower($this->$pro);
}
public function __set($name, $value)
{
    return $this->$name = $value;
}
//     function get_name(){
//         return $this->name;
// }

//     function set_name($name){
//          $this->name = $name;
// }

//     function get_age(){
//        return $this->age;
// }

//    function set_age($age){
//      $this->age = $age;
// }

//     function get_roll(){
//         return $this->roll;
// }

//     function set_roll($roll){
//         $this->age = $roll;
// }

}

$createObject = new Magic('Rahad','22','44');

// echo $createObject->get_name();
// echo $createObject->set_name("Rofiq");
$createObject->name = "Korim";
echo $createObject->name;