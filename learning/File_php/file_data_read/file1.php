<?php

$file_name= "C:\\xampp\htdocs\learning\File_php\\file_data_read\phone.txt";
if(is_readable($file_name)){
//echo getcwd();//current working directory
$file_open= fopen($file_name, 'r');
 $line= fgets($file_open);
echo $line;
//rewind($file_open);
fseek($file_open,4);
while($line= fgets($file_open,7)){
    echo $line,"-";
}
fclose($file_open);

$data= file($file_name);
echo $data[2];
print_r($data);

$data2= file_get_contents($file_name);
echo $data2;
}