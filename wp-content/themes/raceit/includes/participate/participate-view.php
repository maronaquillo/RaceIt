    
<?php 
    $user_ID = get_current_user_id();
       
    $participant_table = $wpdb->prefix . 'participants';
    $event_table = $wpdb->prefix . 'events';

    $events = $wpdb->get_results( "SELECT e.event_id, e.event_name, e.event_date , p.participant_id
                                    FROM $participant_table as p JOIN $event_table as e
                                    ON p.event_id = e.event_id 
                                    ORDER BY p.participant_id DESC" );
?>
    <div class="panel panel-default event-list">
        <div class="panel-heading clearfix">
            <h3> Participated Events </h3>
            <div class="sort-option">
                <div class="sortTools">
                    <strong>Sort By</strong>
                    <select name="" id="" style="width:146px;">
                        <option selected="selected" value="Date_DESC">Date (Latest)</option>
                        <option value="Date_ASC">Date (Earliest)</option>
                        <option value="Event_Name_ASC">Event Name (A-Z)</option>
                        <option value="Event_Name_DESC">Event Name (Z-A)</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <ul class="list-group">

                <?php 
                    foreach ( $events as $event ):
                    $event_link = WP_SITEURL . '/events/?action=view&eventid='. $event->event_id;
                    $participant_name = ucwords( $participant->participant_first_name ) . " " . ucwords( $participant->participant_last_name );
                ?>
                    
                    <li class="list-group-item">
                        <a href="<?php echo $event_link ?>"><?php echo( ucwords($event->event_name) ) ?></a>
                        <div class="pull-right action-buttons">
                            <a href="<?php echo $event_link ?>" title="View Event Details"><span class="glyphicon glyphicon-eye-open"></span></a>
                        </div>
                    </li>

                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>