<?php
/**
 * Template Name: Resources Page
 * @package MILEYM3DIA
 */
get_header();
?>
<main id="site-content" class="site-main">
    <section class="page-header">
        <div class="site-container">
            <div class="page-header__content">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Tools & Guides', 'mileym3dia' ); ?></p>
                <h1><?php esc_html_e( 'Creative Resources', 'mileym3dia' ); ?></h1>
                <p><?php esc_html_e( 'Curated tools, tutorials, and resources to help you level up your craft.', 'mileym3dia' ); ?></p>
            </div>
        </div>
    </section>
    <section class="resources-section section-pad">
        <div class="site-container">
            <div class="resources-grid">
                <article class="resource-card">
                    <div class="resource-card__icon">◐</div>
                    <h3><?php esc_html_e( 'Design Tools', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Essential software and plugins for graphic designers and video editors. From Adobe Creative Cloud to free alternatives.', 'mileym3dia' ); ?></p>
                    <a class="resource-card__link" href="#"><?php esc_html_e( 'Explore Tools', 'mileym3dia' ); ?> →</a>
                </article>
                <article class="resource-card">
                    <div class="resource-card__icon">▤</div>
                    <h3><?php esc_html_e( 'Tutorials', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Step-by-step guides covering video editing, graphic design, branding, and more. Learn from our team of experts.', 'mileym3dia' ); ?></p>
                    <a class="resource-card__link" href="#"><?php esc_html_e( 'Browse Tutorials', 'mileym3dia' ); ?> →</a>
                </article>
                <article class="resource-card">
                    <div class="resource-card__icon">✦</div>
                    <h3><?php esc_html_e( 'Free Assets', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Downloadable templates, presets, and design elements to speed up your workflow.', 'mileym3dia' ); ?></p>
                    <a class="resource-card__link" href="#"><?php esc_html_e( 'Get Assets', 'mileym3dia' ); ?> →</a>
                </article>
                <article class="resource-card">
                    <div class="resource-card__icon">◎</div>
                    <h3><?php esc_html_e( 'Recommended Gear', 'mileym3dia' ); ?></h3>
                    <p><?php esc_html_e( 'Our picks for cameras, audio equipment, computers, and peripherals for creative professionals.', 'mileym3dia' ); ?></p>
                    <a class="resource-card__link" href="#"><?php esc_html_e( 'View Gear', 'mileym3dia' ); ?> →</a>
                </article>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
