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
    <div class="box">
        <div class="login">
            <br>
            <h1>Show my booking</h1>
            <table border="1" style="text-align: center;">
                <tr>
                    <th>Movie </th>
                    <th>Date </th>
                    <th>Time </th>
                    <th>No. of tickets </th>
                </tr>
                <?php
                include_once "dbconnect.php";
                dodbconnect();
                if (isset($_POST['search'])) {
                    $useremail = $_POST['email'];
                    $sql = "select * from ticketdetails td,movie md  where md.movieid=td.movieid and useremail='$useremail'";

                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query)) {
                        while ($row = mysqli_fetch_array($query)) {
                            $onlydate = strtotime($row['date_time']);
                            $formatdate = date('jS M Y', $onlydate);
                            $formattime = date('h:i a', $onlydate);
                ?>
                            <tr>
                                <td><?php echo $row['movie_name']; ?></td>
                                <td><?php echo $formatdate; ?></td>
                                <td><?php echo $formattime; ?></td>
                                <td><?php echo $row['bookedtickets']; ?></td>
                            </tr>
                <?php
                        }
                    } else {
                        echo "<script>
                     success();
                    function success(){
                    alert('Sorry!! Not any ticket booked!!');
                    setTimeout(function(){
                     window.location.replace('mybooking.php');
                     },10);
                     }</script>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>