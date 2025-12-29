// public/js/navbar.js
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileClose = document.querySelector('.mobile-close');
    const mobileLinks = document.querySelectorAll('.mobile-links a');
    
    // Crear overlay
    const overlay = document.createElement('div');
    overlay.className = 'mobile-overlay';
    document.body.appendChild(overlay);
    
    // Scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Toggle menú móvil
    function toggleMenu() {
        menuToggle.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    }
    
    // Event listeners
    if (menuToggle) menuToggle.addEventListener('click', toggleMenu);
    if (mobileClose) mobileClose.addEventListener('click', toggleMenu);
    if (overlay) overlay.addEventListener('click', toggleMenu);
    
    // Cerrar menú al hacer clic en enlace
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (mobileMenu && mobileMenu.classList.contains('active')) {
                toggleMenu();
            }
        });
    });
    
    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#') && href.length > 1) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    // Cerrar menú si está abierto
                    if (mobileMenu && mobileMenu.classList.contains('active')) {
                        toggleMenu();
                    }
                    
                    // Scroll suave
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});