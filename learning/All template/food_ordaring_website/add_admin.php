<?php  
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<!-- Admin header -->
<?php include "include_file/admin_header.php"; ?>

<?php 
include "include_file/database_connect.php";
$full_name = "";
$user_name = "";
$email     = "";
$password  = "";
$check_box = "";

// Process the value from form the Database
    if(isset($_POST['submit'])){
        // echo "Clicked sucessfull";

        //Step[1] Get data 

        $full_name = htmlspecialchars($_POST['full-name']);
        $user_name = htmlspecialchars($_POST['user-name']);
        $email     = htmlspecialchars($_POST['email']);
        $password  = htmlspecialchars($_POST['password']);
        ob_start();
        $check_box = htmlspecialchars($_POST['check-box']);
        ob_end_clean();
    }
?>
<?php 

// Select sql

$sql = "SELECT * FROM admin_table";
// Sql query exicute
$sql_query = ($connect->query($sql));
// Sql array
$sql_array = mysqli_fetch_assoc($sql_query);
$email_d = $sql_array['email'];

?>
<section class="ad-admin-page" style="background-color: #ececec; padding: 8%;">
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-4" style="color: #000;">Add admin</h1>
            <?php  
                //Step[2] SQL query to save the data save into database
                if(isset($_POST['submit'])):;
                if($full_name !='' && $user_name !='' && $email !='' && $password !='' && $check_box !=''){
                $sql = "INSERT INTO admin_table SET full_name ='$full_name', user_name ='$user_name', email='$email', password='$password'";
                $query = mysqli_query($connect,$sql);

                 // Error
                 if(mysqli_error($connect)){
                    $_SESSION['email-taken'] = "Email alredy taken";
                   }else{
                    // successfull meassage
                    $_SESSION['add_admin'] = "successfully added admin";
                   }

                header('location:./admin_page.php');
                }else{ ?>
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                  <strong>Somthing Rong!!!</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php 
        } 
            endif;
                ?>
               
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-white p-4 shadow-lg">
            <form class="row g-3" action="" method="POST">
                    <div class="col-md-6">
                        <label for="inputname1" class="form-label">Full name**</label>
                        <input type="text" class="form-control" id="inputname1" placeholder="Full name" name="full-name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">User name**</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="User name" name="user-name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputemail2" class="form-label">E-mail**</label>
                        <input type="email" class="form-control" id="inputemail2" placeholder="E-mail" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputpassword4" class="form-label">Password**</label>
                        <input type="password" class="form-control" id="inputpassword4" placeholder="Password" name="password" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="check-box" required>
                        <label class="form-check-label" for="gridCheck">
                            Add admin
                        </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit">Add user</button>
                    </div>
            </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>

<!-- footer section -->
<?php include "include_file/footer.php"; ?>
<?php 
}else{
    header("location: admin_login.php");
}
?>
