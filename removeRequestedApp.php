<?php
session_start();
include 'config.php';
$delete = "DELETE FROM Data.requestedApps WHERE id = " . $_POST['id'] . ";";
$resultDelete = $connect->query($delete);

if (!$result)
    echo 'id:' . $_POST['id'] . ' $result failed: ' . $result;
else echo 'Yes: ' . $_POST['id'];

mysqli_close($connect);