<?php 
    $database = mysqli_connect('localhost', 'root', '', 'crud1');
    if($_GET['id']){
        $getid = $_GET['id'];
        $D_sql = "SELECT * FROM student_data WHERE id= $getid";
        $sql_Q = mysqli_query($database, $D_sql);
        $sqlData = mysqli_fetch_assoc($sql_Q);
        
        $id        = $sqlData['id'];
        $firstname = $sqlData['firstname'];
        $lastname  = $sqlData['lastname'];
        $age       = $sqlData['age'];
        $class     = $sqlData['class'];
        $roll      = $sqlData['roll'];
    }
    $Id         = "";
    $Firstname1 = "";
    $Lastname1  = "";
    $Age1       = "";
    $Class1     = "";
    $Roll1      = "";
    if(isset($_POST['edit'])){
            $Id         = $_POST['id'];
            $Firstname1 = $_POST['firstname'];
            $Lastname1  = $_POST['lastname'];
            $Age1       = $_POST['age'];
            $Class1     = $_POST['class'];
            $Roll1      = $_POST['roll'];
    }
    
    if($Firstname1!='' && $Lastname1!='' && $Age1!='' && $Class1!='' && $Roll1!=''){
    $update = "UPDATE student_data SET firstname='$Firstname1', lastname='$Lastname1', age='$Age1', class='$Class1', roll='$Roll1' WHERE id='$Id'";
    if(mysqli_query($database, $update) == true){
        header('location: student_table.php');
        echo "true";
    }else{
      echo $update."false";
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
       <div class="row">
           <div class="col-lg-2">
           <div class="formB" style="margin-top: 100px; text-align: left;">
             <a href="./student_table.php" class="text-decoration-none btn btn-success">
               <i class="fa-solid fa-arrow-left" style="margin-right: 10px;"></i>Back student list</a>
           </div>
           </div>

           <div class="col-lg-8" style="margin-top: 100px;">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="shadow-lg border border-secondary padingf">
            <div class="row g-3">
            <div class="formtext mt-4">
                    <h4>Submit your data!</h4>
                </div>
                <div class="col-lg-6 mb-4 mt-3">
                    <label for="firstname" class="mb-1 tsize">First name*</label>
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name" id="firstname" name="firstname" value="<?php echo $firstname; ?>">
                </div>
                <div class="col-lg-6 mb-4 mt-3">
                    <label for="lastname" class="mb-1 tsize">Last name*</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="lastname" name="lastname" value="<?php echo $lastname; ?>">
                </div>
                <div class="col-lg-4">
                    <label for="age" class="mb-1 tsize">Age*</label>
                    <input type="text" class="form-control" placeholder="Age" aria-label="age" id="age" name="age" value="<?php echo $age; ?>">
                </div>
                <div class="col-lg-4">
                    <label for="class" class="mb-1 tsize">Class*</label>
                    <input type="text" class="form-control" placeholder="Class" aria-label="class" id="class" name="class" value="<?php echo $class; ?>">
                </div>
                <div class="col-lg-4">
                    <label for="roll" class="mb-1 tsize">Roll*</label>
                    <input type="text" class="form-control" placeholder="Class Roll" aria-label="roll" id="roll" name="roll" value="<?php echo $roll; ?>">
                </div>
                <input type="text" hidden name="id" value="<?php echo $id; ?>">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I Agree
                    </label>
                    </div>
                    <div class="button">
                    <button type="submit" class="btn btn-primary" name="edit" value="edit">Submit</button>
                    </div>
                </div>
            </form>
           </div>
           <div class="col-lg-2"></div>
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
