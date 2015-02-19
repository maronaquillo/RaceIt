
<?php 
    $event_id = isset( $_GET['event_id'] ) && (int)$_GET['event_id'] ? (int)$_GET['event_id'] : 0;

    $event_table = $wpdb->prefix . 'events';
    $event_list = $wpdb->get_results( "SELECT `event_id`,`event_name` FROM $event_table WHERE `event_organizer` = 1 ORDER BY `event_id` DESC");
?>
<h1>Participant Information</h1>
<div id="event-form">
    <form method="post" action="<?php echo WP_SITEURL.'/participate/?event_id='.$event_id ?>">
    	<div class="myEvents-search">
            <div id="orgSectionHeader">
                <input type="text" class="edit-input ui-autocomplete-input" id="OrgSearch" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" value="First Name">
            </div>
            <div id="eventTD">
                <input type="text" id="EventSearch" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" value="Last Name">
            </div>
            <input type="hidden" name="event_id" value="<?php echo $event_id ?>" />

            <ul class="create-links">
                <li><input type="submit" class="btn btn-primary" value="Continue" /></li>
            </ul>
        </div>
    </form>
</div>