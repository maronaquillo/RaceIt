
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

<form id="create-event">
	<h3>Event Information</h3>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
		    	<label for="event_name">Event Name: <span class="required">*</span></label>
		    	<input type="text" class="form-control" name="event_name" placeholder="">
		  	</div>
		  	<div class="form-group">
		    	<label for="event_date">Start date and time: <span class="required">*</span></label>
		    	<input type="datetime" class="form-control" name="event_name" placeholder="">
		  	</div>
		  	<div class="form-group">
		    	<label for="event_timezone">Event time zone : <span class="required">*</span></label>
		    	<select class="form-control" name="event_timezone">
		    		<option value="Dateline Standard Time">(GMT-12:00) International Date Line West</option>
    				<option value="UTC-11">(GMT-11:00) Coordinated Universal Time-11</option>
    				<option value="Hawaiian Standard Time">(GMT-10:00) Hawaii</option>
    				<option value="Alaskan Standard Time">(GMT-09:00) Alaska</option>
    				<option value="Pacific Standard Time (Mexico)">(GMT-08:00) Baja California</option>
    				<option value="Pacific Standard Time">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
    				<option value="US Mountain Standard Time">(GMT-07:00) Arizona</option>
    				<option value="Mountain Standard Time (Mexico)">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
    				<option value="Mountain Standard Time">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
    				<option value="Central America Standard Time">(GMT-06:00) Central America</option>
    				<option value="Central Standard Time">(GMT-06:00) Central Time (US &amp; Canada)</option>
    				<option value="Central Standard Time (Mexico)">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
    				<option value="Canada Central Standard Time">(GMT-06:00) Saskatchewan</option>
    				<option value="SA Pacific Standard Time">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
    				<option selected="selected" value="Eastern Standard Time">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
    				<option value="US Eastern Standard Time">(GMT-05:00) Indiana (East)</option>
    				<option value="Venezuela Standard Time">(GMT-04:30) Caracas</option>
    				<option value="Paraguay Standard Time">(GMT-04:00) Asuncion</option>
    				<option value="Atlantic Standard Time">(GMT-04:00) Atlantic Time (Canada)</option>
    				<option value="Central Brazilian Standard Time">(GMT-04:00) Cuiaba</option>
    				<option value="SA Western Standard Time">(GMT-04:00) Georgetown, La Paz, Manaus, San Juan</option>
    				<option value="Pacific SA Standard Time">(GMT-04:00) Santiago</option>
    				<option value="Newfoundland Standard Time">(GMT-03:30) Newfoundland</option>
    				<option value="E. South America Standard Time">(GMT-03:00) Brasilia</option>
    				<option value="Argentina Standard Time">(GMT-03:00) Buenos Aires</option>
    				<option value="SA Eastern Standard Time">(GMT-03:00) Cayenne, Fortaleza</option>
    				<option value="Greenland Standard Time">(GMT-03:00) Greenland</option>
    				<option value="Montevideo Standard Time">(GMT-03:00) Montevideo</option>
    				<option value="Bahia Standard Time">(GMT-03:00) Salvador</option>
    				<option value="UTC-02">(GMT-02:00) Coordinated Universal Time-02</option>
    				<option value="Mid-Atlantic Standard Time">(GMT-02:00) Mid-Atlantic - Old</option>
    				<option value="Azores Standard Time">(GMT-01:00) Azores</option>
    				<option value="Cape Verde Standard Time">(GMT-01:00) Cape Verde Is.</option>
    				<option value="Morocco Standard Time">(GMT) Casablanca</option>
    				<option value="UTC">(GMT) Coordinated Universal Time</option>
    				<option value="GMT Standard Time">(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
    				<option value="Greenwich Standard Time">(GMT) Monrovia, Reykjavik</option>
    				<option value="W. Europe Standard Time">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
    				<option value="Central Europe Standard Time">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
    				<option value="Romance Standard Time">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
    				<option value="Central European Standard Time">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
    				<option value="W. Central Africa Standard Time">(GMT+01:00) West Central Africa</option>
    				<option value="Namibia Standard Time">(GMT+01:00) Windhoek</option>
    				<option value="Jordan Standard Time">(GMT+02:00) Amman</option>
    				<option value="GTB Standard Time">(GMT+02:00) Athens, Bucharest</option>
    				<option value="Middle East Standard Time">(GMT+02:00) Beirut</option>
    				<option value="Egypt Standard Time">(GMT+02:00) Cairo</option>
    				<option value="Syria Standard Time">(GMT+02:00) Damascus</option>
    				<option value="E. Europe Standard Time">(GMT+02:00) E. Europe</option>
    				<option value="South Africa Standard Time">(GMT+02:00) Harare, Pretoria</option>
    				<option value="FLE Standard Time">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
    				<option value="Turkey Standard Time">(GMT+02:00) Istanbul</option>
    				<option value="Israel Standard Time">(GMT+02:00) Jerusalem</option>
    				<option value="Libya Standard Time">(GMT+02:00) Tripoli</option>
    				<option value="Arabic Standard Time">(GMT+03:00) Baghdad</option>
    				<option value="Kaliningrad Standard Time">(GMT+03:00) Kaliningrad, Minsk</option>
    				<option value="Arab Standard Time">(GMT+03:00) Kuwait, Riyadh</option>
    				<option value="E. Africa Standard Time">(GMT+03:00) Nairobi</option>
    				<option value="Iran Standard Time">(GMT+03:30) Tehran</option>
    				<option value="Arabian Standard Time">(GMT+04:00) Abu Dhabi, Muscat</option>
    				<option value="Azerbaijan Standard Time">(GMT+04:00) Baku</option>
    				<option value="Russian Standard Time">(GMT+04:00) Moscow, St. Petersburg, Volgograd</option>
    				<option value="Mauritius Standard Time">(GMT+04:00) Port Louis</option>
    				<option value="Georgian Standard Time">(GMT+04:00) Tbilisi</option>
    				<option value="Caucasus Standard Time">(GMT+04:00) Yerevan</option>
    				<option value="Afghanistan Standard Time">(GMT+04:30) Kabul</option>
    				<option value="West Asia Standard Time">(GMT+05:00) Ashgabat, Tashkent</option>
    				<option value="Pakistan Standard Time">(GMT+05:00) Islamabad, Karachi</option>
    				<option value="India Standard Time">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
    				<option value="Sri Lanka Standard Time">(GMT+05:30) Sri Jayawardenepura</option>
    				<option value="Nepal Standard Time">(GMT+05:45) Kathmandu</option>
    				<option value="Central Asia Standard Time">(GMT+06:00) Astana</option>
    				<option value="Bangladesh Standard Time">(GMT+06:00) Dhaka</option>
    				<option value="Ekaterinburg Standard Time">(GMT+06:00) Ekaterinburg</option>
    				<option value="Myanmar Standard Time">(GMT+06:30) Yangon (Rangoon)</option>
    				<option value="SE Asia Standard Time">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
    				<option value="N. Central Asia Standard Time">(GMT+07:00) Novosibirsk</option>
    				<option value="China Standard Time">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
    				<option value="North Asia Standard Time">(GMT+08:00) Krasnoyarsk</option>
    				<option value="Singapore Standard Time">(GMT+08:00) Kuala Lumpur, Singapore</option>
    				<option value="W. Australia Standard Time">(GMT+08:00) Perth</option>
    				<option value="Taipei Standard Time">(GMT+08:00) Taipei</option>
    				<option value="Ulaanbaatar Standard Time">(GMT+08:00) Ulaanbaatar</option>
    				<option value="North Asia East Standard Time">(GMT+09:00) Irkutsk</option>
    				<option value="Tokyo Standard Time">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
    				<option value="Korea Standard Time">(GMT+09:00) Seoul</option>
    				<option value="Cen. Australia Standard Time">(GMT+09:30) Adelaide</option>
    				<option value="AUS Central Standard Time">(GMT+09:30) Darwin</option>
    				<option value="E. Australia Standard Time">(GMT+10:00) Brisbane</option>
    				<option value="AUS Eastern Standard Time">(GMT+10:00) Canberra, Melbourne, Sydney</option>
    				<option value="West Pacific Standard Time">(GMT+10:00) Guam, Port Moresby</option>
    				<option value="Tasmania Standard Time">(GMT+10:00) Hobart</option>
    				<option value="Yakutsk Standard Time">(GMT+10:00) Yakutsk</option>
    				<option value="Central Pacific Standard Time">(GMT+11:00) Solomon Is., New Caledonia</option>
    				<option value="Vladivostok Standard Time">(GMT+11:00) Vladivostok</option>
    				<option value="New Zealand Standard Time">(GMT+12:00) Auckland, Wellington</option>
    				<option value="UTC+12">(GMT+12:00) Coordinated Universal Time+12</option>
    				<option value="Fiji Standard Time">(GMT+12:00) Fiji</option>
    				<option value="Magadan Standard Time">(GMT+12:00) Magadan</option>
    				<option value="Kamchatka Standard Time">(GMT+12:00) Petropavlovsk-Kamchatsky - Old</option>
    				<option value="Tonga Standard Time">(GMT+13:00) Nuku'alofa</option>
    				<option value="Samoa Standard Time">(GMT+13:00) Samoa</option>
    				<option value="Line Islands Standard Time">(GMT+14:00) Kiritimati Island</option>
		    	</select>
		  	</div>
		  	<div class="form-group">
		    	<label for="event_type">Event Type: <span class="required">*</span></label>
		    	<select class="form-control" name="event_type" placeholder="">
					<option value="default">-- Select Event Type --</option>
					<option value="3">Adventure Event</option>
					<option value="46">Basketball Event</option>
					<option value="48">Cheerleading Event</option>
					<option value="2">Cycling Event</option>
					<option value="50">Flag Football Event</option>
					<option value="5">Membership</option>
					<option value="7">Multisport Event</option>
					<option value="21">Other Event</option>
					<option value="1">Running Event</option>
					<option value="45">Skiing Event</option>
					<option value="49">Soccer Event</option>
					<option value="4">Swimming Event</option>
					<option value="51">Track &amp; Field Event</option>
					<option value="6">Volunteer Event</option>
		    	</select>
		  	</div>
		</div>
		<div class="col-md-6">
			<h4>Start location</h4>
			<div class="form-group">
		    	<label for="event_location">Event Location: <span class="required">*</span></label>
		    	<input type="text" class="form-control" name="event_location" placeholder="">
		  	</div>
		  	<em class="required">* Address is required</em>
		  	
		  	<fieldset>
		  		<legend>Address</legend>
		  		<table>
		  			<tbody>
		  				<tr>
		  					<td><label for="event_address1">Address line 1</label></td>
		  					<td><input type="text" name="event_address1"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_address2">Address line 2</label></td>
		  					<td><input type="text" name="event_address2"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_city">City</label></td>
		  					<td><input type="text" name="event_city"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_state">State</label></td>
		  					<td>
		  						<select name="event_state">
			  						<option value=""></option>
			  						<option value="AL">Alabama</option>
			  						<option value="AK">Alaska </option>
			  						<option value="AS">American Samoa</option>
			  						<option value="AZ">Arizona </option>
			  						<option value="AR">Arkansas</option>
			  						<option value="AA">Armed Forces Americas</option>
			  						<option value="AE">Armed Forces Eupore,Canada,Middle East, Africa</option>
			  						<option value="AP">Armed Forces Pacific</option>
			  						<option value="CA">California</option>
			  						<option value="CO">Colorado</option>
			  						<option value="CT">Connecticut</option>
			  						<option value="DE">Delaware</option>
			  						<option value="DC">District of Columbia</option>
			  						<option value="FL">Florida</option>
			  						<option value="GA">Georgia</option>
			  						<option value="GU">Guam</option>
			  						<option value="HI">Hawaii</option>
			  						<option value="ID">Idaho</option>
			  						<option value="IL">Illinois</option>
			  						<option value="IN">Indiana</option>
			  						<option value="IA">Iowa</option>
			  						<option value="KS">Kansas</option>
			  						<option value="KY">Kentucky</option>
			  						<option value="LA">Louisiana</option>
			  						<option value="ME">Maine</option>
			  						<option value="MD">Maryland</option>
			  						<option value="MA">Massachusetts</option>
			  						<option value="MI">Michigan</option>
			  						<option value="MN">Minnesota</option>
			  						<option value="MS">Mississippi</option>
			  						<option value="MO">Missouri</option>
			  						<option value="MT">Montana</option>
			  						<option value="NE">Nebraska</option>
			  						<option value="NV">Nevada</option>
			  						<option value="NH">New Hampshire</option>
			  						<option value="NJ">New Jersey</option>
			  						<option value="NM">New Mexico</option>
			  						<option value="NY">New York</option>
			  						<option value="NC">North Carolina</option>
			  						<option value="ND">North Dakota</option>
			  						<option value="MP">Northern Mariana Islands</option>
			  						<option value="OH">Ohio</option>
			  						<option value="OK">Oklahoma</option>
			  						<option value="OR">Oregon</option>
			  						<option value="PA">Pennsylvania</option>
			  						<option value="PR">Puerto Rico</option>
			  						<option value="RI">Rhode Island</option>
			  						<option value="SC">South Carolina</option>
			  						<option value="SD">South Dakota</option>
			  						<option value="TN">Tennessee</option>
			  						<option value="TX">Texas</option>
			  						<option value="UT">Utah</option>
			  						<option value="VT">Vermont</option>
			  						<option value="VI">Virgin Islands</option>
			  						<option selected="selected" value="VA">Virginia</option>
			  						<option value="WA">Washington</option>
			  						<option value="WV">West Virginia</option>
			  						<option value="WI">Wisconsin</option>
			  						<option value="WY">Wyoming</option>
		  						</select>
		  					</td>
		  				<tr>
		  					<td><label for="event_province">Province:</label></td>
		  					<td><input type="text" name="event_province"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_postal" >Postal code</label></td>
		  					<td><input type="num" name="event_postal"></td>
		  				</tr>
		  				<tr>
		  					<td><label for="event_country">Country</label></td>
		  					<td>
		  						<select name="event_country">
			  						<option value="AF">Afghanistan</option>
			  						<option value="AL">Albania</option>
			  						<option value="DZ">Algeria</option>
			  						<option value="AS">American Samoa</option>
			  						<option value="AD">Andorra</option>
			  						<option value="AO">Angola</option>
			  						<option value="AI">Anguilla</option>
			  						<option value="AQ">Antarctica</option>
			  						<option value="AG">Antigua and Barbuda</option>
			  						<option value="AR">Argentina</option>
			  						<option value="AM">Armenia</option>
			  						<option value="AW">Aruba</option>
			  						<option value="AU">Australia</option>
			  						<option value="AT">Austria</option>
			  						<option value="AZ">Azerbaijan</option>
			  						<option value="BS">Bahamas, The</option>
			  						<option value="BH">Bahrain</option>
			  						<option value="UM">Baker Island</option>
			  						<option value="BD">Bangladesh</option>
			  						<option value="BB">Barbados</option>
			  						<option value="BY">Belarus</option>
			  						<option value="BE">Belgium</option>
			  						<option value="BZ">Belize</option>
			  						<option value="BJ">Benin</option>
			  						<option value="BM">Bermuda</option>
			  						<option value="BT">Bhutan</option>
			  						<option value="BO">Bolivia</option>
			  						<option value="BA">Bosnia and Herzegovina</option>
			  						<option value="BW">Botswana</option>
			  						<option value="BV">Bouvet Island</option>
			  						<option value="BR">Brazil</option>
			  						<option value="IO">British Indian Ocean Territory</option>
			  						<option value="VG">British Virgin Islands</option>
			  						<option value="BN">Brunei</option>
			  						<option value="BG">Bulgaria</option>
			  						<option value="BF">Burkina Faso</option>
			  						<option value="MM">Burma</option>
			  						<option value="BI">Burundi</option>
			  						<option value="KH">Cambodia</option>
			  						<option value="CM">Cameroon</option>
			  						<option value="CA">Canada</option>
			  						<option value="CV">Cape Verde</option>
			  						<option value="KY">Cayman Islands</option>
			  						<option value="CF">Central African Republic</option>
			  						<option value="TD">Chad</option>
			  						<option value="CL">Chile</option>
			  						<option value="CN">China</option>
			  						<option value="CX">Christmas Island</option>
			  						<option value="CC">Cocos (Keeling) Islands</option>
			  						<option value="CO">Colombia</option>
			  						<option value="KM">Comoros</option>
			  						<option value="CD">Congo, Democratic Republic of the</option>
			  						<option value="CG">Congo, Republic of the</option>
			  						<option value="CK">Cook Islands</option>
			  						<option value="CR">Costa Rica</option>
			  						<option value="CI">Cote d'Ivoire</option>
			  						<option value="HR">Croatia</option>
			  						<option value="CU">Cuba</option>
			  						<option value="CY">Cyprus</option>
			  						<option value="CZ">Czech Republic</option>
			  						<option value="DK">Denmark</option>
			  						<option value="DJ">Djibouti</option>
			  						<option value="DM">Dominica</option>
			  						<option value="DO">Dominican Republic</option>
			  						<option value="TL">East Timor</option>
			  						<option value="EC">Ecuador</option>
			  						<option value="EG">Egypt</option>
			  						<option value="SV">El Salvador</option>
			  						<option value="GQ">Equatorial Guinea</option>
			  						<option value="ER">Eritrea</option>
			  						<option value="EE">Estonia</option>
			  						<option value="ET">Ethiopia</option>
			  						<option value="FK">Falkland Islands (Islas Malvinas)</option>
			  						<option value="FO">Faroe Islands</option>
			  						<option value="FJ">Fiji</option>
			  						<option value="FI">Finland</option>
			  						<option value="FR">France</option>
			  						<option value="FX">France, Metropolitan</option>
			  						<option value="GF">French Guiana</option>
			  						<option value="PF">French Polynesia</option>
			  						<option value="TF">French Southern and Antarctic Lands</option>
			  						<option value="GA">Gabon</option>
			  						<option value="GM">Gambia, The</option>
			  						<option value="GE">Georgia</option>
			  						<option value="DE">Germany</option>
			  						<option value="GH">Ghana</option>
			  						<option value="GI">Gibraltar</option>
			  						<option value="GR">Greece</option>
			  						<option value="GL">Greenland</option>
			  						<option value="GD">Grenada</option>
			  						<option value="GP">Guadeloupe</option>
			  						<option value="GU">Guam</option>
			  						<option value="GT">Guatemala</option>
			  						<option value="GN">Guinea</option>
			  						<option value="GW">Guinea-Bissau</option>
			  						<option value="GY">Guyana</option>
			  						<option value="HT">Haiti</option>
			  						<option value="HM">Heard Island and McDonald Islands</option>
			  						<option value="VA">Holy See (Vatican City)</option>
			  						<option value="HN">Honduras</option>
			  						<option value="HK">Hong Kong</option>
			  						<option value="HU">Hungary</option>
			  						<option value="IS">Iceland</option>
			  						<option value="IN">India</option>
			  						<option value="ID">Indonesia</option>
			  						<option value="IR">Iran</option>
			  						<option value="IQ">Iraq</option>
			  						<option value="IE">Ireland</option>
			  						<option value="IL">Israel</option>
			  						<option value="IT">Italy</option>
			  						<option value="JM">Jamaica</option>
			  						<option value="SJ">Jan Mayen</option>
			  						<option value="JP">Japan</option>
			  						<option value="JO">Jordan</option>
			  						<option value="KZ">Kazakhstan</option>
			  						<option value="KE">Kenya</option>
			  						<option value="KI">Kiribati</option>
			  						<option value="KP">Korea, North</option>
			  						<option value="KR">Korea, South</option>
			  						<option value="KW">Kuwait</option>
			  						<option value="KG">Kyrgyzstan</option>
			  						<option value="LA">Laos</option>
			  						<option value="LV">Latvia</option>
			  						<option value="LB">Lebanon</option>
			  						<option value="LS">Lesotho</option>
			  						<option value="LR">Liberia</option>
			  						<option value="LY">Libya</option>
			  						<option value="LI">Liechtenstein</option>
			  						<option value="LT">Lithuania</option>
			  						<option value="LU">Luxembourg</option>
			  						<option value="MO">Macau</option>
			  						<option value="MK">Macedonia, The Republic of</option>
			  						<option value="MG">Madagascar</option>
			  						<option value="MW">Malawi</option>
			  						<option value="MY">Malaysia</option>
			  						<option value="MV">Maldives</option>
			  						<option value="ML">Mali</option>
			  						<option value="MT">Malta</option>
			  						<option value="MH">Marshall Islands</option>
			  						<option value="MQ">Martinique</option>
			  						<option value="MR">Mauritania</option>
			  						<option value="MU">Mauritius</option>
			  						<option value="YT">Mayotte</option>
			  						<option value="MX">Mexico</option>
			  						<option value="FM">Micronesia, Federated States of</option>
			  						<option value="MD">Moldova</option>
			  						<option value="MC">Monaco</option>
			  						<option value="MN">Mongolia</option>
			  						<option value="MS">Montserrat</option>
			  						<option value="MA">Morocco</option>
			  						<option value="MZ">Mozambique</option>
			  						<option value="NA">Namibia</option>
			  						<option value="NR">Nauru</option>
			  						<option value="NP">Nepal</option>
			  						<option value="NL">Netherlands</option>
			  						<option value="AN">Netherlands Antilles</option>
			  						<option value="NC">New Caledonia</option>
			  						<option value="NZ">New Zealand</option>
			  						<option value="NI">Nicaragua</option>
			  						<option value="NE">Niger</option>
			  						<option value="NG">Nigeria</option>
			  						<option value="NU">Niue</option>
			  						<option value="NF">Norfolk Island</option>
			  						<option value="MP">Northern Mariana Islands</option>
			  						<option value="NO">Norway</option>
			  						<option value="OM">Oman</option>
			  						<option value="PK">Pakistan</option>
			  						<option value="PW">Palau</option>
			  						<option value="PA">Panama</option>
			  						<option value="PG">Papua New Guinea</option>
			  						<option value="PY">Paraguay</option>
			  						<option value="PE">Peru</option>
			  						<option value="PH">Philippines</option>
			  						<option value="PN">Pitcairn Islands</option>
			  						<option value="PL">Poland</option>
			  						<option value="PT">Portugal</option>
			  						<option value="PR">Puerto Rico</option>
			  						<option value="QA">Qatar</option>
			  						<option value="RE">Reunion</option>
			  						<option value="RO">Romania</option>
			  						<option value="RU">Russia</option>
			  						<option value="RW">Rwanda</option>
			  						<option value="SH">Saint Helena</option>
			  						<option value="KN">Saint Kitts and Nevis</option>
			  						<option value="LC">Saint Lucia</option>
			  						<option value="PM">Saint Pierre and Miquelon</option>
			  						<option value="VC">Saint Vincent and the Grenadines</option>
			  						<option value="WS">Samoa</option>
			  						<option value="SM">San Marino</option>
			  						<option value="ST">Sao Tome and Principe</option>
			  						<option value="SA">Saudi Arabia</option>
			  						<option value="SN">Senegal</option>
			  						<option value="CS">Serbia and Montenegro</option>
			  						<option value="SC">Seychelles</option>
			  						<option value="SL">Sierra Leone</option>
			  						<option value="SG">Singapore</option>
			  						<option value="SK">Slovakia</option>
			  						<option value="SI">Slovenia</option>
			  						<option value="SB">Solomon Islands</option>
			  						<option value="SO">Somalia</option>
			  						<option value="ZA">South Africa</option>
			  						<option value="GS">South Georgia and the Islands</option>
			  						<option value="ES">Spain</option>
			  						<option value="LK">Sri Lanka</option>
			  						<option value="SD">Sudan</option>
			  						<option value="SR">Suriname</option>
			  						<option value="SZ">Swaziland</option>
			  						<option value="SE">Sweden</option>
			  						<option value="CH">Switzerland</option>
			  						<option value="SY">Syria</option>
			  						<option value="TW">Taiwan</option>
			  						<option value="TJ">Tajikistan</option>
			  						<option value="TZ">Tanzania</option>
			  						<option value="TH">Thailand</option>
			  						<option value="TG">Togo</option>
			  						<option value="TK">Tokelau</option>
			  						<option value="TO">Tonga</option>
			  						<option value="TT">Trinidad and Tobago</option>
			  						<option value="TN">Tunisia</option>
			  						<option value="TR">Turkey</option>
			  						<option value="TM">Turkmenistan</option>
			  						<option value="TC">Turks and Caicos Islands</option>
			  						<option value="TV">Tuvalu</option>
			  						<option value="UG">Uganda</option>
			  						<option value="UA">Ukraine</option>
			  						<option value="AE">United Arab Emirates</option>
			  						<option value="GB">United Kingdom</option>
			  						<option selected="selected" value="US">United States</option>
			  						<option value="UY">Uruguay</option>
			  						<option value="UZ">Uzbekistan</option>
			  						<option value="VU">Vanuatu</option>
			  						<option value="VE">Venezuela</option>
			  						<option value="VN">Vietnam</option>
			  						<option value="VI">Virgin Islands</option>
			  						<option value="WF">Wallis and Futuna</option>
			  						<option value="EH">Western Sahara</option>
			  						<option value="YE">Yemen</option>
			  						<option value="ZM">Zambia</option>
			  						<option value="ZW">Zimbabwe</option>
		  						</select>
		  					</td>
		  				</tr>
		  			</tbody>
		  		</table>
		  	</fieldset>
		  	<button class="btn btn-primary btn-large">Publish</button>
		</div>

	</div>
</form>