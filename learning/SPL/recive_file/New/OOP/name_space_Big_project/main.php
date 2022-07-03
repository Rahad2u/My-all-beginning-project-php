<?php

namespace Myproject;

include "autoloading.php";

// use Myproject\Mail\A_student;

// include "mail\mailer.php";

use Myproject\Mail\Mailer;
use Myproject\scaner\Scaner;

class Project extends Mailer{
    private $name;
    public function __construct()
    {
        (new Mailer())->get_mail();
        echo $this->name;
        (new Scaner())->get_Scaner();
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        echo $this->name;
    }
}

$a = new Project();

$a->get_mail();
$a->setName("Yamaha\n");
$a->getName();

