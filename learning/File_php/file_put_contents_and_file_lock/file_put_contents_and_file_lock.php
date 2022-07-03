<?php
$filePUT= "C:\\xampp\htdocs\learning\File_php\\file_put_contents_and_file_lock\New Text Document.txt";

file_put_contents($filePUT, "Samsung \n", FILE_APPEND | LOCK_EX);
file_put_contents($filePUT, "vivo \n", FILE_APPEND | LOCK_EX);