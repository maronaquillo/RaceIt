<!DOCTYPE html>
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />

	<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-lg-2 logo ">
					<h1 id="logo"><a href="index.php">Race IT</a></h1>
				</div>
				<div class="col-sm-9 col-lg-7 head-nav">
					<div class="mobile-logo2">
						<h1><a href="index.php">Race IT</a></h1>
					</div>
					<!-- subnav -->
					<div class="subnav">
						<div class="uc text">
							<p class="questions">New! <a href="#" target="_blank">Race IT Stories</a></p>
							<div class="head-social">
								<h4>Follow Us</h4>
								<ul>
									<li><a class="facebook" href="#" target="_blank">Facebook</a></li>
									<li><a class="twitter" href="#" target="_blank">Twitter</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end subnav -->
					<!-- Head Nav -->			
					<a class="toggleMenu" href="#">
						<img src="<?php echo get_template_directory_uri() ?>/images/toggle-icon.png" border="0" class="toggle-icon">
					</a>
					<nav class="clearfix">
						<?php mv_main_nav(); ?>
						<!-- <ul class="topMenu menu">
							<li><a href="#" class="parent hover">About Us</a>
								<ul>
									<li><a href="#">What Makes Us Different</a></li>
									<li><a href="#">Team</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Newsletters</a></li>
								</ul>
							</li>
							<li><a href="#" class="parent hover">Event Organizers</a>
								<ul>
									<li><a href="#">My Events</a></li>
									<li><a href="#">Why Choose Us?</a></li>
									<li><a href="#">Our Services</a></li>
									<li><a href="#">Stories</a></li>
									<li><a href="#">Registration Refund</a></li>
									<li><a href="#">Demo Sign-up</a></li>
								</ul>
							</li>
							<li><a href="#">Create An Event</a></li>
							<li><a href="#">Take a Tour</a></li>
							<li><a href="#">Help</a></li>
						</ul> -->
					 <!-- Navigation -->
					</nav>	
				</div>
				<div class="col-xs-12 col-md-3 account-box">
					<div class="account-mobile">

						<?php

						if ( is_user_logged_in() ) {

						?>

						<div class="account-options">
							<div id="ctl00_ctl00_Top_loginContainer" class="loginMiniFormContainer">
						    <span id="ctl00_ctl00_Top_usernameDisplay"><a href="wp-admin">
						   <?php
						   global $current_user;
				      	   get_currentuserinfo();
				      	   echo $current_user->user_login;
						   ?>

						    </a></span>
						    </div>
						 <a href="<?php echo wp_logout_url(); ?>" id="ctl00_ctl00_Top_logLinkMiniForm" class="login">Logout</a>
						</div>
						<?php

						} else {

						?>
						<div class="account-options">
							<div id="ctl00_Top_loginContainer" class="loginMiniFormContainer"></div>
					           	<a href="<?php echo site_url('/login')?>" id="ctl00_Top_logLinkMiniForm" class="login">Login</a>
								<a href="<?php echo site_url('/create-an-acount')?>" id="ctl00_Top_createLinkMiniForm" class="create">Create An Account</a>
						</div>

						<?php
						}
						?>




						</div>
						<div class="search-event-drop">
							<a href="" class="search-event-drop-link">Search Events</a>
							<div class="searchdropdown">
							    <div id="keywordLocationFacet">
							        <div class="facet eventsearch">
			                            <label class="facetSubheader">Search for</label>
			                            <input placeholder="Search for" name="ctl00$Top$searchTermTextBox" type="text" id="ctl00_Top_searchTermTextBox" class="eventsearch-input">
							        </div>
							                        
			                        <div class="facet location">
			                            <span class="facetSubheader">
			                                Your Current Location is:
			                            </span> 
			                            <span id="ctl00_Top_currentLocationLabelFlyout" class="facetHeader currentLocationLabel" style="color:White;">Anywhere</span>
			                 			<div id="changeLocationWrapper">
			                                <input name="ctl00$Top$zipCodeTextBoxFlyout" type="text" value="Zipcode" maxlength="5" id="ctl00_Top_zipCodeTextBoxFlyout" class="zipCodeTextBoxFlyout" style="display: none;">
			                                <div id="zipCodeChangeLinkFlyout" style="color:White;">Change Zipcode</div>
			                            </div>
			                        </div>
			                        
			                        <div class="facet distance">
			                            <span class="facetSubheader">Distance</span>
			                            <select name="ctl00$Top$searchRadiusDropDownFlyout" id="ctl00_Top_searchRadiusDropDownFlyout" class="searchRadiusDropDownFlyout">
											<option value="25">25 miles</option>
											<option value="50">50 miles</option>
											<option value="75">75 miles</option>
											<option value="100">100 miles</option>
											<option value="250">250 miles</option>
											<option value="0">any distance</option>
										</select>
			                        </div>
							                        
			                        <div class="updateButton">
			                            <input type="submit" name="ctl00$Top$keywordLocationRefineBtnFlyout" value="Search" id="ctl00_Top_keywordLocationRefineBtnFlyout" class="refineSearchBtn flyoutSearchBtn" data-facet="keyword">
			                        </div>
			                    </div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</header>