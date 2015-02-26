<?php if( $_GET['added'] && $_GET['added'] == 1 ) :?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      You've Successfully Joined to an Event!
    </div>
<?php endif; ?>

<?php if( $_GET['updated'] && $_GET['updated'] == 1 ) :?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      You've Successfully Updated your Information!
    </div>
<?php endif; ?>
<?php 
    $participant_table = $wpdb->prefix . 'participants';
    $user_id = get_current_user_id();
    $data = $wpdb->get_row( "SELECT * FROM $participant_table WHERE user_id = $user_id" );
    $event_ID = $_GET['eventid'];


    $birthdate = date('Y-m-d',strtotime($data->participant_birthdate));
?>

<?php if( ! $data ): ?>

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Opps! Profile Not Found
</div>

<?php else: ?>
<ol class="breadcrumb">
  <li><a href="<?php echo( site_url() ); ?>">Home</a></li>
    <li><a href="<?php echo( site_url('/participate/?action=view') ); ?>">Your Dashboard</a></li>
    <li class="active">Edit Profile</li>
</ol>
<h1>Participant Information</h1>
<div id="participant-form">
    	<div class="participant-">
            <div class="row">
                <div class="col-md-6 form-fields">
                    <form method="post" action="<?php echo WP_SITEURL.'/participate/?action=edit' ?>">
                        <div class="form-group">
                            <label for="participant_first_name"><span class="required">*</span>First Name:</label>
                            <input required type="text" class="form-control" name="participant_first_name" value="<?php echo $data->participant_first_name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="participant_last_name"> <span class="required">*</span>Last Name:</label>
                            <input required type="text" class="form-control" name="participant_last_name" value="<?php echo $data->participant_last_name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="participant_email_address"> <span class="required">*</span>Email Address:</label>
                            <input required type="email" class="form-control" name="participant_email" value="<?php echo $data->participant_email; ?>">
                        </div>
                        <div class="form-group">
                            <label for="participant_email_address2"> <span class="required">*</span>Retype Email Address:</label>
                            <input required type="email" class="form-control" name="participant_email_address2">
                        </div>
                    </div>
                    <div class="col-md-6 form-fields">    
                        <fieldset>
                            
                            <div class="form-group">
                                <label for="participant_address1"><span class="required">*</span>Address Line 1:</label>
                                <input required type="text" class="form-control" name="participant_address1" value="<?php echo $data->participant_address1; ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_address2">Address Line 2:</label>
                                <input required type="text" class="form-control" name="participant_address2" value="<?php echo $data->participant_address2; ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_city"><span class="required">*</span>City:</label>
                                <input required type="text" class="form-control" name="participant_city" value="<?php echo $data->participant_city; ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_state">State:</label>
                                <select class="form-control" name="participant_state">
                                    <?php showSelected( getSnippet('state'), $data->participant_state ); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="participant_phone">Phone Number:</label>
                                <input type="text" class="form-control" name="participant_phone" value="<?php echo $data->participant_phone; ?>">
                                <p class="desc">(Example: 555-555-5555)</p>
                            </div>
                            <div class="form-group">
                                <label for="participant_birthdate"><span class="required">*</span>Birthdate:</label>
                                <input required type="date" class="form-control" name="participant_birthdate" value="<?php echo $birthdate; ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_econtact_name"><span class="required">*</span>Emergency Contact Name:</label>
                                <input required type="text" class="form-control" name="participant_econtact_name" value="<?php echo $data->participant_econtact_name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_econtact_number"><span class="required">*</span>Emergency Contact Number:</label>
                                <input required type="text" class="form-control" name="participant_econtact_number" value="<?php echo $data->participant_econtact_number; ?>">
                            </div>
                        </fieldset>
                        <input type="hidden" name="event_id" value="<?php echo $event_ID ?>">
                        <input type="hidden" name="participant_id" value="<?php echo $participant_id ?>">
                        <button type="submit" class="btn btn-primary btn-participant">Update</button>
                    </form>
                </div>
            </div>
            
            
        </div>
   
</div>
<?php endif; ?>