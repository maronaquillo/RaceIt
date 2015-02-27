<?php

get_header(); 
$page = 0;
$perpage = 0;

extract($_GET);

$start = $page == 1 ? ($page - 1) * $perpage : 0;

switch ($sortby) {
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

$event_list = $wpdb->get_results("SELECT * 
								  FROM ". $wpdb->prefix ."events" . $sort . " LIMIT $start, $perpage");
?>
<div class="main-content post">
	<div class="search-form row">
		<div class="col-md-offset-1 col-md-10">
			<div class="wrap clearfix">
				<div class="col-md-12 well">
					<div class="search-results pull-left"><?php echo $wpdb->num_rows ?> Results</div>
					<div class="search-result-range pull-right">4 of <?php echo $wpdb->num_rows ?></div>
				</div>
				<div class="col-md-3 search-filter">
					<h3>Refine Search</h3>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          Keyword &amp; Location <span class="caret"></span>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					      	<div class="panel-body">
					      		<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="GET">
					      		  <div class="form-group">
					      		    <label for="exampleInputEmail1">Search For</label>
					      		    <input type="text" class="form-control" name="q" id="q">
					      		  </div>
					      		  <div class="form-group">
					      		    <label for="exampleInputPassword1">Within</label>
					      		    <select name="within">
					      		    	<option value="0">Any Distance</option>
					      		        <?php 
					      		            $within_list = array(
					      		                    '25'   	=> '25 miles',
					      		                    '50'    => '50 miles',
					      		                    '75'    => '75 miles',
					      		                    '100'   => '100 miles',
					      		                    '250'	=> '250 miles'

					      		                );
					      		            foreach ($within_list as $sort => $value) {
					      		                $selected = $_GET['within'] == $sort ? "selected" : "";
					      		                echo( "<option value='{$sort}' $selected>$value</option>");
					      		            }

					      		        ?>
					      		    </select>
					      		  </div>
					      		  <div class="form-group">
					      		    <label for="exampleInputPassword1">of Anywhere</label>
					      		    <input type="text" class="form-control" name="zip" id="zip" placeholder="Zipcode">
					      		  </div>
					      		  <button type="submit" class="btn btn-primary btn-block">Refine Search</button>
					      		</form>
					      	</div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          Date <span class="caret"></span>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
					      	<div class="panel-body">
					      		<ul>
					      			<li><a href="?advancedate=7">Next 7 Days</a></li>
					      			<li><a href="?advancedate=30">Next 30 Days</a></li>
					      			<li><a href="?advancedate=90">Next 90 Days</a></li>
					      			<li><a href="?advancedate=">All Dates</a></li>
					      		</ul>

					      		<h4>Date Range</h4>
					      		<div class="form-group">
					      		  <label for="exampleInputPassword1">From:</label>
					      		  <input type="date" class="form-control" name="startdate" id="startdate">
					      		</div>
					      		<div class="form-group">
					      		  <label for="exampleInputPassword1">To:</label>
					      		  <input type="date" class="form-control" name="enddate" id="enddate">
					      		</div>
					      		<button type="submit" class="btn btn-primary btn-block">Refine Search</button>
					      	</div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          Event Type <span class="caret"></span>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
					      	<div class="panel-body">
					      		<ul>
					      			<li><a href="?type=7">Adventure Events (7)</a></li>
					      			<li><a href="?type=7">Basketball Events (2)</a></li>
					      		</ul>
					      	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-md-9">
					<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="GET">
						<div class="sort-option">
					        <div class="sortTools">
					            <strong>Sort By</strong>
					            <select name="sortby">
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
					            <strong>Per Page</strong>
					            <select name="perpage" id="">
					                <?php 
					                    $perpage_list = array(
					                            '20'   	=> '20',
					                            '30'    => '30',
					                            '50'    => '50',
					                            '100'   => '100'

					                        );
					                    foreach ($perpage_list as $sort => $value) {
					                        $selected = $_GET['perpage'] == $sort ? "selected" : "";
					                        echo( "<option value='{$sort}' $selected>$value</option>");
					                    }

					                ?>
					            </select>
					            <input type="submit" class="btn btn-primary btn-sort" value="Go" />
					        </div>
						</div>

			            <nav class="pull-right">
			              	<ul class="pagination">
			                	<li>
			                  		<a href="#" aria-label="Previous">
			                    		<span aria-hidden="true">&laquo;</span>
			                  		</a>
			                	</li>

			                
				                <li class="active"><a href="#">1</a></li>
				                <li><a href="?page=2">2</a></li>
				                <li><a href="#">3</a></li>
				                <li><a href="#">4</a></li>
				                <li><a href="#">5</a></li>
			                	<li>
			                  		<a href="#" aria-label="Next">
			                    		<span aria-hidden="true">&raquo;</span>
			                  		</a>
			                	</li>
			              	</ul>
			            </nav>
					</form>
					<div class="event-list">
						<?php foreach ($event_list as $event):?>
							<div class="event-list-item">
								<div class="row">
									<div class="col-md-9">
										<img src="http://placehold.it/100x100&text=Event Thumb" class="img-thumbnail item-thumb" />
										<div class="item-details">
											<h3><a href="<?php echo site_url('participate?eventid=' . $event->event_id ); ?>"><?php echo $event->event_name ?></a></h3>
											<?php if($event->event_url): ?>
												<a href="<?php echo $event->event_url ?>"><?php echo $event->event_url ?></a>
											<?php endif; ?>
											<div class="item-date"><strong><?php echo date('l, F d, Y', strtotime($event->event_date)) ?></strong></div>
											<div class="item-time"><?php echo date('g:i A', strtotime($event->event_date)) ?></div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="item-location"><?php echo $event->event_location . ", " . $event->event_state  ?></div>
										<a href="<?php echo site_url('participate?eventid=' . $event->event_id ); ?>" class="btn btn-primary btn-block">Register Now</a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<nav class="pull-right">
		              	<ul class="pagination">
		                	<li>
		                  		<a href="#" aria-label="Previous">
		                    		<span aria-hidden="true">&laquo;</span>
		                  		</a>
		                	</li>
			                <li class="active"><a href="#">1</a></li>
			                <li><a href="#">2</a></li>
			                <li><a href="#">3</a></li>
			                <li><a href="#">4</a></li>
			                <li><a href="#">5</a></li>
		                	<li>
		                  		<a href="#" aria-label="Next">
		                    		<span aria-hidden="true">&raquo;</span>
		                  		</a>
		                	</li>
		              	</ul>
		            </nav>
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>