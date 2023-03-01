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

        <!-- jquery.vectormap css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark" data-keep-enlarged="true" class="vertical-collpsed">

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
                                    <h4 class="mb-sm-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Main</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                                                <h4 class="mb-2">1452</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-shopping-cart-2-line font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">New Orders</p>
                                                <h4 class="mb-2">938</h4>
                                                <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-usd font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">New Users</p>
                                                <h4 class="mb-2">8246</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-user-3-line font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Unique Visitors</p>
                                                <h4 class="mb-2">29670</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-btc font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">


                                        <h4 class="card-title mb-4">Latest Activities</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Activity</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead><!-- end thead -->
                                                <tbody>
                                                    <?php
                                                    $log_rs = Database::search("SELECT * FROM `log`  ORDER BY `log`.`id` DESC LIMIT 5");
                                                    for ($x = 0; $x < 5; $x++) {
                                                        $log_data = $log_rs->fetch_assoc();
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $x + 1; ?></td>
                                                            <td><?php echo $log_data["content"]; ?></td>
                                                            <td><?php echo $log_data["date_time"]; ?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    <!-- end -->
                                                </tbody><!-- end tbody -->
                                            </table> <!-- end table -->
                                        </div>
                                    </div><!-- end card -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>

                </div>
                <!-- End Page-content -->

                <?php
                require "footer.php"
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


        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- jquery.vectormap map -->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
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