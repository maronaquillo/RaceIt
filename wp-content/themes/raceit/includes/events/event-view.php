
<?php 
    $user_ID = get_current_user_id();

    $event_ID = $_GET['eventid'];
    $event_table = $wpdb->prefix . 'events';
    $event = $wpdb->get_row("SELECT * FROM $event_table WHERE `event_id` = $event_ID ");
       
    $participant_table = $wpdb->prefix . 'participants';
    $participant_list = $wpdb->get_results( "SELECT * FROM $participant_table WHERE `user_id` = $user_ID ORDER BY `participant_id` DESC");
?>
    <div class="panel panel-default event-list">
        <div class="panel-heading clearfix">
            <h3><?php echo( ucwords($event->event_name) )?> Participants</h3>
            <div class="sort-option">
                <div class="sortTools">
                    <strong>Sort By</strong>
                    <select name="" id="" style="width:146px;">
                        <option selected="selected" value="Date_DESC">Date Registered (Latest)</option>
                        <option value="Date_ASC">Date Registered (Earliest)</option>
                        <option value="Event_Name_ASC">Participant Name (A-Z)</option>
                        <option value="Event_Name_DESC">Participant Name (Z-A)</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <ul class="list-group">

                <?php 
                    foreach ( $participant_list as $participant ):
                    $participant_link = WP_SITEURL . '/participate/?action=edit&participantid='. $participant->participant_id .'&userid='. $user_ID .'&eventid=' . $event->event_id;
                    $participant_name = ucwords( $participant->participant_first_name ) . " " . ucwords( $participant->participant_last_name );
                ?>
                    
                    <li class="list-group-item">
                        <a href="<?php echo $participant_link ?>"><?php echo $participant_name?></a>
                        <div class="pull-right action-buttons">
                            <a href="<?php echo $participant_link ?>" title="Edit Participant Details"><span class="glyphicon glyphicon-pencil"></span></a>
                        </div>
                    </li>

                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>