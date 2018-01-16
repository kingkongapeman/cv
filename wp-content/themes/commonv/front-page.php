<?php
/*
Template Name: Home
*/
?>
<?php get_header();?>

  <section class="page-header">
      <video poster="<?php the_field('video_poster');?>" id="bgvid" playsinline autoplay muted loop>
    	<source src="http://cdn.commonv.com.au/wp-content/uploads/2017/10/reel_frontpage_1_c.mp4" type="video/mp4">
    </video>
 	<a class="down-btn external" href="#about-us"><i class="icon-angle-down"></i></a>
    </section>

    <main>
    	<section id="about-us" class="section-white">
    		
    		<div class="section-overlay">
    			<span>Welcome</span>
    		</div>

    		<div class="container">
    			<div class="row">
    				<div class="hero-copy col-xs-12 wow fadeInUp" data-wow-duration="2s">
    					<p><?php the_field('about_copy');?></p>
    				</div>
    			</div>
    		</div>
    	</section>

    	<section class="section-grey">

    	<div class="section-overlay">
    			<span>Work</span>
    		</div>

    		<div class="container">
    			<div class="row">
    				
    				

 <?php 
        // $current_page = get_the_ID();         
        $args = array(
          'numberposts' => 4,
          'post_type'   => 'page',
          'posts_per_page' => 4,
          'post_parent' => 165
        );
        $case_studies = new WP_Query( $args );
        ?>
        <?php if( $case_studies->have_posts() ): ?>
          <?php while( $case_studies->have_posts() ) : $case_studies->the_post(); 
                    $image_object = get_field('featured_image');
                    $image_size_med = 'medium';
                    $image_size_large = 'large';
                    $image_url_med = $image_object['sizes']['medium'];
                    $image_url_large = $image_object['sizes']['large'];
          ?>
                    <div class="case-study">
                        <a href="<?php the_permalink();?>" class="project-card wow fadeIn" data-wow-duration="2s">
                          <img class="card-img" src="<?php echo $image_url_med; ?>" srcset="<?php echo $image_url_med;?> 400w, <?php echo $image_url_large;?> 992w" alt="<?php the_title();?>">
                        <div class="card-footer">
                            <h3><?php the_title();?></h3>
                            <p><?php the_field('project_details');?></p>
                        </div>
                        <div class="card-overlay" style="background-color:<?php the_field('brand_colour');?>"></div>
                        </a>
                    </div>
          <?php endwhile; ?>
        <?php endif; ?> 

        <?php wp_reset_query();  ?>    				    

    			</div>
    			<div class="row">
	    			<div class="col-xs-12">
	    				<a href="<?php echo site_url('work'); ?>" class="button large wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s"><span>See More Work</span>See More Work</a>
	    			</div>
    			</div>
    		</div>
    	</section>

    	<section class="section-black photo-bg" style="background-image:url(<?php the_field('process_background')?>);">
    	
    		<div class="section-overlay">
    			<span>About Us</span>
    		</div>

    		<div class="container">
    			<div class="row">
    				<div class="hero-copy col-xs-12  wow fadeInUp " data-wow-duration="2s" >
    					<p><?php the_field('process_copy');?></p>
						<a href="<?php echo site_url('about-us'); ?>" class="button large wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s"><span>Read more</span>Read more</a>
    				</div>
    			</div>
    		</div>
    	</section>

    	<section class="section-white">
    		
    		<div class="section-overlay">
    			<span>Clients</span>
    		</div>

    		<div class="container">
    			<div class="row">
                    <?php
                    if( have_rows('clients') ):
                    while ( have_rows('clients') ) : the_row();?>
                     <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="client-link wow fadeIn" data-wow-duration="2s""><img src="<?php the_sub_field('client_logo');?>" alt="<?php the_sub_field('client_name');?>"/></div>
                    </div> 
                    <?php
                    endwhile;
                    else :
                    endif;
                    ?>
    			</div>
    		</div>
    	</section>

    </main>

<?php get_footer();?>


