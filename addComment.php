<?php
session_start();
include 'config.php';
$sql = "INSERT INTO Comments.comments_" . $_POST['id'] . " (id, lastName, firstName, comment, createdAt) VALUES (DEFAULT, '" . $_SESSION['lastName'] . "', '" . $_SESSION['firstName'] . "', '" . $_POST['text'] . "', DEFAULT);";
$result = $connect->query($sql);

//echo $connect->error;

mysqli_close($connect);