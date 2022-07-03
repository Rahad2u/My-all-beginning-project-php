<?php 
$sortype= array(
    'image/jpg',
    'image/png',
    'image/jpeg'
);
    if($_FILES['photo']){
       
        $totalfiles= count($_FILES['photo']['name']);
        for($i=0; $i<$totalfiles; $i++){
            //echo "<pre>";
            //var_dump( $_FILES['photo']);die;
            if(
                in_array($_FILES['photo']['type'][$i], $sortype)!==false && $_FILES['photo']['size'][$i]<5*1024*1024){
                //var_dump($_FILES);die;
                move_uploaded_file($_FILES['photo']['tmp_name'][$i],"img/".$_FILES['photo']['name'][$i]);
            }
        }
    }
    
    //  if($_FILES['photo']){
    //    if($_FILES['photo']['type']=='image/png' || $_FILES['photo']['type']=='image/jpg' || $_FILES['photo']['type']=='image/jpeg'){
    //         move_uploaded_file($_FILES['photo']['tmp_name'],"img/");
    //    }
        
    // } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,
    100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>learning</title>
</head>
<body>
    <section class="sunbmit-from">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center">
                
                <div class="box shadow-lg">
                <h3 class="mb-2">Small form</h3>
            <p>
                <?php   //print_r($_POST);
                        //echo nl2br("\n");
                        //print_r($_FILES);

                ?>
            </p>
            
                <form action="" method="POST" enctype= "multipart/form-data">
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="f-name">First Name</label>
                    <input name="first_name" type="text" class="form-control" placeholder="F-Name" aria-label="Username"  id="f-name" value=""/>
                    </div>
                
                    
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="L-name">Last Name</label>
                    <input name="last_name" type="text" class="form-control" placeholder="L-name" aria-label="Username"  id="L-name" value=""/>
                    </div>
                    
                    
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="E-mail">Your E-mail</label>
                        <input name="email" type="text" class="form-control" placeholder="E-mail address" aria-label="Username"  id="E-mail" value=""/>
                    </div>
                
                    
                    <div class="text-area text-center">
                        <label class="fonts" for="text-a">Text if you have any questions</label>
                        <textarea name="Descrip" id="text-a" cols="30" rows="10" class="text-a form-control" placeholder="Text heare"></textarea>
        
                    <div class="file">
                        <label for="file">Select Flele</label>
                        <input type="file" name="photo[]" id="file">
                        <label for="file2">Select Flele</label>
                        <input type="file" name="photo[]" id="file2">
                        <label for="file3">Select Flele</label>
                        <input type="file" name="photo[]" id="file3">
                        <label for="file4">Select Flele</label>
                        <input type="file" name="photo[]" id="file4">
                    </div>
                    <div class="check-r">
                        <input type="checkbox" class="checkk" id="check" name="checkbox1" value="1">
                        <label for="check">I Agree</label>
                    </div> 
                        <div class="button">
                        <input href="#" type="submit" class="btn btn-primary mt-2 shadow-none"/>
                    </div>

                </form>
                    
            </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> <!-- auto tiping cdn -->
    <script>
        var typed= new Typed(".larn",{
            strings: ["Anything Online"],
            typespeed: 100,
            backSpeed: 100,
            loop: true,
        })
    </script>
   
</body>
</html>

