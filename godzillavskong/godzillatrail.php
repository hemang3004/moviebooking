<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/044042dbf1.js" crossorigin="anonymous"></script>
    <link href="../trailer.css" rel="stylesheet">
    <link rel="stylesheet" href="../footer.css">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('godzilla.jpg');
        }
    </style>
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
                    <a class="nav-link nav-spacing" href="../homepage.php" target="_self">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-spacing" href="../aboutus.php" target="_self">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-spacing" href="../contactus.php" target="_self">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-spacing" href="../mybooking.php" target="_self">My booking</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <button class="btn btn-outline-success my-2 my-sm-0 nav-login"
                    onclick="location.href='../login.php'">Login</button>
            </ul>
        </div>
    </nav>
    <div>
        <video class="trailer" src="godzilla.mp4" width="800" height="500"
            controls="controls"></video>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <footer class="footer">
        <div class="social-media-links">
            <a href=#><i class="fab fa-facebook fa-4x"></i></a>
            <a href=#><i class="fab fa-twitter fa-4x"></i></a>
            <a href=#><i class="fab fa-instagram fa-4x"></i></a>
        </div>
    </footer>
</body>
</html>