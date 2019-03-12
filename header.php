<?php
/**
 * Theme header
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header>
		<div class="site-header">
  <div class="site-header__sides">
    <a href="#" class="site-header__logo">EGR</a>
  </div>
  <div class="site-header__sides"></div>
  <div class="site-header__info">
  <h4><a href="https://github.com/edgararodriguez">Github</a></h4>
    <h1 class="site-header__title"><?php the_field('site-header__title');?></h1>
    <div class="site-header__meta">
      <a  href="https://www.instagram.com/egriii/" target="_b" class="site-header__author" style="background-image: url(<?php the_field('site-header__author_img'); ?>);"></a><br>
      By <a href="https://www.instagram.com/egriii/" target="_b">Edgar Gasca Rodriguez</a>
    </div>
		<a href="https://open.spotify.com/user/1230614907?si=kOD-r3mbRC-_odapiTVrvQ"><i class="fab fa-spotify"></i></a>
		<a href="https://www.instagram.com/egriii/"><i class="fab fa-instagram"></i></a>
		<a href="https://twitter.com/EGR_III"><i class="fab fa-twitter"></i></a>
		<a href="https://www.linkedin.com/in/edgar-gasca-rodriguez-123a45159/"><i class="fab fa-linkedin"></i></a>
		<a href="https://github.com/edgararodriguez"><i class="fab fa-github"></i></a>
  </div>
</div>
    </header>

	<div id="content" class="site-content">
