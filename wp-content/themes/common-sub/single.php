<?php
/*
Template Name: Single Post
*/
?>

<?php get_header();?>


  <div class="title-bar" style="background-image:url(<?php the_field('header_image',6);?>);">
  	<h1>Blog</h1>
  </div>

  <section class="post-content">
  	<div class="container">

		<div class="row">
  		<div class="post-content col-xs-12 col-md-8 col-md-offset-2">
				<h2><?php the_title();?></h2>
  		<span class="meta">by <?php the_author();?> on <?php the_date('l, F j, Y'); ?></span>
	<hr>
  			   <?php if(have_posts()){
          while(have_posts()){
            the_post();
            ?>
            
            <?php the_content(); ?>
			<div class="sharethis-inline-share-buttons"></div>
			
			<?php if(get_the_author_meta('description') ): ?>
			<div class="row">
			<div class="author-info col-xs-12 col-md-8">
			<span class="author-sub">About the Author</span>
			<p><em><?php echo (get_the_author_meta('description')); ?></em></p>

			<?php if(get_the_author_meta('facebook') ): ?>
  				<a class="social-icon" href="<?php echo get_the_author_meta('facebook'); ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<?php else: 
 			endif; ?>

			<?php if(get_the_author_meta('twitter') ): ?>
  				<a class="social-icon" href="http://www.twitter.com/<?php echo get_the_author_meta('twitter'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<?php else: 
 			endif; ?>

			</div>
			</div>
			<?php else: 
 			endif; ?>
			




			</div>
                        <?php
          }
        } else {
          echo "Sorry, there's nothing here!";
        }
      ?> 	
  		</div>
	</div>
  	</div>
  </section>


  <section class="related-posts clearfix">

  	<div class="container">
		<div class="col-xs-12 text-center">
			<h3>Recent Posts</h3>
		</div>
	</div>
<?php query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post();
								   $image_object = get_field('featured_image');
                   				   $image_size_med = 'medium';
              				       $image_size_large = 'large';
             				       $image_url_med = $image_object['sizes']['medium'];
             				       $image_url_large = $image_object['sizes']['large'];
 ?>
<a class="blog-tile" href="<?php the_permalink(); ?>">
	<div class="tile-content">
		<div class="tile-info">
			<h3><?php the_title(); ?></h3>
			<span class="detail">by <?php the_author();?> on <?php the_date('l, F j, Y'); ?></span>
			<div class="excerpt"><?php the_excerpt();?></div>
		</div>
		<img src="<?php echo $image_url_med; ?>" srcset="<?php echo $image_url_med;?> 400w, <?php echo $image_url_large;?> 992w" alt="<?php the_title(); ?>">
	</div>
</a>
<?php endwhile;?>
<?php else : ?>
<?php endif; wp_reset_query(); ?>
  </section>
<?php get_footer();?>
