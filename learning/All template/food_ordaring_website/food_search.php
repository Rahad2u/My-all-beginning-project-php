<?php include "./include_file/database_connect.php"; ?>
<?php include "./include_file/header.php"; ?>

<section class="searce-box d-flex justify-content-center align-items-center"> 
        <div class="container">
        <form action="" method="POST">
                <div class="row">
                    <div class="col-lg-12 text-center">
                      <?php 
                      if(isset($_POST['search'])){
                        $search = $_POST['search-input'];
                      
                      ?>
                      <h1 class="h1" style="color: #000;">Foods on your search <span class="span" style="cursor: pointer;">"<?php echo $search; ?>"</span></h1>
                      <style>
                          .h1 {
                          font-weight: 600;
                          font-family: unset;
                          }
                          .span{
                            color: #de69ff;
                            transition: .5s;
                          }
                          .span:hover{
                            color: #ea1bf5;
                          }
                      </style>
                      <?php 
                      }
                      ?>
                    </div>
                </div>
        </form>
    </div>
   </section>


<!-- Connect to database -->
<?php include "./include_file/database_connect.php"; ?>
<section class="food-menu">
    <div class="container">
     <div class="row">
      <h1 class="text-center">Search food</h1>

      <?php 
       
                      if(isset($_POST['search'])){

                        $search = $_POST['search-input'];
                        
                        // Search sql
                        $sql_search = "SELECT * FROM food_table WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
                        // Exicute query
                        $mysql_query = ($connect->query($sql_search));
                        $count = mysqli_num_rows($mysql_query);

                        if($count>0){
                          while($mysqli_array = mysqli_fetch_assoc($mysql_query)){
                            $id            = $mysqli_array['id'];
                            $title         = $mysqli_array['title'];
                            $description   = $mysqli_array['description'];
                            $price         = $mysqli_array['price'];
                            $image_name    = $mysqli_array['image_name'];
                           
                              ?>
                              <div class="mt-5 set-background shadow-sm">
                                <div class="row-width">
                                  <div class="">
                                    <div class="img-food-menu">
                                      <img src="././img/add_food_img/<?php echo $image_name; ?>" alt="" style="height: 90px; width: 110px; border-radius: 10px;">
                                    </div>
                                  </div>
                                    <div class="text-menu">
                                    <h4><?php echo $title; ?></h4>
                                    <h5>$<?php echo $price; ?></h5>
                                    <p><?php echo $description; ?></p>
                                    <a class="btn btn-danger" href="./order_table.php?id=<?php echo $id; ?>">Order now</a>
                                  </div>
                                  </div>
                                </div>
                              <?php
                          }
                        }
                      }
          ?>
          <style>
           .food-menu {
                background-color: #ececec;
                height: auto;
                padding-bottom: 70px;
            }
          </style>
       </div>
       <div class="col-lg-6"></div>
     </div>
    </div>
  </section>

<?php include "./include_file/footer.php"; ?>