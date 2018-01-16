<?php
/*
Template Name: Flexible Layout
*/
?>
<?php get_header();?>
<main class="flexible">
<?php
if( have_rows('content_repeater') ):
    while ( have_rows('content_repeater') ) : the_row();
	//i just added this
  //i just added this locally
  //added to master
        ?>
  <section>
               <?php
                if( have_rows('content') ):
                    while ( have_rows('content') ) : the_row();
                         if( get_row_layout() == 'photo_bg_section' ):?>  <!-- Photo -->
                        <div class="photo-bg-inner <?php if( get_sub_field('section_type') ):  the_sub_field('section_type');  endif; ?>" style="background-image:url(<?php the_sub_field('background_image'); ?>);">
                        <div class="container">  
                          <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1 <?php the_sub_field('intro'); ?> <?php the_sub_field('darken'); ?>"><?php the_sub_field('content'); ?></div>
                          </div>
                        </div>
                        </div>
                        <?
                        elseif( get_row_layout() == 'full_width' ):?>  <!-- 1 Col -->
                        <div class="container <?php if( get_sub_field('section_type') ):  the_sub_field('section_type');  endif; ?>">  
                          <div class="row">
                            <div class="col-xs-12 <?php the_sub_field('columns');?> <?php the_sub_field('intro'); ?>"><?php the_sub_field('content'); ?></div>
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
						elseif( get_row_layout() == 'flexbox_hero' ): ?>  <!--  L F -->
                        <div class="flex-hero" style="background-image:('<?php the_sub_field('background'); ?>');background-size:cover;background-position:50% 50%;">
								<div><?php the_sub_field('content'); ?></div>                          
                        </div> 
                        <?	
                        elseif( get_row_layout() == 'left_column_flexbox' ): ?>  <!--  L F -->
                        <div class="flexbox-row content-left">
                          <div class="flex-content">
								<div><?php the_sub_field('content'); ?></div>
						  </div>
                          <?php
                          $image_object = get_sub_field('image');
                          $image_size_med = 'medium';
                          $image_size_large = 'large';
                          $image_url_med = $image_object['sizes']['medium'];
                          $image_url_large = $image_object['sizes']['large'];
                          ?>
                          <div class="flex-image"><img src="<?php echo $image_url_med; ?>" srcset="<?php echo $image_url_med;?> 400w, <?php echo $image_url_large;?> 992w" alt=""></div>
                        </div> 
                        <?
                        elseif( get_row_layout() == 'right_column_flexbox' ): ?>  <!--R F -->
                        <div class="flexbox-row content-right">
                          <div class="flex-content">
								<div><?php the_sub_field('content'); ?></div>
						  </div>
                          <?php
                          $image_object = get_sub_field('image');
                          $image_size_med = 'medium';
                          $image_size_large = 'large';
                          $image_url_med = $image_object['sizes']['medium'];
                          $image_url_large = $image_object['sizes']['large'];
                          ?>
                          <div class="flex-image"><img src="<?php echo $image_url_med; ?>" srcset="<?php echo $image_url_med;?> 400w, <?php echo $image_url_large;?> 992w" alt=""></div>
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
                          <!--<div class="container">
                            <?php $imagesGrid = get_sub_field('gallery_grid');
                              if( $imagesGrid ): ?> 
                                  <div class="gallery-grid <?php the_sub_field('grid_columns');?>">
                                    <div class="grid-sizer"></div>
                                          <?php foreach( $imagesGrid as $imageGrid ): ?>
                                                  <img src="<?php echo $imageGrid['url']; ?>" alt=""/>
                                          <?php endforeach; ?>
                                  </div>
                                <?php endif; ?>
                            </div>-->
<div class="container">
 <?php $imagesGrid = get_sub_field('gallery_grid');
   if( $imagesGrid ): ?> 
       <div class="gallery-grid <?php the_sub_field('grid_columns');?>">
         <div class="grid-sizer"></div>
               <?php foreach( $imagesGrid as $imageGrid ):
               $image_url_thumb = $imageGrid['sizes']['thumbnail'];
               $image_url_med = $imageGrid['sizes']['medium'];
               $image_url_large = $imageGrid['sizes']['large'];
                ?>
                       <img src="<?php echo $image_url_med; ?>" srcset="<?php echo $image_url_thumb;?> 400w, <?php echo $image_url_med;?> 700w, <?php echo $image_url_large;?> 992w" alt="<?php the_title();?>" alt=""/>
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



</main>


<?php get_footer();?>
