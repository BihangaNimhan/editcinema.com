<?php
session_start();
if (!isset($_SESSION["admin"])) {
?>
    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Admin Area | Online Visa Consultation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.php" class="auth-logo">
                                    <img src="assets/images/logo.png" style="height: 120px; width: auto;" class="logo-dark mx-auto" alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>Admin Log in</b></h4>

                        <div class="p-3">
                            <?php
                            $u = "";
                            $p = "";

                            if (isset($_COOKIE["admin"])) {
                                $u = $_COOKIE["admin"];
                            }

                            if (isset($_COOKIE["adminp"])) {
                                $p = $_COOKIE["adminp"];
                            }
                            ?>
                            <div class="form-horizontal mt-3">

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="text" required="" placeholder="Username" value="<?php echo $u; ?>" id="username">
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" required="" placeholder="Password" value="<?php echo $p; ?>" id="password">
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input " id="customCheck1" checked>
                                            <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter OTP here ..." aria-label="Enter OTP here ..." aria-describedby="basic-addon2" id="otp">
                                    <button class="btn btn-outline-info" type="button" id="button-addon2" onclick="sendotp();"><i class="fab fa-telegram-plane"></i> Send code</button>
                                </div>

                                <div class="col-12 text-center d-none" id="veri_box">
                                    <span>Verification code sent ? <br /> Not Recived <a class="text-primary" style="cursor: pointer;" onclick="sendotp();">Request a new one</a></span>
                                </div> -->

                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-success w-100 waves-effect waves-light" type="submit" onclick="beginlogin();">Log In</button>
                                    </div>
                                </div>

                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        <a href="auth-recoverpw.php" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="auth-register.php" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- toast -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Alert</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="toast_body">
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    </body>

    </html>
<?php
} else {
?>
    <script>
        window.location = "index.php";
    </script>
<?php
}
?>