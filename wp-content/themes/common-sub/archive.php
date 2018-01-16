<?php get_header();?>



        <section>
      <div class="container">
        <div class="col-xs-12 col-md-9">
          <?php if(have_posts()){
          while(have_posts()){
            the_post();
            ?>
            <div class="post listing b40 col-xs-12 col-md-6">
              <?php if( get_field('image') ): ?>
                <img src="<?php the_field('image');?>" class="img-responsive" alt="<?php the_title();?>"/>
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <?php the_date('l, F j, Y', '<span class="meta">', '</span>'); ?>
              <p><?php the_excerpt();?></p>
                <a class="button small" href="<?php the_permalink();?>">
                <span><i class="icon-angle-right"></i><i class="icon-angle-right"></i></span><span>Read More</span>
              </a>
            </div>  
                        <?php
          }
        } else {
          echo "Sorry, there's nothing here!";
        }
      ?> 
        </div>

        <div class="col-xs-12 col-md-3">
          <?php get_template_part('sidebar');?>
        </div>

      </div>
    </section>


<?php get_footer();?>
