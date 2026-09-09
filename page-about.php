<?php
/**
 * Template Name: About Page
 *
 * @package MILEYM3DIA
 */

get_header();
?>

<main id="site-content" class="site-main">
    
    <!-- Page Header -->
    <section class="page-header">
        <div class="site-container">
            <div class="page-header__content">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Who We Are', 'mileym3dia' ); ?></p>
                <h1><?php esc_html_e( 'The Studio Behind the Work', 'mileym3dia' ); ?></h1>
                <p><?php esc_html_e( 'We are creators, strategists, and storytellers dedicated to bringing bold visions to life.', 'mileym3dia' ); ?></p>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="section-pad">
        <div class="site-container">
            <div class="about-layout">
                <div class="about-content">
                    <h2><?php esc_html_e( 'Our Story', 'mileym3dia' ); ?></h2>
                    <p><?php esc_html_e( 'MILEYM3DIA was born from a simple belief: great creative work happens at the intersection of disciplines. We are not just designers or editors or producers—we are storytellers who happen to work across multiple mediums.', 'mileym3dia' ); ?></p>
                    <p><?php esc_html_e( 'What started as a passion project has grown into a full-service creative studio serving clients who demand excellence. We have worked with artists, brands, and businesses to create work that stands out in an increasingly crowded digital landscape.', 'mileym3dia' ); ?></p>
                    <p><?php esc_html_e( 'Our approach is collaborative, our standards are exacting, and our commitment to quality is unwavering. Every project we take on receives the same level of attention, creativity, and technical expertise.', 'mileym3dia' ); ?></p>
                </div>
                <div class="about-visual">
                    <div class="about-visual__content">
                        <span class="about-visual__logo">M3</span>
                        <span class="about-visual__tagline"><?php esc_html_e( 'Since 2025', 'mileym3dia' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section-pad" style="background: var(--m3-bg-secondary);">
        <div class="site-container">
            <div class="section-header" style="margin-bottom: 4rem;">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'What Drives Us', 'mileym3dia' ); ?></p>
                <h2 class="section-title"><?php esc_html_e( 'Our Values', 'mileym3dia' ); ?></h2>
            </div>
            <div class="services-grid">
                <article class="service-card">
                    <div class="service-card__icon">◈</div>
                    <h3><?php esc_html_e( 'Creative Excellence', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'We never settle for good enough. Every pixel, every frame, every note matters.', 'mileym3dia' ); ?></p>
                </article>
                <article class="service-card">
                    <div class="service-card__icon">◎</div>
                    <h3><?php esc_html_e( 'Client Partnership', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Your success is our success. We work as an extension of your team.', 'mileym3dia' ); ?></p>
                </article>
                <article class="service-card">
                    <div class="service-card__icon">✦</div>
                    <h3><?php esc_html_e( 'Innovation', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'We embrace new tools, techniques, and technologies to push boundaries.', 'mileym3dia' ); ?></p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="contact-cta-section section-pad">
        <div class="contact-cta-section__inner site-container">
            <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Want to Work Together?', 'mileym3dia' ); ?></p>
            <h2><?php esc_html_e( "Let's Create Something", 'mileym3dia' ); ?><br><?php esc_html_e( 'Amazing', 'mileym3dia' ); ?></h2>
            <a class="button button--white" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                <?php esc_html_e( 'Get in Touch', 'mileym3dia' ); ?>
                <i aria-hidden="true">→</i>
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
