const btn = document.querySelector('.menu-btn');
const menu = document.querySelector('.navbar ul');

btn.addEventListener('click', () => {
    menu.classList.toggle('active');
});





// Detener scroll al pasar mouse carusel inicio  index.php
document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.querySelector('.materials-carousel-wrapper');
  const track = document.querySelector('.materials-carousel-track');
  
  if (carousel && track) {
    carousel.addEventListener('mouseenter', () => {
      track.style.animationPlayState = 'paused';
    });
    
    carousel.addEventListener('mouseleave', () => {
      track.style.animationPlayState = 'running';
    });
  }
});