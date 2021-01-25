<?php

session_start();

/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signupdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    echo("Connect failed: " . mysqli_connect_error());
    exit();
}
echo("Connected");

?>