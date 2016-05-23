<?php
/* Smarty version 3.1.29, created on 2016-05-23 21:25:12
  from "/home/hasitha/projects/ajs_php/learners/app/views/support/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574327e02e28f7_99345745',
  'file_dependency' => 
  array (
    'db94a17c045fadfa66360f698aa83a8f7918b1d3' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/support/header.tpl',
      1 => 1464018910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574327e02e28f7_99345745 ($_smarty_tpl) {
?>
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

	<?php echo '<script'; ?>
 src="src/js/modernizr.custom.24530.js" type="text/javascript"><?php echo '</script'; ?>
>

  <!--Filer Custom Stylesheets-->
	<link href="src/css/filer/jquery.filer.css" type="text/css" rel="stylesheet" />
	<link href="src/css/filer/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />

	<link rel="shortcut icon" href="src/images/fav.png">

	<?php echo '<script'; ?>
>
	/* Google Map Market Settings

	var mapMarkers = [
		{
			"id": "1",
			"title": "CargoPress",
			"address": "Changi Airport, Singapore",
			"custompinimage": "images\/pin.png"
		}
	]*/
	<?php echo '</script'; ?>
>

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

					<?php if ($_smarty_tpl->tpl_vars['is_admin']->value == 1) {?>
		              	<a target="_self" href="admin-panel.php" class="btn btn-info" id="button_requestQuote">ADMIN PANEL</a>
		            <?php } elseif ($_smarty_tpl->tpl_vars['is_admin']->value == 2) {?>
		            	<a target="_self" href="device_panel.php" class="btn btn-info" id="button_requestQuote">DEVICE PANEL</a>
		            <?php } else { ?>
		              	<a target="_self" href="login.php" class="btn btn-info" id="button_requestQuote">SIGN IN</a>
		            <?php }?>
						

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
<?php }
}
