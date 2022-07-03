<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<!-- Admin header -->
<?php include "include_file/admin_header.php"; ?>

<?php 
// Database document
include "include_file/database_connect.php";

?>

<section class="ad-admin-page" style="background-color: #ececec; padding: 8%;">
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-4" style="color: #000;">Change Password</h1>
            <?php 
            if(isset($_POST['password-old'])){
             $old_password     = htmlspecialchars($_POST['password-old']);
             $new_password     = htmlspecialchars($_POST['password-new']);
             $confirm_password = htmlspecialchars($_POST['password-confirm']);
             ob_start();
             $chack_box        = htmlspecialchars($_POST['check-box']);
             ob_end_clean();
             $id_p             = htmlspecialchars($_POST['id']);
             // recive id
             $id = "";
            if(isset($_GET['id'])){
               $id = $_GET['id'];
             // mysql query
             $mysql = "SELECT * FROM admin_table WHERE id = '$id'";
             $mysql_query = ($connect->query($mysql));
             $mysql_array = mysqli_fetch_assoc($mysql_query);
             
            $password_d   = $mysql_array['password'];
            $password_i   = $old_password==$password_d;
            $password_new = $new_password==$confirm_password;
            // Update password query
            if(isset($_POST['submit'])){
             if($old_password!='' && $new_password!='' && $confirm_password!='' && $chack_box!=''){
            if($password_i==true){
                if($password_new==true){
                $update_p_sql    = "UPDATE admin_table SET password = '$new_password' WHERE id = '$id_p'";
                $update_query    = ($connect->query($update_p_sql));
                $_SESSION['alart-p-c-successfully'] = "Successfully password change";
                header("location:./admin_page.php");
                }elseif($password_new==false){
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                      <strong>Confirm password not match!!!</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
            }elseif($password_i==false){
                ?>
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                  <strong>Old password not match!!!</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            }else{
                $_SESSION['not-change-p'] = "Password not change";
                if(isset($_SESSION['not-change-p'])){
                    
                ?>
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                  <strong>Somthig Rong!!!</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['not-change-p']);
            }
        }
            }
        }
    }
            ?>
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-white p-4 shadow-lg">
            <form class="row g-3" action="" method="POST">
                    <div class="col-md-6">
                        <label for="inputpassword4" class="form-label">Old Password**</label>
                        <input type="password" class="form-control" id="inputpassword4" placeholder="Old password" name="password-old" require>
                    </div>
                    <div class="col-md-6">
                        <label for="inputpassword4" class="form-label">New Password**</label>
                        <input type="password" class="form-control" id="inputpassword4" placeholder="New Password" name="password-new" require>
                    </div>
                    <div class="col-md-8">
                        <label for="inputpassword4" class="form-label">Confirm Password**</label>
                        <input type="password" class="form-control" id="inputpassword4" placeholder="New Password" name="password-confirm" require>
                        <!-- hidden input fld -->
                        <input type="text" value="<?php echo $_GET['id']; ?>" name="id" hidden>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="check-box" require>
                        <label class="form-check-label" for="gridCheck">
                            Add admin
                        </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit">Change-password</button>
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

