<?php
/**
 * Template Name: Contact Page
 * @package MILEYM3DIA
 */
get_header();
?>
<main id="site-content" class="site-main">
    <section class="page-header">
        <div class="site-container">
            <div class="page-header__content">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Get in Touch', 'mileym3dia' ); ?></p>
                <h1><?php esc_html_e( "Let's Create Together", 'mileym3dia' ); ?></h1>
                <p><?php esc_html_e( 'Ready to start your project? We would love to hear from you.', 'mileym3dia' ); ?></p>
            </div>
        </div>
    </section>
    <section class="section-pad" style="background: var(--m3-bg-secondary);">
        <div class="site-container">
            <div class="about-layout">
                <div class="about-content">
                    <h2><?php esc_html_e( 'Contact Information', 'mileym3dia' ); ?></h2>
                    <p><?php esc_html_e( 'Have a question or want to discuss a project? Reach out using any of the methods below.', 'mileym3dia' ); ?></p>
                    <div style="margin-top: 2rem;">
                        <a class="contact-email" href="mailto:hello@mileym3dia.com" style="display: inline-flex; align-items: center; gap: 0.75rem; padding-bottom: 0.5rem; border-bottom: 1px solid var(--m3-border-strong); color: var(--m3-white); font-size: 1.25rem; font-weight: 500; transition: all var(--m3-transition-fast);">
                            <span>hello@mileym3dia.com</span>
                            <i aria-hidden="true">↗</i>
                        </a>
                    </div>
                    <div class="about-stats" style="margin-top: 3rem;">
                        <div class="stat-item">
                            <span class="stat-item__value">24h</span>
                            <span class="stat-item__label"><?php esc_html_e( 'Response Time', 'mileym3dia' ); ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-item__value">100%</span>
                            <span class="stat-item__label"><?php esc_html_e( 'Project Commitment', 'mileym3dia' ); ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-item__value">∞</span>
                            <span class="stat-item__label"><?php esc_html_e( 'Creative Support', 'mileym3dia' ); ?></span>
                        </div>
                    </div>
                </div>
                <div class="about-visual">
                    <div class="about-visual__content">
                        <span class="about-visual__logo">M3</span>
                        <span class="about-visual__tagline"><?php esc_html_e( 'Studio Open', 'mileym3dia' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-cta-section section-pad">
        <div class="contact-cta-section__inner site-container">
            <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Prefer Email?', 'mileym3dia' ); ?></p>
            <h2><?php esc_html_e( 'Send Us a Message', 'mileym3dia' ); ?></h2>
            <a class="button button--white" href="mailto:hello@mileym3dia.com"><?php esc_html_e( 'Open Email Client', 'mileym3dia' ); ?></a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
