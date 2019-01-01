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
<div id="project">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); //begin the loop ?>
	<h1 ><?php the_title(); ?></h1>
<div id="category-list">    
    <?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Category Name' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>
<!-- Print a link to this category -->

<?php echo esc_url( $category_link ); ?><?php the_category(' '); ?>
</div><!-- category-list -->
	
	<?php the_content(); ?>	


 
   <p> <?php // Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
		?></p>
	<div class="buttons">
	  <span class="previous-button"><?php previous_post_link( '%link','&lsaquo; Previous Project' ) ?></span>
	  <span class="next-button"><?php next_post_link( '%link','Next Project &rsaquo;' ) ?></span>
	</div>
    
    			
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