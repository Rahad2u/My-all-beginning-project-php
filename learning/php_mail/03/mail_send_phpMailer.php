<?php 

require_once "php_mailer/Exception.php";
require_once "php_mailer/PHPMailer.php";
require_once "php_mailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$pm = new PHPMailer(true);

// define("attachment_path", "img/menu-momo.jpg");

try{
    $pm->setFrom("rahadhasan33675@gamil.com");
    $pm->addAddress("rahadhasan33675@gamil.com");
    $pm->Subject = "I love Programing";
    $pm->Body    = "I know this programing language <strong style='color = red;'>PHP, Javascript, Python, node and jquery</strong> etc";
    $pm->AltBody = "This altBody function";
    $pm->isHTML(true);
    $pm->addAttachment("img/menu-momo.jpg");
    $pm->send();
    echo "Mail sent";
}catch(Exception $e){
    echo "Mail not sent ".$pm->ErrorInfo;
}
echo getcwd();