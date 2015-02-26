
<?php 
    $current_user_ID = get_current_user_id(); 
    $user = new WP_User( $current_user_ID );
    
    if( isset(  $_GET['eventid'] ) &&  $_GET['eventid'] ) :
        $event_ID = $_GET['eventid'];

        $info = $wpdb->get_row( "SELECT * FROM ". $wpdb->prefix ."participants
                                 WHERE user_id = $current_user_ID 
                                " );

        $has_event = $wpdb->get_row( "SELECT * FROM ". $wpdb->prefix ."participants
                                      WHERE event_id = $event_ID AND user_id = $current_user_ID
                                    " );
    if( $has_event ):
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  You are already registered in this event!.
</div>
<?php else: ?>
    
<h1>Participant Information</h1>
<div id="participant-form">
        <div class="participant-">
            <div class="row">
                <div class="col-md-7 form-fields">
                    <form method="post" action="<?php echo WP_SITEURL.'/participate/?action=create' ?>">
                        <?php if( !$current_user_ID ): ?>
                            <fieldset>  
                                <legend>Create User Login</legend>
                                <div class="form-group">
                                    <label for="user_login"> <span class="required">*</span>Username:</label>
                                    <input required type="text" class="form-control" name="user_login" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="user_pass"> <span class="required">*</span>Password:</label>
                                    <input required type="password" class="form-control" name="user_pass" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="user_pass2"> <span class="required">*</span>Retype Password:</label>
                                    <input required type="password" class="form-control" name="user_pass2" placeholder="">
                                </div>
                            </fieldset>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="participant_first_name"><span class="required">*</span>First Name:</label>
                            <input required type="text" class="form-control" name="participant_first_name" value="<?php echo($info->participant_first_name) ?>">
                        </div>
                        <div class="form-group">
                            <label for="participant_last_name"> <span class="required">*</span>Last Name:</label>
                            <input required type="text" class="form-control" name="participant_last_name" value="<?php echo($info->participant_last_name) ?>">
                        </div>
                        <div class="form-group">
                            <label for="participant_email"> <span class="required">*</span>Email Address:</label>
                            <input required type="email" class="form-control" name="participant_email" value="<?php echo($info->participant_email) ?>">
                        </div>
                        <div class="form-group">
                            <label for="participant_email_address2"> <span class="required">*</span>Retype Email Address:</label>
                            <input required type="email" class="form-control" name="participant_email_address2">
                        </div>
                        
                        
                        <fieldset>
                            <legend>Participant Address</legend>
                            <div class="form-group">
                                <label for="participant_address1"><span class="required">*</span>Address Line 1:</label>
                                <input required type="text" class="form-control" name="participant_address1" value="<?php echo($info->participant_address1) ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_address2">Address Line 2:</label>
                                <input required type="text" class="form-control" name="participant_address2" value="<?php echo($info->participant_address2) ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_city"><span class="required">*</span>City:</label>
                                <input required type="text" class="form-control" name="participant_city" value="<?php echo($info->participant_city) ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_state">State:</label>
                                <select class="form-control" name="participant_state">
                                    <?php showSelected( getSnippet('state'), $info->participant_state ); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="participant_phone">Phone Number:</label>
                                <input type="text" class="form-control" name="participant_phone" value="<?php echo($info->participant_phone) ?>">
                                <p class="desc">(Example: 555-555-5555)</p>
                            </div>
                            <div class="form-group">
                                <label for="participant_birthdate"><span class="required">*</span>Birthdate:</label>
                                <input required type="date" class="form-control" name="participant_birthdate" value="<?php echo($info->participant_birthdate) ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_econtact_name"><span class="required">*</span>Emergency Contact Name:</label>
                                <input required type="text" class="form-control" name="participant_econtact_name" value="<?php echo($info->participant_econtact_name) ?>">
                            </div>
                            <div class="form-group">
                                <label for="participant_econtact_number"><span class="required">*</span>Emergency Contact Number:</label>
                                <input required type="text" class="form-control" name="participant_econtact_number" value="<?php echo($info->participant_econtact_number) ?>">
                            </div>
                        </fieldset>
                        <input type="hidden" name="event_id" value="<?php echo $event_ID ?>">
                        <button type="submit" class="btn btn-primary btn-participant">Continue</button>
                    </form>
                </div>
                <div class="col-md-5 form-login">
                    <div class="wrap"> 
                        <?php if( !$current_user_ID ): ?>
                            <h2>Optional RaceIt Account</h2>
                            <?php $args2 = array(
                                    'echo'           => true,
                                    'redirect'       => site_url('participate/?action=create'), 
                                    'form_id'        => 'participant_form_login',
                                    'label_username' => __( 'Username' ),
                                    'label_password' => __( 'Password' ),
                                    'label_remember' => __( 'Remember Me' ),
                                    'label_log_in'   => __( 'Log In' ),
                                    'id_username'    => 'participant_login',
                                    'id_password'    => 'participant_pass',
                                    'id_remember'    => 'rememberme',
                                    'id_submit'      => 'participant_submit',
                                    'remember'       => false,
                                    'value_username' => NULL,
                                    'value_remember' => false
                            ); ?> 
                            <?php wp_login_form( $args2 ); ?> 
                            <a href="<?php echo wp_lostpassword_url(); ?>" class="lost-password" title="Lost Password">Forgot Password</a>
                        <?php else: ?>
                            <h2>Hi <?php echo( ucwords( $user->display_name ) . "!" ); ?></h2>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
   
</div>
<?php endif; ?>
<?php else: ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      Sorry! No Event Found.
    </div>
<?php endif;?>