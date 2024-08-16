<?php 

include('../configuration/config.php');

?>


<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ecommerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="<?php echo $base_url . "modules/uitemplate/img/" ?>favicon.png" />
        <!-- Place favicon.ico in the root directory -->
		<!-- google-font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
		<!-- all css here -->
		<!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>meanmenu.min.css">
		<!-- nivo-slider css -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>nivo-slider.css">
		<!-- magnific-popup css -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>magnific-popup.css">		
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>owl.carousel.css">
		<!--linearicons css -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>linearicons-icon-font.min.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>font-awesome.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/style.css" ?>">
		<!-- responsive css -->
        <link rel="stylesheet" href="<?php echo $base_url . "modules/uitemplate/css/" ?>responsive.css" />
		<!-- modernizr css -->
        <script src="<?php echo $base_url . "modules/uitemplate/js/" ?>vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
		<header>
			<div class="header-top-area ptb-10 d-none d-md-block">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-md-8">
							<div class="dropdown header-left-menu">
								  <button class="btn btn-default header-left-menu dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="<?php echo $base_url . "modules/uitemplate/img/" ?>eng/1.jpg" alt="Image"/> English 1 <i class="fa fa-angle-down"></i>
								  </button>
								  <ul class="dropdown-menu">
									  <li><a href="#"><img src="<?php echo $base_url . "modules/uitemplate/img/" ?>eng/2.jpg" alt="Image" /> English 2</a></li>
									  <li><a href="#"><img src="<?php echo $base_url . "modules/uitemplate/img/" ?>eng/3.jpg" alt="Image" /> English 3</a></li>
									  <li><a href="#"><img src="<?php echo $base_url . "modules/uitemplate/img/" ?>eng/1.jpg" alt="Image" /> English 4</a></li>
								  </ul>
							</div>
							<div class="dropdown header-left-menu">
								<button class="btn btn-default header-left-menu dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								GBP <i class="fa fa-angle-down"></i>
								</button>
								 <ul class="dropdown-menu">
									<li><a href="#"> EUR - Euro</a></li>
									<li><a href="#"> USD - US Dollar</a></li>
								</ul>
							</div>
							<div class="header-top-left">
								<ul>
									<li class="click_menu"><a href="#">My Account <i class="fa fa-angle-down"></i></a>
										<ul class="click_menu_show">
											<li><a href="customer-login.html">Compare Products</a></li>
											<li><a href="customer-login.html">My Account</a></li>
											<li><a href="wishlist.html">My Wish List</a></li>
											<li><a href="customer-login.html">Sign In</a></li>
										</ul>
									</li>
									<li><a href="customer-account.html">Create an Account</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-md-4">
							<div class="header-top-right">
								<ul>
									<li><a href="wishlist.html"><span class="lnr lnr-heart"></span> wish list (0)</a></li>
									<li><a href="checkout.html"><span class="lnr lnr-sync"></span> checkout</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom-area ptb-50">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-2 col-md-3">
							<div class="logo">
								<a href="index.html"><img src="<?php echo $base_url . "modules/uitemplate/img/" ?>logo.png" alt="Image" /></a>
							</div>
						</div>
						<div class="col-xl-7 col-lg-7 d-none d-lg-block">
							<div class="single-header-bottom-info">
								<div class="header-bottom-icon">
									<span class="lnr lnr-rocket"></span>
								</div>
								<div class="header-bottom-text">
									<h3>FREE SHIPPING</h3>
									<p>Free shipping on all order</p>
								</div>
							</div>
							<div class="single-header-bottom-info">
								<div class="header-bottom-icon">
									<span class="lnr lnr-phone"></span>
								</div>
								<div class="header-bottom-text">
									<h3>SUPPORT 24/7</h3>
									<p>We support online 24 hours a day</p>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-9">
							<div class="header-bottom-right">
								<div class="shop-cart">
									<a href="#"><span class="lnr lnr-cart"></span>My Cart - items(2)</a>
								</div>
								<div class="shop-cart-hover fix">
									<ul>
										<li>
											<div class="cart-img">
												<a href="#"><img src="<?php echo $base_url . "modules/uitemplate/img/" ?>cart/1.jpg" alt="Image" /></a>
											</div>
											<div class="cart-content">
												<h4><a href="#">1 x Faded...</a></h4>
												<span><a href="#">S, Orange</a></span>
												<span class="cart-price">$ 16.84</span>
											</div>
											<div class="cart-del">
												<i class="fa fa-times-circle"></i>
											</div>											
										</li>
										<li>
											<div class="cart-img">
												<a href="#"><img src="<?php echo $base_url . "modules/uitemplate/img/" ?>cart/1.jpg" alt="Image" /></a>
											</div>
											<div class="cart-content">
												<h4><a href="#">1 x Faded...</a></h4>
												<span><a href="#">S, Orange</a></span>
												<span class="cart-price">$ 16.84</span>
											</div>
											<div class="cart-del">
												<i class="fa fa-times-circle"></i>
											</div>											
										</li>
										<li class="total-price"><span> Total $ 48.04 </span></li>
										<li class="checkout-bg">
											<a href="checkout.html">checkout <i class="fa fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->

		