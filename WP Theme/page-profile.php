<?php
/* Template Name: profile page */

get_header(); ?>



<div id="container">
<div align="center">
<div id="body">
<?php require_once('menu.php'); ?>
<div class="wrapper">

<div id="profile">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); //begin the loop ?>
	<h1 ><?php the_title(); ?></h1>
	<?php the_content(); ?>				
	<?php edit_post_link( __( 'Edit', 'thirdstyle' ), '<span class="edit-link">', '</span>' ); //creates the edit link if you are logged in ?>
	
<?php endwhile; // end of the loop. ?>
</div><!-- service-intro -->
</div><!-- wrapper -->
</div><!-- body -->
</div><!-- align center -->
<div id="footerbackground">
<?php get_footer(); ?>
</div><!-- #footerbackground -->
</div><!--#container -->