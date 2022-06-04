<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mybooking1.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form class="box" method="POST" action="userticket.php" target="_blank">
        <div><a href="homepage.php" class="cancel">&#10006</a></div>
            <div class="login">
                <h1>Show my booking</h1>
                <p class="text-muted"> Please enter your email</p>
                <input type="email" name="email" placeholder="Email" autocomplete="off" style="color:black">
                <input type="submit" name="search" value="Search">
            </div>
        </form>
    </div>
</body>
</html>
