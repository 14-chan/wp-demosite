<?php get_header(); ?>

        <!--ヘッダ画像-->
        <div class="g-home__header__img">
            <picture class="c-item__header__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/header_img.png">
            </picture>
        </div>
    
    <div class="l-container">    
        <!--Aboutセクション-->
        <section class="l-home__about">
            <h2 class="c-home__about__ttl">About</h2>
            <div class="g-about__inner">
                <div class="g-content__about">
                    <h3 class="c-content__about__ttl">Webサイト作ります</h3>
                    <li class="c-list__main__txt__about">私たちは長崎を拠点に活動するWebプロダクションです。</li>
                    <li class="c-list__main__txt__about">Webサイトの企画、デザイン、システム開発、</li>
                    <li class="c-list__main__txt__about">運営までお引き受けいたします。</li>
                    <div class="c-space__about">
                        <span></span>
                    </div>
                    <div class="g-home__about__morebtn c-more__btn" data-order="1">
                    <a class="c-more__btn__link" href="">
                        <span>もっと見る</span><i></i>
                    </a>
                    </div>
                </div>
                <div class="g-home__img__about">
                    <img class="c-img__about__item" src="<?php echo get_template_directory_uri(); ?>/images/about_img.png"></div>
            </div>
        </section>


        <!--Worksセクション(修正)-->
        <section class="l-home__works">
            <h2 class="c-home__works__ttl">Works</h2>
            <ul class="g-works__nav">
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
                <li class="g-works__nav__item">
                    <a href="">
                        <picture class="c-works__nav__item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/works_img.png" alt="">
                        </picture>
                        <p class="c-works__nav__item__name">ABC 株式会社</p>
                    </a>
                </li>
            </ul>
            <div class="c-more__btn" data-order="2">
                <a class="c-more__btn__link" href="">
                    <span>もっと見る</span><i></i>
                </a>
            </div>
    </section>

        <!--Newsセクション(修正)-->
<section class="l-home__news">
    <h2 class="c-home__news__ttl">News</h2>
    <ul class="g-list__news">
    <?php
// 投稿を3つ取得するクエリ
$args = array(
    'posts_per_page' => 3,  // 取得する投稿数
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
    </ul>
    <div class="c-more__btn" data-order="3">
        <a class="c-more__btn__link" href="">
            <span>もっと見る</span><i></i>
        </a>
    </div>
</section>

<?php get_footer(); ?>