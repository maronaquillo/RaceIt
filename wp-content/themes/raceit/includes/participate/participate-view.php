<?php if( isset($_GET['eventid']) && $_GET['eventid'] ): ?>
    <?php
        global $TIMEZONE, $STATE, $COUNTRY;

        $event_table = $wpdb->prefix . "events";
        $event_type_table = $wpdb->prefix . "event_types";
        $user_table = $wpdb->prefix . "users";
        $event_id = $_GET['eventid'];
        $event = $wpdb->get_row( "SELECT * 
                                  FROM $event_table e 
                                    JOIN $event_type_table et 
                                        ON e.event_type = et.event_type_id
                                    JOIN $user_table u 
                                        ON e.event_organizer = u.ID
                                  AND e.event_id = $event_id" );
    ?>
    <div class="panel panel-default event-details">
        <div class="panel-heading clearfix">
            <h3> <?php echo $event->event_name ?> </h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Date:</td>
                        <td><strong><?php echo( date('F d, Y g:i A', mktime( $event->event_date ) ) );?></strong></td>
                      </tr>
                      <tr>
                        <td>Timezone:</td>
                        <td><strong><?php echo $TIMEZONE[$event->event_timezone]?></strong></td>
                      </tr> 
                      <tr>
                        <td>Location:</td>
                        <td><strong><?php echo $event->event_location?></strong></td>
                      </tr>
                      <tr>
                        <td>Address 1:</td>
                        <td><strong><?php echo $event->event_address1?></strong></td>
                      </tr>
                      <tr>
                        <td>Address 2:</td>
                        <td><strong><?php echo $event->event_address2?></strong></td>
                      </tr>
                      <tr>
                        <td>City:</td>
                        <td><strong><?php echo $event->event_city?></strong></td>
                      </tr>
                      <tr>
                        <td>State:</td>
                        <td><strong><?php echo $STATE[$event->event_state] ?></strong></td>
                      </tr>
                      <tr>
                        <td>Province:</td>
                        <td><strong><?php echo $event->event_province?></strong></td>
                      </tr>
                      <tr>
                        <td>Postal:</td>
                        <td><strong><?php echo $event->event_postal?></strong></td>
                      </tr>
                      <tr>
                        <td>Country:</td>
                        <td><strong><?php echo $COUNTRY[$event->event_country] ?></strong></td>
                      </tr>
                      <tr>
                        <td>URL:</td>
                        <td><a href="<?php echo $event->event_url?>" target="_blank" style="font-size: 12px;color:blue;"><strong><?php echo $event->event_url?></strong></a></td>
                      </tr>
                      <tr>
                        <td>Event Organizer:</td>
                        <td><strong><?php echo $event->display_name?></strong></td>
                      </tr>
                      <tr>
                        <td>Type:</td>
                        <td><strong><?php echo $event->event_type_name?></strong></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-md-6">
                <img src="http://placehold.it/500x500&text=Event Image Here" />
            </div>
        </div>
        

    </div>
<?php else: ?> 
<?php 
    $query = $_GET['q']? "AND event_name LIKE '%". $_GET['q'] ."%'" : "";
    $user_ID = get_current_user_id();
       
    $participant_table = $wpdb->prefix . 'participants';
    $event_table = $wpdb->prefix . 'events';

    $events = $wpdb->get_results( "SELECT e.event_id, e.event_name, e.event_date , p.participant_id
                                    FROM $participant_table as p JOIN $event_table as e
                                    ON p.event_id = e.event_id " . $query .
                                    " ORDER BY p.participant_id DESC" );
?>
    <div class="myEvents-search">
        <div id="eventTD">
            <form target="<?php site_url( "/participate" );?>" method="GET" >
                <input name="q" value="<?php echo $_GET['q']?>" type="text" id="EventSearch" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" placeholder="Event Search">
                <input type="hidden" name="action" value="view" />
            </form>
        </div>
        <div class="fieldhint">
            Use the enter key to submit your search
        </div>
    </div>

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
                    $event_link = WP_SITEURL . '/participate/?action=view&eventid='. $event->event_id;
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
<?php endif; ?> 