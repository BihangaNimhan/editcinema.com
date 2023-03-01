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

<body id="home-version-1" class="home-comminity" data-style="default">

	<a href="#main_content" data-type="section-switch" class="return-to-top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<!-- <div class="page-loader">
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
	</div> -->


	<div id="main_content" class="main-content">

		<?php
		require "header.php";
		?>

		<section class="banner banner-comminity banner_bg" style="height: 500px;">

			<div class="banner-main-content-wrapper ">
				<div class="banner-content">
					<h1 class="banner-title text-center wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -155px;">
						Welcome to <span>CAT Video Productions</span><br>
						Video Editing and Productions.
					</h1>
					<!-- <div class="banner-search-form-wrapper wow fadeInUp" data-wow-delay="0.5s">
						<form action="#" class="banner-search-form">
							<input type="text" placeholder="Describe your issue" class="search-field">
							<button><i class="ei ei-icon_search"></i></button>
						</form>
					</div> -->

					<div class="banner-content-bg text-center wow fadeInDown">
						<!-- <img src="media/banner/banner-comminity.png" alt="banner-comminity"> -->
					</div>
				</div>

			</div>

		</section>


		<section class="blog-posts" style="margin-top: 0px;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="blog-grid-inner">

							<div class="blog_filter__wrapper">
								<ul class="astriol__blog-filter tab-swipe">
									<?php
									$category_rs = Database::search("SELECT * FROM `video_category`");
									$pattern = "/[\/\s]+/";


									for ($x = 0; $x < ($category_rs->num_rows); $x++) {
										$category_data = $category_rs->fetch_assoc();
										if ($x == "0") {
									?>
											<li class="current">
												<a href="#0" data-filter=".<?php echo preg_replace($pattern, "", $category_data["category_name"]) ?>" class="isActive"><?php echo $category_data["category_name"] ?></a>
											</li>
										<?php
										} else {
										?>
											<li>
												<a href="#0" data-filter=".<?php echo preg_replace($pattern, "", $category_data["category_name"]) ?>"><?php echo $category_data["category_name"] ?></a>
											</li>
									<?php
										}
									}
									?>
								</ul>


							</div>
							<div class="astriol__blogs wow fadeIn" data-wow-delay="0.3s">
								<div class="astriol__blog-items column-3">
									<?php
									$pattern = "/[\/\s]+/";

									$category_rs = Database::search("SELECT * FROM `video_content` INNER JOIN `video_category` ON `video_content`.`video_category_category_id`=`video_category`.`category_id`");
									for ($x = 0; $x < ($category_rs->num_rows); $x++) {
										$category_data = $category_rs->fetch_assoc();

									?>

										<div class="col-md-4 astriol__blog-grid <?php echo preg_replace($pattern, "", $category_data["category_name"]) ?>">
											<div class="astriol__blog-post">
												<div class="post-thumbnail">
													<a style="cursor: pointer;" onclick="show_modal(<?php echo $category_data['content_id'] ?>);">
														<img src="./Admin/<?php echo $category_data["video_thumbnail"] ?>" alt="astriol blog">
													</a>
												</div>
												<!-- /.post-thumbnail -->

												<div class="entry-content">
													<a href="#" class="entry-meta"><?php echo $category_data["category_name"] ?></a>

													<h2 class="entry-title"><a style="cursor: pointer;" onclick="show_modal(<?php echo $category_data['content_id'] ?>);"><?php echo $category_data["video_title"] ?></a></h2>

													<!-- <div class="blog-footer">
														<div class="avatar-wrapper">
															<span class="author vcard">
																<a class="url fn n post-author" href="#">
																	<img alt="avater" src="media/blog/author-sm.jpg" class="avatar">
																	Admin
																</a>
															</span>
														</div>

														<div class="date-meta">
															<?php echo $category_data["video_date"] ?>
														</div>
													</div> -->
												</div>
												<!-- /.blog-content -->
											</div>
											<!-- /.astriol__blog-post -->
										</div>
									<?php
									}
									?>
								</div>
							</div>
						</div>
						<!-- <div class="row text-right mt-5">
							<div class="col-12">
								<a style="cursor: pointer;" href="video_category.php?id=1">See More <i class="fa fa-arrow-circle-right"></i> </a>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>

		<section class="feature-comminity-two" style="margin-top: -100px;">
			<div class="container">
				<div class="section-heading">
					<h3 class="subtitle wow fadeInUp">Related Tags</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
						Discover our latest projects
					</h2>
				</div>

				<div class="featrure-list-items">
					<div class="row justify-content-center">
						<?php
						$category_rs = Database::search("SELECT * FROM `video_category`");
						for ($x = 0; $x < ($category_rs->num_rows); $x++) {
							$category_data = $category_rs->fetch_assoc();
						?>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="feature-list-item wow fadeInLeft" data-wow-delay="0.4s">
									<div class="icon-container">
										<i class="ei ei-icon_ribbon_alt"></i>
									</div>

									<h4 class="list-title">
										<a href="video_category.php?id=<?php echo $category_data["category_id"]; ?>"><?php echo $category_data["category_name"] ?></a>
									</h4>
								</div>
							</div>
						<?php
						}
						?>
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
	<!-- /#site -->

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


<!-- Mirrored from html.gptheme.com/astriol/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:47:42 GMT -->

</html>