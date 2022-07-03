<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<?php 
$_SESSION['Checking'] = 'Data checking';
?>
<!-- Admin header -->
<?php include "include_file/admin_header.php"; ?>
<?php include "include_file/database_connect.php"; ?>
<section class="admin_coltrol d-flex">
    <div class="container">
        <div class="row">
<h1 class="text-center" style="color: #000; margin-bottom: 35px; font-family: monospace;">Admin control</h1>
<div class="add-admin mb-5">
                <a href="./add_admin.php" class="btn glow-button d-flex justify-content-center align-items-center">Add admin</a>
                <style>
                  .glow-button{
                    transition: .5s;
                  }
                  .glow-button:hover{
                    color: #fff;
                  }
                </style>
              </div>
              <div class="delete-m text-center mb-3">
                  <?php  
                  // Email alredy taken alart
                    if(isset($_SESSION['email-taken'])){
                      ?>
                      <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        <strong>Email already taken!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      <?php
                      unset($_SESSION['email-taken']);
                    }else{
                      // Successfully admin add alart meassage 

                      if(isset($_SESSION['add_admin'])){      
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Successfully Added Admin</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        unset($_SESSION['add_admin']);
                      }
                    }
                      if(isset($_SESSION['delete'])):;
                        ?>
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>successfully Admin deleted</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php
                      unset($_SESSION['delete']);
                      $page = $_SERVER['PHP_SELF'];
                      $sec = "1";
                      header("Refresh: $sec; url=$page");
                      endif;

                      // edit admin page session alart

                     if(isset($_SESSION['admin-update-alart'])){
                       ?>
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>Edit Successfully</strong>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>
                       <?php
                       unset($_SESSION['admin-update-alart']);
                     }
                        
                      // Successfully pasword change alart
                      
                      if(isset($_SESSION['alart-p-c-successfully'])){
                        ?>
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                          <strong>Successfully Password Changed</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        unset($_SESSION['alart-p-c-successfully']);
                       
                      }
                   ?>
              </div>
            </div>
            <div class="col-lg-12">
            <form action="" method="POST">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th scope="col">S.N</th>
                      <th scope="col">Full name</th>
                      <th scope="col">User name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php  
                  $sl = 1;
                  $database_s = "SELECT * FROM admin_table";
                  $sql_q = ($connect->query($database_s));
                  while($d_all_d = mysqli_fetch_assoc($sql_q)){
                    $id        = $d_all_d['id'];
                    $full_name = $d_all_d['full_name'];
                    $user_name = $d_all_d['user_name'];
                    ?>
                    <tr>
                      <th scope="row"><?php echo $sl++; ?></th>
                      <td><?php echo $full_name; ?></td>
                      <td><?php echo $user_name; ?></td>
                      <td style="width: 50%;">
                        <a href="./update_password.php?id=<?php echo $id; ?>" class="btn glow-button-change">Change-password</a>
                        <a href="./edit_admin.php?id=<?php echo $id; ?>" class="btn glow-button-edit">Edit E-A</a>
                        <a href="./delete_admin.php?id=<?php echo $id; ?>" class="btn glow-button-delete">Delete D-A</a>
                      
                      </td>
                    </tr>
 <?php } ?>
                  </tbody>
                </table>
            </form>
            </div>
        </div>
    </div>
</section>


<!-- footer section -->
<?php include "include_file/footer.php";

}else{
  header("location: admin_login.php");
}
?>