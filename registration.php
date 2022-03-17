<?php

require_once "config.php";

if (isset($_POST['submit'])) {
    echo "submitted";
    $first = $_POST["registrationFirst"];
    $last = $_POST["registrationLast"];
    $username = $_POST["registrationUsername"];
    $password = $_POST["registrationPassword"];
}