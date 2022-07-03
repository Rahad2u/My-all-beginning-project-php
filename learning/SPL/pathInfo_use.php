<?php
// very use full function{pathinfo()};

$fileName = "C:\\xampp\htdocs\learning\Array\array marge.phpC:\\xampp\htdocs\learning\array marge.php";

// echo pathinfo($fileName, PATHINFO_BASENAME)."\n";
// echo pathinfo($fileName, PATHINFO_DIRNAME)."\n";
// echo pathinfo($fileName, PATHINFO_FILENAME)."\n";
// echo pathinfo($fileName, PATHINFO_EXTENSION)."\n";



// filer extenshion ber korar another way
$chaking = explode(".", $fileName);

echo array_pop($chaking);