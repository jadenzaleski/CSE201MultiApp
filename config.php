<?php
$servername = "cse201db.cwqs6801klds.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "jadenzaleski";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

$sql = "SELECT id, username, password FROM Data";
$result = mysqli_query($conn,"SELECT id,username FROM Data.users");
if (!$result) {
    echo 'Could not run query: ' . mysqli_error($conn);
    exit;
}
$row = mysqli_fetch_row($result);

echo $row[0] . " "; // id
echo $row[1]; // the email value
$conn->close();