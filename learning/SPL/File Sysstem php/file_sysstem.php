<?php

$entrys = scandir(getcwd());

foreach($entrys as $entry){
    if("."!=$entry && ".."!=$entry){
        if(is_dir($entry)){
            echo "[D] {$entry}\n";
        }else{
            echo "[F] {$entry}\n";
        }
    }
}
function countDir($dir){
$count = 0;
$entrys = scandir($dir);

foreach($entrys as $entry){
    if("."!=$entry && ".."!=$entry){
        if(is_dir($entry)){
            $count++;
        }
    }
}
return $count;
}

echo countDir(getcwd());