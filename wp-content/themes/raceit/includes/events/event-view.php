
<?php 
    global $STATE;
    $query = $_GET['q']? "AND participant_first_name LIKE '%". $_GET['q'] ."%' OR participant_last_name LIKE '%". $_GET['q'] ."%'" : "";
    $user_ID = get_current_user_id();

    $sort = "";
    switch ($_GET['sortby']) {
        case 'date_asc':
            $sort = " ORDER BY `user_registered` ASC";
            break;
        case 'name_desc':
            $sort = " ORDER BY `participant_first_name` DESC";
            break;
        case 'name_asc':
            $sort = " ORDER BY `participant_first_name` ASC";
            break;

        case 'date_desc':
        default:
            $sort = " ORDER BY `user_registered` DESC";
            break;
    }

    $event_ID = $_GET['eventid'];
    $event_table = $wpdb->prefix . 'events';
    $user_table  = $wpdb->prefix . 'users';
    $participant_table = $wpdb->prefix . 'participants';

    $event = $wpdb->get_row("SELECT * FROM $event_table WHERE `event_id` = $event_ID ");
       
    $participant_list = $wpdb->get_results( "SELECT * 
                                             FROM $participant_table p JOIN  $user_table u
                                             ON p.user_id = u.ID AND `event_id` = $event_ID ". $query . $sort
                                            );
    
    if( isset($_GET['participantid']) && $_GET['participantid'] ){
        $participant_id = $_GET['participantid'];

        $participant_details = $wpdb->get_row( "SELECT * 
                                                    FROM $participant_table
                                                    WHERE participant_id = $participant_id"
                                                );
    }

    if( $participant_details ):

?>

<ol class="breadcrumb">
    <li><a href="<?php echo( site_url() ); ?>">Home</a></li>
    <li><a href="<?php echo( site_url('/events') ); ?>">Event Dashboard</a></li>
    <li><a href="<?php echo( site_url('/events/?action=view&eventid=' . $_GET['eventid']) ); ?>">Event Participant</a></li>
    <li class="active"><?php echo ucfirst( properize($participant_details->participant_first_name) ) ?> Profile</li>
</ol>
<div class="panel panel-default event-details">
    <div class="panel-heading clearfix">
        <h3> <?php echo ucfirst( properize($participant_details->participant_first_name) ) ?> Profile </h3>
    </div>
    <div class="row">
        <div class="col-md-6">  
            <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Full Name:</td>
                    <td><strong><?php echo ucwords( $participant_details->participant_first_name . " " . $participant_details->participant_last_name ) ?></strong></td>
                  </tr>
                  <tr>
                    <td>Email Address:</td>
                    <td><strong><?php echo $participant_details->participant_email ?></strong></td>
                  </tr> 
                  <tr>
                    <td>Address 1:</td>
                    <td><strong><?php echo $participant_details->participant_address1?></strong></td>
                  </tr>
                  <tr>
                    <td>Address 2:</td>
                    <td><strong><?php echo $participant_details->participant_address2?></strong></td>
                  </tr>
                  <tr>
                    <td>City:</td>
                    <td><strong><?php echo $participant_details->participant_city?></strong></td>
                  </tr>
                  <tr>
                    <td>State:</td>
                    <td><strong><?php echo $STATE[$participant_details->participant_state] ?></strong></td>
                  </tr>
                  <tr>
                    <td>Birthdate:</td>
                    <td><strong><?php echo( date('F d, Y', strtotime( $participant_details->participant_birthdate ) ) );?></strong></td>
                  </tr>
                  <tr>
                    <td>Emergency Contact Name:</td>
                    <td><strong><?php echo $participant_details->participant_econtact_name?></strong></td>
                  </tr>
                  <tr>
                    <td>Emergency Contact Number:</td>
                    <td><strong><?php echo $participant_details->participant_econtact_number?></strong></td>
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
    <ol class="breadcrumb">
        <li><a href="<?php echo( site_url() ); ?>">Home</a></li>
        <li><a href="<?php echo( site_url('/events') ); ?>">Event Dashboard</a></li>
        <li class="active">Event Participant</li>
    </ol>
    <div class="myEvents-search">
        <div id="eventTD">
            <form target="<?php site_url( "/events" );?>" method="GET" >
                <input type="hidden" name="action" value="view" />
                <input type="hidden" name="eventid" value="<?php echo $event_ID ?>">
                <input name="q" value="<?php echo $_GET['q']?>" type="text" id="EventSearch" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" placeholder="Participant Search">
            </form>
        </div>
        <div class="fieldhint">
            Use the enter key to submit your search
        </div>
    </div>

    <div class="panel panel-default event-list">
        <div class="panel-heading clearfix">
            <h3><?php echo( ucwords($event->event_name) )?> Participants</h3>
            <div class="sort-option">
                <form target="<?php site_url( "/events" );?>" method="GET" >
                    <div class="sortTools">
                        <strong>Sort By</strong>
                        <input type="hidden" name="action" value="view" />
                        <input type="hidden" name="eventid" value="<?php echo $event_ID ?>">

                        

                        <select name="sortby" id="" style="width:146px;">
                           <?php 
                               $sort_list = array(
                                       'date_desc'   => 'Date Registered (Latest)',
                                       'date_asc'    => 'Date Registered (Earliest)',
                                       'name_asc'    => 'Participant Name (A-Z)',
                                       'name_desc'   => 'Participant Name (Z-A)'

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
                    foreach ( $participant_list as $participant ):
                    $participant_link = WP_SITEURL . '/events/?action=view&eventid=' . $event->event_id . '&participantid='. $participant->participant_id;
                    $participant_name = ucwords( $participant->participant_first_name ) . " " . ucwords( $participant->participant_last_name );
                ?>
                    
                    <li class="list-group-item">
                        <a href="<?php echo $participant_link ?>"><?php echo $participant_name?></a>
                        <div class="pull-right action-buttons">
                            <a href="<?php echo $participant_link ?>" title="Edit Participant Details"><span class="glyphicon glyphicon-eye-open"></span></a>
                        </div>
                    </li>

                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>