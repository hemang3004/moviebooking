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
    <link href="../moviepage.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/044042dbf1.js" crossorigin="anonymous"></script>
    <style>
        body{
    background: linear-gradient(rgba(0, 0, 0, 0.973),rgba(0,0,0,0.5)),url('godzilla.jpg');
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
        <section id="content">
            <div class="container">
                <div class="img1">
                    <div class="boxX">
                        <img src="godzilla.jpg" class="image" alt="" height="700" width="700">
                        <div class="fit">
                            <a href="godzillatrail.php"><i class="fas fa-play" ></i></a>
                        </div>
                    </div>
                    <div class="boxY">
                        <p><strong>
                                Avaliable Languages:English,Telugu,Tamil,Hindi <br><br>
                                Total time:1h 54m <br><br>
                                Genre: Action,Sci-Fi,Drama. <br><br> Release Date:24 Mar, 2021.
                            </strong> </p>
                    </div>
                </div>
                <div class="info">
                    <div class='title'>
                        <br>
                        <h2>GODZILLA VS KING KONG</h2>
                    </div>
                    <div class="icon">
                        <h2>
                            <i class="fas fa-heart" ></i>
                            84%
                        </h2>
                    </div>
                    <div class="movieinfo">
                        This fantasy action drama brings the two fearsome monsters, Godzilla and Kong, face to face. As the monsters fight it out in a battle of grand proportions, humanity must find a way to survive and secure its future.
                        <strong><a href="https://www.imdb.com/title/tt5034838/" target="_self">...for More</a></strong>
                    </div>
                    <form action="../bookticket.php" method="POST">
                    <input type="hidden" name="movieid" value="1"/>
                    <center><button type="submit" id="bookticket" name="submit" class="btn btn-danger" style="margin-top: 1rem; height:2.8rem; width:8rem">Book tickets</button></center>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="social-media-links">
            <a href=#><i class="fab fa-facebook fa-4x"></i></a>
            <a href=#><i class="fab fa-twitter fa-4x"></i></a>
            <a href=#><i class="fab fa-instagram fa-4x"></i></a>
        </div>
    </footer>

</body>

</html>