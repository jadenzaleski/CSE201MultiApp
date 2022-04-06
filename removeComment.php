<?php
session_start();
include 'config.php';
$delete = "DELETE FROM Comments.comments_" . $_POST['appID'] . " WHERE id = " . $_POST['cID'] . ";";
$resultDelete = $connect->query($delete);

if (!$result)
    echo 'id:' . $_POST['id'] . ' $result failed: ' . $result;
else echo 'Yes: ' . $_POST['id'];
