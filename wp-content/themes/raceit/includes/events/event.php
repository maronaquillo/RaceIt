
<?php
   
    $query = $_GET['q']? "AND event_name LIKE '%". $_GET['q'] ."%'" : "";

    $show = "";
    switch ($_GET['show']) {
        case 'current':
            $show = " AND DATE(event_date) = '". date('Y-m-d') ."'";
            break;
        case 'past':
            $show = " AND DATE(event_date) < '". date('Y-m-d') ."'";
            break;
        case 'future':
            $show = " AND DATE(event_date) > '". date('Y-m-d') ."'";
            break;
        
        default:
            $show = "";
            break;
    }

    $sort = "";
    switch ($_GET['sortby']) {
        case 'date_asc':
            $sort = " ORDER BY `event_date` ASC";
            break;
        case 'name_desc':
            $sort = " ORDER BY `event_name` DESC";
            break;
        case 'name_asc':
            $sort = " ORDER BY `event_name` ASC";
            break;
            
        case 'date_desc':
        default:
            $sort = " ORDER BY `event_date` DESC";
            break;
    }


    $user_ID = get_current_user_id();
    $event_table = $wpdb->prefix . 'events';
    $event_list = $wpdb->get_results( "SELECT `event_id`,`event_name` FROM $event_table WHERE `event_organizer` = $user_ID " . $query . $show . $sort);

?>
<h1>Event Dashboard</h1>
<div id="event-form">
	<div class="myEvents-search">
        <!-- <div id="orgSectionHeader">
            <input type="text" class="edit-input ui-autocomplete-input" id="OrgSearch" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" value="Organization Search">
        </div> -->
        <div id="eventTD">
            <form>
                <input name="q" value="<?php echo $_GET['q']?>" type="text" id="EventSearch" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" placeholder="Event Search">
            </form>
        </div>
        <div class="fieldhint">
            Use the enter key to submit your search
        </div>
    </div>

    <ul class="create-links">
        <li><a href="?action=create" class="btn btn-primary">Create Event</a></li>
        <!-- <li><a href="#">Create Membership</a></li>
        <li><a href="#">Create Volunteer</a></li> -->
    </ul>

    <div class="panel panel-default event-list" id="events">
        <div class="panel-heading clearfix">
            <h3>My Events</h3>
            <div class="sort-option">
                <form>
                    <div class="sortTools">
                        <strong>Show</strong>
                        <select name="show" style="width:125px;">
                            <option value="">All Events</option>
                            <?php 
                                $show_list = array(
                                        'current'   => 'Current Events',
                                        'future'    => 'Future Events',
                                        'past'      => 'Past Events'
                                    );
                                foreach ($show_list as $show => $value) {
                                    $selected = $_GET['show'] == $show ? "selected" : "";
                                    echo( "<option value='{$show}' $selected>$value</option>");
                                }

                            ?>

                        </select>
                        <strong>Sort By</strong>
                        <select name="sortby" id="" style="width:146px;">
                            <?php 
                                $sort_list = array(
                                        'date_desc'   => 'Date (Latest)',
                                        'date_asc'    => 'Date (Earliest)',
                                        'name_asc'    => 'Event Name (A-Z)',
                                        'name_desc'   => 'Event Name (Z-A)'

                                    );
                                foreach ($sort_list as $sort => $value) {
                                    $selected = $_GET['sortby'] == $sort ? "selected" : "";
                                    echo( "<option value='{$sort}' $selected>$value</option>");
                                }

                            ?>
                        </select>
                        <input type="submit" class="btn btn-primary btn-sort" value="Go" />
                    </div>
                </form>
            </div>
        </div>
        <div class="panel-body">
            <ul class="list-group">

                <?php 
                    foreach ( $event_list as $event ):
                    $event_link = WP_SITEURL . '/events/?action=edit&eventid=' . $event->event_id;
                    $participant_link = WP_SITEURL . '/events/?action=view&eventid=' . $event->event_id;
                ?>
                    
                    <li class="list-group-item">
                        <a href="<?php echo $event_link ?>"><?php echo $event->event_name ?></a>
                        <div class="pull-right action-buttons">
                            <a href="<?php echo $event_link ?>" title="Edit Event"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="<?php echo $participant_link ?>" title="View Participants"><span class="glyphicon glyphicon-user"></span></a>
                            <a href="#" data-id="<?php echo $event->event_id?>" title="Delete Event" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                    </li>

                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>