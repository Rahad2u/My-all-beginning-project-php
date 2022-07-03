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
        ob_start();
        $check_box = htmlspecialchars($_POST['check-box']);
        ob_end_clean();
        
    }
?>

<section class="ad-admin-page" style="background-color: #ececec; padding: 8%;">
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-4" style="color: #000;">Edit admin data</h1>

            <?php 

            $id_D        = "";
            $full_name_D = "";
            $user_name_D = "";
            $email_D     = "";
            $id          = "";
           if(isset($_GET['id'])){
             $id = $_GET['id'];
            $database_table_select = "SELECT * FROM admin_table Where id = '$id'";

            $query = ($connect->query($database_table_select));

            $mysqli_array = mysqli_fetch_assoc($query);
            
            $id_D         = $mysqli_array['id'];
            $full_name_D  = $mysqli_array['full_name'];
            $user_name_D  = $mysqli_array['user_name'];
            $email_D      = $mysqli_array['email'];

            if(isset($_POST['submit'])){

               $u_full_name = $_POST['full-name'];
               $u_user_name = $_POST['user-name'];
               $u_eamil     = $_POST['email'];
               $u_id        = $_POST['id'];

               

             
                if($full_name !='' && $user_name !='' && $email !='' && $check_box !=''){

                   $updata_sql = "UPDATE admin_table SET full_name = '$u_full_name', user_name = '$u_user_name', email = '$u_eamil' WHERE id = '$u_id'";

                   $query_update = ($connect->query($updata_sql));
                   if($query_update){
                       $_SESSION['admin-update-alart']="successfully admin update";
                   }
                    header("location:./admin_page.php");
                }else{?>
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                      <strong>Somthing Rong!!!</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                }
            }
        }
    
            ?>
                 
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-white p-4 shadow-lg">
            <form class="row g-3" action="" method="POST">
                    <div class="col-md-6">
                        <label for="inputname1" class="form-label">Full name**</label>
                        <input type="text" class="form-control" id="inputname1" placeholder="Full name" name="full-name" require value="<?php echo $full_name_D; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">User name**</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="User name" name="user-name" require value="<?php echo $user_name_D; ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputemail2" class="form-label">E-mail**</label>
                        <input type="email" class="form-control" id="inputemail2" placeholder="E-mail" name="email" require value="<?php echo $email_D; ?>" required>

                        <!-- hidden fild -->
                        <input type="text" name="id" hidden value="<?php echo $id; ?>">
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
                        <button type="submit" class="btn btn-primary" name="submit">Edit</button>
                    </div>
            </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>

<!-- footer section -->
<?php include "include_file/footer.php"; 
}else{
    header("location: admin_login.php");
  }
  ?>
?>

