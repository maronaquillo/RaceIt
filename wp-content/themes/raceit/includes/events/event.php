
<?php 
    $user_ID = get_current_user_id();
    $event_table = $wpdb->prefix . 'events';
    $event_list = $wpdb->get_results( "SELECT `event_id`,`event_name` FROM $event_table WHERE `event_organizer` = $user_ID ORDER BY `event_id` DESC");
?>
<h1>My Event Beta</h1>
<div id="event-form">
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
            <li><a href="?action=create" class="btn btn-primary">Create Event</a></li>
            <!-- <li><a href="#">Create Membership</a></li>
            <li><a href="#">Create Volunteer</a></li> -->
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
            <strong>Sort By</strong>
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

    <div class="panel panel-default event-list">
        <div class="panel-heading">My Events</div>
        <div class="panel-body">
            <ul class="list-group">

                <?php 
                    foreach ( $event_list as $event ):
                    $event_link = WP_SITEURL . '/events/?action=edit&eventid=' . $event->event_id; 
                ?>
                    
                    <li class="list-group-item">
                        <a href="<?php echo $event_link ?>"><?php echo $event->event_name ?></a>
                        <div class="pull-right action-buttons">
                            <a href="<?php echo $event_link ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="#" data-id="<?php echo $event->event_id?>" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                    </li>

                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>