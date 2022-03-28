<?php
session_start();
include 'config.php';
if (isset($_POST["MultiApp"])) {
    $sql = "  
      SELECT * FROM Data.apps  
      WHERE username = '" . $_POST['username'] . "'  
      AND password = '" . $_POST['password'] . "'  
      ";
    $result = $connect->query($sql);
    if ($result != false && $result->num_rows > 0) {
        $row = $result->fetch_row();
        $_SESSION['firstName'] = $row[1];
        $_SESSION['lastName'] = $row[2];
        $_SESSION['username'] = $row[3];
        $_SESSION['password'] = $row[4];
        $_SESSION['createdAt'] = $row[5];
        $_SESSION['level'] = $row[6];
        echo 'Yes';
    } else {
        echo 'No';
    }
}
if (isset($_POST["action"])) {
    unset($_SESSION["firstName"]);
    unset($_SESSION["lastName"]);
    unset($_SESSION["password"]);
    unset($_SESSION["createdAt"]);
    unset($_SESSION["level"]);
}

