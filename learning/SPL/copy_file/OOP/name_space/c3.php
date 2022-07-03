<?php
namespace Mybike;

include "a1.php";
include "b2.php";

use \Mybike\Yourbike\Bike as Honda_C; //alias it's meaning bd = "Uponam";

$my_object = new \Mybike\Bike();
$my_object->get_bike_name();

$an_test = new Yourbike\Bike();
$an_test->get_bike_name();

$testing = new Honda_C();
$testing->get_bike_name();
