<?php 

$filepath = new DirectoryIterator("./");

foreach($filepath as $filename){
    if($filename->isDot()){
        continue;
    }
    if($filename->isDir()){
        echo $filename->getPathname().":- ".$filename->getSize()."\n";
    }else{
        echo $filename->getPathname()."\n";
    }
}

