<?php get_header(); ?>
<section id="content">
  <div id="content-wrap" class="container row pt-3">
    <div id="main" class="col-md-9">
      <?php // ループ開始
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <h1><?php the_title(); ?></h1> <!-- タイトル取得 -->
          <section>
            <?php the_content(); ?> <!-- 本文取得 -->
          </section>
      <?php // ループ終了
        endwhile;
      endif;
      ?>
    </div>
    <div id="sidebar" class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>