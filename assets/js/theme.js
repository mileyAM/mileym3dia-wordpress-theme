( function() {
// Mobile menu toggle
const menuToggle = document.querySelector( '.menu-toggle' );
const navigation = document.querySelector( '.site-navigation' );

if ( menuToggle && navigation ) {
menuToggle.addEventListener( 'click', function() {
const isOpen = menuToggle.getAttribute( 'aria-expanded' ) === 'true';
menuToggle.setAttribute( 'aria-expanded', String( ! isOpen ) );
navigation.classList.toggle( 'is-open', ! isOpen );
} );

// Close menu when clicking a link
navigation.querySelectorAll( 'a' ).forEach( function( link ) {
link.addEventListener( 'click', function() {
menuToggle.setAttribute( 'aria-expanded', 'false' );
navigation.classList.remove( 'is-open' );
} );
} );
}

// Header scroll effect
const header = document.querySelector( '.site-header' );
let lastScrollY = window.scrollY;

window.addEventListener( 'scroll', function() {
if ( window.scrollY > 100 ) {
header.style.background = 'rgba(5, 5, 5, 0.98)';
} else {
header.style.background = 'rgba(5, 5, 5, 0.85)';
}
lastScrollY = window.scrollY;
}, { passive: true } );

// Reveal animations on scroll
const revealElements = document.querySelectorAll( '.reveal-on-scroll' );

const revealOnScroll = function() {
revealElements.forEach( function( element ) {
const elementTop = element.getBoundingClientRect().top;
const elementVisible = 100;

if ( elementTop < window.innerHeight - elementVisible ) {
element.classList.add( 'is-visible' );
}
} );
};

window.addEventListener( 'scroll', revealOnScroll, { passive: true } );
revealOnScroll(); // Check on load

// Smooth scroll for anchor links
document.querySelectorAll( 'a[href^="#"]' ).forEach( function( anchor ) {
anchor.addEventListener( 'click', function( e ) {
const href = this.getAttribute( 'href' );
if ( href !== '#' ) {
const target = document.querySelector( href );
if ( target ) {
e.preventDefault();
target.scrollIntoView( {
behavior: 'smooth',
block: 'start'
} );
}
}
} );
} );

// Add active state to current nav item
const currentPage = window.location.pathname;
document.querySelectorAll( '.site-navigation a' ).forEach( function( link ) {
if ( link.getAttribute( 'href' ) === currentPage || 
( currentPage === '/' && link.getAttribute( 'href' ) === '/' ) ) {
link.style.color = 'var(--m3-white)';
}
} );
}() );
