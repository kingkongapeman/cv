<?php get_header();?>
<div class="title-bar fourohfour wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s" style="background-image:url(<?php the_field('404_header_image','optionzzz');?>);"/>
  	<h1>404: Page Not Found</h1>
  </div>
<div class="starfield"></div>

<div class="four-oh-four-info text-centered">
	<h2 class="wow zoomIn" data-wow-duration="2s" data-wow-delay="2s">You seem lost.</h2>
	<a href="<?php echo site_url(); ?>" class="button large wow zoomIn" data-wow-duration="3s" data-wow-delay="2s"><span>Click here to go home</span>Click here to go home</a>
</div>

<?php get_footer();?>
