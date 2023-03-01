<?php
session_start();
if (isset($_SESSION["admin"])) {
?>
    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Video Editing agency</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

        <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php
            require "header.php";
            ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Add Videos</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Videos</a></li>
                                            <li class="breadcrumb-item active">Add</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label>Video Title</label>
                                                    <input type="text" id="title" class="form-control" placeholder="Enter your video name here ..." />
                                                </div>

                                                <div class="mb-3 col-6">
                                                    <label class="form-label">Video Category</label>
                                                    <select class="form-control select2" id="category">
                                                        <option value="0">Select</option>
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
                                                    <input type="text" id="path" class="form-control" placeholder="Enter your video path here ..." />
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
                                                                            <input id="file" type="file" multiple="multiple">
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
                                                        <button onclick="addvideo();" class="btn btn-primary waves-effect waves-light me-1 col-12" id="submit_btn">
                                                            Submit
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

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php
                require "footer.php";
                ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Plugins js -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


        <script src="assets/js/app.js"></script>
    </body>

    </html>
<?php
} else {
?>
    <script>
        window.location = "auth-login.php";
    </script>
<?php
}
?>