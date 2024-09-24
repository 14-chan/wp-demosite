<?php get_header(); ?>


    <div class="l-container">

    <!--投稿ページ-->
    <section class="g-post__news">
        <h2 class="c-post__ttl"><?php the_title(); ?></h2>
        <p class="c-post__date"><?php echo get_the_date('Y.m.d'); ?></p>
        <p class="c-post__content"><?php the_content(); ?></p>
    </section>

    </div>


<?php get_footer(); ?>
