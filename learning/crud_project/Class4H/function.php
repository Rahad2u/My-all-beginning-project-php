<?php 
$file_path = define('DB','c:\\xampp\htdocs\learning\crud_project\Class4H\data\db.txt');
//echo $_SERVER['PHP_SELF'];
function seed(){
    $data = array(
        array(
            'id'       =>1,
            'firstname'=>'Rahad',
            'lastname' =>'hasan',
            'age'      =>20,
            'class'    =>10,
            'roll'     =>21
        ),
        array(
            'id'       =>2,
            'firstname'=>'Rofiq',
            'lastname' =>'khan',
            'age'      =>19,
            'class'    =>10,
            'roll'     =>11
        ),
        array(
            'id'       =>3,
            'firstname'=>'Shariar',
            'lastname' =>'hasan',
            'age'      =>18,
            'class'   =>10,
            'roll'     =>22
        ),
        array(
            'id'       =>4,
            'firstname'=>'Korim',
            'lastname' =>'mia',
            'age'      =>20,
            'class'    =>10,
            'roll'     =>23
        )
    );
        $serialize = serialize($data);
        file_put_contents(DB, $serialize, LOCK_EX);
}

function generateReport(){
  $seria_Data =  file_get_contents(DB);
  $unseria_Data = unserialize($seria_Data);
 ?>
 <table class="table table-success">
     <thead style="color: #7d001d;">
         <th>Id</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Age</th>
         <th>Class</th>
         <th>Roll</th>
         <th>Action</th>
     </thead>
     <?php foreach($unseria_Data as $read_Data){
     ?>
     <tbody style="font-size: 20px; color: #000; font-weight: 600;">
         <tr>
        <td><?php printf('%s', $read_Data['id']); ?></td>
        <td><?php printf('%s', $read_Data['firstname']); ?></td>
        <td><?php printf('%s', $read_Data['lastname']); ?></td>
        <td><?php printf('%s', $read_Data['age']); ?></td>
        <td><?php printf('%s', $read_Data['class']); ?></td>
        <td><?php printf('%s', $read_Data['roll']); ?></td>
        <td style="width: 158px;">
             <a href="./index.php?task=edit&id=<?php printf( $read_Data['id']); ?>" class="btn btn-primary text-decoretion-none">Edit</a>
             <a href="./index.php?task=delete&id=<?php printf( $read_Data['id']); ?>" class="btn btn-danger text-decoretion-none">Dlete</a>
            </td>
     </tr>
     </tbody>
     <?php } ?>
 </table>
<?php
}
?>
<!-- Add New Student Function -->
<?php 
function addStudent($firstname, $lastname, $age, $class, $roll){
    $found = false;
    $seria_Data =  file_get_contents(DB);
    $unseria_Data = unserialize($seria_Data);

    foreach($unseria_Data as $D_roll){
        if($D_roll['roll']==$roll){
            $found = true;
            break;
        }
    }

if(!$found){
          $addId = count($unseria_Data)+1;

$add_new_student = array(
    'id'         => $addId,
    'firstname'  => $firstname,
    'lastname'   => $lastname,
    'age'        => $age,
    'class'      => $class,
    'roll'       => $roll,
);
array_push($unseria_Data, $add_new_student);

        $serialize = serialize($unseria_Data);
        file_put_contents(DB, $serialize, LOCK_EX);
        return true;
}
return false;

}

// Edit Function
function studentGet($id){
    $seria_Data =  file_get_contents(DB);
    $unseria_Data = unserialize($seria_Data);

    foreach($unseria_Data as $E_student){
        if($E_student['id']==$id){
            return $E_student;
}
return false;
    }
}

//  Update Student Function 

function updateStudent($id, $firstname, $lastname, $age, $class, $roll){
    $seria_Data =  file_get_contents(DB);
    $unseria_Data = unserialize($seria_Data);
    
    $found = false;
foreach($unseria_Data as $Dub_roll){
        if($Dub_roll['roll']==$roll & $Dub_roll['id'] !=$id){
            $found = true;
            break;
        }
    }
    if(!$found){
   $unseria_Data[$id]['firstname'] = $firstname;
   $unseria_Data[$id]['lastname'] = $lastname;
   $unseria_Data[$id]['age'] = $age;
   $unseria_Data[$id]['class'] = $class;
   $unseria_Data[$id]['roll'] = $roll;
   $serialize = serialize($unseria_Data);
   file_put_contents(DB, $serialize, LOCK_EX);
   return true;
    }
    return false;
}