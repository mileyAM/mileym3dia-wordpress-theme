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
			<span class="menu-toggle__label"><?php esc_html_e( 'Menu', 'mileym3dia' ); ?></span>
			<span class="menu-toggle__icon" aria-hidden="true"><span></span><span></span></span>
		</button>
		<nav id="site-navigation" class="site-navigation" aria-label="Primary navigation">
			<ul class="site-navigation__list">
				<li><a href="#site-content"><?php esc_html_e( 'Home', 'mileym3dia' ); ?></a></li>
				<li><a href="#services"><?php esc_html_e( 'Services', 'mileym3dia' ); ?></a></li>
				<li><a href="#featured-work"><?php esc_html_e( 'Portfolio', 'mileym3dia' ); ?></a></li>
				<li><a href="#music"><?php esc_html_e( 'Music', 'mileym3dia' ); ?></a></li>
				<li><a href="#about"><?php esc_html_e( 'About', 'mileym3dia' ); ?></a></li>
				<li><a href="#contact"><?php esc_html_e( 'Contact', 'mileym3dia' ); ?></a></li>
			</ul>
		</nav>
		<a class="header-cta" href="#contact">
			<span><?php esc_html_e( "Let's work", 'mileym3dia' ); ?></span><span aria-hidden="true">↗</span>
		</a>
	</div>
</header>