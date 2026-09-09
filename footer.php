<?php
/**
 * The footer template.
 *
 * @package MILEYM3DIA
 */
?>
</main>
<footer class="site-footer">
    <div class="footer-main">
        <div class="site-container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <span class="site-branding__mark" aria-hidden="true">M3</span>
                        <span class="site-branding__name">MILEYM3DIA</span>
                    </a>
                    <p><?php esc_html_e( 'Creative media for the ones making noise. We build brands, craft visuals, and produce sound that moves people.', 'mileym3dia' ); ?></p>
                </div>
                <nav class="footer-nav" aria-label="<?php esc_attr_e( 'Site navigation', 'mileym3dia' ); ?>">
                    <h4><?php esc_html_e( 'Navigate', 'mileym3dia' ); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'mileym3dia' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About', 'mileym3dia' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Services', 'mileym3dia' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php esc_html_e( 'Portfolio', 'mileym3dia' ); ?></a></li>
                    </ul>
                </nav>
                <nav class="footer-nav" aria-label="<?php esc_attr_e( 'Resources', 'mileym3dia' ); ?>">
                    <h4><?php esc_html_e( 'Resources', 'mileym3dia' ); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/resources' ) ); ?>"><?php esc_html_e( 'Tools & Guides', 'mileym3dia' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Blog', 'mileym3dia' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'mileym3dia' ); ?></a></li>
                    </ul>
                </nav>
                <nav class="footer-nav" aria-label="<?php esc_attr_e( 'Social links', 'mileym3dia' ); ?>">
                    <h4><?php esc_html_e( 'Connect', 'mileym3dia' ); ?></h4>
                    <ul>
                        <li><a href="mailto:hello@mileym3dia.com"><?php esc_html_e( 'Email Us', 'mileym3dia' ); ?></a></li>
                        <li><a href="#" aria-label="<?php esc_attr_e( 'Instagram', 'mileym3dia' ); ?>"><?php esc_html_e( 'Instagram', 'mileym3dia' ); ?></a></li>
                        <li><a href="#" aria-label="<?php esc_attr_e( 'Twitter', 'mileym3dia' ); ?>"><?php esc_html_e( 'Twitter', 'mileym3dia' ); ?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="site-container">
        <div class="footer-bottom">
            <span class="footer-copyright"><?php printf( esc_html__( '© %s MILEYM3DIA. All rights reserved.', 'mileym3dia' ), esc_html( gmdate( 'Y' ) ) ); ?></span>
            <div class="footer-social">
                <a href="#" aria-label="<?php esc_attr_e( 'Instagram', 'mileym3dia' ); ?>">📷</a>
                <a href="#" aria-label="<?php esc_attr_e( 'Twitter', 'mileym3dia' ); ?>">𝕏</a>
                <a href="#" aria-label="<?php esc_attr_e( 'YouTube', 'mileym3dia' ); ?>">▶</a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
