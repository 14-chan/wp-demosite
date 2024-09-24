<?php get_header(); ?>

    <div class="l-container">

        <!--newsセクション-->
        <section class="l-home__news u-padding__mv__news">
            <h2 class="c-home__news__ttl">News</h2>
            <div class="g-news__inner">
                <nav class="g-nav__news">
                    <ul class="g-list__nav__news">
                        <li class="c-list__item__news"><a class="c-nav__news__link" href="">すべて</a></li>
                        <li class="c-list__item__news"><a class="c-nav__news__link" href="">お知らせ</a></li>
                        <li class="c-list__item__news"><a class="c-nav__news__link" href="">重要</a></li>
                        <li class="c-list__item__news"><a class="c-nav__news__link" href="">採用情報</a></li>
                    </ul>
                </nav>
                <ul class="g-list__news u-padding__list__news">
                    <h3 class="c-nav__news__ttl">すべて</h3>
                    <?php
// 投稿を12取得するクエリ
$args = array(
    'posts_per_page' => 12,  // 取得する投稿数
);
$the_query = new WP_Query($args);

// ループ開始
if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
?>
                <li class="g-list__news__item">
                    <a class="c-card__news" href="<?php the_permalink(); ?>">
                        <p class="c-card__news__date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <p class="c-card__news__category"><?php the_title(); ?></p>
                        <p class="c-card__news__ttl"><?php the_content(); ?></p>                       
                    </a>
                </li>
        <?php // ループ終了
            endwhile;
        else : ?>
            <p>現在表示するニュースはありません。</p>
        <?php endif; ?>
                    <div class="g-pagenation">
                        <li class="c-pagenation__pager"><a href="">1</li>
                        <li class="c-pagenation__pager"><a href="">2</li>
                        <li class="c-pagenation__pager"><a href="">3</li>
                        <li class="c-pagenation__pager"><a href="">4</li>
                    </div>
                </ul>
            </div>
        </section>

<?php get_footer(); ?>