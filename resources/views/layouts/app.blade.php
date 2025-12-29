<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sitio')</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @stack('styles')
</head>
<body>
    @include('partials.nav')
    
    @yield('content')

    @include('partials.footer')
    <script src="{{ asset('js/navbar.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 700, once: true });
    </script>
    @stack('scripts')

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.querySelector('.menu-btn');
    const navMenu = document.querySelector('.navbar ul');

    if (menuBtn && navMenu) {
      menuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('active');
      });
    }
  });

</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      // Si estamos bajando y no estamos en la parte superior
      if (scrollTop > lastScrollTop && scrollTop > 100) {
        navbar.classList.add('scrolled');
      } 
      // Si estamos subiendo o en la parte superior
      else if (scrollTop < lastScrollTop || scrollTop <= 100) {
        navbar.classList.remove('scrolled');
      }

      lastScrollTop = scrollTop;
    });
  });
</script>







</body>
</html>