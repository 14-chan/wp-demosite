<?php
/*----------------------------------------------------------------------------------------------------
 *
 *
 * Template Name: news投稿ページ
 *
 *
 *--------------------------------------------------------------------------------------------------*/
?>

<div class="post news">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<div>
			<?php echo get_the_date('Y.m.d'); ?>
			<?php the_category(' '); ?>
		</div>
		<?php the_content(); ?>
	<?php endwhile; else : ?>
		<p>記事が見つかりません。</p>
	<?php endif; ?>
</div>