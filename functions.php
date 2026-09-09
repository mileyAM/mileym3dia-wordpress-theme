<?php
/**
 * Theme setup and asset loading for MILEYM3DIA.
 *
 * @package MILEYM3DIA
 */

if ( ! function_exists( 'mileym3dia_setup' ) ) {
    /**
     * Configure theme supports and navigation locations.
     *
     * @return void
     */
    function mileym3dia_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            )
        );

        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary Menu', 'mileym3dia' ),
                'footer'  => esc_html__( 'Footer Menu', 'mileym3dia' ),
            )
        );
    }
}
add_action( 'after_setup_theme', 'mileym3dia_setup' );

/**
 * Enqueue the theme stylesheets and scripts.
 *
 * @return void
 */
function mileym3dia_enqueue_styles() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap',
        array(),
        null
    );
    
    // Main stylesheet (design tokens + base)
    wp_enqueue_style(
        'mileym3dia-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
    
    // Additional CSS components
    wp_enqueue_style(
        'mileym3dia-main',
        get_theme_file_uri( '/assets/css/main.css' ),
        array( 'mileym3dia-style' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_script(
        'mileym3dia-script',
        get_theme_file_uri( '/assets/js/theme.js' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'mileym3dia_enqueue_styles' );
