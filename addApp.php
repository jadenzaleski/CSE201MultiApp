<?php
session_start();
include 'config.php';
if (isset($_SESSION["username"])) {
    $sql = "INSERT INTO Data.requestedApps (id, name, imgPath, shortDescription, description, version, devName, apple, windows, downloadLink, createdAt)
 VALUES (DEFAULT, '" . $_POST['appName'] . "', ' image path ', '" . $_POST['shortdescrip'] . "', '" . $_POST['descrip'] . "', '" . $_POST['version'] . "', '" . $_POST['devName'] . "',  '" . $_POST['mac'] . "',  '" . $_POST['windows'] . "',  '" . $_POST['downloadLink'] . "', DEFAULT)";
    $result = $connect->query($sql);

}

