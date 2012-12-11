<?php get_header(); ?>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="main">
		<div class="post">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>
		<p class="postmetadata">Published on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
<?php endwhile; else: ?>
<p>投稿記事がありません。</p>
<?php endif ?>


<?php $my_query = new WP_Query('&cat=0'); ?>
<?php if($my_query->have_posts()) : ?>
	<?php while($my_query->have_posts()) : $my_query->the_post(); ?>
	
		<div class="post">
		<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
		</div>
		<p class="postmetadata">Published on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
	
	<?php endwhile; else: ?>
<p>投稿記事がありません。</p>
<?php endif ?>
<?php wp_reset_postdata(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
