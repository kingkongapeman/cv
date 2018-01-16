<?php
/*
Template Name: Blog
*/
?>

<?php get_header();?>

  <div class="title-bar" style="background-image:url(<?php the_field('header_image',6);?>);">
  	<h1>Blog</h1>
  </div>


<main>
  <section class="blog-content">

  				<div class="post-panel masonry">
				<div class="grid-sizer"></div>
  					  	  <?php if(have_posts()){
					          while(have_posts()){
					            the_post();
							   	   $image_object = get_field('featured_image');
                   				   $image_size_med = 'medium';
              				       $image_size_large = 'large';
             				       $image_url_med = $image_object['sizes']['medium'];
             				       $image_url_large = $image_object['sizes']['large'];
					            ?>
			  					
				              <a class="blog-tile <?php the_field('featured_post');?>" href="<?php the_permalink();?>"><div class="tile-content"><div class="tile-info"><h3><?php the_title();?></h3><p><?php the_field('summary');?></p><span class="detail">by <?php the_author();?> on <?php the_date('l, F j, Y'); ?></span>
<div class="excerpt"><?php the_excerpt();?></div>
</div><img src="<?php echo $image_url_med; ?>" srcset="<?php echo $image_url_med;?> 400w, <?php echo $image_url_large;?> 992w" alt="<?php the_title();?>"></div></a>

					      <?php
					          }
					        } else {
					          echo "Sorry, there's nothing here!";
					        }
					      ?> 
  				</div>
  </section>
</main>

<?php get_footer();?>
