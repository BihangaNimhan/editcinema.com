<?php
session_start();
require "connection.php";

// log update

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

$admin = $_SESSION["admin"];

Database::iud("INSERT INTO `log`(`admin_admin_id`,`content`,`date_time`) VALUES ('" . $admin["admin_id"] . "','" . $admin["admin_name"] . " logged out by the system','" . $date . "')");

session_destroy();
?>
<script>
    window.location = "index.php";
</script>