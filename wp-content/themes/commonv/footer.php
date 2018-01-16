<?php 
if ( is_404() ) {
} else { ?>
<footer>
<section class="disclaimer">
  <p>Copyright &copy; 2017 Common Ventures Pty Ltd.</p>
  <div class="social">
<?php if( get_field('facebook_link','option') ): ?><a target="_blank" href="<?php the_field('facebook_link','option');?>"><i class="icon-facebook"></i></a><?php endif; ?>
<?php if( get_field('instagram_link','option') ): ?><a target="_blank" href="<?php the_field('instagram_link','option');?>"><i class="icon-instagram"></i></a><?php endif; ?>
<?php if( get_field('twitter_link','option') ): ?><a target="_blank" href="<?php the_field('twitter_link','option');?>"><i class="icon-twitter"></i></a><?php endif; ?>
<?php if( get_field('linkedin_link','option') ): ?><a target="_blank" href="<?php the_field('linkedin_link','option');?>"><i class="icon-linkedin"></i></a><?php endif; ?>
<?php if( get_field('medium_link','option') ): ?><a target="_blank" href="<?php the_field('medium_link','option');?>"><i class="icon-medium"></i></a><?php endif; ?>
  </div>
  <img class="lol" src="<?php echo content_url();?>/uploads/2017/10/hand-230x300.png" alt=""/>
</section>
  <a href="<?php echo site_url('careers'); ?>" class="now-hiring">We're Hiring!</a>
</footer>
<?php } ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/vendor.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>