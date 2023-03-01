<?php
require "connection.php";

$id = $_GET["id"];


$rs = Database::search("SELECT * FROM `video_content` INNER JOIN `video_category` ON `video_category`.`category_id`=`video_content`.`video_category_category_id` INNER JOIN `admin` ON `video_content`.`admin_admin_id`=`admin`.`admin_id` WHERE `content_id`='" . $id . "'");
$data = $rs->fetch_assoc();

?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Videos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="mb-3 col-6">
                                            <label>Video Title</label>
                                            <input type="text" id="up_title" class="form-control" value="<?php echo $data["video_title"]; ?>" />
                                        </div>

                                        <div class="mb-3 col-6">
                                            <label class="form-label">Video Category</label>
                                            <select class="form-control select2" id="up_category">
                                                <option value="<?php echo $data["category_id"]; ?>"><?php echo $data["category_name"] ?></option>
                                                <?php
                                                $rs1 = Database::search("SELECT * FROM `video_category`");
                                                $n1 = $rs1->num_rows;

                                                for ($i = 1; $i <= $n1; $i++) {
                                                    $cat = $rs1->fetch_assoc();
                                                ?>
                                                    <option value="<?php echo $cat["category_id"] ?>"><?php echo $cat["category_name"] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-12">
                                            <label>Video Path (You tube link)</label>
                                            <input type="text" id="up_path" class="form-control" value="<?php echo $data["video_path"]; ?>" />
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <h4 class="card-title">Video Thumbnail</h4>
                                                        <p class="card-title-desc">Add your video thumbnail here. <span class="badge badge-soft-primary">370 * 320 px</span>
                                                        </p>

                                                        <div>
                                                            <div class="dropzone">
                                                                <div class="fallback">
                                                                    <input id="up_file" type="file" multiple="multiple">
                                                                </div>
                                                                <div class="dz-message needsclick">
                                                                    <div class="mb-3">
                                                                        <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                                                    </div>

                                                                    <h4>Drop files here or click to upload.</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>

                                        <hr class="hrc" />
                                        <div class="mb-0">
                                            <div>
                                                <button onclick="begin_update_videos(<?php echo $id; ?>);" class="btn btn-primary waves-effect waves-light me-1 col-12" id="submit_btn">
                                                    Update
                                                </button>

                                                <button class="btn btn-primary col-12 d-none" id="processing_btn" type="button" disabled>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Processing ...
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->


                    </div>
                    <!-- end row -->

                </div>
            </div>
        </div>
    </div>
</div>