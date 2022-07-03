<?php include "include_file/database_connect.php"; ?>

<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<?php include "include_file/admin_header.php"; ?>

<section class="admin_coltrol d-flex">
    <div class="container">
        <div class="row">
<h1 class="text-center" style="color: #000; margin-bottom: 35px; font-family: monospace;">Category Control</h1>
  <?php 
      if(isset($_SESSION['alart-c'])){
        ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          <strong>Category Add successfull</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['alart-c']);
      }

      if(isset($_SESSION['categori_d'])){
         ?>
         <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
           <strong>Delete Successfull</strong>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <?php
         unset($_SESSION['categori_d']);
      }
      
// Image unlink massage SESSION

      if(isset($_SESSION['remove'])){
        $_SESSION['remove'];
        unset($_SESSION['remove']);
      }

    //  $path = new DirectoryIterator("./img/categori_img");
    //  foreach($path as $count){
    //   echo $count->getPathName()."\n";
      
    //  }

    // Edit category alert part
    if(isset($_SESSION['not-found'])){
      ?>
      <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Category not found!!!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
      unset($_SESSION['not-found']);
    }
    
// Addmin edit alert part
    if(isset($_SESSION['admin_edit_successfull'])){
      ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Edit Successfully</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
      unset($_SESSION['admin_edit_successfull']);
    }
  ?>
<div class="add-admin mb-5">
                <a href="./add_category.php" class="btn glow-buttonw d-flex justify-content-center align-items-center">Add category</a>
              </div>
        
            </div>
            <div class="col-lg-12">
            <form action="" method="POST">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th scope="col">S.N</th>
                      <th scope="col">Title</th>
                      <th scope="col">Image</th>
                      <th scope="col">Featured</th>
                      <th scope="col">Active</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  
                  // Sql select all table data

                  $sql = "SELECT * FROM category_table";
                  
                  // Sql query

                  $sql_query = ($connect->query($sql));
                  
                  // Count rows 

                  $count = mysqli_num_rows($sql_query);
                  $sl_count = 1;
                  $extetion_file =[".jpg".".png".".svg"];
                  if($count>0){
                    // We have data in database
                    while($row = mysqli_fetch_assoc($sql_query)){
                      $id          = $row['id'];
                      $title       = $row['title'];
                      $image_name  = $row['image_name'];
                      $featured    = $row['featured'];
                      $active      = $row['active'];

                      ?>
                    <tr>
                      <th scope="row"><?php echo $sl_count++; ?></th>
                      <td><?php echo $title; ?></td>

                      <td><?php 
                      
                      if($image_name!=""){
                        // Display the image
                        ?>
                        <img src="./img/categori_img/<?php echo $image_name; ?>" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                        <?php
                      }else{
                        // image not found message
                        ?>
                        <img src="./img/png-clipart-logo-brand-product-trademark-font-not-found-logo-brand.png" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                        <?php
                      }
                      
                      ?>
                    </td>

                      <td><?php echo $featured; ?></td>
                      <td><?php echo $active; ?></td>
                      <td>
                          <a href="admin_edit_categori.php?id=<?php echo $id; ?>" class="btn glow-button-edit">Edit E-C</a>
                          <a href="admin_delete_categori.php?id=<?php echo $id; ?> & image_name=<?php echo $image_name; ?>" class="btn glow-button-delete">Delete D-C</a>
                      </td>
                    </tr>
                    
                  
                      <?php
                      
                    }
                  }else{
                    // We do not have data in database
                    echo "Data not support";
                  }
                  
                  ?>       
                  </tbody> 
                </table>
            </form>
            </div>
            
        </div>
    </div>
</section>


<?php include "include_file/footer.php"; 

}else{
  header("location: admin_login.php");
}
?>
