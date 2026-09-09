<?php
/**
 * 404 Error Page template.
 * @package MILEYM3DIA
 */
get_header();
?>
<main id="site-content" class="site-main">
    <section class="section-pad" style="min-height: 60vh; display: flex; align-items: center; justify-content: center; text-align: center;">
        <div class="site-container">
            <p class="eyebrow" style="justify-content: center;"><span class="eyebrow__line"></span><?php esc_html_e( 'Error 404', 'mileym3dia' ); ?></p>
            <h1 style="font-size: clamp(3rem, 8vw, 6rem); margin-bottom: 1.5rem;"><?php esc_html_e( 'Page Not Found', 'mileym3dia' ); ?></h1>
            <p style="color: var(--m3-text-secondary); font-size: 1.15rem; max-width: 30rem; margin: 0 auto 2.5rem;"><?php esc_html_e( "The page you are looking for doesn't exist or has been moved. Let's get you back on track.", 'mileym3dia' ); ?></p>
            <a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return Home', 'mileym3dia' ); ?></a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
