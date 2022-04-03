<?php
session_start();
include "config.php";

if (isset($_POST["username"])) {
    $checkSQL = "SELECT * FROM Data.users  
      WHERE username = '" . $_POST['username'] . "'";
    $checkResult = $connect->query($checkSQL);

    if ($checkResult->num_rows == 0) {
        $insertSQL = "INSERT INTO Data.users (firstName, lastName, username, password, createdAt, level)
    VALUES ('" . $_POST['firstName'] . "','" . $_POST['lastName'] . "','" . $_POST['username'] . "','" . $_POST['password'] . "', DEFAULT, 0);";
        $insertResult = $connect->query($insertSQL);
        if (!$insertResult)
            echo 'No';
        else {
            $_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['lastName'] = $_POST['lastName'];
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['level'] = 0;
            echo 'Yes';
        }
    } else {
        if ($checkResult->num_rows > 0) {
            // output data of each row
            while($row = $checkResult->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }
}

mysqli_close($connect);
