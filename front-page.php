<?php get_header();?>

<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			//
			the_title();
			the_content();
			//
		} // end while
	} // end if
?>

<?php get_footer();?>
