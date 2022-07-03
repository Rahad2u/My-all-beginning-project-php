<?php

function copyDir($source, $destinetion){
    $countFile    = 0;
    $countDir     = 1;
    $source       = rtrim($source,"/");
    $destinetion  = rtrim($destinetion,"/");
 
    if(!file_exists($destinetion)){
        mkdir($destinetion);
    }
    
    foreach(scandir($source) as $sorceFile){
        if("."!=$sorceFile && ".."!=$sorceFile){
        $sourcePath      = $source.DIRECTORY_SEPARATOR.$sorceFile;
        $destinetionPath = $destinetion.DIRECTORY_SEPARATOR.$sorceFile;

        // recursive function use -_-..|!|..-_-

        if(is_dir($sourcePath)){
           $total =  copyDir($sourcePath, $destinetionPath);
           $countFile += $total[0];
           $countDir += $total[1];
        }elseif(is_file($sourcePath)){
            $countFile++;
            copy($sourcePath, $destinetionPath);
        }
    }
}
return array($countFile, $countDir);
}

$source = getcwd()."/SPL/copy_file";
$destinetion = getcwd()."/SPL/recive_file/New";

$fc = copyDir($source, $destinetion);

echo "Your total files {$fc[0]} and total directories {$fc[1]}";