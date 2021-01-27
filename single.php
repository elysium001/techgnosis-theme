<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package techgnosis-theme
 */

get_header();
?>
<div class="container">
	<div class="row">
		<main id="primary" class="site-main <?php echo is_active_sidebar( 'sidebar-1' ) ? 'eight':'ten'?> columns" style="margin-top: 16px">
	
			<?php
			while ( have_posts() ) :
				the_post();
	
				get_template_part( 'template-parts/content', get_post_type() );
	
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'techgnosis-theme' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'techgnosis-theme' ) . '</span> <span class="nav-title">%title</span>',
					)
				);
	
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
	
			endwhile; // End of the loop.
			?>
	
		</main><!-- #main -->
		<?php get_sidebar();?>
	</div>
</div>

<?php
get_footer();
