<?php
require "connection.php";
?>
<header class="site-header header-main header-transparent header-fixed" data-header-fixed="true" data-mobile-menu-resolution="1024">
	<div class="container-full">
		<div class="header-inner">

			<nav id="site-navigation" class="main-nav">

				<div class="site-logo">
					<a href="index.php" class="logo">
						<div class="main_logo main-logo">
							<!-- <img src="assets/img/logo-community.png" alt="site logo" class="logo-sticky"> -->
						</div>
						<div class="sticky_logo logo-sticky">
							<!-- <img src="assets/img/logo-community.png" alt="site logo" class="logo-sticky"> -->
						</div>
					</a>
				</div>
				<!-- /.site-logo -->

				<div class="menu-wrapper main-nav-container canvas-menu-wrapper" id="mega-menu-wrap">

					<div class="canvas-header">
						<div class="mobile-offcanvas-logo">
							<a href="index.php">
								<div class="sticky_logo logo-sticky">
									<!-- <img src="assets/img/logo-community.png" alt="site logo" class="logo-sticky"> -->
								</div>
							</a>
						</div>

						<div class="close-menu" id="page-close-main-menu">
							<i class="ti-close"></i>
						</div>

					</div>

					<ul class="astriol-main-menu">
						<li class="menu-item-depth-0"><a href="index.php">Home</a></li>
						<!-- <li class="menu-item-depth-0"><a href="#">About</a></li> -->
						<!-- <li class="menu-item-depth-0"><a href="#">Blog</a></li> -->
						<li class="has-submenu menu-item-depth-0">
							<a href="#">Category</a>
							<ul class="sub-menu">
								<?php
								$category_rs = Database::search("SELECT * FROM `video_category`");
								for ($x = 0; $x < ($category_rs->num_rows); $x++) {
									$category_data = $category_rs->fetch_assoc();
								?>
									<li><a href="video_category.php?id=<?php echo $category_data["category_id"]; ?>"><?php echo $category_data["category_name"] ?></a></li>
								<?php
								}
								?>
							</ul>
						</li>
						<li class="menu-item-depth-0"><a href="contact.php">Contact</a></li>
					</ul>

					<!-- <div class="nav-right">
						<a href="contact.php" class="gp-btn nav-btn btn-help">Talk to Us</a>
					</div> -->
				</div>
				<!-- /.menu-wrapper -->

				<div class="astriol-burger-menu style-two mobile-view" id="mobile-menu-open">
					<span class="bar-one"></span>
					<span class="bar-two"></span>
					<span class="bar-three"></span>
				</div>

			</nav>
			<!-- /.site-nav -->
		</div>
		<!-- /.header-inner -->
	</div>
	<!-- /.container-full -->
</header>