<?php
require "connection.php";
$page = $_GET["id"];
$content_id = $_GET["content_id"];
$offset = 10 * ($page - 1);
$resultset = Database::search("SELECT * FROM `video_content` INNER JOIN `video_category` ON `video_content`.`video_category_category_id`=`video_category`.`category_id` WHERE `category_id`='" . $content_id . "' LIMIT 10 OFFSET " . $offset . "");
?>
<div class="row">
    <?php
    for ($x = 0; $x < 10; $x++) {
        $data = $resultset->fetch_assoc();
        if ($data != null) {
    ?>
            <div class="col-4">
                <div class="astriol__blog-post">
                    <div class="post-thumbnail">
                        <a style="cursor: pointer;" onclick="show_modal(<?php echo $data['content_id'] ?>);">
                            <img src="./Admin/<?php echo $data["video_thumbnail"] ?>" alt="astriol blog">
                        </a>
                    </div>
                    <!-- /.post-thumbnail -->

                    <div class="entry-content">
                        <a href="#" class="entry-meta"><?php echo $data["category_name"] ?></a>

                        <h2 class="entry-title"><a style="cursor: pointer;" onclick="show_modal(<?php echo $data['content_id'] ?>);"><?php echo $data["video_title"] ?></a></h2>

                    </div>
                </div>
            </div>

    <?php
        }
    }
    ?>
</div>
<?php
$resultset = Database::search("SELECT * FROM `video_content` INNER JOIN `video_category` ON `video_content`.`video_category_category_id`=`video_category`.`category_id` WHERE `category_id`='" . $content_id . "'");
$n = $resultset->num_rows;
$t1 = $n / 10;
$t2 = intval($t1); //convert double to int
if ($n % 10 != 0) {
    $t2 = $t2 + 1;
}
?>
<div class="row mt-5 text-center">
    <div class="col-12">
        <?php
        if ($page != 1) {
        ?>
            <button onclick="loadcontent(<?php echo $page - 1; ?>,<?php echo $content_id ?>)" class="btn btn-sm btn-primary">Previouse</button>
        <?php
        }
        ?>

        <?php
        for ($i = 1; $i <= $t2; $i++) {

            if ($i == $page) {
        ?>
                <button onclick="loadcontent(<?php echo $i; ?>,<?php echo $content_id ?>)" class="btn btn-sm btn-outline-primary"><?php echo $i; ?></button>
            <?php
            } else {
            ?>
                <button onclick="loadcontent(<?php echo $i; ?>,<?php echo $content_id ?>)" class="btn btn-sm btn-primary"><?php echo $i; ?></button>
        <?php
            }
        }
        ?>
        <?php
        if ($page != $t2) {
        ?>
            <button onclick="loadcontent(<?php echo $page + 1; ?>,<?php echo $content_id ?>)" class="btn btn-sm btn-primary">Next</button>
        <?php
        }
        ?>

    </div>
</div>