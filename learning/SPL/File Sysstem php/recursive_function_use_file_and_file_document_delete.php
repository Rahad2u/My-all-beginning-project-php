<?php

mkdir("computer/a/b/c/d",0777,true);
sleep(5);

file_put_contents("computer/windows.txt","Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, incidunt!");
file_put_contents("computer/a/a.txt","Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, incidunt!");
file_put_contents("computer/a/b/b.txt","Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, incidunt!");
file_put_contents("computer/a/b/c/c.txt","Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, incidunt!");
file_put_contents("computer/a/b/c/d/d.txt","Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, incidunt!");
// unlink("computer/windows.txt");
// rmdir("computer");

function DeleteFile($path){
    if(!is_readable($path)){
        return;
    }
$scandir = scandir($path);
if(count(scandir($path))>2){
    foreach($scandir as $scanFile){
        if("."!=$scanFile && ".."!=$scanFile){
            $filepath = $path.DIRECTORY_SEPARATOR.$scanFile;
            if(is_dir($filepath)){
                DeleteFile($filepath);
            }else{
                unlink($filepath);
            }
        }
    }
}
rmdir($path);
}

DeleteFile(getcwd().DIRECTORY_SEPARATOR."computer");
