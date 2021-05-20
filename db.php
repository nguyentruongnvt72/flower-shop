<?php
$servername = "45.63.86.40";
$username = "user_dev";
$password = "12345678";
$db = "onlineshop";
// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    echo("cccc");
}
?>
