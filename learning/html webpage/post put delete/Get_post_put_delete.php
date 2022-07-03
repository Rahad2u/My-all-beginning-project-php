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
                    <input name="first_name" type="text" class="form-control" placeholder="F-Name" aria-label="Username"  id="f-name"/>
                    </div>
                
                    
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="L-name">Last Name</label>
                    <input name="last_name" type="text" class="form-control" placeholder="L-name" aria-label="Username"  id="L-name"/>
                    </div>
                    
                    
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="E-mail">Your E-mail</label>
                    <input name="email" type="text" class="form-control" placeholder="E-mail address" aria-label="Username"  id="E-mail"/>
                    </div>
                
                    
                    <div class="text-area text-center">
                    <label class="fonts" for="text-a">Text if you have any questions</label>
                    <textarea name="Descrip" id="text-a" cols="30" rows="10" class="text-a form-control" placeholder="Text heare"></textarea>
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

