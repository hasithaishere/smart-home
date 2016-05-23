<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Smart Home</title>

  <!-- Styling -->
  <link href="src/css/custom.css" rel="stylesheet">
  <link href="src/css/style.css" rel="stylesheet">
  <link href="src/css/magnific-popup.css" rel="stylesheet">
  <link href="src/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="src/css/zoomify.min.css" rel="stylesheet">
  <link href="src/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<script src="src/js/modernizr.custom.24530.js" type="text/javascript"></script>

  <!--Filer Custom Stylesheets-->
	<link href="src/css/filer/jquery.filer.css" type="text/css" rel="stylesheet" />
	<link href="src/css/filer/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />

	<link rel="shortcut icon" href="src/images/fav.png">

	<script>
	/* Google Map Market Settings

	var mapMarkers = [
		{
			"id": "1",
			"title": "CargoPress",
			"address": "Changi Airport, Singapore",
			"custompinimage": "images\/pin.png"
		}
	]*/
	</script>

</head>
<body>

	<!-- MAIN PAGE CONTAINER -->
	<div class="boxed-container">

    <!-- TOP BAR -->
		<div class="top">

			<div class="container">

				<nav class="top__menu">
					<ul class="top-navigation js-dropdown">
						<li>
							<a href="#" target="_blank"><i class="fa fa-envelope"> Goto Email</i></a>
						</li>
					</ul>
				</nav>

			</div><!-- /.container -->

		</div><!-- /.top -->

		<!-- HEADER -->
		<div class="header__container">

			<div class="container">

				<header class="header">

					<div class="header__logo">
						<a href="index.php">
							<img class="img-responsive" srcset="src/images/logo.png" alt="CargoPress" src="src/images/logo_old2.png">
						</a>
						<button data-target="#cargopress-navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
							<span class="navbar-toggle__text">MENU</span>
							<span class="navbar-toggle__icon-bar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</span>
						</button>
					</div><!-- /.header__logo -->

					<div class="header__navigation">
						<nav class="collapse navbar-collapse" id="cargopress-navbar-collapse">
							<ul class="main-navigation js-main-nav js-dropdown">
								<li><a href="index.php">Home</a></li>
								<li><a href="index.php#our-service-holder">Services</a></li>
								<li><a href="index.php#about-us">About Us</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div><!-- /.header__navigation -->

					<div class="header__widgets">

						<div class="widget-icon-box">

							<div class="icon-box">
								<i class="fa fa-headphones"></i>
								<h4 class="icon-box__title">Call Us Anytime</h4>
								<span class="icon-box__subtitle">+94-452-229-174</span>
							</div>

						</div>

						<div class="widget-icon-box">

							<div class="icon-box">
								<i class="fa fa-clock-o"></i>
								<h4 class="icon-box__title">Opening Time</h4>
								<span class="icon-box__subtitle">08:00 - 18:00</span>
							</div>

						</div>

						<div class="widget-icon-box">

							<div class="icon-box">
								<i class="fa fa-envelope-o"></i>
								<h4 class="icon-box__title">Email Us</h4>
								<span class="icon-box__subtitle">contact@smarthome.lk</span>
							</div>

						</div>

					{if $is_admin eq 1}
		              	<a target="_self" href="admin-panel.php" class="btn btn-info" id="button_requestQuote">ADMIN PANEL</a>
		            {elseif $is_admin eq 2}
		            	<a target="_self" href="device_panel.php" class="btn btn-info" id="button_requestQuote">DEVICE PANEL</a>
		            {else}
		              	<a target="_self" href="login.php" class="btn btn-info" id="button_requestQuote">SIGN IN</a>
		            {/if}
						

					</div><!-- /.header__widgets -->

					<div class="header__navigation-widgets">
						<a target="_blank" href="#" class="social-icons__link"><i class="fa fa-facebook"></i></a>
						<a target="_blank" href="#" class="social-icons__link"><i class="fa fa-twitter"></i></a>
						<a target="_blank" href="#" class="social-icons__link"><i class="fa fa-wordpress"></i></a>
						<a target="_blank" href="#" class="social-icons__link"><i class="fa fa-youtube"></i></a>
					</div>

				</header>

			</div><!-- /.container -->

		</div><!-- /.header__container -->
