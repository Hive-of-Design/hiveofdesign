<?php
/* Template Name: contact */

get_header(); ?>



<div id="container">
<div align="center">
<div id="body" class="contact">
<?php require_once('menu.php'); ?>
<div class="wrapper">
<div id="article">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); //begin the loop ?>
	<div id="contact"><?php the_content(); ?></div>	
<?php endwhile; // end of the loop. ?>
</div><!-- profile -->
</div><!-- wrapper -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d663.8467450895527!2d-1.1401287899395802!3d52.64234862355244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2dc2a79e0f59671!2sHive+of+Design!5e0!3m2!1sen!2suk!4v1540807989628" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div><!-- body -->
</div><!-- align center -->
<div id="footerbackground">
<?php get_footer(); ?>
</div><!-- #footerbackground -->
</div><!--#container -->