<?php

namespace Myproject\imeges\filesystem\jpeg;
include "../images/filesysystem/imeges.php";
die();
use Myproject\images\filesystem\Images;
class Jpeg extends Images{
    public function get_testing(){
        (new Images())->get_images();
    }
}

$a = new Jpeg();
$a->get_testing();