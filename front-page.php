<?php
/** The front page template. */

get_header();
?>

<main id="site-content" class="site-main">
	<section class="hero-section" aria-labelledby="hero-title">
		<div class="hero-section__inner site-container">
			<div class="hero-copy reveal-on-load">
				<p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Creative studio / music brand', 'mileym3dia' ); ?></p>
				<h1 id="hero-title">Creative media.<br><em>Music. Design.</em><br>Built to stand out.</h1>
				<p class="hero-copy__intro"><?php esc_html_e( 'Music production, visual media, branding, and digital experiences for artists, creators, and businesses.', 'mileym3dia' ); ?></p>
				<div class="hero-actions">
					<a class="button button--solid" href="#featured-work"><?php esc_html_e( 'View my work', 'mileym3dia' ); ?><span aria-hidden="true">↘</span></a>
					<a class="text-link" href="#contact"><?php esc_html_e( 'Work with me', 'mileym3dia' ); ?><span aria-hidden="true">↗</span></a>
				</div>
			</div>
			<div class="hero-visual reveal-on-load" aria-label="Abstract cinematic studio visual" role="img">
				<div class="hero-visual__glow"></div>
				<div class="hero-visual__frame">
					<span class="hero-visual__code">M3 / 001</span>
					<span class="hero-visual__caption">Make something<br>worth looking at.</span>
					<span class="hero-visual__orb"></span>
					<span class="hero-visual__grid"></span>
				</div>
				<div class="hero-visual__meta"><span>01</span><span><?php esc_html_e( 'Visual identity / 2026', 'mileym3dia' ); ?></span></div>
			</div>
		</div>
		<div class="hero-scroll" aria-hidden="true"><span><?php esc_html_e( 'Scroll to explore', 'mileym3dia' ); ?></span><span class="hero-scroll__line"></span></div>
	</section>

	<section class="capabilities-section section-pad" aria-labelledby="capabilities-title">
		<div class="site-container">
			<div class="section-heading">
				<p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'What I do', 'mileym3dia' ); ?></p>
				<h2 id="capabilities-title">One studio.<br><em>Every frequency.</em></h2>
				<p><?php esc_html_e( 'From the first idea to the final export, I build the sound and visuals that give your work a point of view.', 'mileym3dia' ); ?></p>
			</div>
			<div class="capability-grid">
				<a class="capability-card capability-card--cyan" href="#services"><span class="card-index">01</span><span class="capability-card__icon">◒</span><h3>Music</h3><span class="card-arrow">↗</span></a>
				<a class="capability-card capability-card--violet" href="#services"><span class="card-index">02</span><span class="capability-card__icon">▣</span><h3>Video</h3><span class="card-arrow">↗</span></a>
				<a class="capability-card capability-card--blue" href="#services"><span class="card-index">03</span><span class="capability-card__icon">✦</span><h3>Design</h3><span class="card-arrow">↗</span></a>
				<a class="capability-card capability-card--magenta" href="#services"><span class="card-index">04</span><span class="capability-card__icon">⌁</span><h3>Branding</h3><span class="card-arrow">↗</span></a>
				<a class="capability-card capability-card--slate" href="#services"><span class="card-index">05</span><span class="capability-card__icon">⌘</span><h3>Web</h3><span class="card-arrow">↗</span></a>
				<a class="capability-card capability-card--silver" href="#services"><span class="card-index">06</span><span class="capability-card__icon">◉</span><h3>Audio</h3><span class="card-arrow">↗</span></a>
			</div>
		</div>
	</section>

	<section id="featured-work" class="work-section section-pad" aria-labelledby="work-title">
		<div class="site-container">
			<div class="section-heading section-heading--row"><div><p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Selected work', 'mileym3dia' ); ?></p><h2 id="work-title">Built for the<br><em>spotlight.</em></h2></div><a class="text-link" href="#contact"><?php esc_html_e( 'View full portfolio', 'mileym3dia' ); ?><span aria-hidden="true">↗</span></a></div>
			<div class="work-grid">
				<a class="project-card project-card--large" href="#contact"><div class="project-art project-art--signal"><span>NOISE<br>TO<br>NOTHING</span><i></i></div><div class="project-card__footer"><span>01 / Visual identity</span><strong>Signal / Noise</strong></div></a>
				<a class="project-card" href="#contact"><div class="project-art project-art--mono"><span>M3</span></div><div class="project-card__footer"><span>02 / Cover art</span><strong>After Hours</strong></div></a>
				<a class="project-card" href="#contact"><div class="project-art project-art--violet"><span>FORM<br>FOLLOWS<br>FEELING</span></div><div class="project-card__footer"><span>03 / Brand direction</span><strong>Form / Feeling</strong></div></a>
			</div>
		</div>
	</section>

	<section id="music" class="music-section section-pad" aria-labelledby="music-title">
		<div class="site-container music-section__inner">
			<div class="music-copy"><p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'The sound of M3', 'mileym3dia' ); ?></p><h2 id="music-title">Press play.<br><em>Find your frequency.</em></h2><p><?php esc_html_e( 'Original production, custom beats, and digital tools for artists who are building their own world.', 'mileym3dia' ); ?></p><a class="button button--outline" href="#contact"><?php esc_html_e( 'Explore music', 'mileym3dia' ); ?><span aria-hidden="true">↗</span></a></div>
			<div class="player" data-player><div class="player__top"><span class="player__label">M3 / PLAYLIST 001</span><span class="player__status"><i></i><?php esc_html_e( 'Now available', 'mileym3dia' ); ?></span></div><div class="player__art"><span class="player__art-mark">M3</span><span class="player__art-word">NIGHT<br>DRIVE</span><span class="player__art-meta">VOL. 01 / 2026</span></div><div class="player__track"><div class="player__track-info"><strong><?php esc_html_e( 'After Hours', 'mileym3dia' ); ?></strong><span><?php esc_html_e( 'MILEYM3DIA / Original', 'mileym3dia' ); ?></span></div><button class="player__play" type="button" aria-label="Play After Hours" aria-pressed="false"><span class="player__play-icon">▶</span></button></div><div class="player__progress"><span></span></div><div class="player__times"><span>0:00</span><span>3:42</span></div></div>
		</div>
	</section>

	<section id="services" class="services-section section-pad" aria-labelledby="services-title">
		<div class="site-container services-section__inner"><div class="section-heading"><p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Available for hire', 'mileym3dia' ); ?></p><h2 id="services-title">Make your next<br><em>move count.</em></h2></div><div class="service-list"><a href="#contact"><span>01</span><strong>Video Editing</strong><i>↗</i></a><a href="#contact"><span>02</span><strong>Graphic Design</strong><i>↗</i></a><a href="#contact"><span>03</span><strong>Branding &amp; Logos</strong><i>↗</i></a><a href="#contact"><span>04</span><strong>Website Design</strong><i>↗</i></a><a href="#contact"><span>05</span><strong>Music Production</strong><i>↗</i></a><a href="#contact"><span>06</span><strong>Beat Production</strong><i>↗</i></a><a href="#contact"><span>07</span><strong>Cover Art</strong><i>↗</i></a><a href="#contact"><span>08</span><strong>Voiceover &amp; Audio</strong><i>↗</i></a></div><a class="button button--solid" href="#contact"><?php esc_html_e( 'Start a project', 'mileym3dia' ); ?><span aria-hidden="true">↗</span></a></div>
	</section>

	<section id="about" class="about-section section-pad" aria-labelledby="about-title"><div class="site-container about-section__inner"><div class="about-visual" role="img" aria-label="Abstract placeholder for a future MILEYM3DIA portrait or studio video"><span class="about-visual__label">M3 / STUDIO<br>PORTRAIT 001</span><span class="about-visual__shape"></span><span class="about-visual__mark">M</span></div><div class="about-copy"><p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'About MILEYM3DIA', 'mileym3dia' ); ?></p><h2 id="about-title">More than a service.<br><em>It’s the whole<br>creative process.</em></h2><p><?php esc_html_e( 'MILEYM3DIA is an independent creative studio for artists, brands, and ideas with somewhere to go. Sound, image, and identity are treated as one connected language.', 'mileym3dia' ); ?></p><a class="text-link" href="#contact"><?php esc_html_e( 'Get to know the studio', 'mileym3dia' ); ?><span aria-hidden="true">↗</span></a></div></div></section>

	<section id="contact" class="contact-section section-pad" aria-labelledby="contact-title"><div class="site-container contact-section__inner"><p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'Start a conversation', 'mileym3dia' ); ?></p><h2 id="contact-title">Got a project<br>in mind?</h2><p><?php esc_html_e( 'Let’s make something worth looking at.', 'mileym3dia' ); ?></p><a class="contact-link" href="mailto:hello@mileym3dia.com"><span>hello@mileym3dia.com</span><i aria-hidden="true">↗</i></a><br><a class="button contact-button" href="mailto:hello@mileym3dia.com"><?php esc_html_e( 'Start a project', 'mileym3dia' ); ?><span aria-hidden="true">↗</span></a></div></section>
</main>

<?php
get_footer();