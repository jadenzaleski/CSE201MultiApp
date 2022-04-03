<?php
session_start();
include 'config.php';
$sql = "INSERT INTO Data.apps (id, name, imgPath, shortDescription, description, version, devName, apple, windows, downloadLink, createdAt) 
SELECT id, name, imgPath, shortDescription, description, version, devName, apple, windows, downloadLink, createdAt FROM Data.requestedApps WHERE id = " . $_POST['id'] . ";";
$result = $connect->query($sql);
$delete = "DELETE FROM Data.requestedApps WHERE id = " . $_POST['id'] . ";";
$resultDelete = $connect->query($delete);

if (!$result)
    echo 'id:' . $_POST['id'] . ' $result failed: ' . $result;
else echo  'Yes: ' . $_POST['id'];

mysqli_close($connect);