<?php
session_start();
include 'config.php';

$windows = false;
$mac = false;

if ($_POST['boxes'][0])
    $mac = true;
if ($_POST['boxes'][1])
    $windows = true;

if (isset($_SESSION["username"])) {

    $sql = "INSERT INTO Data.requestedApps (id, firstName, lastName, name, imgPath, shortDescription, description, version, devName, apple, windows, downloadLink, createdAt)
 VALUES (DEFAULT, '" . $_SESSION['firstName'] . "', '" . $_SESSION['lastName'] . "', '" . $_POST['appName'] . "', '" . 'images/' .$_POST['fileName'] . "', '" . $_POST['shortDescription'] . "', '" . $_POST['description'] . "', '" . $_POST['version'] . "', '" . $_POST['devName'] . "',  '" . $mac . "',  '" . $windows . "',  '" . $_POST['downloadLink'] . "', DEFAULT)";
    $result = $connect->query($sql);

    if (!$result)
        echo '$result failed: ' . $result;
    else echo  'Yes';

}

