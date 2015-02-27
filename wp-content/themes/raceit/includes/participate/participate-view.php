<?php if( $_GET['added'] && $_GET['added'] == 1 ) :?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      You've Successfully Joined to an Event!
    </div>
<?php endif; ?>
<?php if( isset($_GET['eventid']) && $_GET['eventid'] ): ?>
    <?php
        global $TIMEZONE, $STATE, $COUNTRY;

        $event_table = $wpdb->prefix . "events";
        $event_type_table = $wpdb->prefix . "event_types";
        $user_table = $wpdb->prefix . "users";
        $event_id = $_GET['eventid'];
        $user_id = get_current_user_id();

        $event = $wpdb->get_row( "SELECT * 
                                  FROM $event_table e 
                                    JOIN $event_type_table et 
                                        ON e.event_type = et.event_type_id
                                    JOIN $user_table u 
                                        ON e.event_organizer = u.ID
                                  AND e.event_id = $event_id" );
    ?>
    <ol class="breadcrumb">
      <li><a href="<?php echo( site_url() ); ?>">Home</a></li>
        <li><a href="<?php echo( site_url('/participate/?action=view') ); ?>">Your Dashboard</a></li>
        <li class="active">Event Details</li>
    </ol>
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
                        <td><strong><?php echo( date('F d, Y g:i A', strtotime( $event->event_date ) ) );?></strong></td>
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
       
    $participant_table = $wpdb->prefix . 'participants';
    $event_table = $wpdb->prefix . 'events';

    $events = $wpdb->get_results( "SELECT e.event_id, e.event_name, e.event_date , p.participant_id
                                    FROM $participant_table as p JOIN $event_table as e
                                    ON p.event_id = e.event_id AND p.user_ID = $user_ID " . $query . $sort
                                     );
?>
    <ol class="breadcrumb">
        <li><a href="<?php echo( site_url() ); ?>">Home</a></li>
        <?php 
            $current_user   = wp_get_current_user();
            $role_name      = $current_user->roles[0];

            if ('participants' != $role_name):
        ?>
          <li><a href="<?php echo( site_url('/events') ); ?>">Event Dashboard</a></li>
        <?php endif; ?>
        
        <li class="active">Participated Events</li>
    </ol>
    <div class="myEvents-search">
        <div id="eventTD">
            <form target="<?php site_url( "/participate" );?>" method="GET" >
                <input type="hidden" name="action" value="view" />
                <input name="q" value="<?php echo $_GET['q']?>" type="text" id="EventSearch" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" placeholder="Event Search">
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
              <form>
                <input type="hidden" name="action" value="view" />
                <div class="sortTools">
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
                  </form>
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