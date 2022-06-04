<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/044042dbf1.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navtop">
        <a class="nav-link" id="nav-link">Mkvmovies</a>
        <!-- if you use mobile screen that this button will work as hamburger menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link nav-spacing" href="homepage.php" target="_self">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-spacing" href="aboutus.php" target="_self">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-spacing" href="contactus.php" target="_self">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-spacing" href="mybooking.php" target="_self">My booking</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <button class="btn btn-outline-success my-2 my-sm-0 nav-login"
                    onclick="location.href='login.php'">Login</button>
            </ul>
        </div>
    </nav>
    <br><br>
    <br><br><br><br>
    <div class="aboutus">
        <h1  style="text-transform:uppercase">About Us</h1>
        <p>This website is a prototype of modern day movie booking website. We can Book tickets for various films, at various cinemas at various cities. Also we can know whether a particular show is booked.</p>
    </div>
    <br><br><br>
    <div class="BigBX">
        <div class="BBX">
            <div class="bx1">
                <img src="karan.jpeg" alt="">
                <h3>Karan Tanakhia</h3>
                <p>
                <ul type="none">
                    <li>19CP065</li>
                    <li>Backend Developer</li>
                    <li><a href="mailto:kishantanakhiya@gmail.com">kishantanakhiya@gmail.com</a></li>
                </ul>
                </p>
            </div>
            <div class="bx2 ">
                <img src="hemang.jpeg" alt="">
                <h3>Hemang Parekh</h3>
                <p>
                    <ul type="none">
                        <li>19CP066</li>
                        <li>Frontend Developer</li>
                        <li><a href="mailto:hemangparekh36@gmail.com">hemangparekh36@gmail.com</a></li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
    <br><br>
    <footer class="footer">
        <div class="social-media-links">
            <a href=#><i class="fab fa-facebook fa-4x"></i></a>
            <a href=#><i class="fab fa-twitter fa-4x"></i></a>
            <a href=#><i class="fab fa-instagram fa-4x"></i></a>
        </div>
    </footer>
</body>
</html>