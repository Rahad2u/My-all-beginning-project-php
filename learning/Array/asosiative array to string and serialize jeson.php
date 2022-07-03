<?php
/*( 
    
    Class topic

 asosiative array to string And

 serialize=unserialize,, json_encode=json_dcode)

*/

$student = [
'fname'=> 'Rahad',
'lname'=> 'Hasan',
'class'=> '10',
'roll'=> '25',
'grup'=> 'A',
];

print_r($student);

echo $student['fname']." ".$student['lname']."\n";

printf("%s %s",$student['fname'],$student['lname']);     

echo PHP_EOL;

$serialize = serialize($student);// piculiar string

$unserialize= unserialize($serialize);
print_r($unserialize);

$json = json_encode($student);
echo $json;

echo PHP_EOL;

$json_dcode = json_decode($json,true);
print_r($json_dcode);
