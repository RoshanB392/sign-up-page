<?php

    session_start();

    /* Database connection start */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signupdb";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        echo("Connection Failed: " . mysqli_connect_error());
        exit();
    } else {
        // echo("Connected");
    }

?>