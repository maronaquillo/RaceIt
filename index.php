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

	<section id="homepageContent">
		<div class="container-fluid">
			<div class="col-sm-4 tabBox">
				<a href="#"><img src="images/featured/monument10k-feature-img.jpg" alt="Sports Backers" border="0"></a>
				<div class="box-content">
					<h4>Featured Client</h4>
					<h5>Sports Backers</h5>
					<p>The Sports Backers pursue a goal to transform greater Richmond into the most physically active community in the nation by leading the area in embracing and celebrating an active lifestyle. The Sports Backers produces the Monument Avenue 10K, Richmond, Virginia's biggest running event of the year that takes place on the city's most iconic street. Sports Backers delivers other running, cycling and extreme sports events throughout the year.</p>
					<p><a href="#">Find out more about their events »</a></p>
				</div>
			</div>
			<div class="col-sm-4 tabBox">
				<a href="#"><img border="0" alt="Race IT News" src="images/featured/news-feature-img.jpg"></a>
				<div class="box-content">
					<h5>News</h5>
					<ul>
						<li><a href="#">Race IT is hiring!</a></li>
						<li><a href="#">Race IT and Challenge Family Triathlon Form Global Partnership</a></li>
						<li><a href="#">Race IT Powers Army Ten-Miler Sellout</a></li>
						<li><a href="#">National Running Day 2014</a></li>
						<li><a href="#">The Oatmeal Creator Organizes "Beat the Blerch" Race</a></li>
					</ul>
					<p><a href="#">More News »</a></p>
				</div>	
			</div>
			<div class="col-sm-4 tabBox">
				<a href="#"><img src="images/featured/pt-newletter-img.jpg" alt="Race IT Newsletter" border="0"></a>
				<div class="box-content">
					<h4>Race IT</h4>
					<h5>Newsletter</h5>
					<p>Stay up to date on the latest news and offerings from Race IT.</p>
					<p><a href="#" data-reveal-id="signupModal">Subscribe Today »</a><br> <a href="#">Past Newsletters »</a></p>
				</div>
			</div>
		</div>
	</section><!-- END #homepageContent -->
	
	<section id="featuredEvents">
		<div class="container-fluid">
			<div class="col-md-12">
				<header>
					<h3>Featured Events</h3> <a href="#">Search Events »</a>
				</header>
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="event">
					<a href="#" target="_blank"><img src="images/featured/rnrsf-event-img.jpg" alt="event image" border="0"></a>
					<div class="event-detail">
						<h5>San Francisco Rock 'n' Roll Half Marathon 2015</h5>
						<ul>
							<li class="location">San Francisco, CA</li>
							<li class="date">March 29, 2015</li>
						</ul>
						<a class="btn-left" href="#" target="_blank">Event Site</a> <a class="btn-right" href="#">Register</a>
					</div>
				</div>
			</div>

			<div class="col-sm-3 col-xs-6">
				<div class="event">
					<a href="#" target="_blank"><img src="images/featured/laurenskids-event-img.jpg" alt="event image" border="0"></a>
					<div class="event-detail">
						<h5>Walk In My Shoes 2015</h5>
						<ul>
							<li class="location">Across the State of Florida</li>
							<li class="date">March 14 - April 22, 2015</li>
						</ul>
						<a class="btn-left" href="#" target="_blank">Event Site</a> <a class="btn-right" href="#">Register</a>
					</div>
				</div>
			</div>

			<div class="col-sm-3 col-xs-6">
				<div class="event">
					<a href="#" target="_blank"><img src="images/featured/monument10k-event-img.jpg" alt="event image" border="0"></a>
					<div class="event-detail">
						<h5>2015 Ukrop's Monument Avenue 10K</h5>
						<ul>
							<li class="location">Richmond, VA</li>
							<li class="date">March 28, 2015</li>
						</ul>
						<a class="btn-left" href="#" target="_blank">Event Site</a> <a class="btn-right" href="#">Register</a>
					</div>
				</div>
			</div>

			<div class="col-sm-3 col-xs-6">
				<div class="event">
					<a href="#" target="_blank"><img src="images/featured/challengeknoxville-event-img.jpg" alt="event image" border="0"></a>
					<div class="event-detail">
						<h5>Challenge Knoxville</h5>
						<ul>
							<li class="location">Knoxville, TN</li>
							<li class="date">May 17, 2015</li>
						</ul>
						<a class="btn-left" href="#" target="_blank">Event Site</a><a class="btn-right" href="#">Register</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer id="footer">
		<section class="clients">
			<ul>
				<li><a href="#" target="_blank"><img src="images/logos/client-logo-ja.gif" alt="J &amp; A Racing" border="0"></a></li>
				<li><a href="#" target="_blank"><img src="images/logos/client-logo-rr.gif" alt="Rock and Roll Marathon" border="0"></a></li>
				<li><a href="#" target="_blank"><img src="images/logos/client-logo-portland.gif" alt="Portland Marathon" border="0"></a></li>
				<li><a href="#" target="_blank"><img src="images/logos/client-logo-mcm.gif" alt="Marie Corps Marathon" border="0"></a></li>
				<li><a href="#" target="_blank"><img src="images/logos/client-logo-sbackers.gif" alt="Sportsbackers" border="0"></a></li>
				<li><a href="#" target="_blank"><img src="images/logos/client-logo-army.gif" alt="Army Ten Miler" border="0"></a></li>
				<li><a href="#" target="_blank"><img src="images/logos/client-logo-challenge.gif" alt="Challenge Family" border="0"></a></li>
				<li><a href="#" target="_blank"><img src="images/logos/client-logo-nf.gif" alt="North Face Endurance Challenge" border="0"></a></li>
			</ul>
		</section>
		<section class="foot-social">
			<div class="foot-social-outer">
				<div class="foot-social-head">
					<h5>Follow Us</h5>
					<ul>
						<li><a class="facebook" href="#" target="_blank">Facebook</a></li>
						<li><a class="twitter" href="#" target="_blank">Twitter</a></li>
					</ul>
				</div>
			</div>
		</section>
		<section class="footMain">
			<div class="col-md-2 footLogo">
				<p><a href="/"><img src="images/foot-logo.png" alt="Race IT" border="0"></a></p>
				<p class="copyright">Copyright © 2015, Race IT.<br>All Rights Reserved.</p>
			</div>
			<div class="col-md-5 countries">
				<h5>&nbsp;30,000+</h5>
				<p><em>Events</em></p>
			</div>
			<div class="col-md-5 footnav">
				<div class="col-md-4">
					<ul>
						<li><a href="#">Event Organizers</a></li>
						<li><a href="#">Create an Event</a></li>
						<li><a href="#">Take a Tour</a></li>
						<li><a href="#" target="_blank">Help</a></li>
						<li><a href="#">About Us</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="foot-small">
						<li><a href="#">Login</a></li>
						<li><a href="#">Create an Account</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Child Privacy Policy</a></li>
						<li><a href="#">Legal</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<script type="text/javascript">// <![CDATA[
					var __dcid = __dcid || [];__dcid.push(["DigiCertClickID_Uy-FNy1Y", "7", "s", "white", "Uy-FNy1Y"]);(function(){var cid=document.createElement("script");cid.async=true;cid.src="//seal.digicert.com/seals/cascade/seal.min.js";var s = document.getElementsByTagName("script");var ls = s[(s.length - 1)];ls.parentNode.insertBefore(cid, ls.nextSibling);}());
					// ]]></script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script>
					<!-- Begin DigiCert site seal HTML -->
					<div id="DigiCertClickID_Uy-FNy1Y" data-language="en_US"><div id="DigiCertClickID_Uy-FNy1YSeal" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: default; background: transparent;"><img src="//seal.digicert.com/seals/cascade/?s=Uy-FNy1Y,7,s,raceit.com" alt="DigiCert Seal" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: pointer; background: transparent;"></div><span style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: default; color: white; background: transparent;"><a href="http://www.digicert.com/unified-communications-ssl-tls.htm" style="text-decoration: none; text-align: center; display: inline; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: pointer; color: white; background: transparent;">UCC SSL</a></span></div>
					<!-- End DigiCert site seal HTML -->
				</div>
			</div>
		</section>
	</footer>

</body>
</html>