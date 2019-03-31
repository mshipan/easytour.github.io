

<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="xmlrpc.html">
	<title>Easy Travel Home</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="style_comment.css" type="text/css" media="all">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<?php require 'headerLinks.php';?>
</head>
<body>
<div class="wrapper-container">
	<header id="masthead" class="site-header sticky_header affix-top">
		
		<div class="navigation-menu">
			<div class="container">
				<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="width-logo sm-logo">
					<a href="index.php" title="Travel" rel="home">
						<img src="images/logo.png" alt="Logo" width="474" height="130" class="logo_transparent_static">
						<img src="images/logo_sticky.png" alt="Sticky logo" width="474" height="130" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						<li class="">
							<a href="index.php">Home</a>
						</li>
						<li class="">
							<a href="tours.php">Tours</a>
						</li>

						<li><a href="hotels.php">Hotels</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
						
						<?php 

						if(isset($_SESSION['active'])) { ?>
							<li><a href="chat.php">Chat</a></li>
							<li><a href="add-blog.php">Create Blog</a></li>
							<li><a href="logout.php">Logout</a></li>
						<?php }else{ ?>

							<li><a href="login.php">Login</a></li>
							<li><a href="signup.php">Sign Up</a></li>
						<?php }
						 ?>

						
						<li class="menu-right">
							<ul>
								<li id="travel_social_widget-2" class="widget travel_search">
									<div class="search-toggler-unit">
										<div class="search-toggler">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="search-menu search-overlay search-hidden">
										<div class="closeicon"></div>

										<form method="post" class="search-form" action="search_tour.php">
											<input type="search" class="search-field" placeholder="Search ..." value="" name="s" title="Search for:">
											<input type="submit" name="search" class="search-submit font-awesome" value="&#xf002;">

										</form>
										<div class="background-overlay"></div>
									</div>
								</li>
							</ul>
						</li>
						<?php print('$output'); ?>
					</ul>
				</nav>
			</div>
		</div>
	</header>



