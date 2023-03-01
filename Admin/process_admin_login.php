<?php
session_start();
require "connection.php";

$username = $_POST["username"];
$password = $_POST["password"];
$otp = 123;
$remember = $_POST["remember"];

if ($username == null) {
    echo "Username can't be empty!";
} else if ($password == null) {
    echo "Password can't be empty!";
} else {

    $admin_check_rs = Database::search("SELECT * FROM `admin` WHERE `admin_name`='" . $username . "' AND `password`='" . $password . "'");
    $admin_check_n = $admin_check_rs->num_rows;

    if ($admin_check_n != null) {
        $admin_check_data = $admin_check_rs->fetch_assoc();
        if ($otp == $admin_check_data["otp"]) {
            if ($remember == "true") { //remember me true
                setcookie("admin", $username, time() + (60 * 60 * 24 * 30));
                setcookie("adminp", $password, time() + (60 * 60 * 24 * 30));
            } else {
                setcookie("admin", "", -1);
                setcookie("adminp", "", -1);
            }
            $_SESSION["admin"] = $admin_check_data;
            // log update

            $d = new DateTime();
            $tz = new DateTimeZone("Asia/Colombo");
            $d->setTimezone($tz);
            $date = $d->format("Y-m-d H:i:s");

            Database::iud("INSERT INTO `log`(`admin_admin_id`,`content`,`date_time`) VALUES ('" . $admin_check_data["admin_id"] . "','" . $admin_check_data["admin_name"] . " Loged into the system.','" . $date . "')");

            echo 1;
        } else {
            echo "Invalid OTP...";
        }
    } else {
        echo "No such user...";
    }
}
