<?php
if (isset($_GET["id"])) {
    $data = $_GET["id"];
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CAT | Video Editinng & Production</title>

        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.png">
        <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Dependency Styles -->
        <link rel="stylesheet" href="assets/resources/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="assets/resources/fontawesome/css/all.min.css" type="text/css">
        <link rel="stylesheet" href="assets/resources/swiper/css/swiper.min.css" type="text/css">
        <link rel="stylesheet" href="assets/resources/wow/css/animate.css" type="text/css">
        <link rel="stylesheet" href="assets/resources/simple-line-icons/css/simple-line-icons.css" type="text/css">
        <link rel="stylesheet" href="assets/resources/themify-icons/css/themify-icons.css" type="text/css">
        <link rel="stylesheet" href="assets/resources/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
        <link rel="stylesheet" href="assets/resources/magnific-popup/css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="assets/resources/slick-carousel/css/slick.css" type="text/css">


        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="assets/css/app.css" type="text/css">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600,700,800%7CPoppins:300,400,500,600,700,800" rel="stylesheet">

    </head>

    <body id="home-version-1" class="about-page-template" data-style="default" onload="loadcontent(1,<?php echo $data; ?>)">

        <a href="#main_content" data-type="section-switch" class="return-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
        <div class="page-loader">
            <div class="page-loading-wrapper">
                <div class="loading loading07">
                    <span data-text="L">L</span>
                    <span data-text="U">U</span>
                    <span data-text="M">M</span>
                    <span data-text="I">I</span>
                    <span data-text="N">N</span>
                    <span data-text="O">O</span>
                    <span data-text="U">U</span>
                    <span data-text="S">S</span>

                </div>
            </div>
        </div>


        <div id="main_content" class="main-content">


            <?php
            require "header.php";
            $rs = Database::search("SELECT * FROM `video_category` WHERE `category_id`='" . $data . "'");
            $data = $rs->fetch_assoc();
            ?>

            <section class="page-banner" style="margin-top: 100px;">
                <div class="page-title-wrapper text-center">
                    <h1 class="page-title"><?php echo $data["category_name"] ?></h1>

                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li>Video Category</li>
                    </ul>
                </div>
                <!-- /.page-title-wrapper -->

                <ul class="banner-pertical">
                    <li><img src="media/banner/header/crose.png" alt="astriol pertical"></li>
                    <li><img src="media/banner/header/box.png" alt="astriol pertical"></li>
                    <li><img src="media/banner/header/dot.png" alt="astriol pertical"></li>
                    <li><img src="media/banner/header/dot_sm.png" data-parallax='{"y": 100}' alt="astriol pertical"></li>
                    <li><img src="media/banner/header/line.png" data-parallax='{"y": 50, "x": 100}' alt="astriol pertical"></li>
                    <li data-parallax='{"y": -100}'></li>
                    <li></li>
                </ul>
                <!-- /.banner-pertical -->

            </section>

            <section class="portfolios">
                <div class="container">
                    <div class="portfolio-inner">
                        <div class="section-heading style-three text-left">
                            <h2 class="section-title">
                                <span>Luminous</span><br>
                                Professional video editing service.
                            </h2>
                        </div>

                        <div class="row" id="content">

                        </div>

                    </div>
                </div>
            </section>

            <div id="load_modal">

            </div>
            <?php
            require "footer.php";
            ?>

        </div>

        <!-- Dependency Scripts -->
        <script src="assets/resources/jquery/jquery.min.js"></script>
        <script src="assets/resources/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/resources/swiper/js/swiper.min.js"></script>
        <script src="assets/resources/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/resources/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/resources/magnific-popup/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/resources/jquery.appear/jquery.appear.js"></script>
        <script src="assets/resources/wow/js/wow.min.js"></script>
        <script src="assets/js/TweenMax.min.js"></script>
        <script src="assets/resources/countUp.js/countUp.min.js"></script>
        <script src="assets/resources/bodymovin/lottie.min.js"></script>
        <script src="assets/resources/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
        <script src="assets/resources/wavify/wavify.js"></script>
        <script src="assets/resources/jquery.marquee/js/jquery.marquee.js"></script>
        <script src="assets/js/jarallax.min.js"></script>
        <script src="assets/resources/gmap3/js/gmap3.min.js"></script>
        <script src="assets/resources/slick-carousel/js/slick.min.js"></script>
        <script src="assets/js/jquery.parallax.min.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M'></script>


        <!-- Site Scripts -->
        <script src="assets/js/header.js"></script>
        <script src="assets/js/app.js"></script>

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