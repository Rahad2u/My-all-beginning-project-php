<?php
$F_Path= "C:\\xampp\htdocs\learning\File_php\json_code_file_open\json_fomet_file.txt";
$student_N= array(
    array(
        'fname'=>'Rahad',
        'lname'=>'Hasan',
        'croll'=>10,
        'age'=>21,
        'class'=>06,
    ),
    array(
        'fname'=>'Humaun',
        'lname'=>'Kabir',
        'croll'=>12,
        'age'=>20,
        'class'=>06,
    ),
    array(
        'fname'=>'Rased',
        'lname'=>'Khan',
        'croll'=>8,
        'age'=>22,
        'class'=>06,
    ),
);

// $in_file= json_encode($student_N);
// file_put_contents($F_Path, $in_file, LOCK_EX);

$data= file_get_contents($F_Path);
//$allStudent = json_decode($data);//object= echo $allStudent[0]->fname;
$allStudent = json_decode($data,true);//array= echo $allStudent[0]['fname'];
print_r($allStudent);
echo $allStudent[0]['fname'];