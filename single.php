<?php
/**
 * Single post template.
 * @package MILEYM3DIA
 */
get_header();
?>
<main id="site-content" class="site-main">
    <article class="content-area section-pad">
        <div class="site-container">
            <div class="entry-content">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
                <header style="margin-bottom: 3rem;">
                    <p class="eyebrow"><span class="eyebrow__line"></span><?php echo get_the_date(); ?></p>
                    <h1 style="font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 1.5rem;"><?php the_title(); ?></h1>
                </header>
                <div>
                    <?php the_content(); ?>
                </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>
