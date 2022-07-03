<?php 
include_once "function.php";
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
                    <?php 

                    $fname = '';
                    $lname = '';
                    $email = '';
                    $cheked = '';

                    if(isset($_REQUEST['checkbox1']) && $_REQUEST['checkbox1']){
                        $cheked= 'checked';
                    }

                    ?>
                        <?php if(isset($_REQUEST['first_name']) && !empty($_REQUEST['first_name'])){ 
                            //$fname =htmlspecialchars($_REQUEST['first_name']); // Ruls no.1
                            $fname = filter_input(INPUT_POST,'first_name',FILTER_SANITIZE_EMAIL);
                        } ?>
                        <?php if(isset($_REQUEST['last_name']) && !empty($_REQUEST['last_name'])){ 
                            $lname = htmlspecialchars($_REQUEST['last_name']);
                        } ?>
                        <?php if(isset($_REQUEST['email']) && !empty($_REQUEST['email'])){
                            $email = htmlspecialchars($_REQUEST['email']);
                        } ?>
                </p>
                <p>
                <?php if(isset($_POST['first_name']) && !empty($_POST['first_name'])){ ?>
                    First name: <?php echo $_POST['first_name']; ?> <br/>
                    <?php } ?>
                    <?php if(isset($_POST['last_name']) && !empty($_POST['last_name'])){ ?>
                    Last name: <?php echo $_POST['last_name']; ?> <br/>
                    <?php } ?>
                    <?php if(isset($_POST['email']) && !empty($_POST['email'])){ ?>
                    E-mail: <?php echo $_POST['email']; ?> <br/>
                    <?php } ?>
                    
                    
                </p>
                <form action="" method="POST">
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="f-name">First Name</label>
                    <input name="first_name" type="text" class="form-control" placeholder="F-Name" aria-label="Username"  id="f-name" value="<?php echo $fname ?>"/>
                    </div>
                
                    
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="L-name">Last Name</label>
                    <input name="last_name" type="text" class="form-control" placeholder="L-name" aria-label="Username"  id="L-name" value="<?php echo $lname ?>"/>
                    </div>
                    
                    
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="E-mail">Your E-mail</label>
                        <input name="email" type="text" class="form-control" placeholder="E-mail address" aria-label="Username"  id="E-mail" value="<?php echo $email ?>"/>
                    </div>
                
                    
                    <div class="text-area text-center">
                        <label class="fonts" for="text-a">Text if you have any questions</label>
                        <textarea name="Descrip" id="text-a" cols="30" rows="10" class="text-a form-control" placeholder="Text heare"></textarea>
                        <div class="button">
                        <input href="#" type="submit" class="btn btn-primary mt-2 shadow-none"/>
                    </div>
                </form>
                    <div class="check-r">
                        <input type="checkbox" class="checkk" id="check" name="checkbox1" value="1" <?php echo $cheked ?>>
                        <label for="check">Check</label>
                    </div> 
                    <h5>Select some fruts</h5>
                    <div class="g-checkbox">
                                    <input type="checkbox" id="check1" name="fruits[]" value="apple" <?php nameCheked('apple') //isCheked('fruits','apple') ?>>
                                    <label for="check1">Apple</label><br/>

                                    <input type="checkbox" id="check2" name="fruits[]" value="orange" <?php nameCheked('orange') //isCheked('fruits','orange') ?>>
                                    <label for="check2">Orange</label><br/>

                                    <input type="checkbox" id="check3" name="fruits[]" value="banana" <?php nameCheked('banana') //isCheked('fruits','banana') ?>>
                                    <label for="check3">Banana</label><br/>

                                    <input type="checkbox" id="check4" name="fruits[]" value="cherry" <?php nameCheked('cherry') //isCheked('fruits','cherry') ?>>
                                    <label for="check4">Cherry</label><br/>

                                    <input type="checkbox" id="check5" name="fruits[]" value="guava" <?php nameCheked('guava') //isCheked('fruits','guava') ?>>
                                    <label for="check5">Guava</label><br/>

                                    <input type="checkbox" id="check6" name="fruits[]" value="lemon" <?php nameCheked('lemon') //isCheked('fruits','lemon') ?>>
                                    <label for="check6">Lemon</label><br/>
                    </div>
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

