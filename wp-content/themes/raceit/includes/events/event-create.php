<h1>Create Event <i>* Required Fields</i></h1>
<h2>Step 1 Details</h2>

<div class="steps">
	<ul>
		<li align="center" width="100" class="step1">&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri();?>/images/events/1h_red.gif" border="0" alt="Step 1"><em class="ce-stepsTitleActive">Details</em></li>
		<li align="center" width="100" class="step2">&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri();?>/images/events/2hg_red.gif" border="0" alt="Step 2"><em class="ce-stepsTitle">Registration</em></li>
		<li align="center" width="100" class="step3">&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri();?>/images/events/3hg_red.gif" border="0" alt="Step 3"><em class="ce-stepsTitle">Pricing</em></li>
		<li align="center" width="100" class="step4">&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri();?>/images/events/4hg_red.gif" border="0" alt="Step 4"><em class="ce-stepsTitle">Form Designer</em></li>
		<li align="center" width="100" class="step5">&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri();?>/images/events/5hg_red.gif" border="0" alt="Step 5"><em class="ce-stepsTitle">Thank You</em></li>
	</ul>
</div>

<form id="create-event" method="post" action="<?php echo WP_SITEURL . '/events/?action=create' ?>">
	<h3>Event Information</h3>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
		    	<label for="event_name">Event Name: <span class="required">*</span></label>
		    	<input required type="text" class="form-control" name="event_name" placeholder="">
		  	</div>
		  	<div class="form-group">
		    	<label for="event_date">Start date and time: <span class="required">*</span></label>
		    	<input placeholder="yyy-mm-ddThh:mm:ss" required type="datetime-local" name="event_date" class="form-control">
		  	</div>
		  	<div class="form-group">	
		    	<label for="event_timezone">Event time zone : <span class="required">*</span></label>
		    	<select class="form-control" name="event_timezone">
		    		<?php showSelected( getSnippet('timezone') ); ?>
		    	</select>
		  	</div>
		  	<div class="form-group">
		    	<label for="event_type">Event Type: <span class="required">*</span></label>
		    	<select class="form-control" name="event_type" placeholder="">
					<option value="default">-- Select Event Type --</option>
					<?php showSelected( getSnippet('event-type') ); ?>
		    	</select>
		  	</div>
		</div>
		<div class="col-md-6">
			<h4>Start location</h4>
			<div class="form-group">
		    	<label for="event_location">Event Location: <span class="required">*</span></label>
		    	<input required type="text" class="form-control" name="event_location" placeholder="">
		  	</div>
		  	<em class="required">* Address is required</em>
		  	
		  	<fieldset>
		  		<legend>Address</legend>
		  		<table>
		  			<tbody>
		  				<tr>
		  					<td><label for="event_address1">Address line 1</label></td>
		  					<td><input required type="text" name="event_address1"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_address2">Address line 2</label></td>
		  					<td><input type="text" name="event_address2"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_city">City</label></td>
		  					<td><input required type="text" name="event_city"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_state">State</label></td>
		  					<td>
		  						<select name="event_state">
			  						<?php showSelected( getSnippet('state'), 'CA' ); ?>
		  						</select>
		  					</td>
		  				<tr>
		  					<td><label for="event_province">Province:</label></td>
		  					<td><input required type="text" name="event_province"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_postal" >Postal code</label></td>
		  					<td><input type="num" name="event_postal"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_country">Country</label></td>
		  					<td>
		  						<select name="event_country">
			  						<?php showSelected( getSnippet('country'), 'US' ); ?>
		  						</select>
		  					</td>
		  				</tr>
		  			</tbody>
		  		</table>
		  	</fieldset>
		  	<button class="btn btn-primary btn-large">Publish</button>
		</div>
	</div>
	<div class="event-optional">
	    <h4>Optional Event Information</h4>
	    <div class="row">
	    	<div class="col-md-4">
    			<div class="form-group">
    		    	<label for="event_shortname">Event Short Name:</label>
    		    	<input type="text" class="form-control" name="event_shortname" placeholder="">
    		  	</div>
    		  	<div class="form-group">
    		    	<label for="event_url">Website URL:</label>
    		    	<input type="url" class="form-control" name="event_url" placeholder="">
    		  	</div>
    		  	<div class="form-group">
    		    	<label for="event_description">Short event Description:</label>
    		    	<p class="desc">( 500 characters or less )</p>
    		    	<textarea name="event_description" style="height:70px;"></textarea>
    		  	</div>
	    	</div>
	    	<div class="col-md-8">
	    		<div class="form-group">
    		    	<label for="event_details">Event Details:</label>
    		    	<textarea name="event_details" style="height:266px;"></textarea>
    		    	<button type="submit" class="btn btn-primary btn-large pull-right">Publish</button>
    		  	</div>

	    	</div>
	    </div>
	</div>
</form>