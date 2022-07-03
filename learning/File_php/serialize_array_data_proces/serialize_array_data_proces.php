<?php
$filePath = "C:\\xampp\htdocs\learning\File_php\serialize_array_data_proces\serialize_array_data_proces.txt";

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
$AD_student= array(
    'fname'=>'Manik',
    'lname'=>'Bormon',
    'croll'=>17,
    'age'=>19,
    'class'=>06,
);

// $serialize= serialize($student_N);
// file_put_contents($filePath, $serialize, LOCK_EX);

$serialize2= file_get_contents($filePath);
$allStudent= unserialize($serialize2);
print_r($allStudent);
//array_push($allStudent, $AD_student);
//Data dlt ruls

//unset($allStudent[2]);
// $serialize2= serialize($allStudent);
// file_put_contents($filePath, $serialize2, LOCK_EX);