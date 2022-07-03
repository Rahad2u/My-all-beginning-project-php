<?php

class Motorbike{
    private $parameters;
    public function __construct($bike_name, $bike_cc, $bike_t_s)
    {
        $this->parameters = [];
        $this->parameters['bike_name']  = $bike_name;
        $this->parameters['bike_cc']    = $bike_cc;
        $this->parameters['bike_t_s']   = $bike_t_s;
    }
    // public function set_bike($name){
    //     $this->parameters['bike_name'] = $name;
    // }
    // public function get_bike(){
    //     return  $this->parameters['bike_name'];
    // }
    function __isset($name){
        if(!isset($this->$name)){
            echo "{$name} not set\n";
            return false;
        }else{
            return true;
        }
    }
    public function __get($name)
    {
        return  $this->parameters[$name];
    }
    public function __set($name, $value)
    {
        return  $this->parameters[$name] = $value;
    }
    public function __unset($name)
    {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }
    public function __call($name, $arguments)
    {
        if("BikeBrack" == $name){
            if($arguments){
            echo "I am running {$arguments[0]}";
            }
        }
    }
    static public function __callStatic($name, $arguments)
    {
        echo "Hy how are you";
    }
}

$myBike = new Motorbike('Pulser'."\n", '150cc', '120kmph');
echo $myBike->bike_name;
if(isset($myBike->tiresize)){
    echo "found\n";
}

unset($myBike->bike_name);

echo $myBike->BikeBrack("400kmph\n");

$myBike::hello();