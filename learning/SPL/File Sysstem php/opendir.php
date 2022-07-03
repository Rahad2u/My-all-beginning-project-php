<?php

$entryes = opendir(getcwd());

while(false!== $entrye = readdir($entryes)){
    echo $entrye."\n";
}
