<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height ,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<title>ROOTS Inc.</title>
<?php wp_head(); ?>
</head>
<body class="pagebody">
    <div class="container">
        <!--ヘッダ-->
        <header class="header">
            <div class="header_inner">
                <h1 class="header_title"><a href="index.html">ROOTS Inc.</a></h1>
                <nav class="header_nav nav" id="js_nav">
                    <ul class="header_nav_list">
                        <li class="header_nav_item"><a class="header_nav_link" href="About.html">About</a></li>
                        <li class="header_nav_item"><a class="header_nav_link" href="Works.html">Works</a></li>
                        <li class="header_nav_item"><a class="header_nav_link" href="News.html">News</a></li>
                        <li class="header_nav_item"><a class="header_nav_link" href="Contact.html">Contact</a></li>
                    </ul>
                </nav>
                <button class="header_hamburger hamburger" id="js_hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>