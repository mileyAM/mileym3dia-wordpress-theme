<?php
/**
 * Template Name: Portfolio Page
 * @package MILEYM3DIA
 */
get_header();
?>
<main id="site-content" class="site-main">
    <section class="page-header">
        <div class="site-container">
            <div class="page-header__content">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Our Work', 'mileym3dia' ); ?></p>
                <h1><?php esc_html_e( 'Selected Projects', 'mileym3dia' ); ?></h1>
                <p><?php esc_html_e( 'A showcase of our best creative work across all disciplines.', 'mileym3dia' ); ?></p>
            </div>
        </div>
    </section>
    <section class="portfolio-section section-pad">
        <div class="site-container">
            <div class="portfolio-grid">
                <a class="portfolio-item portfolio-item--featured" href="#">
                    <div class="portfolio-item__image">
                        <div class="portfolio-item__placeholder"><i>◈</i><span><?php esc_html_e( 'Project Coming Soon', 'mileym3dia' ); ?></span></div>
                        <div class="portfolio-item__overlay"></div>
                    </div>
                    <div class="portfolio-item__content">
                        <span class="portfolio-item__category"><?php esc_html_e( 'Brand Identity', 'mileym3dia' ); ?></span>
                        <h3 class="portfolio-item__title"><?php esc_html_e( 'Signature Project', 'mileym3dia' ); ?></h3>
                    </div>
                </a>
                <a class="portfolio-item" href="#">
                    <div class="portfolio-item__image">
                        <div class="portfolio-item__placeholder"><i>▣</i><span><?php esc_html_e( 'Project Coming Soon', 'mileym3dia' ); ?></span></div>
                        <div class="portfolio-item__overlay"></div>
                    </div>
                    <div class="portfolio-item__content">
                        <span class="portfolio-item__category"><?php esc_html_e( 'Video Production', 'mileym3dia' ); ?></span>
                        <h3 class="portfolio-item__title"><?php esc_html_e( 'Visual Campaign', 'mileym3dia' ); ?></h3>
                    </div>
                </a>
                <a class="portfolio-item" href="#">
                    <div class="portfolio-item__image">
                        <div class="portfolio-item__placeholder"><i>✦</i><span><?php esc_html_e( 'Project Coming Soon', 'mileym3dia' ); ?></span></div>
                        <div class="portfolio-item__overlay"></div>
                    </div>
                    <div class="portfolio-item__content">
                        <span class="portfolio-item__category"><?php esc_html_e( 'Web Design', 'mileym3dia' ); ?></span>
                        <h3 class="portfolio-item__title"><?php esc_html_e( 'Digital Experience', 'mileym3dia' ); ?></h3>
                    </div>
                </a>
                <a class="portfolio-item" href="#">
                    <div class="portfolio-item__image">
                        <div class="portfolio-item__placeholder"><i>◎</i><span><?php esc_html_e( 'Project Coming Soon', 'mileym3dia' ); ?></span></div>
                        <div class="portfolio-item__overlay"></div>
                    </div>
                    <div class="portfolio-item__content">
                        <span class="portfolio-item__category"><?php esc_html_e( 'Graphic Design', 'mileym3dia' ); ?></span>
                        <h3 class="portfolio-item__title"><?php esc_html_e( 'Print Collection', 'mileym3dia' ); ?></h3>
                    </div>
                </a>
                <a class="portfolio-item" href="#">
                    <div class="portfolio-item__image">
                        <div class="portfolio-item__placeholder"><i>♪</i><span><?php esc_html_e( 'Project Coming Soon', 'mileym3dia' ); ?></span></div>
                        <div class="portfolio-item__overlay"></div>
                    </div>
                    <div class="portfolio-item__content">
                        <span class="portfolio-item__category"><?php esc_html_e( 'Music Production', 'mileym3dia' ); ?></span>
                        <h3 class="portfolio-item__title"><?php esc_html_e( 'Audio Branding', 'mileym3dia' ); ?></h3>
                    </div>
                </a>
                <a class="portfolio-item" href="#">
                    <div class="portfolio-item__image">
                        <div class="portfolio-item__placeholder"><i>◐</i><span><?php esc_html_e( 'Project Coming Soon', 'mileym3dia' ); ?></span></div>
                        <div class="portfolio-item__overlay"></div>
                    </div>
                    <div class="portfolio-item__content">
                        <span class="portfolio-item__category"><?php esc_html_e( 'Social Content', 'mileym3dia' ); ?></span>
                        <h3 class="portfolio-item__title"><?php esc_html_e( 'Campaign Series', 'mileym3dia' ); ?></h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="contact-cta-section section-pad">
        <div class="contact-cta-section__inner site-container">
            <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Have a Project?', 'mileym3dia' ); ?></p>
            <h2><?php esc_html_e( "Let's Work Together", 'mileym3dia' ); ?></h2>
            <a class="button button--white" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Start a Project', 'mileym3dia' ); ?></a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
