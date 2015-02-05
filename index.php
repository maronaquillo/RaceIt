<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Race IT - From Start to Finish</title>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/carousel-fade.css">
	<link rel="stylesheet" href="style.css">

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/site.js"></script>
</head>
<body>
	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 logo">
					<h1 id="logo"><a href="index.php">Race IT</a></h1>
				</div>
				<div class="col-lg-7 head-nav">
					<div class="mobile-logo2">
						<h1><a href="/">Race IT</a></h1>
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
					<a class="toggleMenu" href="#" style="display: none;">
						<img src="/assets/interior-img/toggle-icon.png" border="0" class="toggle-icon">
					</a>
					<nav style="display: inline-block;">
						<ul class="topMenu menu">
							<li><a href="#" class="parent">About Us</a>
								<ul>
									<li><a href="#">What Makes Us Different</a></li>
									<li><a href="#">Team</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Newsletters</a></li>
								</ul>
							</li>
							<li><a href="#" class="parent">Event Organizers</a>
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
						</ul>
					 <!-- Navigation -->
					</nav>	
				</div>
				<div class="col-lg-3 account-box">
					<div class="account-mobile">
						<div class="mobile-logo">
							<a href="/"><h1>Race IT</h1></a>
						</div>
						<div class="account-options">
							<div id="ctl00_Top_loginContainer" class="loginMiniFormContainer"></div>
					           	<a href="/MyEvents/" id="ctl00_Top_logLinkMiniForm" class="login">Login</a>
								<a href="/MyEvents/CreateAccount.aspx" id="ctl00_Top_createLinkMiniForm" class="create">Create An Account</a>
							</div>
						</div>
						<div class="search-event-drop">
							<a href="" class="">Search Events</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</header>

	<section id="slider">
	    <div id="myCarousel" class="carousel slide">
	    	<ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
        	</ol>
	        <div class="carousel-inner">
	            <div class="active item">
	                <img src="images/slider/1.jpg" alt="Slide1" />
	                <div class="carousel-caption">
	                	<h1>Event Registration Made Simple</h1>
	                	<p>Create, set up online registration and manage your event today!</p>
	                	<a class="tour-link" href="#">Take a Tour</a> <a class="signup-link" href="#">Request a Demo</a>
	            	</div>
	            </div>
	            <div class="item">
	                <img src="images/slider/2.jpg" alt="Slide2" />
	                <div class="carousel-caption">
	                <h1>Race IT Stories</h1>
	                <p>Check out our new site that highlights our clients and their success stories!</p>
	                <a class="tour-link" href="#">Race IT Stories</a> <a class="signup-link" href="#">Request a Demo</a>
	            	</div>
	            </div>
	            <div class="item">
	                <img src="images/slider/3.jpg" alt="Slide3" />
	                <div class="carousel-caption">
	                	<h1>Global Partnership<br>with Challenge Family</h1>
	                	<p>Challenge Family selects Race IT as worldwide registration platform for long distance triathlon series</p>
	                	<a class="tour-link" href="#">Take a Tour</a> <a class="signup-link" href="#">Request a Demo</a>
	            	</div>
	            </div>
	            <div class="item">
	                <img src="images/slider/4.jpg" alt="Slide3" />
	                <div class="carousel-caption">
	                	<h1>J&amp;A Racing joins our family of Customers</h1>
	                	<p>J&amp;A's award-winning series of events, including the famous Shamrock Marathon<br>and the Wicked 10k are now on Race IT.</p>
	                	<a class="tour-link" href="#">Take a Tour</a> <a class="signup-link" href="#">Request a Demo</a>
	            	</div>
	            </div>
	        </div>
	        <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-triangle-left"></i></a>
	 		<a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-triangle-right"></i></a>
	    </div>
	</section><!-- END .slider -->

	<section id="horizontalTab">
		<ul class="nav">
			<li class="active">
				<a href="#participants"  data-toggle="tab">
					<img class="pt-icon" border="0" src="images/tab-images/pt-icon.png" alt="Participant">
					<span>Participants</span>
				</a>
			</li>
			<li>
				<a href="#evenDirectors"  data-toggle="tab">
					<img class="ed-icon" border="0" src="images/tab-images/ed-icon.png" alt="Event Director">
					<span>Event Directors</span>
				</a>
			</li>
			<li>
				<a href="#timers"  data-toggle="tab">
					<img class="tm-icon" border="0" src="images/tab-images/tm-icon.png" alt="Timer">
					<span>Timers</span>
				</a>
			</li>
		</ul>
		<div class="container-fluid">
			<div class="tab-content">
				<div class="tab-pane fade active in" id="participants">
					<div class="col-lg-9 col-sm-12 participant-intro">
						<div class="uc text">
							<div class="intro-content">
								<h2>Get Registered</h2>
								<h3>From Start to Finish</h3>
								<p>Create your free account here! Make your registrations quick and easy with auto-fill options and manage registrations for multiple races. Keep up with all of your event accomplishments on your personal profile and stay on track from start to finish!</p>
								<a class="intro-CTA" href="/MyEvents/CreateAccount.aspx">Create an account</a> <a class="intro-CTA second" href="http://raceit.com/search3/default.aspx">Find an Event</a>
								<p class="introCTA">Have an account? <a href="/MyEvents/">Login Now</a></p>
								<p class="introCall">or, Call us today <strong>866-972-2348</strong></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-12 features">
						<div class="uc text">
							<h3>Follow Us</h3>
							<p><iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fraceit&amp;width&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" width="100%" height="317"></iframe></p>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="evenDirectors">
					<div class="col-lg-9 col-sm-12 event-organizer-intro">
						<div class="uc text">
							<div class="intro-content">
								<h2>Powerful Tools</h2>
								<h3>From Start to Finish</h3>
								<p>Race IT provides premium online solutions for event directors across the country. Race IT utilizes a unique combination of strategic thinking, creative vision, and technological experience to provide powerful online registration features that are intuitive and easy to use.</p>
								<a class="intro-CTA" href="/signupfordemo.aspx">Request Demo</a> <a class="intro-CTA second linkedIn" href="https://www.linkedin.com/company/race-it" target="_blank">Connect on LinkedIn</a>
								<p class="introCTA">Get started now! <a href="/MyEvents/">Create your first event</a></p>
								<p class="introCall">or, Call us today <strong>866-972-2348</strong></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-12 featuresVideo">
						<div class="uc text">
							<h3>Video</h3>
							<h4>Registration</h4>
							<p>Watch a preview of our registration process.</p>
							<p class="links">Desktop experience: <a href="#" data-reveal-id="regDesktop">Watch Video</a></p>
							<p class="links">Mobile experience: <a href="#" data-reveal-id="regMobile">Watch Video</a></p>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="timers">
					<div class="col-lg-9 col-sm-12 timer-intro">
						<div class="uc text">
							<div class="intro-content">
								<h2>Perfect Partner</h2>
								<h3>From Start to Finish</h3>
								<p>Race IT provides premium online solutions for timers across the country. We provide a turn key system so that you can offer branded registration to your event partners. We support live split times from all major timing companies, including: Chronotrack, ChampionChip, Ipico, WinningTime and others.</p>
								<a class="intro-CTA" href="/signupfordemo.aspx">Request a Demo</a>
								<p class="introCTA">Have an account? <a href="/MyEvents/">Login Now</a></p>
								<p class="introCall">or, Call us today <strong>866-972-2348</strong></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-12 featuresVideo">
						<div class="uc text">
							<h3>Video</h3>
							<h4>Results Engine</h4>
							<p>Our results wizard process makes easy work of uploading and mapping results files from timing companies.</p>
							<p class="links"><a href="#" data-reveal-id="resultsVideo">Watch Video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>