<?php
require "connection.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

if ($username == null) {
    echo "Username can't be empty!";
} else if ($password == null) {
    echo "Password can't be empty!";
} else if ($email == null) {
    echo "Email can't be empty!";
} else {
    $admin_check_rs = Database::search("SELECT * FROM `admin` WHERE `admin_name`='" . $username . "' AND `password`='" . $password . "'");
    $admin_check_n = $admin_check_rs->num_rows;

    if ($admin_check_n != null) {
        echo "User already there...";
    } else {
        Database::iud("INSERT INTO `admin` (`admin_name`,`password`,`email`) VALUES ('" . $username . "','" . $password . "','" . $email . "')");
       
        echo 1;
    }
}
