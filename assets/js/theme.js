( function () {
	const menuToggle = document.querySelector( '.menu-toggle' );
	const navigation = document.querySelector( '.site-navigation' );

	if ( menuToggle && navigation ) {
		menuToggle.addEventListener( 'click', function () {
			const isOpen = menuToggle.getAttribute( 'aria-expanded' ) === 'true';
			menuToggle.setAttribute( 'aria-expanded', String( ! isOpen ) );
			navigation.classList.toggle( 'is-open', ! isOpen );
		} );

		navigation.querySelectorAll( 'a' ).forEach( function ( link ) {
			link.addEventListener( 'click', function () {
				menuToggle.setAttribute( 'aria-expanded', 'false' );
				navigation.classList.remove( 'is-open' );
			} );
		} );
	}

	const player = document.querySelector( '[data-player]' );
	const playButton = player ? player.querySelector( '.player__play' ) : null;

	if ( playButton ) {
		playButton.addEventListener( 'click', function () {
			const isPlaying = playButton.getAttribute( 'aria-pressed' ) === 'true';
			playButton.setAttribute( 'aria-pressed', String( ! isPlaying ) );
			playButton.setAttribute( 'aria-label', isPlaying ? 'Play After Hours' : 'Pause After Hours' );
			playButton.querySelector( '.player__play-icon' ).textContent = isPlaying ? '▶' : 'Ⅱ';
			player.classList.toggle( 'is-playing', ! isPlaying );
		} );
	}
}() );