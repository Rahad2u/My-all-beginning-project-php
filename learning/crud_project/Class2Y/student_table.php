<?php 
    $database = mysqli_connect('localhost', 'root', '', 'crud1');
    
    if(isset($_GET['deleteid'])){
      $deleteid = $_GET ['deleteid'];
      $f_dlete = "DELETE FROM student_data WHERE id= $deleteid";
      
      if(mysqli_query($database, $f_dlete)){
        header("location: student_table.php");
      }
    
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css">
    <title>CRUD2</title>
    <link rel="icon" href="./img/Webysther_20160423_-_Elephpant.svg.png">
  </head>
  <body style="height: 100vh;">
   <div class="container">
   <div class="adstudent"style="text-align: right; margin-top: 30px;">
    <a href="./index.php" class="text-decoration-none btn btn-info" style="font-weight: 700; color: #fff;">AD Student</a>
  </div>
       <div class="row">
           <div class="col-lg-1"></div>
           <div class="col-lg-10" style="margin-top: 100px;">
            <div class="h_d" style="text-align: center; color: #000; margin-bottom: 15px;">
              <h3>Student's Informetion</h3>
            </div>
            <?php 
             $sql       = "SELECT * FROM student_data";
             $mquery    = mysqli_query($database, $sql);
             echo '<table class="table table-primary">
             <thead>
  
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Age</th>
                 <th>Class</th>
                 <th>Roll</th>
                 <th>Action</th>
               </thead>
            ';
            while( $aData     = mysqli_fetch_assoc($mquery)){
             $firstname = $aData['firstname'];
             $lastname  = $aData['lastname'];
             $age       = $aData['age'];
             $class     = $aData['class'];
             $roll      = $aData['roll'];
             $id        = $aData['id'];
             echo "<tbody>
               
               <td>$firstname</td>
               <td>$lastname</td>
               <td>$age</td>
               <td>$class</td>
               <td>$roll</td>
               <td>
                  <a href='edit.php?id=$id' class='btn btn-primary'>Edit</a> 
                  <a href='student_table.php?deleteid=$id' class='btn btn-danger'>Delete</a>
               </td>
             ";
             
            }?>
            </div>
            </div>
           </div>
           <div class="col-lg-1"></div>
       </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- https://cdnjs.com/libraries/popper.js/2.5.4 -->
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"
    ></script> -->

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </body>
</html>
