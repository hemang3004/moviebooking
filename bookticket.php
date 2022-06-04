<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookticket.css">
    <title>Document</title>
</head>
<?php
include_once "dbconnect.php";
dodbconnect();
if (isset($_POST['submit'])) {
    $movieid = $_POST['movieid'];

    $sql = "select movieid,movie_name,price,available_seat,date_time from movie where movieid=$movieid;";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $dates = $row['date_time'];
    $onlydate = strtotime($dates);
    $formatdate = date('jS M Y', $onlydate);
    $formattime = date('h:i a', $onlydate);
?>

    <body>
        <form name="validation" class="box" method="POST" action="saveTicket.php">
            <div><a href="homepage.php" class="cancel">&#10006</a></div>
            <div class="ticketdetails">
                <h1><?php echo $row['movie_name']; ?></h1>
                <input type="text" readonly name="Date" value="<?php echo "Date  : " . $formatdate ?>" /><br>

                <input type="text" readonly name="Time" value="<?php echo "Time  : " . $formattime ?>" /><br>

                <input type="text" readonly name="Price" value="<?php echo "Ticket Cost :" . $row['price']; ?>" /><br>
                <input type="hidden" id="ticketcost" value="<?php echo $row['price']; ?>">

                <input type="text" readonly name="Available_seat" value="<?php echo "Available seat : " . $row['available_seat']; ?>" /><br>

                <input type="hidden" id="availableseat" value="<?php echo $row['available_seat']; ?>">

                <input type="hidden" name="movieid" id="movieid" value="<?php echo $row['movieid']; ?>">

                <input type="text" id="email" placeholder="Email" name="email" required="required" autocomplete="off" style="font-size: 1rem; outline:none; border-bottom: 2px #333 solid; border-radius:1rem" />

                <input type="number" id="noofticket" placeholder="No of ticket" min="1" max="5" name="tickets" style="width:100px; height:30px; border-radius: 0.5rem; width:150px; border-bottom: 2px #333 solid;" onkeyup="totalcosts()" /><br>

                <input type="text" id="finalcost" readonly name="totalcost" value="Total Cost : 00" />
            </div>
            <input type="submit" value="Book Ticket" name="submit" id="submitBtn">
        </form>
        <script>
            function totalcosts() {
                var x = parseInt(document.getElementById("noofticket").value);
                var y = parseInt(document.getElementById("ticketcost").value);
                var z = x * y;
                
                document.getElementById("finalcost").value = "Total Cost : " + z;
                var s = parseInt(document.getElementById("availableseat").value);
                if (x > s) {
                    alert("No seats available");
                }
                if(x>5){
                    alert("Please select tickets between 1 to 5!!");
                }
            }
        </script>
    </body>

</html>
<?php } ?>
