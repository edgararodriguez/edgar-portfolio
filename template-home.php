<?php
/**
 * Template Name: Home
 */

get_header();
?>
<section class="content">
  <div class="content__youtube-video">
    <?php the_field('youtube_video');?>
</div>
<p><?php the_field('paragraph_one_content');?></p>
<p><?php the_field('paragraph_two_content');?></p>
  <p align="center"><a href="<?php the_field('site_resume');?>" class="btn twtr" target="_b">Check Out My Resume! ✏️🖥️</a>
  </p>

</section>


<?php
get_footer();
