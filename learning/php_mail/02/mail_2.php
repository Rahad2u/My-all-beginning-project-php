<?php 

$to       = "rahadhasan33675@gmail.com";
$from     = "kobirhosain444@gmail.com";
$subject  = "Test HTML->E-mail PHP";
$body     = "<strong>Hello PHP</strong> how are you<br><br>";
$body    .= "<img src='https://www.pexels.com/photo/white-sports-coupe-733745/' alt=''>";
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: {$from}";
