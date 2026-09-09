<?php
/**
 * Template Name: Services Page
 * @package MILEYM3DIA
 */
get_header();
?>
<main id="site-content" class="site-main">
    <section class="page-header">
        <div class="site-container">
            <div class="page-header__content">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'What We Do', 'mileym3dia' ); ?></p>
                <h1><?php esc_html_e( 'Full-Service Creative Studio', 'mileym3dia' ); ?></h1>
                <p><?php esc_html_e( 'From concept to completion, we handle every aspect of your creative needs.', 'mileym3dia' ); ?></p>
            </div>
        </div>
    </section>
    <section class="services-section section-pad">
        <div class="site-container">
            <div class="services-grid">
                <article class="service-card" data-service="video">
                    <div class="service-card__icon">🎬</div>
                    <h3><?php esc_html_e( 'Video Editing', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Professional video editing for commercials, music videos, social content, and more. We tell stories through rhythm, pacing, and visual flow.', 'mileym3dia' ); ?></p>
                </article>
                <article class="service-card" data-service="design">
                    <div class="service-card__icon">✦</div>
                    <h3><?php esc_html_e( 'Graphic Design', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Eye-catching designs for print and digital. Logos, posters, album art, marketing materials, and everything in between.', 'mileym3dia' ); ?></p>
                </article>
                <article class="service-card" data-service="branding">
                    <div class="service-card__icon">◈</div>
                    <h3><?php esc_html_e( 'Branding', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Complete brand identity development including logos, color systems, typography, brand guidelines, and visual language.', 'mileym3dia' ); ?></p>
                </article>
                <article class="service-card" data-service="web">
                    <div class="service-card__icon">⌘</div>
                    <h3><?php esc_html_e( 'Web Design', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Modern, responsive websites that look stunning and perform flawlessly. WordPress development, custom themes, and UI/UX design.', 'mileym3dia' ); ?></p>
                </article>
                <article class="service-card" data-service="audio">
                    <div class="service-card__icon">♪</div>
                    <h3><?php esc_html_e( 'Music Production', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Original music composition, beat production, mixing, and mastering. Custom soundtracks and audio branding.', 'mileym3dia' ); ?></p>
                </article>
                <article class="service-card" data-service="social">
                    <div class="service-card__icon">◎</div>
                    <h3><?php esc_html_e( 'Social Content', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Platform-optimized content for Instagram, TikTok, YouTube, and more. Strategy, creation, and management.', 'mileym3dia' ); ?></p>
                </article>
            </div>
        </div>
    </section>
    <section class="contact-cta-section section-pad">
        <div class="contact-cta-section__inner site-container">
            <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Ready to Start?', 'mileym3dia' ); ?></p>
            <h2><?php esc_html_e( "Let's Discuss Your Project", 'mileym3dia' ); ?></h2>
            <a class="button button--white" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'mileym3dia' ); ?></a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
