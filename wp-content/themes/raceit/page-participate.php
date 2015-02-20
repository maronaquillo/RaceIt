<?php 	

	$action = $_GET['action'];
	global $wpdb;
	$user_id = 0;

	$current_user_ID = get_current_user_id();

	// Create Event
	if( isset($_POST) && $_POST && $action == "create" ) {
		$FORM = array_map('htmlspecialchars',$_POST);

		// User not logged, create new user account
		if( !$current_user_ID ) {
			$userdata = array(
			        'user_login'   		=>  $FORM['user_login'],
			        'user_pass'   		=> 	$FORM['user_pass'],
			        'user_nicename'		=> 	$FORM['user_login'],
			        'user_email'   		=>  $FORM['participant_email'],
			        'display_name'		=>	$FORM['participant_first_name'] . " " . $FORM['participant_last_name'],
			        'role'		  		=> 'participants'
			);

			$user_id = wp_insert_user( $userdata );

			$creds = array();
			$creds['user_login'] = $FORM['user_login'];
			$creds['user_password'] = $FORM['user_pass'];
			$creds['remember'] = true;
			$user = wp_signon( $creds, false );
			if ( is_wp_error($user) )
				echo $user->get_error_message();
		}

		if( (int)$user_id ) {
			
			$date = date( 'Y-m-d G:i:s', strtotime( $FORM['participant_birthdate'] ) );
			$data = $wpdb->insert(
			    $wpdb->prefix . 'participants',
			    array(
			        'participant_first_name'   		=>  $FORM['participant_first_name'],
			        'participant_last_name'   		=>  $FORM['participant_last_name'],
			        'participant_email'  			=>  $FORM['participant_email'],
			        'participant_address1'  		=>  $FORM['participant_address1'],
			        'participant_address2'  		=>  $FORM['participant_address2'],
			        'participant_city'  			=>  $FORM['participant_city'],
			        'participant_state'  			=>  $FORM['participant_state'],
			        'participant_phone'  			=> 	$FORM['participant_phone'],
			        'participant_birthdate'  		=> 	$date,
			        'participant_econtact_name'   	=>  $FORM['participant_econtact_name'],	
			        'participant_econtact_number'   =>  $FORM['participant_econtact_number'],
			        'event_id'  					=>  4,
			        'user_id'						=>	$user_id
			    ),
			    array( '%s','%s','%s','%s','%s','%s','%d','%s','%s','%s','%d' )
			);
		}
		if( $data ) {

			$location = WP_SITEURL . '/participate/?action=edit&added=1&participantid=' . $wpdb->insert_id ;
			wp_redirect( $location);
		} else {
			echo "Unable to add Data <br>";
			echo $wpdb->last_error;
		}
		exit(0);
	}
	
	// Update Event
	if( isset($_POST) && $_POST && $action == "edit" ) {
		$FORM = array_map('htmlspecialchars',$_POST);
		$date = date( 'Y-m-d G:i:s', strtotime( $FORM['participant_birthdate'] ) );

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
			<div class="admin-tab-content tab-content">
				<div class="tab-pane fade in active" id="organizer">
					<?php get_template_part( 'includes/participate/participate', $action ); ?>
				</div>
			</div> <!-- END .admin-content-tab -->
		</div>
	</div>
</section>

<?php get_footer(); ?>