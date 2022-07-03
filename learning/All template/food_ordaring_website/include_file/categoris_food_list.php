<?php include "./include_file/database_connect.php"; ?>
<section class="explore-foods">
    <div class="container">
      <div class="explore-text text-center">
        <h4>Explore Foods</h4>
      </div>
      <div class="row">
          <?php 
           // Select sql table
        $sql_table = "SELECT * FROM category_table LIMIT 6";
        // Query exicute
        $sql_query = ($connect->query($sql_table));
        $mysqli_count = mysqli_num_rows($sql_query);
        if($mysqli_count >1){
         while($mysqli_array = mysqli_fetch_assoc($sql_query)){
          $title      = $mysqli_array['title'];
          $image_name = $mysqli_array['image_name'];
          ?>
            <div class="col-lg-4" style="margin-top: 60px;">
          <div class="food-imgs">
            <img src="././img/categori_img/<?php echo $image_name; ?>" alt="">
            <h3 class="text-center"><?php echo $title; ?></h3>
          </div>
        </div>
          <?php
         }
        }
            ?>
         
      </div>
       <div class="pagenetion text-center" style="margin-top: 70px;">
        <!-- Pagenetion code start -->
        
          <a href="category.php?pageno=1" class="hover-set text-danger text-decoration-none"><i class="fa-solid fa-angles-left"></i> Back</a>
       <span style="color: #000;">|</span>
          <a href="category.php?pageno=2>" class="hover-set text-danger text-decoration-none">Next  <i class="fa-solid fa-angles-right"></i></a>
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
  </section>