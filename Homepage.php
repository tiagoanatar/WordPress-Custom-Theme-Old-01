<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
   Template Name: Homepage
 */

get_header(); ?>



<div class="top_c_hom">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-12 cell new_font">

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home_Content') ) : ?>
			<?php endif; ?>
      
			</div>   
		</div>
	</div>
</div>   
    


<?php get_footer();
