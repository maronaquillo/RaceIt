<?php
/*
Template Name: Mavericks Create Account
*/
get_header(); 
?>
<style>
.col-md-12 {
	background:none repeat scroll 0 0 #CCCCCC;
	}
#mav-left {
	width:388px;
	height:auto;
	float:left;
	background:#fff;
	padding:10px;
}
#mav-holder {
	max-width:951px;
	margin:0 auto;
}
#mav-right {
	background:url('http://localhost/raceit/wp-content/themes/raceit/images/admin-img/createaccount-bgd.jpg') no-repeat scroll right top #EEEEEE;
	width:563px;
	height:819px;
	float:right;
}
#mav-createfont {
	font-family: Raleway,Helvetica,Arial,sans-serif;
	font-weight: 600;
	line-height: 1.1em;
	font-size: 1.6em;
	color: #719629 !important;
	margin: 20px 0 9px !important;
	padding: 0;
}
#mav-createfont-2 {
	font-family: Raleway,Helvetica,Arial,sans-serif;
	font-weight: 600;
	line-height: 1.1em;
	font-size: 1.6em;
	margin: 20px 0 9px !important;
	padding: 0;
	position:relative;
	top: 8px;
	text-indent:15px;
}
#mav-fieldsreq {
	font-family:Raleway,Helvetica,Arial,sans-serif;
	font-size:.9em;
	font-weight:400;
	line-height:1.5em;
	padding:0;
	color:#666;
}
#wppb-register-user ul li label {
	display:none;
}
</style>
<div class="main-content post">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-md-12">
			<?php the_content(); ?>
		</div>
	</div>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<?php get_footer();?>