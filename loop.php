<div id="news" class="box">
	<div class="section-header">
	<h2><img src="<?php bloginfo('template_url'); ?>/images-1/ttl_news.gif" width="80" height="23" alt="NEWS"></h2>
	<?php if(is_home()): ?>
	<p><a href="<?php bloginfo('url'); ?>/news/">一覧を見る</a></p>
	<?php endif ?>
	</div><!-- section-header -->

<?php if(have_posts()) : ?>
<dl>
	<?php while(have_posts()) : the_post(); ?>
	<dt><?php the_time('Y/m/d'); ?></dt>
	<?php
	$cats = get_the_category();
	$cats = $cats[0];
	?>
	<dd class="<?php echo $cats->category_nicename; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php if(is_single()) : ?>
	<?php the_content(); ?>
	<?php else : ?>
	<?php the_excerpt(); ?>
	<?php endif ?>
	</dd>
	<?php endwhile; ?>
</dl>
<?php else: ?>
<p>投稿記事がありません。</p>
<?php endif ?>

</div><!-- news -->
