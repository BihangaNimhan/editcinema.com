<?php
session_start();
$admin_data = $_SESSION["admin"];
$admin_id = $admin_data["admin_id"];
require "connection.php";

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

$id = $_GET["id"];
Database::iud("DELETE FROM `video_content` WHERE `content_id`='" . $id . "'");
Database::iud("INSERT INTO `log`(`admin_admin_id`,`content`,`date_time`) VALUES ('" . $admin_check_data["admin_id"] . "','" . $admin_check_data["admin_name"] . " Deletet a video ('" . $id . "').','" . $date . "')");


echo 1;
