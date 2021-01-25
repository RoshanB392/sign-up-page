<?php
session_start();
session_destroy();
$url = './assets/html/signin.html';

header("location: '$url'");
?>