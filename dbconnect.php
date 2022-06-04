<?php

    function dodbconnect()
    {
        global $conn;
        $servername = "localhost";
        $username = "karan";
        $password = "karan123";
        $db="mkvmovies";
        $conn = mysqli_connect($servername, $username, $password,$db);
        
        if (!$conn) {
            echo "Connected not successfully";
        }      
    }
    
    ?>