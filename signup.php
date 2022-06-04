<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signup.css">
        <title>Document</title>
    </head>

    <body>
        <form  name="validation" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="box" onsubmit="return validate()">
            <div><a href="homepage.php" class="cancel">&#10006</a></div>
            <div class="login">
                <h1>Sign Up</h1>
                <p class="text-muted"> Please enter your Details!</p>

                <input type="text" id="email" placeholder="Email" name="email" onkeyup="validateEmail()" required autocomplete="off">

                <span id="invemail" style="color:red"></span><br>

                <input type="text" id="fullname" placeholder="Full Name" name="fullname" onkeyup="validateName()" required maxlength="30" autocomplete="off">

                <span id="invname" style="color:red" ></span><br>

                <input type="text" id="contactno" placeholder="Contact No" name="contactno" onkeyup="validateNumber()" autocomplete="off" required>

                <span id="invcontact" style="color:red"></span><br>

                <input type="password" id="passwrd" placeholder="Password" name="password" onkeyup="validatePassword()"  required>

                <span id="invpass" style="color:red" ></span><br>

                <input type="password" id="confpassword" placeholder="Confirm Password" onkeyup="validateCnfPassword()" required>

                <span id="invconfpass" style="color:red"></span><br>
            </div>
            <input type="submit" value="Sign Up" id="submitbtn" name="submit">
            <a class="oldacc" href="login.php">Already Registerd User?</a>
        </form>

        <script>
            var x = 0;
            function validateEmail() {
                var regxEmail = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,5})(.[a-z]{2.5})?$/;
                var checkemail = document.getElementById("email");
                if (!regxEmail.test(checkemail.value))
                {
                    x = 0;
                    document.getElementById("invemail").innerHTML = "Please enter email in proper format!!";
                
                } else {
                    x = 1;
                    document.getElementById("invemail").innerHTML = "";
                    
                }
            }

            function validateName() {
                var regexName = /^[a-zA-Z][a-zA-Z ]*$/;
                var checkName = document.getElementById("fullname");
                if (!regexName.test(checkName.value))
                {
                    x = 0;
                    document.getElementById("invname").innerHTML = "Only strings and white space is allowed!!";
                    
                } else {
                    x = 1;
                    document.getElementById("invname").innerHTML = "";
                
                }
            }
            function validateNumber() {
                var regxNumber = /^[7-9][0-9]{9}$/;
                var checkContactno = document.getElementById("contactno");
                if (!regxNumber.test(checkContactno.value))
                {
                    x = 0;
                    document.getElementById("invcontact").innerHTML = "Mobile number should be allowed only 10 digits number!!";
                    
                } else {
                    x = 1;
                    document.getElementById("invcontact").innerHTML = "";
                
                }
            }
            function validatePassword() {
                var regexPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
                var checkPass = document.getElementById("passwrd");
                if (!regexPass.test(checkPass.value))
                {
                    x = 0;
                    document.getElementById("invpass").innerHTML = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character!!";
                    
                } else {
                    x = 1;
                    document.getElementById("invpass").innerHTML = "";
                
                }
            }
            function validateCnfPassword() {
                var checkPass = document.getElementById("passwrd").value;
                var checkConfpass = document.getElementById("confpassword").value;
                if (checkConfpass !== checkPass)
                {
                    x = 0;
                    document.getElementById("invconfpass").style = "color:red";
                    document.getElementById("invconfpass").innerHTML = "Password Not Matched!!";
                    
                } else {
                    x = 1;
                    document.getElementById("invconfpass").style = "color:green";
                    document.getElementById("invconfpass").innerHTML = "Passwor matched!!";
                
                }
            }
            function validate() {
                if (x == 0) {
                    return false;
                } else {
                    return true;
                }
            }
        </script>
    </body>
</html>
<?php
include_once "dbconnect.php";
dodbconnect();
if (isset($_POST['submit']))
{
    $useremail=$_POST['email']; 
    $userfullname=$_POST['fullname'];
    $usercontact=$_POST['contactno'];  
    $userpassword=md5($_POST['password']);
    $sql="insert into users values ('".$useremail."','".$userfullname."','".$usercontact."','".$userpassword."')";
    $query=mysqli_query($conn,$sql);
    if ($query>0) {
        echo "<script>
        success();
        function success(){
            alert('You are registerd successfully!!');
            setTimeout(function(){
                window.location.replace('login.php');
            },300);
        }</script>";
    } else {
        echo "<script>alert('Something error!!')</script>";
    }
}
?>