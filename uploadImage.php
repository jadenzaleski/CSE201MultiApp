<?php
$currentDir = getcwd();
$uploadDirectory = "/images/";

// Store all errors
$errors = [];

// Available file extensions
$fileExtensions = ['jpeg','jpg','png','gif'];

if(!empty($_FILES['fileAjax'] ?? null)) {
    $fileName = $_FILES['fileAjax']['name'];
    $fileTmpName  = $_FILES['fileAjax']['tmp_name'];
    $fileType = $_FILES['fileAjax']['type'];
    $fileExtension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName);

    if (isset($fileName)) {
        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "JPEG, JPG, PNG and GIF images are only supported";
        }
        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
            if ($didUpload) {
                echo "The image " . basename($fileName) . " has been uploaded.";
            } else {
                echo "An error occurred while uploading. Try again.";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "The following error occured: " . "\n";
            }
        }
    }
}