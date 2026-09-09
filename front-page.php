<?php
/**
 * The front page template.
 *
 * @package MILEYM3DIA
 */

get_header();
?>

<main id="site-content" class="site-main">

    <!-- HERO SECTION -->
    <section class="hero-section" aria-labelledby="hero-title">
        <div class="hero-glow"></div>
        <div class="hero-section__inner site-container">
            <div class="hero-content">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Creative Media / Music Brand', 'mileym3dia' ); ?></p>
                <h1 id="hero-title"><?php esc_html_e( 'MILEYM3DIA', 'mileym3dia' ); ?><br><em><?php esc_html_e( 'Creative.', 'mileym3dia' ); ?></em><br><?php esc_html_e( 'Bold.', 'mileym3dia' ); ?></h1>
                <p class="hero-tagline"><?php esc_html_e( 'We build brands, craft visuals, and produce sound that moves people. For artists, creators, and businesses making noise.', 'mileym3dia' ); ?></p>
                <div class="hero-actions">
                    <a class="button button--primary" href="#featured-work"><?php esc_html_e( 'View Work', 'mileym3dia' ); ?><span aria-hidden="true">↘</span></a>
                    <a class="button button--secondary" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Start Project', 'mileym3dia' ); ?><span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="hero-visual reveal-on-load" aria-label="Abstract creative studio visual" role="img">
                <div class="hero-visual__frame">
                    <div class="hero-visual__content">
                        <div class="hero-visual__top">
                            <span class="hero-visual__badge"><?php esc_html_e( 'M3 Studio', 'mileym3dia' ); ?></span>
                            <span class="hero-visual__status"><?php esc_html_e( 'Available', 'mileym3dia' ); ?></span>
                        </div>
                        <div class="hero-visual__main">
                            <h3><?php esc_html_e( 'Create.', 'mileym3dia' ); ?><br><?php esc_html_e( 'Capture.', 'mileym3dia' ); ?><br><?php esc_html_e( 'Elevate.', 'mileym3dia' ); ?></h3>
                        </div>
                        <div class="hero-visual__bottom">
                            <span class="hero-visual__meta">EST. 2025 / LOS ANGELES</span>
                            <a href="#featured-work" class="hero-visual__arrow" aria-label="<?php esc_attr_e( 'Scroll to work', 'mileym3dia' ); ?>">↘</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll" aria-hidden="true">
            <span><?php esc_html_e( 'Explore', 'mileym3dia' ); ?></span>
            <span class="hero-scroll__line"></span>
        </div>
    </section>

    <!-- CAPABILITIES SECTION -->
    <section class="capabilities-section section-pad" aria-labelledby="capabilities-title">
        <div class="site-container">
            <div class="section-heading">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'What We Do', 'mileym3dia' ); ?></p>
                <h2 id="capabilities-title" class="section-title"><?php esc_html_e( 'One Studio.<br>Every Frequency.', 'mileym3dia' ); ?></h2>
                <p><?php esc_html_e( 'From concept to final export, we handle sound, visuals, and everything between.', 'mileym3dia' ); ?></p>
            </div>
            <div class="capability-grid">
                <a class="capability-card capability-card--red" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
                    <span class="card-index">01</span>
                    <span class="capability-card__icon">◒</span>
                    <h3><?php esc_html_e( 'Music', 'mileym3dia' ); ?></h3>
                    <span class="card-arrow">↗</span>
                </a>
                <a class="capability-card capability-card--purple" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
                    <span class="card-index">02</span>
                    <span class="capability-card__icon">▣</span>
                    <h3><?php esc_html_e( 'Video', 'mileym3dia' ); ?></h3>
                    <span class="card-arrow">↗</span>
                </a>
                <a class="capability-card capability-card--blue" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
                    <span class="card-index">03</span>
                    <span class="capability-card__icon">✦</span>
                    <h3><?php esc_html_e( 'Design', 'mileym3dia' ); ?></h3>
                    <span class="card-arrow">↗</span>
                </a>
                <a class="capability-card capability-card--lime" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
                    <span class="card-index">04</span>
                    <span class="capability-card__icon">⌁</span>
                    <h3><?php esc_html_e( 'Branding', 'mileym3dia' ); ?></h3>
                    <span class="card-arrow">↗</span>
                </a>
                <a class="capability-card capability-card--red" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
                    <span class="card-index">05</span>
                    <span class="capability-card__icon">⌘</span>
                    <h3><?php esc_html_e( 'Web', 'mileym3dia' ); ?></h3>
                    <span class="card-arrow">↗</span>
                </a>
                <a class="capability-card capability-card--purple" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
                    <span class="card-index">06</span>
                    <span class="capability-card__icon">◎</span>
                    <h3><?php esc_html_e( 'Audio', 'mileym3dia' ); ?></h3>
                    <span class="card-arrow">↗</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FEATURED WORK -->
    <section id="featured-work" class="work-section section-pad" aria-labelledby="work-title">
        <div class="site-container">
            <div class="section-heading section-heading--row">
                <div>
                    <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Selected Work', 'mileym3dia' ); ?></p>
                    <h2 id="work-title" class="section-title"><?php esc_html_e( 'Built for the<br>Spotlight.', 'mileym3dia' ); ?></h2>
                </div>
                <a class="button button--secondary" href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php esc_html_e( 'Full Portfolio', 'mileym3dia' ); ?><span aria-hidden="true">→</span></a>
            </div>
            <div class="work-grid">
                <a class="project-card project-card--large" href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>">
                    <div class="project-art project-art--signal">
                        <span><?php esc_html_e( 'NOISE<br>TO<br>NOTHING', 'mileym3dia' ); ?></span>
                        <i></i>
                    </div>
                    <div class="project-card__footer">
                        <span>01 / <?php esc_html_e( 'Visual Identity', 'mileym3dia' ); ?></span>
                        <strong><?php esc_html_e( 'Signal / Noise', 'mileym3dia' ); ?></strong>
                    </div>
                </a>
                <a class="project-card" href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>">
                    <div class="project-art project-art--mono">
                        <span>M3</span>
                    </div>
                    <div class="project-card__footer">
                        <span>02 / <?php esc_html_e( 'Cover Art', 'mileym3dia' ); ?></span>
                        <strong><?php esc_html_e( 'After Hours', 'mileym3dia' ); ?></strong>
                    </div>
                </a>
                <a class="project-card" href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>">
                    <div class="project-art project-art--violet">
                        <span><?php esc_html_e( 'FORM<br>FOLLOWS<br>FEELING', 'mileym3dia' ); ?></span>
                    </div>
                    <div class="project-card__footer">
                        <span>03 / <?php esc_html_e( 'Brand Direction', 'mileym3dia' ); ?></span>
                        <strong><?php esc_html_e( 'Form / Feeling', 'mileym3dia' ); ?></strong>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ABOUT PREVIEW -->
    <section id="about" class="about-section section-pad" aria-labelledby="about-title">
        <div class="site-container about-section__inner">
            <div class="about-visual" role="img" aria-label="<?php esc_attr_e( 'MILEYM3DIA studio abstract', 'mileym3dia' ); ?>">
                <span class="about-visual__label">M3 / STUDIO<br>PORTRAIT 001</span>
                <span class="about-visual__shape"></span>
                <span class="about-visual__mark">M</span>
            </div>
            <div class="about-copy">
                <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'About MILEYM3DIA', 'mileym3dia' ); ?></p>
                <h2><?php esc_html_e( 'More Than a Service.<br>The Whole Process.', 'mileym3dia' ); ?></h2>
                <p><?php esc_html_e( 'MILEYM3DIA is an independent creative studio for artists, brands, and ideas with somewhere to go. We treat sound, image, and identity as one connected language.', 'mileym3dia' ); ?></p>
                <a class="button button--secondary" href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'Our Story', 'mileym3dia' ); ?><span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <!-- CONTACT CTA -->
    <section id="contact" class="contact-section section-pad" aria-labelledby="contact-title">
        <div class="site-container contact-section__inner">
            <p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Start a Conversation', 'mileym3dia' ); ?></p>
            <h2><?php esc_html_e( 'Got a Project<br>in Mind?', 'mileym3dia' ); ?></h2>
            <p><?php esc_html_e( "Let's make something worth looking at.", 'mileym3dia' ); ?></p>
            <a class="contact-link" href="mailto:hello@mileym3dia.com">
                <span>hello@mileym3dia.com</span>
                <i aria-hidden="true">↗</i>
            </a>
            <br>
            <a class="button button--primary contact-button" href="mailto:hello@mileym3dia.com"><?php esc_html_e( 'Start a Project', 'mileym3dia' ); ?><span aria-hidden="true">↗</span></a>
        </div>
    </section>

</main>

<?php
get_footer();
