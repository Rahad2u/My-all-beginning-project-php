
<section class="searce-box d-flex justify-content-center align-items-center"> 
        <div class="container">
        <form action="food_search.php" method="POST">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="search"> <i class="fa fa-search"></i> 
                        
                        <input type="text" name="search-input" class="form-control" placeholder="Search For Food" required>
                        <?php 
                        // ob_start();
        //     if(isset($_POST['search-input'])!=""){
        //    header("location: food_search.php");
        //     }
            // ob_end_clean();
           ?>
                        <button class="btn btn-primary" name="search">Search</button> </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
        </form>
    </div>
   </section>