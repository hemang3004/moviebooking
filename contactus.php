<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="contactus.css">
    <script src="https://kit.fontawesome.com/044042dbf1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
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
    <br>
    <section class="contact">
        <div class="content" style="text-transform:uppercase">
            <h2>Contact Us</h2>
        </div>
        <div class="container1">
            <div class="contactinfo" style="text-transform:uppercase">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p >A-Building Krishnakunj<br>Godrej Garden City,Ahemdabad,<br>365005</p>
                    </div>
                </div>
                <br>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+91 776523021578</p>
                    </div>
                </div>
                <br>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>mkvmovies@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <h2>Send Message</h2>
                    <div class="inputbox">
                        <input type="text" name="fullname" required="required" placeholder="Full Name" autocomplete="off">
                    </div>
                    <div class="inputbox">
                        <input type="text" name="email" required="required" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="inputbox">
                        <textarea required="required" name="problem" placeholder="Type your Message..."></textarea>
                    </div>
                    <div class="inputbox">
                        <input type="submit" value="Send" name="submit">
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br>
    <footer class="footer">
        <div class="social-media-links">
            <a href=#><i class="fab fa-facebook fa-4x"></i></a>
            <a href=#><i class="fab fa-twitter fa-4x"></i></a>
            <a href=#><i class="fab fa-instagram fa-4x"></i></a>
        </div>
    </footer>
</body>
<?php
include_once "dbconnect.php";
dodbconnect();
if (isset($_POST['submit']))
{
    $useremail=$_POST['email']; 
    $userfullname=$_POST['fullname'];
    $userproblem=$_POST['problem'];  
    $sql="insert into userquery values('".$useremail."','".$userfullname."','".$userproblem."')";
    $query=mysqli_query($conn,$sql);
    if ($query) {
        echo "<script>
        success();
        function success(){
            alert('Your problem has sent successfully!!');
            setTimeout(function(){
                window.location.replace('contactus.php');
            },300);
        }</script>";
    } else {
        echo "<script>alert('Something error!!')</script>";
    }
}
?>
</html>