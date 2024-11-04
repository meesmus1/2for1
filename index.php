<?php

session_start()

?>

<!DOCTYPE html>
<html dir="ltr" lang="nl">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700|Open+Sans:400,600,700|Dancing+Script&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />

	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Burger Demo Specific Stylesheet -->
	<link rel="stylesheet" href="css/colors.php?color=FBAF32" type="text/css" /> <!-- Burger Theme Color -->
	<link rel="stylesheet" href="demos/burger/css/fonts.css" type="text/css" /> <!-- Burger Theme Font -->
	<link rel="stylesheet" href="demos/burger/burger.css" type="text/css" /> <!-- Burger Theme Custom CSS -->
	<!-- / -->

	<!-- Burger Document Title
	============================================= -->
	<title>2FOR1</title>

</head>

<body class="stretched">

	<div class="body-overlay"></div>

	<div id="side-panel" class="dark" style="background: #101010 url('demos/burger/images/icon-bg-white.png') repeat center center;">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget">

				<h4 class="font-weight-bold">Download App</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<a href="#"><img src="demos/articles/images/appstore.png" alt="App Link" height="60"></a>
				<a href="#"><img src="demos/articles/images/googleplay.png" alt="App Link" class="mt-2" height="60"></a>

			</div>

			<div id="q-contact" class="widget quick-contact-widget form-widget">

				<h4>Quick Contact</h4>
				<div class="form-result"></div>
				<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form nobottommargin">
					<div class="form-process"></div>

					<input type="text" class="required not-dark mb-2 sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
					<input type="text" class="required not-dark mb-2 sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
					<textarea class="required not-dark mb-2 sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
					<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
					<input type="hidden" name="prefix" value="quick-contact-form-">
					<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
				</form>

			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark" data-sticky-class="dark-color" data-sticky-shrink-offset="0">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.php" class="standard-logo" data-dark-logo="demos/burger/images/logo-dark.png" data-sticky-logo="demos/burger/images/logo-sticky.png"><img src="demos/burger/images/logo.png" alt="Canvas Logo"></a>
							<a href="index.php" class="retina-logo" data-dark-logo="demos/burger/images/logo-dark@2x.png" data-sticky-logo="demos/burger/images/logo-sticky@2x.png"><img src="demos/burger/images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- <div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="icon-ellipsis-v"></i></a></div> -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100">
								<path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
								<path d="m 30,50 h 40"></path>
								<path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
							</svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<?php
						
						if ($_SESSION && isset($_SESSION['email'])) {
							echo '<nav class="primary-menu">
								<ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
									<li class="current menu-item"><a class="menu-link" href="#" data-href="#slider">
											<div>Home</div>
										</a></li>
									<li class="menu-item"><a class="menu-link" href="#" data-href="#menu">
											<div>Menu</div>
										</a></li>
									<li class="menu-item"><a class="menu-link" href="#" data-href="#contact" data-offset="20">
											<div>Contact</div>
										</a></li>';
							
							// Controleer of de gebruiker een admin is
							if ($_SESSION['user_id'] === '370e4ec5-1589-4413-b0bd-9a710cf6777a') {
								echo '<li class="menu-item"><a class="menu-link" href="./admin.php">
										<div>Admin</div>
									</a></li>';
							}
						
							echo '<li class="noborder menu-item">
									<div style="width: 2rem"></div>
								  </li>
								  <li class="noborder menu-item"><a class="menu-link" style="cursor: pointer" onclick="logout()">
										<div>Logout</div>
									</a></li>
								</ul>
							</nav>';
						} else {
							echo '<nav class="primary-menu">
								<ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
									<li class="current menu-item"><a class="menu-link" href="#" data-href="#slider">
											<div>Home</div>
										</a></li>
									<li class="menu-item"><a class="menu-link" href="#" data-href="#menu">
											<div>Menu</div>
										</a></li>
									<li class="menu-item"><a class="menu-link" href="#" data-href="#contact" data-offset="20">
											<div>Contact</div>
										</a></li>
									<li class="noborder menu-item">
										<div style="width: 2rem"></div>
									</li>
									<li class="noborder menu-item"><a class="menu-link" href="./login.php">
											<div>Login</div>
										</a></li>
									<li class="noborder menu-item"><a class="menu-link" href="./signup.php">
											<div>Signup</div>
										</a></li>
								</ul>
							</nav>';
						}

						?>
						

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-100 page-section slide-img include-header" data-animate="img-to-right" style="background: url('demos/burger/images/hero.jpg') center center no-repeat; background-size: cover;">
			<div class="slider-inner">

				<div class="vertical-middle">
					<div class="container dark">
						<div class="row">
							<div class="col-lg-6 col-md-8 dotted-bg parallax" data-start="top: 0px; opacity: 1" data-400="top: 50px; opacity: 0.3">
								<div class="emphasis-title" data-animate="fadeInUp">
									<div class="before-heading font-secondary color">Elke dag lekkere broodjessss...</div>
									<h1 class="font-border">2for1!</h1>
								</div>
								<a data-scrollto="#menu" data-easing="easeInOutExpo" data-speed="1250" class="button button-large button-rounded px-4 button-reveal d-inline-flex tright font-weight-semibold" data-animate="fadeInUp" data-delay="200">Bekijk het menu</a>
								<?php
								
								if ($_SESSION && isset($_SESSION['email'])) {
									echo'<a href="./cart.php" data-easing="easeInOutExpo" data-speed="1250" class="button button-large button-rounded px-4 button-reveal d-inline-flex tright font-weight-semibold" data-animate="fadeInUp" data-delay="200">Bestel broodjes Provil</a>';
								} else {

								}
								?>
								<!-- <a href="tel:+112223333" class="button button-large button-rounded px-4 button-reveal d-inline-flex tright font-weight-semibold" data-animate="fadeInUp" data-delay="300"><i class="icon-line-arrow-right"></i><span>Bekijk de menu</span></a> -->
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content" class="dark-color">

			<div class="clear"></div>

			<div id="menu" class="page-section">
				<div class="section mb-0" style="background: linear-gradient(to bottom, #101010, transparent, #101010), url('demos/burger/images/others/section-2.jpg') no-repeat center top / cover;">

					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6 center order-1 order-md-2 showSmall" data-animate="zoomIn faster" style="margin-top:-12rem;">
								<img src="demos/burger/images/others/hot-sandwich.png" alt="Image" class="parallax price-img mb-5 mb-md-0" data-top-bottom="transform:translateY(-30px)" data-bottom-top="transform:translateY(140px)">
							</div>
							<div class="col-md-5 dark order-2 order-md-1" style="margin-right:5rem;">

								<div class="bottommargin">
									<div class="before-heading font-secondary color mb-2">Ons Menu</div>
									<div class="d-flex align-items-center dotted-bg">
										<!-- <img src="demos/burger/images/svg/hot-sandwich.svg" alt="" width="70"> -->
										<h1 class="font-border display-4 ls1 font-weight-bold mb-0">Broodjes</h1>
									</div>
								</div>

								<div class="clear"></div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/mini.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje mexicano</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€4.80</div>
									</div>
									<p class="price-desc">Mexicana sla, tomaat, ei, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/double.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje boulet</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€4.80</div>
									</div>
									<p class="price-desc">Boulet, sla, tomaat, ei, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/turkish.jpg">
									<div class="price-header">
										<div class="price-name color">Las Vegas</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€4.80</div>
									</div>
									<p class="price-desc">Boulet, kaas, rauwe ui, augurj, amerkaanse saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/veggie.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje kroket</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€4.80</div>
									</div>
									<p class="price-desc">Twee keer vleeskroket, sla, tomaat, ei, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/mini.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje goulashkroket</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€5.00</div>
									</div>
									<p class="price-desc">Twee keer goulashkroket, sla, tomaat, ei, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/double.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje kaaskroket</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€4.80</div>
									</div>
									<p class="price-desc">Drie keer kaaskroket, sla, tomaat, ei, saus</p>
								</div>

							</div>

							<div class="col-md-5 dark order-2 order-md-1 hideSmall">
								<div class="bottommargin" style="margin-bottom:10rem !important">
									<!-- <div class="before-heading font-secondary color mb-2">Our Menu</div>
										<div class="d-flex align-items-center dotted-bg">
											<img src="demos/burger/images/svg/burger.svg" alt="" width="60">
											<h1 class="font-border display-4 ls1 font-weight-bold mb-0  ml-3">Burgers</h1>
										</div> -->
								</div>

								<div class="clear"></div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/turkish.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje saté</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€5.80</div>
									</div>
									<p class="price-desc">Saté, sla, tomaat, ei, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/veggie.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje berenhap</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€5.80</div>
									</div>
									<p class="price-desc">Berenhap, sla, tomaat, ei, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/mini.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje viandel</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€5.10</div>
									</div>
									<p class="price-desc">Twee keer viandel, sla, tomaat, ei, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/double.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje kipcorn</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€5.10</div>
									</div>
									<p class="price-desc">Twee keer kipcorn, sla, tomaat, ei, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/turkish.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje visstick</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€5.30</div>
									</div>
									<p class="price-desc">Visstick, sla, tomaat, ei, augurk, tartaar</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/veggie.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje kip</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€5.30</div>
									</div>
									<p class="price-desc">Kippenblokjes, sla, tomaat, ei, saus</p>
								</div>

							</div>
						</div>
					</div>

					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-5 dark order-2 order-md-1 hideSmall">
								<div class="bottommargin" style="margin-bottom:0rem !important">
									<!-- <div class="before-heading font-secondary color mb-2">Our Menu</div> -->
									<div class="d-flex align-items-center dotted-bg">
										<!-- <img src="demos/burger/images/svg/burger.svg" alt="" width="60">
											<h1 class="font-border display-4 ls1 font-weight-bold mb-0  ml-3">Burgers</h1> -->
									</div>
								</div>

								<div class="clear"></div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/veggie.jpg">
									<div class="price-header">
										<div class="price-name color">Broodje frikandel</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€4.60</div>
									</div>
									<p class="price-desc">Frikandel, sla, tomaat, ei, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/veggie.jpg">
									<div class="price-header">
										<div class="price-name color">Hot-dog</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€3.60</div>
									</div>
									<p class="price-desc">Frikandel, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/veggie.jpg">
									<div class="price-header">
										<div class="price-name color">Hot-dog ui en zuurkool</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€4.60</div>
									</div>
									<p class="price-desc">Frikandel, gebakken ui, zuurkool, augurk, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/veggie.jpg">
									<div class="price-header">
										<div class="price-name color">Hot-dog braadworst</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€4.20</div>
									</div>
									<p class="price-desc">Braadworst, saus</p>
								</div>

								<div class="price-menu-warp" data-img="demos/burger/images/menu-items/burgers/veggie.jpg">
									<div class="price-header">
										<div class="price-name color">Hot-dog braadworst, ui en zuurkool</div>
										<div class="price-dots">
											<span class="separator-dots"></span>
										</div>
										<div class="price-price">€5.20</div>
									</div>
									<p class="price-desc">Braadworst, gebakken ui, zuurkool, augurk, saus</p>
								</div>

							</div>



							<div class="col-md-6 center order-1 order-md-2 hideSmall" data-animate="zoomIn faster" style="margin-top:-12rem;">
								<img src="demos/burger/images/others/hot-sandwich.png" alt="Image" class="parallax price-img mb-5 mb-md-0" data-top-bottom="transform:translateY(-30px)" data-bottom-top="transform:translateY(140px)">
							</div>
						</div>
					</div>

				</div>


				<div id="contact" class="section page-section dark m-0 pb-0 pb-md-5 slide-img" data-animate="img-to-left" style="background: #101010 url('demos/burger/images/icon-bg-white.png') repeat center center;">
					<!-- <div id="contact" class="section page-section dark m-0 pb-0 pb-md-5 slide-img" data-animate="img-to-left" style="background: #101010 url('demos/burger/images/maps.png') repeat center center;"> -->
					<div class="container pt-3 pb-4">
						<div class="row">
							<div class="col-sm-4" style="line-height: 1.7; z-index: 1">
								<address class="d-block mb-5">
									<div class="font-secondary h5 mb-2 color">Addres:</div>
									<span class="h6 text-white ls1 font-weight-normal font-primary">
										<a style="color:#fff;" href="https://www.google.com/maps/place/2FOR1+Broodjeszaak/@51.2190907,5.3111671,15z/data=!4m2!3m1!1s0x0:0xf90ae5c311b75b67?sa=X&ved=2ahUKEwi5md_soc7xAhUO16QKHeiRCAsQ_BJ6BAhFEAU" target="_blank">
											Vreyshoring 241<br>
											3920 Lommel, België
										</a>

									</span>
								</address>
								<div class="font-secondary h5 mb-2 color">Telefoon:</div>
								<a href="tel:(00)32498820039" class="d-block h6 text-white ls1 font-weight-normal font-primary mb-5" style="margin-bottom:10px !important">TEL: (00)32 498 82 00 39</a>
								<a href="tel:(00)32498820039" class="d-block h6 text-white ls1 font-weight-normal font-primary mb-5">GSM: (00)32 498 82 00 39</a>

								<div class="font-secondary h5 mb-2 color">Email:</div>
								<a href="mailto:mees.vanderheijden@provil.be" class="d-block h6 text-white ls1 font-weight-normal font-primary mb-5">mees.vanderheijden@provil.be</a>

								<div class="font-secondary h5 mb-2 color">Openingsuren:</div>
								<div class="h6 text-white ls1 font-weight-normal font-primary">Maandag 11:00 - 14:00</div>
								<div class="h6 text-white ls1 font-weight-normal font-primary">Dinsdag 11:00 - 19:00</div>
								<div class="h6 text-white ls1 font-weight-normal font-primary">Woensdag 11:00 - 19:00</div>
								<div class="h6 text-white ls1 font-weight-normal font-primary">Donderdag 11:00 - 19:00</div>
								<div class="h6 text-white ls1 font-weight-normal font-primary">Vrijdag 11:00 - 19:00</div>
								<div class="h6 text-white ls1 font-weight-normal font-primary">Zaterdag 12:00 - 19:00</div>
								<span class="text-uppercase text-white ls1 font-weight-normal font-primary">Zondag gesloten</span>
							</div>

							<div class="col-sm-8 maps" style="    opacity: 0.7;
    border-radius: 30px;
    overflow: hidden;
    padding: 0px;
    width: 100%;
    height: 100%;
    cursor: pointer;">
								<!-- <div class="fluid-width-video-wrapper" style="padding:0;height:100%;"> -->

								<a href="https://www.google.com/maps/place/2FOR1+Broodjeszaak/@51.2190907,5.3111671,15z/data=!4m2!3m1!1s0x0:0xf90ae5c311b75b67?sa=X&ved=2ahUKEwi5md_soc7xAhUO16QKHeiRCAsQ_BJ6BAhFEAU" target="_blank">
									<img src="demos/burger/images/maps.png" alt="">
								</a>
								<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2499.0311023362997!2d5.310190775918597!3d51.21850270121351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf90ae5c311b75b67!2s2FOR1%20Broodjeszaak!5e0!3m2!1snl!2sbe!4v1625561301633!5m2!1snl!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->

								<!-- </div> -->
							</div>

						</div>

					</div>
					<!-- <div id="map" class="gmap mt-5 mt-md-0" data-address="Melbourne, Australia" data-styles='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#666666"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":10}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]' data-zoom="14" data-icon='{image: "demos/burger/images/svg/hamburger-marker.svg",iconsize: [40, 36],iconanchor: [40,36]}' data-maptype="ROADMAP" data-content='<div class="text-dark" style="width: 300px;"><h4 class="text-dark" style="margin-bottom: 8px;">Hi, we are <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>'></div> -->
					<!-- <div id="map" class="gmap mt-5 mt-md-0" data-address="Lommel, Beglium" data-styles='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#666666"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":10}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]' data-zoom="14" data-icon='{image: "demos/burger/images/svg/hamburger-marker.svg",iconsize: [40, 36],iconanchor: [40,36]}' data-maptype="ROADMAP" data-content='<div class="text-dark" style="width: 300px;"><h4 class="text-dark" style="margin-bottom: 8px;">Hi, we are <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>'></div> -->



				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder parallax pt-3" style="background-image: url('demos/burger/images/others/footer.jpg');" data-top-bottom="background-position:100% -300px" data-bottom-top="background-position: 100% 300px">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="widget">

								<img src="demos/burger/images/logo-dark.png" alt="" height="80" class="alignleft" style=" padding-right: 18px; border-right: 1px solid #4A4A4A;margin-bottom:30px;">

								<p style="margin-bottom:30px;padding-top:30px;">Life is good when you have a good sandwich.</p>

								<!-- <div class="line" style="margin: 30px 0;"></div> -->

								<!-- <div class="row col-mb-30">
									<div class="col-lg-6">
										<div class="widget">

											<div class="d-none d-lg-block"><div class="clear" style="padding-top: 10px;"></div></div>

											<div class="row">
												<div class="col-sm-6 bottommargin-sm">
													<div class="counter counter-small color"><span data-from="50" data-to="15065425" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
													<h5 class="nobottommargin">Total Downloads</h5>
												</div>

												<div class="col-sm-6 bottommargin-sm">
													<div class="counter counter-small color"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
													<h5 class="nobottommargin">Orders Served</h5>
												</div>
											</div>

										</div>
									</div>

									<div class="col-lg-6">
										<div class="widget subscribe-widget">
											<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
											<div class="widget-subscribe-form-result"></div>
											<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
												<div class="input-group mx-auto">
													<div class="input-group-prepend">
														<div class="input-group-text bg-white"><i class="icon-email2"></i></div>
													</div>
													<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email not-dark border-0" placeholder="Enter your Email">
													<div class="input-group-append">
														<button class="btn text-white bgcolor" type="submit">Subscribe</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div> -->

							</div>

							<div class="line" style="margin: 30px 0;"></div>

							<div class="row col-mb-30">
								<div class="col-6 col-lg-4">
									<div class="widget">

										<h4 class="font-weight-bold">Sitemap</h4>

										<ul class="list-unstyled ml-0">
											<li class="mb-2"><a class="text-white-50" href="#" data-href="#home">Home</a></li>
											<li class="mb-2"><a class="text-white-50" href="#" data-href="#menu">Menu</a></li>
											<li class="mb-2"><a class="text-white-50">Contact</a></li>
										</ul>

									</div>
								</div>
								<div class="col-6 col-lg-4">
									<div class="widget">

										<h4 class="font-weight-bold">Contact</h4>

										<ul class="list-unstyled ml-0">
											<li class="mb-2"><a class="text-white-50" href="#">2for1@2for1.be</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">TEL 0498 82 00 39</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">GSM 0498 82 00 39</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Vreyshoring 241 - Lommel</a></li>
										</ul>

										<!-- <ul class="list-unstyled ml-0">
											<li class="mb-2"><a class="text-white-50" href="#">Burgers</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Appetizers</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Wraps</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Beverages</a></li>
										</ul> -->

									</div>
								</div>
								<div class="col-md-12 col-lg-4">
									<div class="widget">

										<h4 class="font-weight-bold">Social media</h4>

										<a href="https://facebook.com" class="social-icon si-small si-colored nobottommargin si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="https://instagram.com" class="social-icon si-small si-colored nobottommargin si-instagram">
											<i class="icon-instagram"></i>
											<i class="icon-instagram"></i>
										</a>

									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget">
								<!-- <h4>Instagram Photos</h4>
								<div id="instagram-photos" class="instagram-photos masonry-thumbs grid-4 grid-sm-6 grid-lg-4" data-user="blog.canvastemplate"></div> -->
							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<!-- <div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">
						<div class="col-md-6 text-center text-md-left">
							Copyrights &copy; 2021 All Rights Reserved by Classid.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-right">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-colored nobottommargin si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-colored nobottommargin si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-colored nobottommargin si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-colored nobottommargin si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-colored nobottommargin si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

								<a href="#" class="social-icon si-small si-colored nobottommargin si-youtube">
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div> -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="demos/burger/js/hover-animate.js"></script>
	<!-- <script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script> -->
	<!-- <script async
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwFQuvnaWxQ3shJHAW6qqpFkZKKymlaPM&callback=initMap">
	</script> -->
	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>
		function logout() {
			$.ajax({
				url: './include/logout.php',
				method: 'POST',
				data: {},
				dataType: 'json',
				success: function(data) {
					window.location.href = './index.php';
				}
			})
		}
	</script>

</body>

</html>