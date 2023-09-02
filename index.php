<?php
/**
 *
 * @package Adidas_Theme
 */
?>

<?php get_header(); ?>
	<div class="page-content">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; ?>
				
				<?php endif; ?>
	
	</div> 	<!-- /.row -->
<?php get_footer(); ?>