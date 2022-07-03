<?php
$filePath = "C:\\xampp\htdocs\learning\File_php\Bivinno_vabe_file_data_proces\New_Text_Document.txt";

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
$fp = fopen($filePath, "w");
foreach($student_N as $student){
    $data= sprintf("%s,%s, %s, %s, %s\n",$student['fname'],$student['lname'],$student['croll'],$student['age'],
    $student['class']);
    fwrite($fp, $data);
}
fclose($fp);

$Ad_student= array(
    'fname'=>'Shariar',
    'lname'=>'Khan',
    'croll'=>8,
    'age'=>22,
    'class'=>10,
);


/*$fp = fopen($filePath, "r");
while($data = fgets($fp)){
    $student= explode(",",$data);
    printf("Name= %s\nAge= %s\nRoll= %s\nClass= %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}
fclose($fp);*/

/*$AD_student= array(
    'fname'=>'Manik',
    'lname'=>'Bormon',
    'croll'=>17,
    'age'=>19,
    'class'=>06,
);
$fp = fopen($filePath, "a");
fputcsv($fp, $AD_student);
fclose($fp); */

/*$data = file($filePath);
// print_r($data);
$fp = fopen($filePath, "w");
foreach($student_N as $student){
    fputcsv($fp, $student);// csv full form=== comma-separated values
}
fclose($fp);*/

/*$fp = fopen($filePath, "r");
while($student = fgetcsv($fp)){
    printf("Name= %s %s\nAge= %s\nRoll= %s\nClass= %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}
fclose($fp);*/

/* $data= file($filePath);
print_r($data);
unset($data[2]);
$fp = fopen($filePath, "w");
foreach($data as $line){
    fwrite($fp, $line);
}
fclose($fp);*/
