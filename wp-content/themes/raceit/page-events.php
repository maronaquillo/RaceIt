<?php 

	//Redirect if logged in user
    if ( ! is_user_logged_in() )
        wp_redirect( site_url('/login') ); exit();

    $user_ID = get_current_user_id();
    $user = new WP_User( $user_ID );

	if( !( $user->roles[0] == "administrator" || $user->roles[0] == "organizers" ) )
		wp_redirect( site_url() );
	
	$action = $_GET['action'];
	global $wpdb;

	// Create Event
	if( isset($_POST) && $_POST && $action == "create" ) {
		$FORM = array_map('htmlspecialchars',$_POST);
		$date = date( 'Y-m-d G:i:s', strtotime( $FORM['event_date'] ) );

		$data = $wpdb->insert(
		    $wpdb->prefix . 'events',
		    array(
		        'event_name'   		=>  $FORM['event_name'],
		        'event_date'  		=> 	$date,
		        'event_timezone'  	=>  $FORM['event_timezone'],
		        'event_location'  	=>  $FORM['event_location'],
		        'event_address1'  	=>  $FORM['event_address1'],
		        'event_address2'  	=>  $FORM['event_address2'],
		        'event_city'  		=>  $FORM['event_city'],
		        'event_state'  		=>  $FORM['event_state'],
		        'event_province'  	=>  $FORM['event_province'],
		        'event_postal'  	=>  $FORM['event_postal'],
		        'event_country'  	=>  $FORM['event_country'],
		        'event_shortname'  	=>  $FORM['event_shortname'],
		        'event_url'  		=>  $FORM['event_url'],
		        'event_description' =>  $FORM['event_description'],
		        'event_details'  	=>  $FORM['event_details'],
		        'event_organizer'  	=>  $user_ID,
		        'event_type'  		=>  $FORM['event_type'],
		        
		    ),
		    array( '%s', '%s', '%s', '%s','%s', '%s', '%s', '%s','%s', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%s' )
		);

		if( $data ) {
			$location = WP_SITEURL . '/events/?action=edit&added=1&eventid=' . $wpdb->insert_id ;
			wp_redirect( $location);
			exit();
		} else {
			echo "Unable to add Data <br>";
			echo $wpdb->last_error;
		}
		exit(0);
	}
	
	// Update Event
	if( isset($_POST) && $_POST && $action == "edit" ) {
		$FORM = array_map('htmlspecialchars',$_POST);
		$date = date( 'Y-m-d G:i:s', strtotime( $FORM['event_date'] ) );

		$data = $wpdb->update(
			$wpdb->prefix . 'events',
			array( 
				'event_name'   		=>  $FORM['event_name'],
		        'event_date'  		=> 	$date,
		        'event_timezone'  	=>  $FORM['event_timezone'],
		        'event_location'  	=>  $FORM['event_location'],
		        'event_address1'  	=>  $FORM['event_address1'],
		        'event_address2'  	=>  $FORM['event_address2'],
		        'event_city'  		=>  $FORM['event_city'],
		        'event_state'  		=>  $FORM['event_state'],
		        'event_province'  	=>  $FORM['event_province'],
		        'event_postal'  	=>  $FORM['event_postal'],
		        'event_country'  	=>  $FORM['event_country'],
		        'event_shortname'  	=>  $FORM['event_shortname'],
		        'event_url'  		=>  $FORM['event_url'],
		        'event_description' =>  $FORM['event_description'],
		        'event_details'  	=>  $FORM['event_details'],
		        'event_organizer'  	=>  1,
		        'event_type'  		=>  $FORM['event_type'],	
			), 
			array( 'event_id' => $FORM['event_id'] ), 
			array( '%s', '%s', '%s', '%s','%s', '%s', '%s', '%s','%s', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%s' ),
			array( '%d' ) 
		);

		if( $data ) {
			$location = WP_SITEURL . '/events/?action=edit&updated=1&eventid=' . $FORM['event_id'] ;
			wp_redirect( $location);
		} else {
			echo "Unable to Update Data <br>";
			echo $wpdb->last_error;
		}
		exit(0);

	}

	// Delete Event
	if( $_POST && $_POST['action'] == 'delete' ) {
		$eventid = $_POST['eventid'];
		$event_table = $wpdb->prefix . 'events';
		$current_user = get_current_user_id();
		$data['error'] = true;

		$delete = $wpdb->query( "DELETE FROM $event_table WHERE `event_id` = $eventid AND `event_organizer` = $current_user" );

		if( $delete ) {
			$data['error'] = false;
		} else {
			$data['msg'] = $wpdb->last_error;
		}

		echo json_encode($data);
		exit(0);
	}

	get_header();
	

?>

<section id="event_form">
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<div class="admin-tab clearfix">
				<h1><?php echo properize( $user->display_name ) ?> Events</h1>
				<a href="<?php echo( site_url('profile/?edit_user=' . $user_ID ) ); ?>" class="edit-profile">Edit Profile</a>
				<div class="admin-nav">
					<ul>
			            <li id="participant_link_tab">
			            	<a href="<?php echo(site_url( '/participate?action=view' )); ?>" data-toggle="" alt="My Events/Participant" id="participant_link">Participated Events</a>
			            </li>
			            <li id="organizer_tab" class="active">
			            	<a href="#organizer" data-toggle="tab" alt="My Events" id="organizer_link">Organizer</a>
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