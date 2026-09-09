<?php
/**
 * Main template file and fallback for all pages.
 * @package MILEYM3DIA
 */
get_header();
?>
<main id="site-content" class="site-main">
    <section class="page-header">
        <div class="site-container">
            <div class="page-header__content">
                <h1><?php single_post_title(); ?></h1>
            </div>
        </div>
    </section>
    <section class="content-area section-pad">
        <div class="site-container">
            <div class="entry-content">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                else :
                ?>
                <p><?php esc_html_e( 'No content found.', 'mileym3dia' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
