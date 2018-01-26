<?php 

/**
 * Template Name: Home Page
 */
		 get_header(); 
		
		//=========== Get Home Slider ===========//
		get_template_part('sections/home','slider');
		
		//=========== Get Home Slider ===========//
		get_template_part('sections/home','ads');
		
		//=========== Get Index product ===========//		
		get_template_part('sections/home', 'product');	
		
		//=========== Get Index News ===========//
		get_template_part('sections/home', 'blog');			
					
?>

<main id="content">
    		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="link">' . __( 'Pages:', 'ferry' ), 'after' => '</div>' ) ); ?>

		<?php endwhile; ?>
</main>



<?php get_footer();?>