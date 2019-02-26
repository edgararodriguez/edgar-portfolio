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
	<header class="site-header">
  <div class="site-header__sides">
    <a href="#" class="logo">BLOG</a>
  </div>
  <div class="site-header__sides"> <a href="#" class="menu">-</a></div>
  <div class="info">
  <h4><a href="#category">UI DESIGN</a></h4>
    <h1>Edgar's Career Portfolio</h1>
    <div class="meta">
      <a  href="https://twitter.com/nodws" target="_b" class="author"></a><br>
      By <a href="https://twitter.com/nodws" target="_b">Edgar Gasca Rodriguez</a> on Feb 26, 2019
    </div>
  </div>
    </header>

	<div id="content" class="site-content">
