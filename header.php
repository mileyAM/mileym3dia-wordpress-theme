<?php
/**
 * The header template.
 *
 * @package MILEYM3DIA
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#site-content">
    <?php esc_html_e( 'Skip to content', 'mileym3dia' ); ?>
</a>
<header class="site-header">
    <div class="site-header__inner">
        <a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <span class="site-branding__mark" aria-hidden="true">M3</span>
            <span class="site-branding__name">MILEYM3DIA</span>
        </a>
        <button class="menu-toggle" type="button" aria-controls="site-navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav id="site-navigation" class="site-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'mileym3dia' ); ?>">
            <ul class="site-navigation__list">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'mileym3dia' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About', 'mileym3dia' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Services', 'mileym3dia' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php esc_html_e( 'Portfolio', 'mileym3dia' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/resources' ) ); ?>"><?php esc_html_e( 'Resources', 'mileym3dia' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Blog', 'mileym3dia' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'mileym3dia' ); ?></a></li>
            </ul>
        </nav>
        <a class="header-cta" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
            <?php esc_html_e( "Let's Talk", 'mileym3dia' ); ?>
            <i aria-hidden="true">↗</i>
        </a>
    </div>
</header>
