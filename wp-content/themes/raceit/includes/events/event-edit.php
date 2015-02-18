<?php if( $_GET['added'] && $_GET['added'] == 1 ) :?>
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  You've Successfully Added an Event!
	</div>
<?php endif; ?>

<?php if( $_GET['updated'] && $_GET['updated'] == 1 ) :?>
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  You've Successfully Updated an Event!
	</div>
<?php endif; ?>
<?php 
	$event_table = $wpdb->prefix . 'events';
	$event_id = $_GET['eventid'];
	$data = $wpdb->get_row( "SELECT * FROM $event_table WHERE event_id = $event_id" );

	$date = date('Y-m-d\TG:i:s',strtotime($data->event_date));

?>


<h1>Update Event <i>* Required Fields</i></h1>

<form id="create-event" method="post" action="<?php echo WP_SITEURL . '/events/?action=edit' ?>">
	<input type="hidden" name="event_id" value="<?php echo $event_id ?>">
	<h3>Event Information</h3>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
		    	<label for="event_name">Event Name: <span class="required">*</span></label>
		    	<input required type="text" class="form-control" name="event_name" value="<?php echo $data->event_name; ?>">
		  	</div>
		  	<div class="form-group">
		    	<label for="event_date">Start date and time: <span class="required">*</span></label>
		    	<input placeholder="yyy-mm-ddThh:mm:ss" required type="datetime-local" name="event_date" class="form-control" value="<?php echo $date ?>" >
		  	</div>
		  	<div class="form-group">	
		    	<label for="event_timezone">Event time zone : <span class="required">*</span></label>
		    	<select class="form-control" name="event_timezone">
		    		<?php showSelected( getSnippet('timezone'),$data->event_timezone ) ?>
		    	</select>
		  	</div>
		  	<div class="form-group">
		    	<label for="event_type">Event Type: <span class="required">*</span></label>
		    	<select class="form-control" name="event_type" placeholder="">
					<?php showSelected( getSnippet('event-type'),$data->event_type ) ?>
		    	</select>
		  	</div>
		</div>
		<div class="col-md-6">
			<h4>Start location</h4>
			<div class="form-group">
		    	<label for="event_location">Event Location: <span class="required">*</span></label>
		    	<input required type="text" class="form-control" name="event_location" value="<?php echo $data->event_location;?>">
		  	</div>
		  	<em class="required">* Address is required</em>
		  	
		  	<fieldset>
		  		<legend>Address</legend>
		  		<table>
		  			<tbody>
		  				<tr>
		  					<td><label for="event_address1">Address line 1</label></td>
		  					<td><input required type="text" name="event_address1" value="<?php echo $data->event_address1;?>"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_address2">Address line 2</label></td>
		  					<td><input required type="text" name="event_address2" value="<?php echo $data->event_address2;?>"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_city">City</label></td>
		  					<td><input required type="text" name="event_city" value="<?php echo $data->event_city;?>"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_state">State</label></td>
		  					<td>
		  						<select name="event_state">
									<?php showSelected(getSnippet('state'),$data->event_state) ?>
		  						</select>
		  					</td>
		  				<tr>
		  					<td><label for="event_province">Province:</label></td>
		  					<td><input required type="text" name="event_province" value="<?php echo $data->event_province;?>"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_postal" >Postal code</label></td>
		  					<td><input type="num" name="event_postal" value="<?php echo $data->event_postal;?>"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_country">Country</label></td>
		  					<td>
		  						<select name="event_country">
			  						<?php showSelected( getSnippet('country'),$data->event_country) ?>
		  						</select>
		  					</td>
		  				</tr>
		  			</tbody>
		  		</table>
		  	</fieldset>
		  	<button type="submit" class="btn btn-primary btn-large">Update</button>
		</div>
	</div>
	<div class="event-optional">
	    <h4>Optional Event Information</h4>
	    <div class="row">
	    	<div class="col-md-4">
    			<div class="form-group">
    		    	<label for="event_shortname">Event Short Name:</label>
    		    	<input type="text" class="form-control" name="event_shortname" value="<?php echo $data->event_shortname;?>">
    		  	</div>
    		  	<div class="form-group">
    		    	<label for="event_url">Website URL:</label>
    		    	<input type="url" class="form-control" name="event_url" value="<?php echo $data->event_url;?>">
    		  	</div>
    		  	<div class="form-group">
    		    	<label for="event_description">Short event Description:</label>
    		    	<p class="desc">( 500 characters or less )</p>
    		    	<textarea name="event_description" style="height:70px;"><?php echo $data->event_description;?></textarea>
    		  	</div>
	    	</div>
	    	<div class="col-md-8">
	    		<div class="form-group">
    		    	<label for="event_details">Event Details:</label>
    		    	<textarea name="event_details" style="height:266px;"><?php echo $data->event_details;?></textarea>
    		    	<button type="submit" class="btn btn-primary btn-large pull-right">Update</button>
    		  	</div>

	    	</div>
	    </div>
	</div>

</form>