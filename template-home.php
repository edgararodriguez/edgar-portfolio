<?php
/**
 * Template Name: Home
 */

get_header();
?>
<section class="content">
  <p class="content__title">Welcome!</p>
  <div class="content__youtube-video">
    <?php the_field('youtube_video');?>
</div>
<?php the_content(); ?>
<p align="center"><a href="<?php the_field('site_resume');?>" class="content__btn" target="_b">Check Out My Resume!✏️🖥️</a>
</p>
</section>


<?php
get_footer();
