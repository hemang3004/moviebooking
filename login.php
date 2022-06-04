<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>

<body>
    <div>
        <form class="box" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div><a href="homepage.php" class="cancel">&#10006</a></div>
            <div class="login">
                <h1>Login</h1>
                <p class="text-muted"> Please enter your login and password!</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" style="color:black">
                <input type="password" name="password" placeholder="Password" style="color:black">
                <input type="submit" name="login" value="Login" href="#">
                <br>
                <a class="newacc" href="signup.php">Create New Account</a>
            </div>
        </form>
    </div>
</body>

</html>
<?php
include_once "dbconnect.php";
dodbconnect();
if (isset($_POST['login'])) {
    $useremail = $_POST['email'];
    $userpassword = md5($_POST['password']);
    $sql = "select * from users where email='$useremail' and password='$userpassword'";
    $query = mysqli_query($conn, $sql);
    $row=mysqli_num_rows($query);
    if ($row > 0) {
        echo "<script>
        success();
        function success(){
            alert('You are logged in successfully!!');
            setTimeout(function(){
                window.location.replace('homepage.php');
            },300);
        }</script>";
    } else {
        echo "<script>alert('Invalid Email or Password!!')</script>";
    }
}
?>