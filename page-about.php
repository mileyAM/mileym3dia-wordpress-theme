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
                <h1><?php esc_html_e( 'The Studio Behind<br>the Work', 'mileym3dia' ); ?></h1>
                <p><?php esc_html_e( 'We are creators, strategists, and storytellers dedicated to bringing bold visions to life.', 'mileym3dia' ); ?></p>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="section-pad">
        <div class="site-container">
            <div class="about-layout">
                <div class="about-content">
                    <h2 class="section-title"><?php esc_html_e( 'Our Story', 'mileym3dia' ); ?></h2>
                    <p style="color: var(--m3-fog); font-size: var(--text-lg); line-height: 1.8; margin-top: 2rem;"><?php esc_html_e( 'MILEYM3DIA was born from a simple belief: great creative work happens at the intersection of disciplines. We are not just designers or editors or producers—we are storytellers who happen to work across multiple mediums.', 'mileym3dia' ); ?></p>
                    <p style="color: var(--m3-fog); font-size: var(--text-lg); line-height: 1.8;"><?php esc_html_e( 'What started as a passion project has grown into a full-service creative studio serving clients who demand excellence. We have worked with artists, brands, and businesses to create work that stands out in an increasingly crowded digital landscape.', 'mileym3dia' ); ?></p>
                    <p style="color: var(--m3-fog); font-size: var(--text-lg); line-height: 1.8;"><?php esc_html_e( 'Our approach is collaborative, our standards are exacting, and our commitment to quality is unwavering. Every project we take on receives the same level of attention, creativity, and technical expertise.', 'mileym3dia' ); ?></p>
                </div>
                <div class="about-visual" style="aspect-ratio: 3/4; background: var(--m3-charcoal); border: 1px solid var(--m3-border-light); display: grid; place-items: center;">
                    <div style="text-align: center;">
                        <span style="font-size: var(--text-6xl); font-weight: 800; color: var(--m3-red);">M3</span>
                        <span style="display: block; color: var(--m3-mist); font-family: var(--font-mono); margin-top: 1rem;"><?php esc_html_e( 'Since 2025', 'mileym3dia' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section-pad" style="background: var(--m3-void); border-top: 1px solid var(--m3-border);">
        <div class="site-container">
            <div class="section-heading" style="margin-bottom: 4rem;">
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
    <section class="contact-section section-pad">
        <div class="site-container contact-section__inner">
            <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Want to Work Together?', 'mileym3dia' ); ?></p>
            <h2><?php esc_html_e( "Let's Create Something", 'mileym3dia' ); ?><br><?php esc_html_e( 'Amazing', 'mileym3dia' ); ?></h2>
            <a class="button button--primary" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                <?php esc_html_e( 'Get in Touch', 'mileym3dia' ); ?>
                <i aria-hidden="true">→</i>
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
