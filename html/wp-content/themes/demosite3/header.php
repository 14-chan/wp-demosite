<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height ,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<title><?php echo bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body class="pagebody">
        <!--ヘッダ-->
        <header class="l-home__header">
            <div class="g-header__inner">
                <h1 class="c-home__header__ttl"><a href="index.html">ROOTS Inc.</a></h1>
                <nav class="g-nav__header" id="js__nav">
                    <ul class="g-list__header__nav">
                        <li class="c-list__header__item"><a class="c-nav__header__link" href="<?php echo get_template_directory_uri(); ?>/about__main.html">About</a></li>
                        <li class="c-list__header__item"><a class="c-nav__header__link" href="<?php echo get_template_directory_uri(); ?>/works__main.html">Works</a></li>
                        <li class="c-list__header__item"><a class="c-nav__header__link" href="<?php echo get_template_directory_uri(); ?>/single.php">News</a></li>
                        <li class="c-list__header__item"><a class="c-nav__header__link" href="<?php echo get_template_directory_uri(); ?>/contact.html">Contact</a></li>
                    </ul>
                </nav>
                <button class="g-hamb-btn__header c-hamb__btn" id="js__hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>