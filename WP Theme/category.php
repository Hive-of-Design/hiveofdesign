<?php
/** The template for displaying category pages **/
get_header();
?>
<div id="container">
	<div align="center">
		<div id="body">
			<?php require_once('menu.php'); ?>
			<div class="wrapper">
				<div id="category">
					<?php if ( have_posts() ) : ?>
					<h1><?php single_cat_title(); ?></h1>
					<p><?php echo category_description($category_id); ?></p>
					<?php while ( have_posts() ) : the_post(); ?>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(thumbnail); ?></a>
					<?php endwhile; ?>
					<?php else : ?>
					<h2>(Not Found)</h2>
					<?php endif; //end of the loop ?>
				</div><!-- category -->
			</div><!-- wrapper -->
		</div><!-- #body -->
	</div><!-- align center -->
	<div id="footerbackground"><?php get_footer(); ?></div>
</div><!-- #container -->