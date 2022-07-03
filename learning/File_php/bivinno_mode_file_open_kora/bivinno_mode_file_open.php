<?php

$filePath= "C:\\xampp\htdocs\learning\File_php\bivinno_mode_file_open_kora\New_Text_Document.txt";

// $fp= fopen($filePath, "r+");
// $fread= fgets($fp);
// echo $fread;
// fwrite($fp,"Earth");
// $fread= fgets($fp);
// echo $fread;
// fclose($fp);

// $fp= fopen($filePath, "w+");
// fwrite($fp, "Samsung\n");
// rewind($fp);
// $fread2= fgets($fp);
// echo $fread2;

$fp= fopen($filePath, "a+");
fwrite($fp, "Samsung\n");
rewind($fp);
$fread3= fgets($fp);
echo $fread3;