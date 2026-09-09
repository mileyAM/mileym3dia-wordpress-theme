<?php
/**
 * Archive template for blog.
 * @package MILEYM3DIA
 */
get_header();
?>
<main id="site-content" class="site-main">
    <section class="page-header">
        <div class="site-container">
            <div class="page-header__content">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Blog', 'mileym3dia' ); ?></p>
                <h1><?php single_post_title( __( 'Latest Posts', 'mileym3dia' ) ); ?></h1>
                <p><?php esc_html_e( 'Insights, tutorials, and updates from the MILEYM3DIA studio.', 'mileym3dia' ); ?></p>
            </div>
        </div>
    </section>
    <section class="blog-section section-pad">
        <div class="site-container">
            <div class="blog-grid">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
                <article class="blog-card">
                    <a href="<?php the_permalink(); ?>" class="blog-card__image">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'medium_large' ); ?>
                        <?php else : ?>
                            <div class="portfolio-item__placeholder"><span><?php esc_html_e( 'No Image', 'mileym3dia' ); ?></span></div>
                        <?php endif; ?>
                    </a>
                    <div class="blog-card__meta">
                        <span class="blog-card__date"><?php echo get_the_date(); ?></span>
                    </div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                    <a class="blog-card__link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'mileym3dia' ); ?> →</a>
                </article>
                <?php
                    endwhile;
                else :
                ?>
                <div class="portfolio-item__placeholder" style="grid-column: 1/-1; padding: 4rem;">
                    <i>▤</i>
                    <span><?php esc_html_e( 'No posts found', 'mileym3dia' ); ?></span>
                </div>
                <?php endif; ?>
            </div>
            <div style="margin-top: 3rem; text-align: center;">
                <?php the_posts_pagination( array(
                    'prev_text' => '←',
                    'next_text' => '→',
                ) ); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
