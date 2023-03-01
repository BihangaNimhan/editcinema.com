<?php
require "connection.php";
$id = $_GET["id"];

$rs = Database::search("SELECT * FROM `video_content` INNER JOIN `video_category` ON `video_content`.`video_category_category_id`=`video_category`.`category_id` WHERE `content_id`='" . $id . "'");
$data = $rs->fetch_assoc();

?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $data["video_title"] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="player" width="100%" height="380" src="<?php echo $data["video_path"] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
