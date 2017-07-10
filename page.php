<?php get_header();?>



<?php
		
		while ( have_posts() ) : the_post();

			
			get_template_part( 'template-parts/content', 'page' );

			
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		
		endwhile;
		?>
		<?php the_content( ); ?>
	

<?php get_footer();?>