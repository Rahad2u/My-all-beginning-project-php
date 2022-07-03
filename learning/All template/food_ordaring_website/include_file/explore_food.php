<?php include "./include_file/database_connect.php"; ?>
<section class="explore-foods">
    <div class="container">
      <div class="explore-text text-center mb-4">
        <h4>Explore Foods</h4>
      </div>
      <div class="row">
       
        <?php 
        // Select sql table
        $sql_table = "SELECT * FROM category_table WHERE featured = 'Yes' AND active = 'Yes' LIMIT 3";
        // Query exicute
        $sql_query = ($connect->query($sql_table));
        $mysqli_count = mysqli_num_rows($sql_query);
        if($mysqli_count >1){
         while($mysqli_array = mysqli_fetch_assoc($sql_query)){
          $id         = $mysqli_array['id'];
          $title      = $mysqli_array['title'];
          $image_name = $mysqli_array['image_name'];
            ?>
             <div class="col-lg-4">
              <div class="food-img">
                <a href="./category.php?id=<?php echo $id; ?>">
            <img src="././img/categori_img/<?php echo $image_name; ?>" alt="">
            </a>
            <h3 class="text-center"><?php echo $title; ?></h3>
          </div>
          </div>
            <?php
         }
        }else{
          echo "No data in database";
        }
        ?>
       
       
        </div>
      </div>
    </div>
  </section>
