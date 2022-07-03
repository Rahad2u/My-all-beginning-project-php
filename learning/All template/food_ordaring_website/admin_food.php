<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<!-- Database connection -->
<?php include "include_file/database_connect.php"; ?>
<!-- Admin header include -->
<?php include "include_file/admin_header.php"; ?>

<style>

.admin_coltrol .add-admin .glow-button{
    transition: .5s;
}
.admin_coltrol .add-admin .glow-button:hover{
    color: #fff;
}

</style>
<section class="admin_coltrol d-flex">
    <div class="container">
        <div class="row">
<h1 class="text-center" style="color: #000; margin-bottom: 35px; font-family: monospace;">Food Control</h1>
<?php 
// Edit successfully message

if(isset($_SESSION['admin_food_edit_successfull'])){
  ?>
  <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
    <strong>Successfully Edit food document</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  unset($_SESSION['admin_food_edit_successfull']);
}

if(isset($_SESSION['not-found-f'])){
  ?>
  <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
    <strong>Food not found!!!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  unset($_SESSION['not-found-f']);
}

if(isset($_SESSION['successfully-add'])){
  ?>
  <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
    <strong>Successfully Add</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  unset($_SESSION['successfully-add']);
}

// Alart not working  

if(isset($_SESSION["food-delete"])){
  ?>
  <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  unset($_SESSION["food-delete"]);
}
?>
<div class="add-admin mb-5">
                <a href="./add_food.php" class="btn glow-button">Add food</a>
              </div>
            
            </div>
            <div class="col-lg-12">
            <form action="" method="POST" enctype="multipart/form-data">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th scope="col">S.N</th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Price</th>
                      <th scope="col">Image</th>
                      <th scope="col">Food-id</th>
                      <th scope="col">Featured</th>
                      <th scope="col">Active</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

          // Create pagenetion 

          if(isset($_GET['pageno'])){
            $pageno = $_GET['pageno'];

            $pageno_multiplication = ($pageno - 1) * 7;

            // Select table mysql 
            $mysql_count   = "SELECT * FROM food_table";
            $mysql_query_c = ($connect->query($mysql_count));
            // count table
            $mysql_numrows_c = mysqli_num_rows($mysql_query_c);

           $pageno_division = ($mysql_numrows_c/7) + 1;

           $page_subtraction = $pageno - 1;
           $page_addition    = $pageno + 1;

        }else{
          $pageno_multiplication = 0;
          $page_addition = 1;
          $page_subtraction = 0;
          $pageno = 2;
          $pageno_division = 2;
          
        }
       

                    // Food table all data select
                    $sql_select = "SELECT * FROM food_table LIMIT 7 OFFSET $pageno_multiplication";
                    $sql_query  = $connect->query($sql_select);

                    $sql_numrows = mysqli_num_rows($sql_query);
                    $s_l = 1;
                    if($sql_numrows > 0){
                        while($t_row = mysqli_fetch_assoc($sql_query)){
                          $d_id             = $t_row['id'];
                          $d_title          = $t_row['title'];
                          $d_description    = $t_row['description'];
                          $d_price          = $t_row['price'];
                          $d_image_name     = $t_row['image_name'];
                          $d_category_id    = $t_row['category_id'];
                          $d_featured       = $t_row['featured'];
                          $d_active         = $t_row['active'];

?>
            <tr>
                      <th scope="row"><?php echo $s_l++; ?></th>
                      <td><?php echo $d_title; ?></td>
                      <td style="width: 22%; height: 30%;"><?php echo $d_description; ?></td>
                      <td>$<?php echo $d_price; ?></td>
                      <td>
                          <?php 
                          
                          if($d_image_name!=""){
                            ?>
                            <img src="./img/add_food_img/<?php echo $d_image_name; ?>" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                            <?php
                          }else{
                            ?>
                            <img src="./img/png-clipart-logo-brand-product-trademark-font-not-found-logo-brand.png" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                            <?php
                          }
                          
                          ?>
                      </td>
                      <td><?php echo $d_category_id; ?></td>
                      <td><?php echo $d_featured; ?></td>
                      <td><?php echo $d_active; ?></td>
                      <td>
                          <a href="admin_edit_food.php?id=<?php echo $d_id; ?>" class="btn glow-button-edit">Edit D-f</a>
                          <a href="admin_delete_food.php?id=<?php echo $d_id; ?> & image_name=<?php echo $d_image_name; ?>" class="btn glow-button-delete">Delete D-f</a>
                      </td>
            </tr>
<?php
                        }
                    }else{
                      echo "";
                    }

                  ?>
                   
                  </tbody>
                </table>
            </form>
            </div>
            <div class="Pagination mt-5 text-center">
              <?php 
              if($page_subtraction==0){
                ?>
                     <span style="color: #4287f5; cursor: pointer;"><i class="fa-solid fa-angles-left"></i> Back</span>
                <?php
              }else{
                ?>
            <a href="admin_food.php?pageno=<?php echo $page_subtraction; ?>" class="hover-set text-decoration-none text-danger hover-set"><i class="fa-solid fa-angles-left"></i> Back</a>
                <?php
              }
              ?>
            <span style="margin-left: 5px; color: #000; margin-right: 5px;">|</span>
            <?php 
            
            if($page_addition > $pageno_division){
              ?>
                     <span style="color: #4287f5; cursor: pointer;">Next <i class="fa-solid fa-angles-right"></i></span>
              <?php
            }else{
              ?>
            <a href="admin_food.php?pageno=<?php echo $page_addition; ?>" class="hover-set text-decoration-none text-danger hover-set">Next  <i class="fa-solid fa-angles-right"></i></a>
              <?php
            }
            
            ?>
            </div>
        </div>
        
    </div>
</section>


<?php include "include_file/footer.php"; 

}else{
  header("location: admin_login.php");
}
?>