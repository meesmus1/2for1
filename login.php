<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login 2FOR1</title>

  <script src="./skripts/index.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
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
                <a href="index.html" class="standard-logo" data-dark-logo="demos/burger/images/logo-dark.png" data-sticky-logo="demos/burger/images/logo-sticky.png"><img src="demos/burger/images/logo.png" alt="Canvas Logo"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="demos/burger/images/logo-dark@2x.png" data-sticky-logo="demos/burger/images/logo-sticky@2x.png"><img src="demos/burger/images/logo@2x.png" alt="Canvas Logo"></a>
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
              <nav class="primary-menu">

                <ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
                  <li class="current menu-item"><a class="menu-link" href="#" data-href="#slider">
                      <div>Login</div>
                    </a></li>
                  <li class="noborder menu-item"><a class="menu-link" href="./signup.php">
                      <div>Signup</div>
                    </a></li>
                  <li class="noborder menu-item"><a class="menu-link" href="./index.php">
                      <div>Home</div>
                    </a></li>

              </nav><!-- #primary-menu end -->

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
                    <div class="before-heading font-secondary color">Login:</div>
                    <br><br>
                    <form style="width: 23rem;">

                      <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example18">Email address</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example28">Password</label>
                      </div>

                      <div class="pt-1 mb-4">
                        <button class="btn button btn-lg btn-block" type="button" onclick="login()">Login</button>
                        <br><br>
                        <button class="btn button btn-lg btn-block" type="button">Smartschool login</button>
                      </div>

                      <p class="alert alert-danger" style="display: none;" id="isempty">niet alle velden zijn ingevuld.</p>

                      <p>Don't have an account? <a href="./signup.php" class="" style="color: #FBAF32">Register here</a></p>

                    </form>

                  </div>
                  <!-- <a href="tel:+112223333" class="button button-large button-rounded px-4 button-reveal d-inline-flex tright font-weight-semibold" data-animate="fadeInUp" data-delay="300"><i class="icon-line-arrow-right"></i><span>Bekijk de menu</span></a> -->
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Content
		============================================= -->

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

  </body>

  </html>

<script src="./js/gip js/login.js"></script>