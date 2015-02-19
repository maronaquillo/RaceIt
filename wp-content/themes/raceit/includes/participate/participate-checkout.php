
<?php 
    $event_id = isset( $_GET['event_id'] ) && (int)$_GET['event_id'] ? (int)$_GET['event_id'] : 0;

    $event_table = $wpdb->prefix . 'events';
    $event_list = $wpdb->get_results( "SELECT `event_id`,`event_name` FROM $event_table WHERE `event_organizer` = 1 ORDER BY `event_id` DESC");
?>
<h1>Checkout</h1>
<div id="participant-form">
    	<div class="participant-wrap">
            <div class="row">
                <form method="post" action="<?php echo WP_SITEURL.'/participate/?event_id='.$event_id ?>">
                    <div class="col-md-6 form-fields">
                        <fieldset>
                            <legend>Enter your credit card information</legend>
                            <div class="form-group">
                                <label for="checkout_method">Method of Payment</label>
                                <select class="form-control" name="checkout_method">
                                    <option value="1">Visa</option>
                                    <option value="2">MasterCard</option>
                                    <option value="3">Discovery</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="checkout_name">Name on the Card</label>
                                <input  type="text" class="form-control" name="checkout_name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="checkout_card">Credit Card Number <span>(No Spaces or Dashes)</span></label>
                                <input  type="text" class="form-control" name="checkout_card" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="checkout_exp">Card Expiration <span>(Example: Month 08 and Year 14)</span></label>
                                <div class="check_exp">
                                    <span>Month</span> <input  type="text" style="width:100px" class="form-control" name="checkout_exp_month" placeholder="MM">
                                    <span>Year </span> <input  type="text" style="width:100px" class="form-control" name="checkout_exp_year" placeholder="YY">
                                    <span>CVC </span> <input  type="text" style="width:100px" class="form-control" name="checkout_exp_year" placeholder="">
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-md-6 form-fields">
                         <fieldset>
                            <legend>Billing Address</legend>
                            <div class="form-group">
                                <label for="checkout_address1"><span class="required">*</span>Address Line 1</label>
                                <input required type="text" class="form-control" name="checkout_address1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="checkout_address2">Address Line 2</label>
                                <input required type="text" class="form-control" name="checkout_address2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="checkout_city"><span class="required">*</span>City</label>
                                <input required type="text" class="form-control" name="checkout_city" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="checkout_state">State</label>
                                <select class="form-control" name="checkout_state">
                                    <?php showSelected( getSnippet('state') ); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="checkout_postal">Postal Code</label>
                                <input type="text" class="form-control" name="checkout_postal" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="checkout_country">Country</label>
                                <select class="form-control" name="checkout_country">
                                    <?php showSelected( getSnippet('country') ); ?>
                                </select>
                            </div>
                            
                        </fieldset>
                        <button type="submit" class="btn btn-primary btn-participant">Review Payment</button>
                    </div>
               
                </form>
            </div>
            
            
        </div>
   
</div>