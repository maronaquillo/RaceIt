<?php
/*
Template Name: Mavericks Create Account
*/
get_header(); 
?>
<div class="main-content post">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="registration-form row">
			<div class="col-md-offset-2 col-md-8">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<?php get_footer();?>