<?php
/*
Template Name: Team
*/
?>
<?php get_header();?>



  <!--<div class="title-bar" style="background-image:url(<?php bloginfo('template_url')?>/img/office-1.jpg);">
    <h1><?php the_title();?></h1>
  </div>-->

  <main class="flexible">

<?php
if( have_rows('content_repeater') ):
    while ( have_rows('content_repeater') ) : the_row();
        ?>

  <section>

                <?php
                if( have_rows('content') ):
                    while ( have_rows('content') ) : the_row();
                         if( get_row_layout() == 'photo_bg_section' ):?>  <!-- Photo -->
                        <div class="photo-bg-inner <?php if( get_sub_field('section_type') ):  the_sub_field('section_type');  endif; ?>" style="background-image:url(<?php the_sub_field('background_image'); ?>);">
                        <div class="container  ">  
                          <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1 <?php the_sub_field('intro'); ?> <?php the_sub_field('darken'); ?>"><?php the_sub_field('content'); ?></div>
                          </div>
                        </div>
                        </div>
                        <?
                        elseif( get_row_layout() == 'full_width' ):?>  <!-- 1 Col -->
                        <div class="container <?php if( get_sub_field('section_type') ):  the_sub_field('section_type');  endif; ?>">  
                          <div class="row">
                            <div class="col-xs-12 col-md-12 col-md-offset-0 <?php the_sub_field('intro'); ?>"><?php the_sub_field('content'); ?></div>
                          </div>
                        </div> 
                        <?
                        elseif( get_row_layout() == 'two_column' ): ?>  <!-- 2 Col -->
                        <div class="container">  
                          <div class="row">
                            <div class="col-xs-12 col-sm-offset-0 col-sm-6 col-md-6"><?php the_sub_field('content_1'); ?></div>
                            <div class="col-xs-12 col-sm-offset-0 col-sm-6 col-md-6"><?php the_sub_field('content_2'); ?></div>
                          </div>
                        </div> 
                        <?
                        elseif( get_row_layout() == 'three_column' ): ?>  <!-- 3 col -->
                        <div class="container">  
                          <div class="row clearfix">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-4"><?php the_sub_field('content_1'); ?></div>
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-4"><?php the_sub_field('content_2'); ?></div>
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-4"><?php the_sub_field('content_3'); ?></div>
                          </div>
                        </div> 
                        <?
                        elseif( get_row_layout() == 'four_column' ): ?>  <!-- 4 Col -->
                        <div class="container">  
                          <div class="row clearfix">
                            <div class="col-xs-12 col-md-3 col-md-offset-0"><?php the_sub_field('content_1'); ?></div>
                            <div class="col-xs-12 col-md-3 col-md-offset-0"><?php the_sub_field('content_2'); ?></div>
                            <div class="col-xs-12 col-md-3 col-md-offset-0"><?php the_sub_field('content_3'); ?></div>
                            <div class="col-xs-12 col-md-3 col-md-offset-0"><?php the_sub_field('content_4'); ?></div>
                          </div>
                        </div> 
                        <?
                        elseif( get_row_layout() == 'one_third_two_thirds' ): ?>  <!-- 1/3 - 2/3 -->
                        <div class="container">  
                          <div class="row clearfix one-third-two-third">
                            <div class="col-xs-12 col-md-4 col-md-offset-0"><?php the_sub_field('content_1'); ?></div>
                            <div class="col-xs-12 col-md-8 col-md-offset-0"><?php the_sub_field('content_2'); ?></div>
                          </div>
                        </div> 
                        <?
                        elseif( get_row_layout() == 'button' ): ?>  <!-- Button CTA -->
                        <div class="container">  
                        <div class="row button-row">
                          <div class="col-xs-12">
                            <a href="<?php the_sub_field('url');?>" class="button large"><span><?php the_sub_field('label');?></span><?php the_sub_field('label');?></a>
                          </div>
                        </div>
                        </div>
                        <?
                        elseif( get_row_layout() == 'embed' ): ?> <!-- Vid Embed -->
                        <div class="container clearfix">  
                          <div class="row">
                            <div class="col-xs-12 embed-responsive embed-responsive-16by9">
                              <?php the_sub_field('video');?>
                            </div>
                          </div>
                        </div> 
                        <?
                        elseif( get_row_layout() == 'results' ): ?> <!-- Results -->
                               <div class="section-overlay">
                                  <span>Results</span>
                                </div>
                              <div class="results-wrapper" id="result">

                               
                              <div class="container">
                                <div class="row">
                                  <?php while(has_sub_field('result')): ?>
                                    <div class="col-xs-12 col-md-4 result">
                                      <span class="result-number"><?php the_sub_field('number');?></span>
                                      <p class="result-content"><?php the_sub_field('detail');?></p>
                                    </div>
                                  <?php endwhile; ?>
                              </div>
                              </div>
                            </div>
                            <?
                        elseif( get_row_layout() == 'full_slider' ): ?> <!-- Full-width Slider -->
                              <div class="full-slider slider">
                                <ul>
                                  <?php while(has_sub_field('slider')): ?>
                                  <li class="slide" style="background-image:url(<?php the_sub_field('background_image');?>);">
                                    <div class="container">
                                      <div class="col-xs-12"><?php the_sub_field('content');?></div>
                                    </div>
                                   </li>
                                  <?php endwhile; ?>
                              </ul>
                              <div class="slider-controls">
                                <span class="slider-control prev"><i class="icon-angle-left"></i></span>
                                <span class="slider-control next"><i class="icon-angle-right"></i></span>
                              </div>
                            </div>
                        <?
                          elseif(get_row_layout() == "gallery_grid"): ?> <!-- Gallery Grid Field -->
                          <div class="container">
                            <?php $imagesGrid = get_sub_field('gallery_grid');
                              if( $imagesGrid ): ?> 
                                  <div class="gallery-grid">
                                    <div class="grid-sizer"></div>
                                          <?php foreach( $imagesGrid as $imageGrid ): ?>
                                                  <img src="<?php echo $imageGrid['url']; ?>" alt=""/>
                                          <?php endforeach; ?>
                                  </div>
                                <?php endif; ?>
                            </div>
                       
                       

                        <? elseif(get_row_layout() == "gallery_slider"): ?> <!-- Gallery Slider Field -->
                            <?php $imagesSlider = get_sub_field('gallery_slider');
                              if( $imagesSlider ): ?> 
                                 <div class="gallery-slider-wrap">
                                  <div class="gallery-slider slider <?php the_sub_field('padding'); ?>">
                                      <ul>
                                      <?php foreach( $imagesSlider as $imageSlider ): ?>
                                        <li class="slide"><img src="<?php echo $imageSlider['url']; ?>" alt=""/></li>
                                      <?php endforeach; ?>
                                      </ul>    
                                  
                                    <div class="slider-controls">
                                      <span class="slider-control prev"><i class="icon-angle-left"></i></span>
                                      <span class="slider-control next"><i class="icon-angle-right"></i></span>
                                    </div>
                                  </div>
                                </div>
                              <?php endif; ?>
        
                        <?
                        elseif( get_row_layout() == 'spacer' ): ?>
                            <div class="spacer">&nbsp;</div>
                        <?
                        elseif( get_row_layout() == 'small_spacer' ): ?>
                        <div class="small-spacer">&nbsp;</div> 
                        <?
                        endif;
                    endwhile;
                else :
                  echo "<p class='col-xs-12'>No content found.</p>"; 
                endif;
                ?>
           
  </section>
        <?php
    endwhile;
else :
endif;
?>

</section>

<section>
  <div class="team">  
  <?php
  if( have_rows('team') ):
  while ( have_rows('team') ) : the_row();
        $image_object = get_sub_field('photo');
        $image_url_thumb = $image_object['sizes']['thumbnail'];
        $image_url_med = $image_object['sizes']['medium'];
        $image_url_large = $image_object['sizes']['large'];
  ?>
      <div class="team-member clearfix">
    <span class="bio-close"><i class="fa-close fa"></i></span>
    <div class="team-photo"><img class="team-photo-ff freezeframe freezeframe-responsive" src="<?php echo $image_url_large; ?>" alt="<?php the_sub_field('name');?>"/></div>
    <div class="team-details">
      <p><strong><?php the_sub_field('name');?></strong></p>
      <p><em><?php the_sub_field('title');?></em></p>
    </div>
    
    <div class="team-member-bio-wrap">

      <div class="team-member-bio-content">
        <div>
          <p><?php the_sub_field('bio');?></p>

          <?php if( get_sub_field('facebook_link') ): ?><a class="social-icon" target="_blank" href="http://www.facebook.com/<?php the_sub_field('facebook_link');?>"><i class="fa-facebook fa"></i></a><?php endif; ?>
              <?php if( get_sub_field('instagram_link') ): ?><a class="social-icon" target="_blank" href="http://www.instagram.com/<?php the_sub_field('instagram_link');?>"><i class="fa-instagram fa"></i></a><?php endif; ?>
              <?php if( get_sub_field('twitter_link') ): ?><a class="social-icon" target="_blank" href="http://www.twitter.com/<?php the_sub_field('twitter_link');?>"><i class="fa-twitter fa"></i></a><?php endif; ?>
              <?php if( get_sub_field('linkedin_link') ): ?><a class="social-icon" target="_blank" href="<?php the_sub_field('linkedin_link');?>/"><i class="fa-linkedin fa"></i></a><?php endif; ?>
              <?php if( get_sub_field('medium_link') ): ?><a class="social-icon" target="_blank" href="http://www.medium.com/@<?php the_sub_field('medium_link');?>"><i class="fa-medium fa"></i></a><?php endif; ?>

        </div>
      </div>
      
    </div>
  </div>
  <?php
  endwhile;
  else :
  endif;
  ?>
  </div>
</section>
</main>
<?php get_footer();?>
  