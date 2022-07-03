<?php
$filePath= "C:\\xampp\htdocs\learning\File_php\\file_data_write\document.txt";
$fp= fopen($filePath, "w");// a mode don't surf any past data
//$exData = file_get_contents($filePath);
//fwrite($fp, $exData);
fwrite($fp, "Samsung\n");
fwrite($fp, "Nokia\n");
fwrite($fp, "Tecno\n");
fwrite($fp, "Realme\n");
fclose($fp);
