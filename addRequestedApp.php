<?php
session_start();
include 'config.php';
$sql = "INSERT INTO Data.apps (id, name, imgPath, shortDescription, description, version, devName, apple, windows, downloadLink, createdAt) 
SELECT id, name, imgPath, shortDescription, description, version, devName, apple, windows, downloadLink, createdAt FROM Data.requestedApps WHERE id = " . $_POST['id'] . ";";
$result = $connect->query($sql);
$delete = "DELETE FROM Data.requestedApps WHERE id = " . $_POST['id'] . ";";
$resultDelete = $connect->query($delete);
$create = "create table Comments.comments_" . $_POST['id'] . "
(
    id        int auto_increment,
    lastName  varchar(25)                        null,
    firstName varchar(30)                        not null,
    comment   mediumtext                         not null,
    createdAt datetime default CURRENT_TIMESTAMP null,
    constraint comments_12_pk
        primary key (id)
)";
$resultCreate = $connect->query($create);

if (!$resultCreate)
    echo 'id:' . $_POST['id'] . ' $result failed: ' . $result;
else echo  'Yes: ' . $_POST['id'];

mysqli_close($connect);