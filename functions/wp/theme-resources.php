<?php
    // =========================================================================
    // REGISTER & ENQUEUE
    // =========================================================================
    function mightyResources() {
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
        $bundleCss = get_stylesheet_directory() . '/dist/assets/css/style.min.css';
        wp_enqueue_style('mightily', get_stylesheet_directory_uri() . '/dist/assets/css/style.min.css', '', filemtime($bundleCss));
        wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css', '1.8.1');
        wp_enqueue_style('slick-theme', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css', '1.8.1');
        wp_enqueue_style('mightily-aos', '//unpkg.com/aos@next/dist/aos.css');

        wp_deregister_script('jquery');
        wp_register_script('jquery', ('//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'), '', '2.2.4', true);
        wp_enqueue_script('jquery');

        wp_enqueue_script('vue', '//cdn.jsdelivr.net/npm/vue/dist/vue.js', '', '2.6.11', true);
        wp_enqueue_script('slick-js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', 'jquery', '1.8.1', true);
        $bundleJs = get_stylesheet_directory() . '/dist/assets/js/bundle.js';
        wp_enqueue_script('mightily', get_stylesheet_directory_uri() . '/dist/assets/js/bundle.js', ['jquery'], filemtime($bundleJs) , true);
        wp_enqueue_script('font-awesome', '//kit.fontawesome.com/443c52304a.js', '', '', true);
    }

    //======================================================================
    // META TAGS
    //======================================================================
    // Adding meta so that we can load it in non Wordpress pages i.e. Netforum
    function add_meta_tags() {
        echo '<meta name="viewport" content="width=device-width,initial-scale=1" />' . "\n";
    }

    //======================================================================
    // ACF Options Page
    //======================================================================
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' 	=> 'App Options',
            'menu_title'	=> 'App Options',
            'menu_slug' 	=> 'app-options',
            'capability'	=> 'manage_sites',
            'redirect'		=> false
        ]);
    }
