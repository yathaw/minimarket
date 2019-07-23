<!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo base_url(); ?>"/>
<title>aStar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/frontend/styles/bootstrap-4.1.3/bootstrap.css">
<link href="<?php echo base_url() ?>template/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/frontend/plugins/OwlCarousel2-2.2.1/animate.css">


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/frontend/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/frontend/styles/responsive.css">

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="header_logo">
				<img src="<?php echo base_url() ?>template/logo.png" class="img-fluid">
				
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.html">home</a></li>
					<li><a href="#">woman</a></li>
					<li><a href="#">man</a></li>
					<li><a href="#">lookbook</a></li>
					<li><a href="#">blog</a></li>
					<li><a href="#">contact</a></li>
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">


				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.html">
						<img src="<?php echo base_url() ?>template/frontend/images/bag.png" alt="">
						<div class="cart_num">2</div>
					</a></div>
				</div>

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		
		<div class="menu_search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?php echo base_url(); ?>">home</a></li>
				<li class="menu_mm"><a href="<?php echo base_url('frontend/category'); ?>"> Category </a></li>
				<li class="menu_mm"><a href="<?php echo base_url('frontend/item'); ?>"> Products </a></li>
				<li class="menu_mm"><a href="<?php echo base_url('register'); ?>"> Register </a></li>
				<li class="menu_mm"><a href="<?php echo base_url('login'); ?>"> Login </a></li>
				
				<li class="menu_mm"><a href="<?php echo base_url('frontend/contact'); ?>">contact</a></li>
				<li class="menu_mm"><a href="index.html">home</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Sidebar -->

	<div class="sidebar">

		<!-- Logo -->
		<div class="sidebar_logo">
			<img src="<?php echo base_url() ?>template/logo.png" class="img-fluid">
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="<?php echo base_url(); ?>">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo base_url('frontend/category'); ?>"> Category <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo base_url('frontend/item'); ?>"> Products <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo base_url('register'); ?>"> Register <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo base_url('login'); ?>"> Login <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				
				<li><a href="<?php echo base_url('frontend/contact'); ?>">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
		</nav>

		<!-- Search -->
		<div class="search">
			<form action="#" class="search_form" id="sidebar_search_form">
				<input type="text" class="search_input" placeholder="Search" required="required">
				<button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="cart.html">
				<img src="<?php echo base_url() ?>template/frontend/images/bag.png" alt="">
				<div class="cart_num">2</div>
			</a></div>
			<div class="cart_text">bag</div>
			<div class="cart_price">$39.99 (1)</div>
		</div>
	</div>

	<!-- Home -->


		<?php if($this->uri->segment(1)==""): ?>
			<div class="home">
				
				<!-- Home Slider -->
				<div class="home_slider_container">
					<div class="owl-carousel owl-theme home_slider">
						
						<!-- Slide -->
						<div class="owl-item">
							<div class="background_image" style="background-image:url(<?php echo base_url() ?>template/frontend/images/banner1.jpg);">
								
							</div>
							<div class="home_content_container">
								<div class="home_content">
									<div class="home_discount d-flex flex-row align-items-end justify-content-start">
										<div class="home_discount_num text-white">20</div>
										<div class="home_discount_text text-white">Discount on the</div>
									</div>
									<div class="home_title text-white">New Collection</div>
									<div class="button button_1 home_button trans_200 text-white"><a href="categories.html">Shop NOW!</a></div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="owl-item">
							<div class="background_image" style="background-image:url(<?php echo base_url() ?>template/frontend/images/banner2.jpg)"></div>
							<div class="home_content_container">
								<div class="home_content">
									<div class="home_discount d-flex flex-row align-items-end justify-content-start">
										<div class="home_discount_num text-white">20</div>
										<div class="home_discount_text text-white">Discount on the</div>
									</div>
									<div class="home_title text-white">New Collection</div>
									<div class="button button_1 home_button trans_200 text-white"><a href="categories.html">Shop NOW!</a></div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="owl-item">
							<div class="background_image" style="background-image:url(<?php echo base_url() ?>template/frontend/images/banner3.jpg)"></div>
							<div class="home_content_container">
								<div class="home_content">
									<div class="home_discount d-flex flex-row align-items-end justify-content-start">
										<div class="home_discount_num text-white">20</div>
										<div class="home_discount_text text-white">Discount on the</div>
									</div>
									<div class="home_title text-white">New Collection</div>
									<div class="button button_1 home_button trans_200 text-white"><a href="categories.html">Shop NOW!</a></div>
								</div>
							</div>
						</div>

					</div>
						
					<!-- Home Slider Navigation -->
					<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url() ?>template/frontend/images/prev.png" alt=""></div></div>
					<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url() ?>template/frontend/images/next.png" alt=""></div></div>

				</div>
			</div>


		<?php else: ?>

			<div class="home" style="height: 332px;">
		
				<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>template/frontend/images/product_background.jpg" data-speed="0.8"></div>
				<div class="home_container">
					<div class="home_content">
						<div class="home_title">Shop</div>
						<div class="breadcrumbs">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.html">Home</a></li>
								<li><a href="categories.html">Woman</a></li>
								<li><a href="categories.html">Accessories</a></li>
								<li>Shoulder Bag</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		<?php endif; ?>

	<!-- Products -->

	<?php $this->load->view($innerdata); ?>

	

	<!-- Footer -->

	<footer class="footer">
		

		<!-- Credits -->
		<div class="credits">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="credits_content d-flex flex-row align-items-center justify-content-end">
								<div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="<?php echo base_url() ?>template/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/styles/bootstrap-4.1.3/popper.js"></script>
<script src="<?php echo base_url() ?>template/frontend/styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/easing/easing.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/plugins/Isotope/fitcolumns.js"></script>
<script src="<?php echo base_url() ?>template/frontend/js/custom.js"></script>
</body>
</html>