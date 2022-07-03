 <?php

mkdir("computer",0777,true);
sleep(3);
file_put_contents("computer/windows.txt","Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, incidunt!");

// unlink("computer/windows.txt");
// rmdir("computer");

function DeleteFile($path){
$scandir = scandir($path);
if(count(scandir($path))>2){
    foreach($scandir as $scanFile){
        if("."!=$scanFile && ".."!=$scanFile){
            $filepath = $path.DIRECTORY_SEPARATOR.$scanFile;
            unlink($filepath);
        }
    }
}
rmdir($path);
}

DeleteFile(getcwd().DIRECTORY_SEPARATOR."computer");
