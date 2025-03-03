<?php get_header(); ?>

<div class="main">
    <div class="index_top" id="top">
        <div class="index_top_left">
            <div class="index_top_content container">
                <div class="index_top_content-wrap row justify-content-center align-items-center h-100">
                    <div class="index_top_content-left col-auto text-center">
                        <div class="index_top_content_title">
                            <h2 class="index_top_content_title-h2 align-self-center">
                                <p><strong>明日がちょっと豊かになる。</strong></p>
                                <p><strong>そんなDXを一緒にはじめませんか。</strong></p>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index_top_right d-flex flex-column">
            <div class="d-flex align-items-center justify-content-center position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-02.svg" alt="SHISEI TECHNOLOGIES" class="index_top_logo">
            </div>
            <a href="#business-content" class="index_top_scroll">
                <img src="<?php echo get_template_directory_uri(); ?>/img/scroll@2x.png" alt="Scroll" class="index_top_scroll-img">
            </a>
        </div>
    </div>
    <div class="container index_business-content pt-5 pb-5" id="business-content">
        <h2 class="h2 pt-5 pb-5">
            <p class="text-center">
                <strong>お客様の課題に寄り添い<br>
                    DX化提案から開発、運用までをサポート</strong>
            </p>
        </h2>
        <div class="mb-5">
            <p class="text-center">
                「何から始めたら良いか分からない！」そんな時でも大丈夫です。<br>
                中小企業のDX化を経験してきたエンジニアが、お客様のお困りごとを丁寧に伺い、最適な提案をさせていただきます。<br>
                必要に応じて、パッケージシステムの導入やシステムの新規開発を行います。
            </p>
        </div>
        <div class="justify-content-center">
        <ul class="pt-5 pb-5 d-flex flex-wrap gap-4 mb-5 index_business-content_list justify-content-center ps-0">
            <li class="mx-3 col-md index_business-content_list_li p-4 d-flex flex-column">
                <div class="index_business-content_list_li_img d-flex justify-content-center align-items-center" style="height: 200px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business-content-01.svg" alt="WEBシステム開発" class="w-75 h-100 object-fit-contain">
                </div>
                <div class="mt-5 flex-grow-1 d-flex flex-column">
                    <h3 class="h4 mb-3"><strong>WEBシステム開発</strong></h3>
                    <div class="mb-3">
                        Python / HTML / CSS / JavaScriptを使ってWEBシステムの開発を行ってきました(Django)。新規のシステム開発、既存システムの改修などお気軽にご相談ください。
                    </div>
                </div>
            </li>
            <li class="mx-3 col-md index_business-content_list_li p-4 d-flex flex-column">
                <div class="index_business-content_list_li_img d-flex justify-content-center align-items-center" style="height: 200px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business-content-02.svg" alt="生成AI導入支援" class="w-75 h-100 object-fit-contain">
                </div>
                <div class="mt-5 flex-grow-1 d-flex flex-column">
                    <h3 class="h4 mb-3"><strong>生成AI導入支援</strong></h3>
                    <div class="mb-3">
                        ChatGPTをはじめとした生成AIが世の中を大きく変えています。<br>私も日々、生成AIを活用しながら働き方が大きく変わったことを感じます。<br>
                        お客様の事業やシステムにどのように組み込めば良いか、ご提案させていただきます。
                    </div>
                </div>
            </li>
        </ul>
        </div>
        <div class="mt-5 mb-5 text-center">
            <a href="#contact" class="d-md-block m-md-auto w-50 btn linkbutton">お問い合わせはこちら</a>
        </div>
    </div>
    <div class="index_company pt-5 pb-5 d-flex align-items-center" id="company">
        <div class="container d-flex justify-content-center align-items-center index_company_container text-center">
            <div class="mt-5 mb-5 pt-5 pb-5 index_company_content">
                <h2 class="h2 pt-5 pb-5">
                    <p class="text-center"><strong>会社概要</strong></p>
                </h2>
                <div class="d-inline-block w-75 text-start">
                    <dl>
                        <dt>会社名</dt>
                        <dd>株式会社至誠テクノロジーズ</dd>
                    </dl>
                    <dl>
                        <dt>代表取締役</dt>
                        <dd>井口　泰成</dd>
                    </dl>
                    <dl>
                        <dt>所在地</dt>
                        <dd>〒532-0001 大阪府大阪市淀川区十八条1丁目1-3</dd>
                    </dl>
                    <dl>
                        <dt>事業内容</dt>
                        <dd>WEBシステム開発、生成AI導入支援</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <div class="index_news mt-5 mb-5 pt-5 pb-5" id="news">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="h2 pt-5 pb-5">
                <p class="text-center"><strong>お知らせ</strong></p>
            </h2>
            <div class="d-inline-block w-75">
                <div class="news_li">
                    <a href="#" class="news_link_item">
                        <div class="news_li_date">2025年1月1日</div>
                        <div class="news_li_text">ダミーテキスト。</div>
                        <div class="news_arrow">＞</div>
                    </a>
                </div>
                <div class="news_li">
                    <a href="#" class="news_link_item">
                        <div class="news_li_date">2025年1月1日</div>
                        <div class="news_li_text">ダミーテキスト。ダミーテキスト。</div>
                        <div class="news_arrow">＞</div>
                    </a>
                </div>
                <div class="news_li">
                    <a href="#" class="news_link_item">
                        <div class="news_li_date">2025年1月1日</div>
                        <div class="news_li_text">ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                        <div class="news_arrow">＞</div>
                    </a>
                </div>
                <div class="news_li">
                    <a href="#" class="news_link_item">
                        <div class="news_li_date">2025年1月1日</div>
                        <div class="news_li_text">ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                        <div class="news_arrow">＞</div>
                    </a>
                </div>
                <div class="news_li">
                    <a href="#" class="news_link_item">
                        <div class="news_li_date">2025年1月1日</div>
                        <div class="news_li_text">ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                        <div class="news_arrow">＞</div>
                    </a>
                </div>
            </div>
            <div class="news_link w-75 mt-3">
                <a href="#">過去のお知らせはこちら <span class="news_arrow">＞</span></a>
            </div>
        </div>
    </div>


    <div class="index_contact pt-5 pb-5" id="contact">
        <div class="container-lg pt-5 pb-5 d-flex flex-column align-items-center">
            <h2 class="h2 pb-5">
                <p class="text-center"><strong>お問い合わせ</strong></p>
            </h2>
            <div class="pb-5 text-center">開発のご質問・ご相談は、以下のフォームよりお問い合せください。</div>
                <div class="d-inline-block w-75">
                    <?php
                    $form_title = 'Contact form 1'; // Contact Form 7 のフォームタイトル

                    // WP_Query でフォーム ID を取得
                    $query = new WP_Query(array(
                        'post_type'  => 'wpcf7_contact_form',
                        'title'      => $form_title,
                        'posts_per_page' => 1
                    ));

                    if ($query->have_posts()) {
                        $query->the_post();
                        $form_id = get_the_ID();
                        echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="' . esc_attr($form_title) . '"]');
                        wp_reset_postdata();
                    } else {
                        echo '<p>フォームが見つかりません。</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
