<?php get_header(); ?>
<div id="container">
<div id="main">
<?php get_template_part('loop'); ?>
<!-- products -->
<div id="news" class="box">
	<div class="section-header">
	<h2><img src="<?php bloginfo('template_url'); ?>/images-1/ttl_products.gif" width="130" height="23" alt="PRODUCTS"></h2>
	<p><a href="<?php bloginfo('url'); ?>/news/">一覧を見る</a></p>
	</div><!-- section-header -->
<?php query_posts('category_name=products'); ?>
<?php if(have_posts()) : ?>
	<ul class="item-lists">
	<?php while(have_posts()) : the_post(); ?>
		<li>
		<?php if(has_post_thumbnail()) : ?>
		<?php the_post_thumbnail(); ?>
		<?php else : ?>
		<img src="<?php bloginfo('template_url') ?>/images-1/thum_noimage.gif" alt="NO IMAGE" width="110" height="110">
		<?php endif; ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</li>
		<p><?php echo post_custom('価格'); ?></p>
	<?php endwhile; ?>
	</ul>
<?php endif; wp_reset_query(); ?>
</div>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
