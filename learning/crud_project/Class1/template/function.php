<?php
// ini_set('memory_limit', '-1');
// ini_set('max_execution_time', 0);
define('DB_name','C:\\xampp\htdocs\learning\crud_project\Class1\data\db.txt');
// $dd= getcwd();
// echo $dd;
function seed(){
    $data= array(
        array(
            'id'=>1,
            'fname'=>'Rahad',
            'lname'=>'Hasan',
            'age'=>'17',
            'class'=>'08',
            'roll'=>'10',
        ),
        array(
            'id'=>2,
            'fname'=>'Rased',
            'lname'=>'Khan',
            'age'=>'17',
            'class'=>'08',
            'roll'=>'11',
        ),
        array(
            'id'=>3,
            'fname'=>'Rofiq',
            'lname'=>'Hasan',
            'age'=>'16',
            'class'=>'08',
            'roll'=>'12',
        ),
        array(
            'id'=>4,
            'fname'=>'Manik',
            'lname'=>'Barmon',
            'age'=>'17',
            'class'=>'08',
            'roll'=>'13',
        ),
    );
    $serlData= serialize($data);
    file_put_contents(DB_name, $serlData, LOCK_EX);
}
function genReport(){
$serlData= file_get_contents(DB_name);
$students = unserialize($serlData);
?>
<table>
   <tr>
       <th>Name</th>
       <th style="width:15%;">Age</th>
       <th style="width:15%;">Class</th>
       <th>Roll</th>
       <th style="width: 30%;">Action</th>
   </tr>
   <?php foreach($students as $student){
?>
<tr>
    <td style="padding: 17px 0px; font-size: 15px; color: #000; font-weight: 600;"><?php printf('%s %s',$student['fname'],$student['lname'])?></td>
    <td style="font-size: 17px; color: #830399; font-weight: 600;"><?php printf('%s',$student['age'])?></td>
    <td style="font-size: 17px; color: #bf0430; font-weight: 600;"><?php printf('%s',$student['class'])?></td>
    <td style="font-size: 17px; color: #ff3838; font-weight: 600;"><?php printf('%s',$student['roll'])?></td>
    <td style="font-size: 17px; color: #000; font-weight: 600;"><?php printf('<a href="./index.php?task=edit&&id=%s">Edit</a> | <a href="./index.php?task=delete&&id=%s">Delete</a>', $student['id'], $student['id'])?></td>
</tr>
<?php
}
?>
</table>
<?php 
}
?>
<?php 
function addStudent($fname, $lname, $age, $class, $roll){
    $found= false;
    $serlData= file_get_contents(DB_name);
    $students = unserialize($serlData);
    foreach($students as $_student){
        if($_student['roll']==$roll){
            $found = true;
            break;
        }
    };
    if(!$found){
    $newId= count($students)+1;
    $student_Ad = array(
        'id'=>$newId,
        'fname'=>$fname,
        'lname'=>$lname,
        'age'=>$age,
        'class'=>$class,
        'roll'=>$roll
    );
    array_push($students, $student_Ad);
    $serlData= serialize($students);
    file_put_contents(DB_name, $serlData, LOCK_EX);
    return true;
    }
    return false;
}
?>
<?php
function getStudent($id){
    $serlData= file_get_contents(DB_name);
    $students = unserialize($serlData);
    foreach($students as $student){
        if($student['id']==$id){
            return $student;
     }
     return false;
 }
    }
?>
