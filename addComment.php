<?php
session_start();
include 'config.php';
$sql = "INSERT INTO Comments.comments_" . $_POST['id'] . " (id, lastName, firstName, comment, createdAt) VALUES (DEFAULT, '" . $_SESSION['lastName'] . "', '" . $_SESSION['firstName'] . "', '" . $_POST['text'] . "', DEFAULT);";
$result = $connect->query($sql);

$selectSQL = "SELECT row ( name ) FROM Data.apps WHERE id = ". $_POST['id'];
$selectResult = $connect->query($sql);
echo $selectResult;
//echo $connect->error;

mysqli_close($connect);