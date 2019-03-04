<?php
/**
 * Template Name: Home
 */

get_header();
?>
<section class="content">
  <div>
    <?php the_field('youtube_video');?>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nisl turpis, porttitor et finibus id, viverra a metus. Praesent non ante sed orci posuere varius quis sit amet dui. Cras molestie magna orci, id gravida dolor molestie in. Duis sollicitudin turpis quis tortor egestas, ut ultrices nisl elementum. Vestibulum sed ipsum eget nulla laoreet cursus in ac sem. Integer a suscipit justo, quis aliquam sapien. Maecenas et tellus nibh. Vivamus tincidunt eros id commodo pellentesque.</p>
  <p align="center"><a href="<?php the_field('site_resume');?>" class="btn twtr" target="_b">Check Out My Resume! ✏️🖥️</a>
  </p>

</section>


<?php
get_footer();
