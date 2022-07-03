<?php 

$filepath = new DirectoryIterator("./");

foreach($filepath as $filename){
    if($filename -> isDot()){
        echo $filename->getPathname();
    }
}