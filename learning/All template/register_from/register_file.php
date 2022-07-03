<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,
    100;1,300;1,400;1,500;1,700;1,900&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="register_file.css">
    <title>Student_Register_Form</title>
    <link rel="icon" href="img/Webysther_20160423_-_Elephpant.svg.png">
</head>
<body>
    <section class="register_form">
        <div class="container">
            <div class="wd_th">
               <div class="input_all">
               <div class="text">
               <h2>Registretion</h2>
               </div>
             
               <form action="" class="row g-3" method="get">
                    <div class="col-md-6">
                        <label for="full-name" class="form-label">Full Name*</label>
                        <input type="text" class="form-control" id="full-name">
                    </div>
                        <div class="col-md-6">
                            <label for="lastname" class="form-label">User Name*</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password*</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City*</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State*</label>
                    <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>Kurigram</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip*</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I Agree
                    </label>
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-primary">
                </div>
</form>
    </section>
</body>
</html>