<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="max-image-preview:large">

    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="<?php echo esc_attr(get_option('google_site_verification')); ?>">

    <!-- 動的タイトル -->
    <title><?php wp_title(''); ?></title>

    <!-- RSS フィード -->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>">

    <!-- WordPressのヘッダーフック -->
    <?php wp_head(); ?>
</head>
<body>


<header class="navbar navbar-expand-lg navbar-light header">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-01.svg" alt="株式会社至誠テクノロジーズ" class="header_h1_img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto header_nav">
                <li class="nav-item header_nav_nav-item"><a href="#business-content" class="nav-link header_nav_nav-link">事業内容</a></li>
                <li class="nav-item header_nav_nav-item"><a href="#company" class="nav-link header_nav_nav-link">会社概要</a></li>
                <li class="nav-item header_nav_nav-item"><a href="#news" class="nav-link header_nav_nav-link">お知らせ</a></li>
                <li class="nav-item"><a href="#contact" class="header_nav_contactlink linkbutton">お問い合わせ</a></li>
            </ul>
        </div>
    </div>
</header>
