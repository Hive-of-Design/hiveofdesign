<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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