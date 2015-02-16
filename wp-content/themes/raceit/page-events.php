<?php 

	get_header();
	$action = $_GET['action'];

?>

<section id="event_form">
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<div class="admin-tab clearfix">
				<h1>John Doe's Events</h1>
				<a href="#" class="edit-profile">Edit Profile</a>
				<div class="admin-nav">
					<ul>
			            <li id="participant_link_tab">
			            	<a href="#participant" data-toggle="tab" alt="My Events/Participant" id="participant_link">Participant</a>
			            </li>
			            <li id="organizer_link_tab" class="active">
			            	<a href="#organizer" data-toggle="tab" alt="My Events/Organizer" id="organizer_link">Organizer</a>
			            </li>
	               	</ul>
				</div>
			</div>

			<div class="admin-tab-content tab-content">
				<div class="tab-pane fade in active" id="organizer">
					<?php get_template_part( 'includes/events/event', $action ); ?>
				</div>
				<div class="tab-pane fade" id="participant">
					<h1>My Event Participants</h1>
				</div>
			</div> <!-- END .admin-content-tab -->
		</div>
	</div>
</section>

<?php get_footer(); ?>