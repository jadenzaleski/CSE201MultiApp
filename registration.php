<?php

require_once "config.php";

$first = $last = $username = $password = $confirmPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['regSubmit'])) {
    echo "fired ";
    $input = $_POST["registrationUsername"];
    echo "input: $input ";
    $sql = "select username from Data.users where username = $input";
    global $connect;
    $result = $connect->query($sql);
    if ($result == `false`) {
        echo "false ";
    } else {
        echo "0 results";
    }
    $connect->close();
}

function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
