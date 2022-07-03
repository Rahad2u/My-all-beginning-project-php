<!-- Connect to database -->
<?php include "./include_file/database_connect.php"; ?>
<section class="food-menu">
    <div class="container">
     <div class="row">
      <h1 class="text-center">Food Menu</h1>

      
<?php


// Create pagenetion 

          if(isset($_GET['pageno'])){
              $pageno = $_GET['pageno'];

              $pageno_multiplication = ($pageno -1) * 6;

              // Select table mysql 
              $mysql_count   = "SELECT * FROM food_table";
              $mysql_query_c = ($connect->query($mysql_count));
              
              // count table
              $mysql_numrows_c = mysqli_num_rows($mysql_query_c);

             $pageno_division = ($mysql_numrows_c/6);

             $page_subtraction = $pageno - 1;
             $page_addition    = $pageno + 1;

          }else{
            $pageno_multiplication = 0;
            $page_addition = 1;
            $page_subtraction = 0;
            $pageno = 2;
            $pageno_division = 2;
            
          }
         

      // select mysql table
      $mysql_select = "SELECT * FROM food_table WHERE featured = 'Yes' AND active = 'Yes' LIMIT 6 OFFSET $pageno_multiplication";

      $mysql_query  = ($connect->query($mysql_select)); 
      $mysqli_numrows = mysqli_num_rows($mysql_query);
      

      if($mysqli_numrows>0){
          while($mysql_array = mysqli_fetch_assoc($mysql_query)){
            $id             = $mysql_array['id'];
            $title          = $mysql_array['title'];
            $f_description  = $mysql_array['description'];
            $f_price        = $mysql_array['price'];
            $f_image        = $mysql_array['image_name'];
            
            ?>
             <div class="mt-5 set-background shadow-sm">
        <div class="row-width">
           <div class="">
            <div class="img-food-menu">
               <img src="././img/add_food_img/<?php echo $f_image; ?>" alt="" style="height: 90px; width: 110px; border-radius: 10px;">
             </div>
           </div>
             <div class="text-menu">
             <h4><?php echo $title; ?></h4>
             <h5>$<?php echo $f_price; ?></h5>
             <p><?php echo $f_description; ?></p>
             <a class="btn btn-danger" href="./order_table.php?id=<?php echo $id; ?>">Order now</a>
           </div>
           </div>
         </div>
            <?php
            
          }

      }else{
        echo "Table empty";
      }

    ?>

                  <div class="text-center mt-5 m-top">
                    <?php 
                    if($page_subtraction == 0){
                      ?>
                     <span style="color: #4287f5; cursor: pointer;"><i class="fa-solid fa-angles-left"></i> Back</span>
                      <?php
                    }else{
                      ?>
                    <a href="index.php?pageno=<?php echo $page_subtraction; ?>" class="hover-set text-decoration-none text-danger"><i class="fa-solid fa-angles-left"></i> Back</a>
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
                    <a href="index.php?pageno=<?php echo $page_addition; ?>" class="hover-set text-decoration-none text-danger">Next  <i class="fa-solid fa-angles-right"></i></a>
                    <?php
                   }
                   ?>
                  </div>

                  <style>
                    .hover-set{
                      transition: .5s;
                    }
                    .hover-set:hover{
                      color: #a1333e!important;
                    }

                  </style>
       </div>
       <div class="col-lg-6"></div>
     </div>
    </div>
  </section>