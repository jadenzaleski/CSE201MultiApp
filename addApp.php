<?php
session_start();
include 'config.php';
if (isset($_SESSION["username"])) {
// todo still working on this
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["appName"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sql = "INSERT INTO Data.requestedApps (id, name, imgPath, shortDescription, description, version, devName, apple, windows, downloadLink, createdAt)
 VALUES (DEFAULT, '" . $_POST['appName'] . "', ' image path ', '" . $_POST['shortDescription'] . "', '" . $_POST['description'] . "', '" . $_POST['version'] . "', '" . $_POST['devName'] . "',  '" . $_POST['mac'] . "',  '" . $_POST['windows'] . "',  '" . $_POST['downloadLink'] . "', DEFAULT)";
    $result = $connect->query($sql);
    if (!$result)
        echo '$result failed: ' . $result;
    else echo "Yes";

}

