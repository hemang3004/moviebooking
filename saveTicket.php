<?php
include_once "dbconnect.php";
dodbconnect();
if (isset($_POST['submit'])) {
    $movieid = $_POST['movieid'];
    $ticket = $_POST['tickets'];
    $useremail = $_POST['email'];
    $updateSql = "update movie set available_seat=available_seat-$ticket where movieid=$movieid";
    $updateQuery = mysqli_query($conn, $updateSql);
    $insertSql = "insert into ticketdetails values (" . $movieid . ",'" . $useremail . "'," . $ticket . ")";
    $insertQuery = mysqli_query($conn, $insertSql);
    if ($insertQuery > 0 && $updateQuery > 0) {
        echo "<script>
        success();
        function success(){
            alert('Your tickets are booked successfully!!');
            setTimeout(function(){
                window.location.replace('homepage.php');
            },300);
        }</script>";
    } else {
        echo "<script>alert('Something error!!')</script>";
    }
}
