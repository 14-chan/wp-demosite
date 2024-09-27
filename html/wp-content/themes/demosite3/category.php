<?php get_header(); ?>

<div class="l-container">

    <!--newsセクション-->
    <section class="l-home__news u-padding__mv__news">
        <h2 class="c-home__news__ttl">News</h2>
        <div class="g-news__inner">
            <nav class="g-nav__news">
                <ul class="g-list__nav__news">
                    <li class="c-list__item__news">
                        <a class="c-nav__news__link" href="<?php echo get_category_link(get_cat_ID('すべて')); ?>">すべて</a>
                    </li>
                    <li class="c-list__item__news">
                        <a class="c-nav__news__link" href="<?php echo get_category_link(get_cat_ID('お知らせ')); ?>">お知らせ</a>
                    </li>
                    <li class="c-list__item__news">
                        <a class="c-nav__news__link" href="<?php echo get_category_link(get_cat_ID('重要')); ?>">重要</a>
                    </li>
                    <li class="c-list__item__news">
                        <a class="c-nav__news__link" href="<?php echo get_category_link(get_cat_ID('採用情報')); ?>">採用情報</a>
                    </li>
                </ul>
            </nav>

            <ul class="g-list__news u-padding__list__news">
                <!-- 現在のカテゴリー名を表示 -->
                <h3 class="c-nav__news__ttl"><?php single_cat_title(); ?></h3>

                <?php
                // 現在のページ番号を取得（ページネーション用）
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // 投稿を12取得するクエリ
                $args = array(
                    'posts_per_page' => 12,  // 取得する投稿数
                    'category_name' => single_cat_title('', false),  // 現在のカテゴリー名を使用
                    'paged' => $paged,  // ページ番号
                );
                $the_query = new WP_Query($args);

                // ループ開始
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <li class="g-list__news__item">
                        <a class="c-card__news" href="<?php the_permalink(); ?>">
                            <p class="c-card__news__date"><?php the_time('Y.m.d'); ?></p>
                            <p class="c-card__news__category">
                                <?php 
                                // カテゴリー名を表示
                                $category = get_the_category(); 
                                if (!empty($category)) {
                                    echo esc_html($category[0]->name);  // 最初のカテゴリー名を表示
                                }
                                ?>
                            </p>
                            <p class="c-card__news__ttl"><?php the_title(); ?></p>
                        </a>
                    </li>
                <?php
                    endwhile;
                else :
                ?>
                    <p>現在表示するニュースはありません。</p>
                <?php endif; ?>

                <!-- ページネーション -->
                <div class="c-pagination">
                    <?php 
                    // ページネーションの設定
                    echo paginate_links(array(
                        'total' => $the_query->max_num_pages,  // 最大ページ数
                        'current' => max(1, get_query_var('paged')),  // 現在のページ番号
                        'show_all' => false,
                        'prev_next' => false,
                        'type' => 'list',
                        'before_page_number' => '<span class="c-pagination__number">',
                        'after_page_number' => '</span>'
                    ));
                    ?>
                </div>

                <?php
                // クエリのリセット
                wp_reset_postdata();
                ?>

            </ul>
        </div>
    </section>

</div>

<?php get_footer(); ?>

