<?php get_header(); ?>

<section id="event_form">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="admin-tab-content tab-content clearfix">
				<ol class="breadcrumb">
					<li><a href="<?php echo( site_url() ); ?>">Home</a></li>
				  	<li><a href="<?php echo( site_url('/events') ); ?>">Event Dashboard</a></li>
				  	<li class="active">Edit Profile</li>
				</ol>
				<div class="tab-pane fade in active" id="profile">
					<?php echo do_shortcode('[pie_register_profile]'); ?>
				</div>
			</div> <!-- END .admin-content-tab -->
		</div>
	</div>
</section>

<?php get_footer(); ?>	