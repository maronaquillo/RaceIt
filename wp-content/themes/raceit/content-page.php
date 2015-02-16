<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="interior-head">
		<?php the_title( '<h1 class="interior-head">', '</h1>' ); ?>
	</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<div class="interior">
		<p>
			<?php the_content(); ?>
		</p>
	</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
