<?php get_header(); ?>

<section id="event_form">
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<div class="admin-tab clearfix">
				<h1>Maron Aquillo's Events</h1>
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
					<h1>My Event Beta</h1>
					<form id="event-form">
						<div class="myEvents-search">
				            <div id="orgSectionHeader">
				                <input type="text" class="edit-input ui-autocomplete-input" id="OrgSearch" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" value="Organization Search">
				            </div>
				            <div id="eventTD">
				                <input type="text" id="EventSearch" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" value="Event Search">
				            </div>
				            <div class="fieldhint">
				                Use the enter key to submit your search</div>
				            <ul class="create-links">
				                <li><a href="#">Create Event</a></li>
				                <li><a href="#">Create Membership</a></li>
				                <li><a href="#">Create Volunteer</a></li>
				            </ul>
				        </div>
				        <div class="sort-option">
				        	<div class="sortTools">
			                    <strong>Show</strong>
			                    <select name=""  id="" style="width:125px;">
					            	<option selected="selected" value="CurrentEvents">Current Events</option>
					            	<option value="FutureEvents">Future Events</option>
					            	<option value="PastEvents">Past Events</option>
					            	<option value="ArchivedEvents">Archived Events</option>

					            </select>
		                        <strong>Sort By</strong>&nbsp;
		                        <select name="" id="" style="width:146px;">
					            	<option selected="selected" value="Date_DESC">Date (Latest)</option>
					            	<option value="Date_ASC">Date (Earliest)</option>
					            	<option value="Event_Name_ASC">Event Name (A-Z)</option>
					            	<option value="Event_Name_DESC">Event Name (Z-A)</option>
					            	<option value="Organization_ASC">Organization (A-Z)</option>
					            	<option value="Organization_DESC">Organization (Z-A)</option>
					            </select>
				            </div>
				        </div>
				    </form>
				</div>
				<div class="tab-pane fade" id="participant">
					<h1>My Event Participants</h1>
				</div>
			</div> <!-- END .admin-content-tab -->
		</div>
	</div>
</section>

<?php get_footer();?>