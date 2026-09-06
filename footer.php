<?php
/**
 * The footer template.
 *
 * @package MILEYM3DIA
 */
?>
</main>
<footer class="site-footer">
	<div class="site-footer__inner">
		<div class="footer-brand">
			<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="site-branding__mark" aria-hidden="true">M3</span>
				<span class="site-branding__name">MILEYM3DIA</span>
			</a>
			<p><?php esc_html_e( 'Creative media for the ones making noise.', 'mileym3dia' ); ?></p>
		</div>
		<div class="footer-links">
			<div>
				<span class="footer-label"><?php esc_html_e( 'Explore', 'mileym3dia' ); ?></span>
				<a href="#music"><?php esc_html_e( 'Music', 'mileym3dia' ); ?></a>
				<a href="#services"><?php esc_html_e( 'Services', 'mileym3dia' ); ?></a>
				<a href="#featured-work"><?php esc_html_e( 'Portfolio', 'mileym3dia' ); ?></a>
			</div>
			<div>
				<span class="footer-label"><?php esc_html_e( 'Connect', 'mileym3dia' ); ?></span>
				<a href="#about"><?php esc_html_e( 'About', 'mileym3dia' ); ?></a>
				<a href="#contact"><?php esc_html_e( 'Contact', 'mileym3dia' ); ?></a>
				<a href="#contact"><?php esc_html_e( 'Instagram', 'mileym3dia' ); ?></a>
			</div>
		</div>
		<div class="footer-bottom">
			<span><?php printf( esc_html__( '© %s MILEYM3DIA', 'mileym3dia' ), esc_html( gmdate( 'Y' ) ) ); ?></span>
			<span><a href="#"><?php esc_html_e( 'Privacy', 'mileym3dia' ); ?></a><a href="#"><?php esc_html_e( 'Terms', 'mileym3dia' ); ?></a></span>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>