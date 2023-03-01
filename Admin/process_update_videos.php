<?php
session_start();
require "connection.php";
$admin = $_SESSION["admin"];
$uid = $admin["admin_id"];


$title = $_POST["title"];
$category = $_POST["category"];
$path = $_POST["path"];
$id = $_POST["id"];



$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d");


// $useremail = $_SESSION["u"]["email"];
if (empty($title)) {
    echo "Please add a Video Title...";
} else if (empty($category)) {
    echo "Please Select a Video Category...";
} else if (empty($path)) {
    echo "Please Select a Video Path...";
} else {



    $pid_rs = Database::search("SELECT * FROM `video_content` WHERE `content_id`='" . $id . "'");
    $pid_data = $pid_rs->fetch_assoc();
    if (($pid_rs->num_rows) != null) {
        // delete images



        $allowed_image_extentions = array("image/jpeg", "image/png", "image/svg", "image/jpg");

        $fileName1 = $pid_data["video_thumbnail"];

        if (isset($_FILES["img"])) {
            // old image path
            $old_image_path = $pid_data["video_thumbnail"];
            // Delete the old image
            unlink($old_image_path);

            $imageFile = $_FILES["img"];
            $file_extention = $imageFile["type"];
            $newimgextention;
            if ($file_extention = "image/jpeg") {
                $newimgextention = ".jpeg";
            } else if ($file_extention = "image/jpg") {
                $newimgextention = ".jpg";
            } else if ($file_extention = "image/png") {
                $newimgextention = ".png";
            } else if ($file_extention = "image/svg") {
                $newimgextention = ".svg";
            }

            if (!in_array($file_extention, $allowed_image_extentions)) {
                echo "This File Type Note allowed";
            } else {
                $fileName1 = "assets//video_thumbnail//" . uniqid() . $newimgextention;
                move_uploaded_file($imageFile["tmp_name"], $fileName1);
            }
        }

        Database::iud("UPDATE `video_content` SET `video_category_category_id`='" . $category . "',`video_title`='" . $title . "',`video_thumbnail`='" . $fileName1 . "',`video_path`='" . $path . "',`video_date`='" . $date . "' WHERE `content_id`='" . $id . "'");
        echo 1;
    } else {
        echo 0;
    }
}
