{{-- resources/views/partials/footer.blade.php --}}
<footer class="footer" role="contentinfo" aria-label="Información de contacto y enlaces del sitio" data-aos="fade-up">
  <div class="footer-container">
    
    <!-- COLUMNA 1: LOGO + DESCRIPCIÓN + REDES -->
    <div class="footer-col" data-aos="fade-right" data-aos-delay="100">
      <img src="{{ asset('img/logo-blanco.png') }}" 
           alt="Empresa Limpieza Láser - Soluciones industriales con tecnología láser" 
           class="footer-logo">
      <p>
        Soluciones avanzadas en limpieza láser, desarrolladas con tecnología de vanguardia para industrias en Colombia.
      </p>
      <div class="social-icons" aria-label="Síguenos en redes sociales">
        <a href="https://facebook.com/tuempresa" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://instagram.com/tuempresa" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com/company/tuempresa" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://x.com/tuempresa" target="_blank" rel="noopener" aria-label="X"><i class="fab fa-x-twitter"></i></a>
      </div>
    </div>

    <!-- COLUMNA 2: CONTACTO -->
    <div class="footer-col" data-aos="fade-up" data-aos-delay="200">
      <h4>Contáctanos</h4>
      <p>
        <strong>Dirección:</strong><br>
        <a href="https://maps.app.goo.gl/TuCj5X6Y9WzZzZzZ" 
           target="_blank" 
           rel="noopener" 
           style="color: #ccc; text-decoration: none;">
          <i class="fas fa-map-marker-alt" aria-hidden="true"></i> 
          Av. Tecnología 123, Bogotá
        </a>
      </p>
      <p><strong>Teléfono:</strong> <a href="tel:+573001234567">+57 300 123 4567</a></p>
      <p><strong>Email:</strong> <a href="mailto:contacto@empresalaser.com">contacto@empresalaser.com</a></p>
    </div>

    <!-- COLUMNA 3: EMPRESA -->
    <div class="footer-col" data-aos="fade-up" data-aos-delay="300">
      <h4>Empresa</h4>
      <ul>
        <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
        <li><a href="#">Términos y condiciones</a></li>
        <li><a href="#">Política de privacidad</a></li>
        <li><a href="#">Aviso legal</a></li>
      </ul>
    </div>

    <!-- COLUMNA 4: ENLACES RÁPIDOS -->
    <div class="footer-col" data-aos="fade-left" data-aos-delay="400">
      <h4>Enlaces</h4>
      <ul>
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li><a href="{{ route('servicios') }}">Servicios</a></li>
        <li><a href="{{ route('contacto') }}">Contacto</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom" data-aos="fade-up" data-aos-delay="500">
    <p>© {{ date('Y') }} Empresa Limpieza Láser. Todos los derechos reservados.</p>
  </div>
</footer>

<!-- BOTÓN FLOTANTE DE WHATSAPP -->
<a href="https://wa.me/573001234567?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20limpieza%20l%C3%A1ser%20industrial."
   class="whatsapp-float"
   target="_blank"
   rel="noopener"
   aria-label="Escríbenos por WhatsApp">
  <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp">
</a>