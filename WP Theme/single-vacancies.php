<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>
<div id="container">
<div align="center">
<div id="body">
<?php require_once('menu.php'); ?>
<div class="wrapper">
<div id="article">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); //begin the loop ?>
	<h1 ><?php the_title(); ?></h1>

	<?php the_content(); ?>	


 
   <p> <?php // Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
		?></p>
    
    			
	<?php edit_post_link( __( 'Edit', 'thirdstyle' ), '<span class="edit-link">', '</span>' ); //creates the edit link if you are logged in ?>
	    
    


<?php endwhile; // end of the loop. ?>   

</div><!-- article -->
</div><!-- wrapper -->
</div><!-- body -->
</div><!-- align center -->
<div id="footerbackground">
<?php get_footer(); ?>
</div><!-- #footerbackground -->
</div><!--#container -->