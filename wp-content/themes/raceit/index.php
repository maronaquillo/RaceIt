<?php get_header(); ?>

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
	                <img src="<?php echo get_template_directory_uri() ?>/images/slider/1.jpg" alt="Slide1" />
	                <div class="carousel-caption">
	                	<h1>Event Registration Made Simple</h1>
	                	<p>Create, set up online registration and manage your event today!</p>
	                	<a class="tour-link" href="#">Take a Tour</a> <a class="signup-link" href="#">Request a Demo</a>
	            	</div>
	            </div>
	            <div class="item">
	                <img src="<?php echo get_template_directory_uri() ?>/images/slider/2.jpg" alt="Slide2" />
	                <div class="carousel-caption">
	                <h1>Race IT Stories</h1>
	                <p>Check out our new site that highlights our clients and their success stories!</p>
	                <a class="tour-link" href="#">Race IT Stories</a> <a class="signup-link" href="#">Request a Demo</a>
	            	</div>
	            </div>
	            <div class="item">
	                <img src="<?php echo get_template_directory_uri() ?>/images/slider/3.jpg" alt="Slide3" />
	                <div class="carousel-caption">
	                	<h1>Global Partnership<br>with Challenge Family</h1>
	                	<p>Challenge Family selects Race IT as worldwide registration platform for long distance triathlon series</p>
	                	<a class="tour-link" href="#">Take a Tour</a> <a class="signup-link" href="#">Request a Demo</a>
	            	</div>
	            </div>
	            <div class="item">
	                <img src="<?php echo get_template_directory_uri() ?>/images/slider/4.jpg" alt="Slide3" />
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
					<img class="pt-icon" border="0" src="<?php echo get_template_directory_uri() ?>/images/tab-images/pt-icon.png" alt="Participant">
					<span>Participants</span>
				</a>
			</li>
			<li>
				<a href="#evenDirectors"  data-toggle="tab">
					<img class="ed-icon" border="0" src="<?php echo get_template_directory_uri() ?>/images/tab-images/ed-icon.png" alt="Event Director">
					<span>Event Directors</span>
				</a>
			</li>
			<li>
				<a href="#timers"  data-toggle="tab">
					<img class="tm-icon" border="0" src="<?php echo get_template_directory_uri() ?>/images/tab-images/tm-icon.png" alt="Timer">
					<span>Timers</span>
				</a>
			</li>
		</ul>
		<div class="container-fluid">
			<div class="tab-content">
				<div class="tab-pane fade active in" id="participants">
					<div class="col-sm-9 participant-intro">
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
					<div class="col-sm-3 features">
						<div class="uc text">
							<h3>Follow Us</h3>
							<p><iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fraceit&amp;width&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" width="100%" height="317"></iframe></p>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="evenDirectors">
					<div class="col-sm-9 event-organizer-intro">
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
					<div class="col-sm-3 featuresVideo">
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
					<div class="col-sm-9 timer-intro">
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
					<div class="col-sm-3 featuresVideo">
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
				<a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/featured/monument10k-feature-img.jpg" alt="Sports Backers" border="0"></a>
				<div class="box-content">
					<h4>Featured Client</h4>
					<h5>Sports Backers</h5>
					<p>The Sports Backers pursue a goal to transform greater Richmond into the most physically active community in the nation by leading the area in embracing and celebrating an active lifestyle. The Sports Backers produces the Monument Avenue 10K, Richmond, Virginia's biggest running event of the year that takes place on the city's most iconic street. Sports Backers delivers other running, cycling and extreme sports events throughout the year.</p>
					<p><a href="#">Find out more about their events »</a></p>
				</div>
			</div>
			<div class="col-sm-4 tabBox">
				<a href="#"><img border="0" alt="Race IT News" src="<?php echo get_template_directory_uri() ?>/images/featured/news-feature-img.jpg"></a>
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
				<a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/featured/pt-newletter-img.jpg" alt="Race IT Newsletter" border="0"></a>
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
			<div class="col-xs-6 col-sm-6 col-md-3">
				<div class="event">
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/featured/rnrsf-event-img.jpg" alt="event image" border="0"></a>
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

			<div class="col-xs-6 col-sm-6 col-md-3">
				<div class="event">
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/featured/laurenskids-event-img.jpg" alt="event image" border="0"></a>
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

			<div class="col-xs-6 col-sm-6 col-md-3">
				<div class="event">
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/featured/monument10k-event-img.jpg" alt="event image" border="0"></a>
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

			<div class="col-xs-6 col-sm-6 col-md-3">
				<div class="event">
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/featured/challengeknoxville-event-img.jpg" alt="event image" border="0"></a>
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


	<?php get_footer();?>