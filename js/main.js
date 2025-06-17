let isMuted = true;
const audioElement = document.getElementById('background-music');
const audioIconMuted = document.getElementById('audio-icon-muted');
const audioIconUnmuted = document.getElementById('audio-icon-unmuted');

function toggleMute() {
    if (isMuted) {
        audioElement.play();
        audioIconMuted.style.display = 'none';
        audioIconUnmuted.style.display = 'block';
    } else {
        audioElement.pause();
        audioIconMuted.style.display = 'block';
        audioIconUnmuted.style.display = 'none';
    }
    isMuted = !isMuted;
}

let isMenuOpen = false;
const navbar = document.querySelector('nav');
const mobileMenu = document.querySelector('.mobile-menu');
const hamburgerButton = document.querySelector('.hamburger-button');

function toggleMenu() {
    isMenuOpen = !isMenuOpen;
    if (isMenuOpen) {
        mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
        mobileMenu.classList.add('opacity-100', 'pointer-events-auto');
    } else {
        mobileMenu.classList.add('opacity-0', 'pointer-events-none');
        mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
    }
    updateHamburgerIcon();
}

function updateHamburgerIcon() {
    const spans = hamburgerButton.querySelectorAll('span');
    if (isMenuOpen) {
        spans[0].classList.add('rotate-45', 'translate-y-0.5');
        spans[0].classList.remove('-translate-y-1.5');
        spans[1].classList.add('opacity-0');
        spans[1].classList.remove('opacity-100');
        spans[2].classList.add('-rotate-45', '-translate-y-0.5');
        spans[2].classList.remove('translate-y-1.5');
    } else {
        spans[0].classList.remove('rotate-45', 'translate-y-0.5');
        spans[0].classList.add('-translate-y-1.5');
        spans[1].classList.remove('opacity-0');
        spans[1].classList.add('opacity-100');
        spans[2].classList.remove('-rotate-45', '-translate-y-0.5');
        spans[2].classList.add('translate-y-1.5');
    }
}

let docHeight = document.documentElement.scrollHeight;
let scrollPos = 0;

function handleScroll() {
    scrollPos = window.scrollY;
    updateNavbar();
    updateParallax();
}

function updateNavbar() {
    const heroHeight = window.innerHeight;
    if (scrollPos > heroHeight - 100) {
        navbar.classList.add('fixed', 'top-0', 'bg-darker/95', 'backdrop-blur-md', 'border-b', 'border-pink/20');
        navbar.classList.remove('relative', 'bg-transparent');
    } else {
        navbar.classList.remove('fixed', 'top-0', 'bg-darker/95', 'backdrop-blur-md', 'border-b', 'border-pink/20');
        navbar.classList.add('relative', 'bg-transparent');
    }
}

function updateParallax() {
    const screenWidth = window.innerWidth;
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    parallaxElements.forEach(element => {
        const speed = element.getAttribute('data-parallax');
        if (screenWidth > 640) {
            element.style.transform = `translateY(${(scrollPos * speed) / 20}px)`;
        } else {
            element.style.transform = 'translateY(0)';
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', handleScroll, { passive: true });
    window.addEventListener('resize', () => {
        docHeight = document.documentElement.scrollHeight;
    });
    
    initMap();
    handleScroll();
}); 