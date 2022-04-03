<?php

// drew https://stackoverflow.com/questions/29503723/class-mysqli-not-found-php-v5-6-7
// https://stackoverflow.com/questions/34249053/cannot-find-mysqli-class-in-php7-installation-on-windows

$servername = "cse201db.cwqs6801klds.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "jadenzaleski";

// if sqli exists
//if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//    echo 'We don\'t have mysqli!!! ';
//} else {
//    echo 'Phew we have it! ';
//}

// Create connection
$connect = mysqli_connect($servername, $username, $password);

// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
//echo "Connected successfully\n ";


