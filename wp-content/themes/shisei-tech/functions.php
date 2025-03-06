<?php
function shisei_enqueue_scripts() {
    // BootstrapのCSSを読み込む（integrity付き）
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), null);
    wp_script_add_data('bootstrap-css', 'integrity', 'sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC');
    wp_script_add_data('bootstrap-css', 'crossorigin', 'anonymous');

    // WordPressのメインCSSを読み込む
    wp_enqueue_style('shisei-theme-style', get_stylesheet_uri());

    // BootstrapのJSを読み込む（integrity付き）
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
        array(),
        null,
        true
    );
    // wp_script_add_data('bootstrap-js', 'integrity', 'sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM');
    wp_script_add_data('bootstrap-js', 'crossorigin', 'anonymous');

     // **js/menu.js を WordPress に登録**
    wp_enqueue_script(
        'shisei-menu-js', // ハンドル名（ユニークな識別子）
        get_template_directory_uri() . '/js/menu.js', // js/menu.js のパス
        array('bootstrap-js'), // Bootstrap JS に依存
        null,
        true // `true` でフッターに読み込む
    );
}
add_action('wp_enqueue_scripts', 'shisei_enqueue_scripts');

function deregister_wpdm() {
    wp_deregister_script( 'wpdm-front-bootstrap' );
    }
    add_action( 'wp_print_scripts', 'deregister_wpdm', 100 );
