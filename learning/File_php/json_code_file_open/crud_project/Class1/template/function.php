<?php
define('DB_name','C:\xampp\htdocs\learning\crud project\class1\data\db.txt');
function seed($fileName){
    $data= array(
        array(
            'fname'=>'Rahad',
            'lname'=>'Hasan',
            'age'=>'17',
            'class'=>'8',
            'roll'=>'10',
        ),
        array(
            'fname'=>'Rased',
            'lname'=>'Khan',
            'age'=>'17',
            'class'=>'8',
            'roll'=>'11',
        ),
        array(
            'fname'=>'Siraz',
            'lname'=>'Mia',
            'age'=>'17',
            'class'=>'8',
            'roll'=>'14',
        )
    );
    $serlData= serialize($data);
    file_put_contents($fileName, $serlData, LOCK_EX);
}
