<?php
$iterator = new RecursiveDirectoryIterator(("./"),FilesystemIterator::SKIP_DOTS);

$iterator_use = new RecursiveIteratorIterator($iterator);
$size = 0;
foreach($iterator_use as $new_iterator){
    if($new_iterator->getFilename()=="array marge.php"){
    echo $new_iterator.getcwd().DIRECTORY_SEPARATOR.$new_iterator->getFilename()."\n";
    }
    // echo $new_iterator.getcwd().DIRECTORY_SEPARATOR.$new_iterator->getFilename()."\n";
    $size+=$new_iterator->getSize();
}

echo "Total size {$size} byts";