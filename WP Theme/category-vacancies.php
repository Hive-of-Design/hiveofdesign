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
<h1>Join the Hive</h1>



<?php if ( have_posts() ) : ?>

             
        <p><?php echo category_description($category_id); ?></p> 
	<h2 style=" color:#e55302; margin-top: 30px ">Current Vacancies</h2>
			
			<?php while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?> &rsaquo;</a></h2>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(thumbnail); ?></a>

			<?php endwhile; ?>
			
		<p>	<?php // Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
		?></p>


<?php else : ?>
<div class="post" id="post-<?php the_ID(); ?>">
	<p>Thank you for your interest in joining the Hive. Our city centre office is in a great location and offers a fantastic environment for creative minds.</p>
	<p>Unfortunately we haven&rsquo;t any vacancies currently, but if you have skills and experience relevant to our services, it&rsquo;s always worth dropping us a copy of your CV in case a position becomes available.</p>
	<p><a href="mailto:enquiries@hiveofdesign.co.uk?subject=Speculative%20application">Submit your CV</a></p>
<?php endif; //end of the loop ?>
<img src="http://www.hiveofdesign.co.uk/hive/wp-content/uploads/2016/11/HOD0545-HOD-Folder-Inserts-A4-Stepped-5-e1478514992217.jpg" width="442" height="360" alt="welcome" style="margin-top:50px;"/>
</div><!-- article -->
</div><!-- wrapper -->
</div><!-- body -->
</div><!-- align center -->
<div id="footerbackground">
<?php get_footer(); ?>
</div><!-- #footerbackground -->
</div><!--#container -->