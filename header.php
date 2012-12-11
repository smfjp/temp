<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="discription" content="first_temp">
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<link rel="alternate" type="application/rss+xml"
		title="RSS FEED" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="stylesheet" type="text/css" 
			href="http://yui.yahooapis.com/3.7.3/build/cssreset/cssreset-min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style.css" ?>" type="text/css">
</head>
<?php wp_head(); ?>
<body>
		<div id="header">
		<div id="inner-header">
		<div id="header-top">
		<div class="fLeft">
		<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images-1/logo.gif" width="184" height="20" alt="<?php bloginfo('name'); ?>"></a></h1>
		<p><?php bloginfo('description'); ?></p>
		</div><!-- fLeft -->
		<div class="fRight">
		<ul>
		<li><a href="<?php bloginfo('url'); ?>/sitemap/" class="sitemap">サイトマップ</a></li><li><a href="<?php bloginfo('rss2_url'); ?>" class="rss">RSS FEED</a></li>
		</ul>
		</div><!--fRight-->
		</div><!--header-top-->
		<div id="header-nav">
		<?php wp_nav_menu(array('theme_location' => 'nav')); ?>
		</div>
		<div id="header-gra">
		<?php if(is_home()): ?>
		<img src="<?php bloginfo('template_url'); ?>/images-1/gra_main.jpg" width="960" height="300" alt="">
		<?php else: ?>
		<img src="<?php bloginfo('template_url'); ?>/images-1/gra_news.jpg" width="960" height="70" alt="">
		<?php endif ?>
		</div>
		</div><!--inner-header-->
		</div>
