<?php
/* Home page */
get_header(); ?>
<!-- The bottom layer, holds the image. -->
<div id="container" class="home">
<div align="center">
<?php require_once('menu.php'); ?>
<!-- carousel -->
<div id="carousel-padding"></div>
<!-- The bottom layer, holds the image. -->
<div style="position:relative; width:100%; height:auto;">
<img id="image" style="opacity:1.0; filter:alpha(opacity=100);border:0;" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2016/04/audi-email-candy-slider.jpg" alt="slide show"  width="100%">
<!-- Top layer, publishes content on top of image. -->
<div style="position:absolute; top:0px; left:0px; background-color:transparent; width:100%;">
<div class="wrapper" id="carousel" ></div><!-- /wrapper -->
<!-- the rest of the carousel code is at the end of this page -->

<!-- intro -->
<div style="background-color:#00acc8; width:100%;">
<div class="container" style="padding-top: 45px; padding-bottom: 40px;" id="intro">
	<div class="row">
		<div class="col-sm-6">
<p>We are a web and digital design agency, who understands the importance of good graphic design.</p>
<p>As well as working with some of the UK’s biggest brands, we help growing SMEs improve their professional image.</p> 
<p>Our long-standing clients consider us to be their outsourced, in-house team who know their company inside out and deliver them a return on investment.</p> 
</div><!-- /col1 -->
		<div class="col-md-2 col-sm-1"></div>
<div class="col-md-4 col-sm-5" id="quote">
	<blockquote id="quote"><p>
		You&rsquo;re all so welcoming whenever we call with a new job or we visit your studio to work more closely on a project, no matter how busy you all are. You also always make sure we have time for a good giggle too. How refreshing.</p>	
		<p>Divisional Database &amp; Marketing Manager at the Sytner Group</p></blockquote>
</div><!-- /col2 -->
	</div>
<div style="clear:both;"></div> 
</div><!-- /intro -->
</div><!-- /colour -->

<!-- services -->
<div style="background-color:#ffffff; width:100%;">
    <div class="container" id="services">
        <div class="col-lg-12">

            <a class="home-next"><img src="<?php bloginfo('template_directory'); ?>/images/next-cyan.png" alt="next" width="41" height="24" /></a>
            <div class="anchor-padding"></div>
            <div class="title"><img src="<?php bloginfo('template_directory'); ?>/images/title-service.jpg" alt="What we are good at" width="367" height="65" /></div>
            <div class="row order-top-bottom border-margin" data-aos="fade-right">
                <div class="col-sm-6 col-2">
                    <div class="flex">
                        <h2 style="font-size: 25px;"><a href="/category/services/websites/">Websites</a></h2>
                        <p><a href="/category/services/websites/web-design/">Web design &rsaquo;</a></p>
                        <p><a href="/category/services/websites/front-end-web-development/">Frontend web development &rsaquo;</a></p>
                        <p><a href="/category/services/websites/wordpress-websites/">WordPress websites &rsaquo;</a></p>
                        <p><a href="/category/services/websites/ecommerce-websites/">ecommerce websites &rsaquo;</a></p>
                        <p><a href="/category/services/websites/microsites/">Microsites &rsaquo;</a></p>
                    </div>
                </div>
                <div class="col-sm-6 no-padding col-1">
                    <img class="left-white-arrow hide-mobile" alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/next-white-rotate.png">
                    <a href="/category/services/websites/" class="image-service" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/clay-oven.jpg);"></a>
                </div>
            </div>
            <div class="row border-margin" data-aos="fade-left">
                <div class="col-sm-6 no-padding">
                    <img class="right-white-arrow hide-mobile" alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/next-white-rotate-2.png">
                    <a href="/category/services/newsletters-emails/" class="image-service" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/audi-news.jpg);"></a>
                </div>
                <div class="col-sm-6">
                    <div class="flex">
                        <h2 style="font-size: 25px;"><a href="/category/services/newsletters-emails/">Newsletters and emails</a></h2>
                        <p><a href="/category/services/newsletters-emails/newsletter-design/">Newsletter design &rsaquo;</a></p>
                        <p><a href="/category/services/newsletters-emails/email-design/">Email campaigns and email design &rsaquo;</a></p>
                        <p><a href="/category/services/newsletters-emails/email-templates/">Responsive HTML email templates &rsaquo;</a></p>
                    </div>
                </div>
            </div>
            <div class="row order-top-bottom border-margin" data-aos="fade-right">
                <div class="col-sm-6 col-2">
                    <div class="flex">
                        <h2 style="font-size: 25px;"><a href="/category/services/branding/">Branding</a></h2>
                        <p><a href="/category/services/branding/logo-design/">Logo design &rsaquo;</a></p>
                        <p><a href="/category/services/branding/brand-identity/">Brand identity &rsaquo;</a></p>
                        <p><a href="/category/services/branding/stationery/">Business stationery &rsaquo;</a></p>
                        <p><a href="/category/services/branding/photography/">Photography &rsaquo;</a></p>
                        <p><a href="/category/services/branding/illustration-infographics/">Illustration and infographics design &rsaquo;</a></p>
                    </div>
                </div>
                <div class="col-sm-6 no-padding col-1">
                    <img class="left-white-arrow hide-mobile" alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/next-white-rotate.png">
                    <a href="/category/services/branding/" class="image-service" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/eternal-emb.jpg;"></a>
                </div>
            </div>
            <div class="row border-margin" data-aos="fade-left">
                <div class="col-sm-6 no-padding">
                    <img class="right-white-arrow hide-mobile" alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/next-white-rotate-2.png">
                    <a href="/category/services/other/" class="image-service" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/jaguar-book.jpg);"></a>
                </div>
                <div class="col-sm-6">
                    <div class="flex">
                        <h2 style="font-size: 25px;"><a href="/category/services/other/">Other services</a></h2>
                        <p><a href="/category/services/other/brochure-design/">Brochures design &rsaquo;</a></p>
                        <p><a href="/category/services/other/magazine-design/">Magazine design &rsaquo;</a></p>
                        <p><a href="/category/services/other/flyer-and-poster-design/">Flyer and poster design &rsaquo;</a></p>
                        <p><a href="/category/services/other/large-format/">Large format design &rsaquo;</a></p>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <!-- /services -->
</div>
<!-- /colour -->	
	
<!-- work -->
<div style="background-color:#b5be00; width:100%">
<div class="wrapper" id="work">
<a class="home-next"><img src="<?php bloginfo('template_directory'); ?>/images/next-white.png" alt="next" width="41" height="24" /></a>
<div class="anchor-padding"></div>
<div class="title"><img src="<?php bloginfo('template_directory'); ?>/images/title-work.png" alt="Who we do it for" width="367" height="65" /></div>
<div id="honeycomb">
<a href="/category/industries/fashion" id="hex1"><div style="height:75px; width:100%;"></div>Fashion</a><a href="/category/industries/automotive" id="hex2"><div style="height:75px; width:100%;"></div>Automotive</a>
<a href="/category/industries/retail" id="hex3"><div style="height:65px; width:100%;"></div>Retail &amp;<br />Wholesale Trade</a>
<a href="/category/industries/financial" id="hex4"><div style="height:65px; width:100%;"></div>Financial &amp;<br />Technical</a>
<a href="/category/industries/care" id="hex5"><div style="height:65px; width:100%;"></div>Health &amp;<br />Social Care</a>
<a href="/category/industries/charity" id="hex6"><div style="height:65px; width:100%;"></div>Non-profit<br />&amp; Charity</a>
<a href="/category/industries/public-sector" id="hex7"><div style="height:65px; width:100%;"></div>Public<br />Sector</a>
<a href="/category/industries/leisure" id="hex8"><div style="height:65px; width:100%;"></div>Leisure &amp;<br />Tourism</a>
<a href="/category/industries/property" id="hex9"><div style="height:65px; width:100%;"></div>Property &amp;<br />Construction</a>
<a href="/category/industries/b2b" id="hex10"><div style="height:65px; width:100%;"></div>B2B &amp;<br />Corporate</a>
<a href="/category/industries/biomedical" id="hex11"><div style="height:65px; width:100%;"></div>Scientific<br />&amp; Biomedical</a>
<a href="/category/industries/education" id="hex12"><div style="height:75px; width:100%;"></div>Education</a>
</div><!-- /honeycomb -->
</div><!-- /work -->
</div><!-- /colour -->

<!-- team -->
<div style="background-color:#ffffff; width:100%; padding-bottom: 40px;">
    <div class="container" id="team">
        <div class="col-lg-12">
            <a class="home-next"><img src="<?php bloginfo('template_directory'); ?>/images/next-green.png" alt="next" width="41" height="24" /></a>
            <div class="anchor-padding"></div>
            <div class="title"><img src="<?php bloginfo('template_directory'); ?>/images/title-team.jpg" alt="Meet our team" width="310" height="65" /></div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="/sharon" id="sharon"><img src="<?php bloginfo('template_directory'); ?>/images/orange-frame.png" alt="Sharon" width="134" height="153" /></a>
                    <h2>SHARON</h2>
                    <p>Creative Director<br />&nbsp;</p>
                    <p><a href="/sharon">View profile &rsaquo;</a></p><br>
                </div>
                <div class="col-sm-4">
                    <a href="/lorinda" id="lorinda"><img src="<?php bloginfo('template_directory'); ?>/images/orange-frame.png" alt="Lorinda" width="134" height="153" /></a>
                    <h2>LORINDA</h2>
                    <p>Graphic &amp; Web Designer<br />&nbsp;</p>
                    <p><a href="/lorinda">View profile &rsaquo;</a></p><br>
                </div>
                <div class="col-sm-4">
                    <a href="/katie" id="katie"><img src="<?php bloginfo('template_directory'); ?>/images/orange-frame.png" alt="Katie" width="134" height="153" /></a>
                    <h2>KATIE</h2>
                    <p>Digital Design Executive<br />&nbsp;</p>
                    <p><a href="/katie">View profile &rsaquo;</a></p><br>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <!-- /team -->
</div>
<!-- /colour -->

<!-- contact -->
<div style="background-color:#9e1d97; width:100%">
<div class="container" style="padding-bottom: 45px;" id="home-contact" >
<a id="contact" class="home-next"><img src="<?php bloginfo('template_directory'); ?>/images/next-white.png" alt="next" width="41" height="24" /></a>
<div class="anchor-padding"></div>
<div class="row">
<div class="col-sm-7">
<h2>Your free consultation</h2>
<p>We&rsquo;ll spend an hour reviewing your marketing then make recommendations. If you&rsquo;re in Leicestershire, let&rsquo;s meet at yours. You provide the coffee and we&rsquo;ll bring the biscuits.</p> <p>If you&rsquo;re located further afield, the offer is still open, but based at our offices near the Curve Theatre in Leicester.</p> 
<p><a href="/book-consultation/" style="color:#9e1d97; text-decoration: none; height: 40px; width: 210px; display: block; background-color: #fff; text-align: center; padding-top: 10px; margin-top: 30px;">Book free consultation &rsaquo;</a></p> 
</div><!-- /col1 -->
<div class="col-sm-5">
<img class="coffee-image" src="<?php bloginfo('template_directory'); ?>/images/coffee_hive.png" alt="coffee" width="200px" height="auto" style="margin-bottom:20px;" />
</div><!-- /col1 -->
</div>
<div style="clear:both;"></div>
</div><!-- /contact -->
</div><!-- /colour -->

<!-- footer -->
<div style="background-color: #5b6770; height:100%;" >
<?php get_footer(); ?>
</div><!-- /footer background -->
<!-- footer ends -->

<script type="text/javascript">
/*
   Background Image Transition Slide Show
   Version 1.0
   October 25, 2010

   Will Bontrager
   http://www.willmaster.com/
   Copyright 2010 Bontrager Connection, LLC

   Bontrager Connection, LLC grants you 
   a royalty free license to use or modify 
   this software provided this notice appears 
   on all copies. This software is provided 
   "AS IS," without a warranty of any kind.
*/

var Images = new Array(); 

var ImageIDvalue = "image";

var TransitionIncrement = 1;

var IncrementInterval = 25;

var PauseBeforeNextImage = 3000;

/* other slides */
Images.push("<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2016/04/audi_questionaire_slider.jpg");
Images.push("<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2016/04/making-it-special-slider.jpg");
Images.push("<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2016/04/key-west-slider.jpg");
Images.push("<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2016/04/audi-email-candy-slider.jpg");

var opacity = 100;
var currentImage = 0;
var topImage = Images.length - 1;
var image = document.getElementById(ImageIDvalue);
var IE = (image.filters) ? true : false;
var timerthing;

function FadeIn() {
opacity += TransitionIncrement;
if( opacity >= 100 ) { opacity = 100; }
if( IE ) { image.filters.alpha.opacity = opacity; }
else { image.style.opacity = opacity/100; }
if( opacity == 100 ) {
   clearInterval(timerthing);
   setTimeout("StartFadeOut()",PauseBeforeNextImage);
   }
}

function FadeOut() {
opacity -= TransitionIncrement;
if( opacity <= 0 ) { opacity = 0; }
if( IE ) { image.filters.alpha.opacity = opacity; }
else { image.style.opacity = (opacity==0) ? 0 : opacity/100; }
if( opacity == 0 ) {
   clearInterval(timerthing);
   currentImage++;
   if( currentImage > topImage ) { currentImage = 0; }
   image.src = Images[currentImage];
   timerthing = setInterval("FadeIn()",IncrementInterval);
   }
}

function StartFadeOut() { timerthing = setInterval("FadeOut()",IncrementInterval); }

function StartSlideShowTransition() {
setTimeout("StartFadeOut()",PauseBeforeNextImage);
}

StartSlideShowTransition();
</script>

</div><!-- /align center -->
</div><!-- /container -->
</div> <!-- /top layer div. -->
</div> <!-- /bottom layer div. -->
<?php wp_footer(); ?>
</body>
</html>

