<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font family link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,
    100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
     integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" 
     crossorigin="anonymous">
     <link rel="stylesheet" href="css.css">
    <title>Templete 1</title>
    <link rel="icon" href="img/cddd.png">
</head>
<body>
    <section class="header" class="container">

        <video autoplay loop class="back-video" muted plays-inline>
            <source src="video/video.mp4" type="video/mp4">
        </video>

        <nav>
                <img src="img/logo.png" alt="" class="logo">
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Courses</a>
                    <i class="fas fa-chevron-circle-down"></i>
                <ul class="dropdown text-center">
                    <li class="d-block"><a href="#">Php</a></li>
                    <li class="d-block"><a href="#">Java Script</a></li>
                    <li class="d-block"><a href="#">HTML CSS</a></li>
                    <li class="d-block"><a href="#">Jquery</a></li>
                </ul>
                </li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Contact</a></li>
                <a action="#" type="button" class="btn btn-primary" href="../register_from//register_file.php">Register</a>
            </ul>
        </nav>
        <div class="content text-center">
            <h1><span class="larn"></span></h1>
        <div class="i-btn">
            <input type="text" placeholder="&#x270E; Enter Keyword">
            <a href="#" class="btn-primary bnt">Find Course</a>
            
        </div>
        <div class="categori-list">
            <div class="categori">
                <img src="img/exercise.png" alt="">
                <p>Yoga</p>
            </div>
            <div class="categori">
                <img src="img/coding.png" alt="">
                <p>Web design</p>
            </div>
            <div class="categori">
                <img src="img/guitar.png" alt="">
                <p>Song</p>
            </div>
            <div class="categori">
                <img src="img/console.png" alt="">
                <p>Game</p>
            </div>

            <div class="categori">
                <img src="img/language.png" alt="">
                <p>Language</p>
            </div>
        </div>
        </div>
    </section>
    <section class="button">
    <button class="glow-button" type="button">HOVER ME</button>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> <!-- auto tiping cdn -->
    <script>
        alert("If you want to get services from this site then you have to follow all the rules of the website");
        var typed= new Typed(".larn",{
            strings: ["Learn Anything Online"],
            typespeed: 100,
            backSpeed: 100,
            loop: true,
        })
    </script>
</body>
</html>