<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="homepage1.css">
    <!-- for icon -->
    <script src="https://kit.fontawesome.com/044042dbf1.js" crossorigin="anonymous"></script>
    <!-- for icon -->
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navtop">
        <a class="nav-link" id="nav-link">Mkvmovies</a>
        <!-- if you use mobile screen that this button will work as hamburger menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <button class="btn btn-outline-success my-2 my-sm-0 nav-login" onclick="location.href='login.php'">Login</button>
            </ul>
        </div>
    </nav>
    <br><br><br><br>
    <br><br><br><br><br><br>
    <div class="container">
        <div class="banner-content">
            <h6 class="title"><span>book your</span><br>
                <span>tickets for <span style="color: #ff4900;">Movie</span></span>
            </h6>
            <p>Safe, secure, reliable ticketing.Your ticket to live entertainment!</p>
        </div>
    </div>
    <br>
    <br><br>
    <br><br>
    <section id="movies">
        <h1>ON Going MOVIES</h1>
        <div class="moviebox">
            <div class="movie movie1">
                <div class="image">
                    <img src="godzillavskong/godzilla.jpg" alt="Godzilla vs Kong">
                    <div class="boxcontent">
                        <h3>Godzilla vs Kong</h3>
                        <a href="godzillavskong/godzillavskong.php" class="btn1" target="_self">BOOK TICKETS</a>
                    </div>
                </div>
            </div>
            <div class="movie movie2">
                <div class="image">
                    <img src="justiceleague/jl.jpg" alt="Justice League">
                    <div class="boxcontent">
                        <h3>Justice League</h3>
                        <a href="justiceleague/justiceleague.php" class="btn1" target="_self">BOOK TICKETS</a>
                    </div>
                </div>
            </div>
            <div class="movie movie3">
                <div class="image">
                    <img src="mortalcombat/mortalcombat.jpg" alt="Mortal Kombat">
                    <div class="boxcontent">
                        <h3>Mortal Kombat</h3>
                        <a href="mortalcombat/mortalcombat.php" class="btn1" target="_self">BOOK TICKETS</a>
                    </div>
                </div>
            </div>
            <div class="movie movie3">
                <div class="image">
                    <img src="tenet/tenet.jpg" alt="Tenet">
                    <div class="boxcontent">
                        <h3>Tenet</h3>
                        <a href="tenet/tenet.php" class="btn1" target="_self">BOOK TICKETS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="upmovies">
        <h1>Up Coming MOVIES</h1>
        <div class="moviebox">
            <div class="movie movie1">
                <div class="image">
                    <img src="ff9/ff9-2.jpg" alt="ff9">
                    <div class="boxcontent">
                        <h3>Fast & Furious 9</h3>
                        <a href="ff9/ff9trailer.php" class="btn1" target="_self">View Details</a>
                    </div>
                </div>
            </div>
            <div class="movie movie2">
                <div class="image">
                    <img src="suicide squad/suicide squad.jpg" alt="suicide squad">
                    <div class="boxcontent">
                        <h3>Suicide Squad 2</h3>
                        <a href="suicide squad/suicidesquadtrailer.php" class="btn1" target="_self">View Details</a>
                    </div>
                </div>
            </div>
            <div class="movie movie3">
                <div class="image">
                    <img src="spiderman/spiderman.jpg" alt="spiderman">
                    <div class="boxcontent">
                        <h3>Spider Man</h3>
                        <a href="spiderman/spidermantrailer.php" class="btn1" target="_self">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="social-media-links">
            <a href=#><i class="fab fa-facebook fa-4x"></i></a>
            <a href=#><i class="fab fa-twitter fa-4x"></i></a>
            <a href=#><i class="fab fa-instagram fa-4x"></i></a>
        </div>
    </footer>
</body>

</html>