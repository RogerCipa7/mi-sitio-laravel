{{-- resources/views/pages/nosotros.blade.php --}}
@extends('layouts.app')

@section('title', 'Nosotros | Limpieza Láser Industrial - LaserClean Colombia')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
@endpush

@section('content')
<main class="nosotros-page">

  <!-- HERO SECTION -->
  <section class="hero-nosotros" aria-label="Nuestra empresa">
    <div class="hero-overlay">
      <div class="container">
        <div class="hero-content" data-aos="fade-up">
          <h1 class="hero-title">Más de 10 años<br><span class="highlight">innovando en limpieza láser</span></h1>
          <p class="hero-subtitle">Tecnología avanzada, equipo experto y compromiso con la excelencia</p>
          <a href="{{ route('contacto') }}" class="btn btn-primary">Contáctanos</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: Nuestra Historia -->
  <section class="section historia" data-aos="fade-up">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Nuestra Historia</span>
        <h2>De la visión a la <span class="highlight">realidad industrial</span></h2>
      </div>
      
      <div class="historia-content">
        <div class="historia-text" data-aos="fade-right">
          <h3>Pioneros en tecnología láser en Colombia</h3>
          <p>
            Fundada en 2012, LaserClean Colombia nació con la visión de revolucionar la limpieza industrial en el país. Reconociendo las limitaciones de los métodos tradicionales, nos propusimos introducir la tecnología láser como una solución más eficiente, segura y sostenible.
          </p>
          <p>
            Comenzamos con un equipo pequeño pero apasionado, dedicado a adaptar la tecnología láser a las necesidades específicas de la industria colombiana. Lo que empezó como un proyecto innovador se convirtió en una empresa líder en el sector.
          </p>
          <div class="estadisticas">
            <div class="estadistica">
              <span class="numero" data-count="10">0</span>
              <span class="label">Años de experiencia</span>
            </div>
            <div class="estadistica">
              <span class="numero" data-count="500">0</span>
              <span class="label">Proyectos completados</span>
            </div>
            <div class="estadistica">
              <span class="numero" data-count="98">0</span>
              <span class="label">% Clientes satisfechos</span>
            </div>
          </div>
        </div>
        
        <div class="historia-imagen" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('img/historia-empresa.jpg') }}" alt="Evolución de LaserClean Colombia">
          <div class="img-caption">
            <span>Nuestro primer equipo láser industrial - 2013</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: Misión y Visión -->
  <section class="section mision-vision" data-aos="fade-up">
    <div class="container">
      <div class="mv-grid">
        <div class="mv-card" data-aos="zoom-in" data-aos-delay="100">
          <div class="mv-icon">
            <i class="fas fa-bullseye"></i>
          </div>
          <h3>Misión</h3>
          <p>
            Transformar la industria colombiana mediante soluciones de limpieza láser innovadoras, proporcionando servicios de alta precisión que optimizan procesos, preservan superficies críticas y reducen significativamente el impacto ambiental.
          </p>
          <ul class="mv-list">
            <li><i class="fas fa-check-circle"></i> Excelencia técnica</li>
            <li><i class="fas fa-check-circle"></i> Innovación continua</li>
            <li><i class="fas fa-check-circle"></i> Sostenibilidad ambiental</li>
          </ul>
        </div>
        
        <div class="mv-card" data-aos="zoom-in" data-aos-delay="300">
          <div class="mv-icon">
            <i class="fas fa-eye"></i>
          </div>
          <h3>Visión</h3>
          <p>
            Para el 2028, ser reconocidos como el referente nacional en soluciones de limpieza láser, expandiendo nuestra operación a nivel regional y desarrollando nuevas tecnologías aplicadas a diferentes sectores industriales.
          </p>
          <ul class="mv-list">
            <li><i class="fas fa-check-circle"></i> Liderazgo regional</li>
            <li><i class="fas fa-check-circle"></i> Investigación y desarrollo</li>
            <li><i class="fas fa-check-circle"></i> Impacto industrial positivo</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: Nuestros Valores -->
  <section class="section valores" data-aos="fade-up">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Nuestra Esencia</span>
        <h2>Valores que nos <span class="highlight">definen</span></h2>
      </div>
      
      <div class="valores-grid">
        <div class="valor-card" data-aos="fade-up" data-aos-delay="100">
          <div class="valor-icon">
            <i class="fas fa-medal"></i>
          </div>
          <h4>Excelencia</h4>
          <p>Buscamos la perfección en cada proyecto, superando expectativas y estableciendo nuevos estándares de calidad.</p>
        </div>
        
        <div class="valor-card" data-aos="fade-up" data-aos-delay="200">
          <div class="valor-icon">
            <i class="fas fa-leaf"></i>
          </div>
          <h4>Sostenibilidad</h4>
          <p>Promovemos prácticas que minimizan el impacto ambiental, utilizando tecnología limpia y procesos ecológicos.</p>
        </div>
        
        <div class="valor-card" data-aos="fade-up" data-aos-delay="300">
          <div class="valor-icon">
            <i class="fas fa-handshake"></i>
          </div>
          <h4>Confianza</h4>
          <p>Construimos relaciones duraderas basadas en la transparencia, honestidad y cumplimiento de compromisos.</p>
        </div>
        
        <div class="valor-card" data-aos="fade-up" data-aos-delay="400">
          <div class="valor-icon">
            <i class="fas fa-lightbulb"></i>
          </div>
          <h4>Innovación</h4>
          <p>Adoptamos y desarrollamos nuevas tecnologías para ofrecer soluciones vanguardistas a nuestros clientes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: Nuestro Equipo -->
  <section class="section equipo" data-aos="fade-up">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">El equipo</span>
        <h2>Expertos en <span class="highlight">tecnología láser</span></h2>
        <p class="section-desc">Contamos con profesionales certificados y con amplia experiencia en aplicaciones industriales</p>
      </div>
      
      <div class="equipo-grid">
        <div class="miembro-card" data-aos="flip-left" data-aos-delay="100">
          <div class="miembro-img">
            <img src="{{ asset('img/equipo-director.jpg') }}" alt="Director Técnico">
            <div class="miembro-social">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="miembro-info">
            <h4>Ing. Roberto Silva</h4>
            <p class="cargo">Director Técnico</p>
            <p class="bio">15 años de experiencia en aplicaciones láser industriales. PhD en Ingeniería de Materiales.</p>
          </div>
        </div>
        
        <div class="miembro-card" data-aos="flip-left" data-aos-delay="200">
          <div class="miembro-img">
            <img src="{{ asset('img/equipo-ingeniera.jpg') }}" alt="Ingeniera de Proyectos">
            <div class="miembro-social">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="miembro-info">
            <h4>Ing. María Fernández</h4>
            <p class="cargo">Ingeniera de Proyectos</p>
            <p class="bio">Especialista en aplicaciones de patrimonio y restauración. Maestría en Conservación.</p>
          </div>
        </div>
        
        <div class="miembro-card" data-aos="flip-left" data-aos-delay="300">
          <div class="miembro-img">
            <img src="{{ asset('img/equipo-tecnico.jpg') }}" alt="Técnico Especialista">
            <div class="miembro-social">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="miembro-info">
            <h4>Téc. Andrés Ramírez</h4>
            <p class="cargo">Especialista en Operaciones</p>
            <p class="bio">Certificado internacional en seguridad láser. 8 años en operaciones industriales.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: Testimonios -->
  <section class="section testimonios" data-aos="fade-up">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Testimonios</span>
        <h2>Lo que dicen <span class="highlight">nuestros clientes</span></h2>
      </div>
      
      <div class="testimonios-slider">
        <div class="testimonio-card" data-aos="fade-right" data-aos-delay="100">
          <div class="testimonio-header">
            <div class="cliente-avatar">
              <img src="{{ asset('img/avatar-1.jpg') }}" alt="Carlos Mendoza">
            </div>
            <div class="cliente-info">
              <h4>Carlos Mendoza</h4>
              <p class="cliente-empresa">Gerente de Producción – MetalTech SAS</p>
            </div>
          </div>
          <div class="testimonio-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span class="rating-num">5.0</span>
          </div>
          <p class="testimonio-text">
            "La limpieza láser de LaserClean eliminó completamente el óxido de nuestras matrices de estampado sin afectar el acero base. Redujimos nuestros tiempos de mantenimiento en un 60% y aumentamos la vida útil del equipo. Una inversión que realmente se paga sola."
          </p>
          <div class="testimonio-proyecto">
            <i class="fas fa-briefcase"></i>
            <span>Proyecto: Limpieza de moldes industriales</span>
          </div>
        </div>
        
        <div class="testimonio-card" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonio-header">
            <div class="cliente-avatar">
              <img src="{{ asset('img/avatar-2.jpg') }}" alt="Laura Ríos">
            </div>
            <div class="cliente-info">
              <h4>Laura Ríos</h4>
              <p class="cliente-empresa">Directora de Patrimonio – Museo Nacional</p>
            </div>
          </div>
          <div class="testimonio-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span class="rating-num">4.5</span>
          </div>
          <p class="testimonio-text">
            "Trabajamos con LaserClean en la restauración de esculturas metálicas del siglo XIX. La precisión del láser nos permitió eliminar capas de corrosión sin tocar el metal original. Un trabajo delicado que requirió tanto tecnología como sensibilidad histórica."
          </p>
          <div class="testimonio-proyecto">
            <i class="fas fa-landmark"></i>
            <span>Proyecto: Restauración patrimonial</span>
          </div>
        </div>
        
        <div class="testimonio-card" data-aos="fade-left" data-aos-delay="300">
          <div class="testimonio-header">
            <div class="cliente-avatar">
              <img src="{{ asset('img/avatar-3.jpg') }}" alt="Andrés López">
            </div>
            <div class="cliente-info">
              <h4>Andrés López</h4>
              <p class="cliente-empresa">Jefe de Mantenimiento – Autoensamble S.A.</p>
            </div>
          </div>
          <div class="testimonio-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span class="rating-num">5.0</span>
          </div>
          <p class="testimonio-text">
            "Implementamos limpieza láser en nuestra línea de producción sin necesidad de desmontar equipos. Bajamos los tiempos de parada en un 40% y eliminamos completamente el uso de químicos peligrosos. El equipo de LaserClean fue profesional y eficiente."
          </p>
          <div class="testimonio-proyecto">
            <i class="fas fa-industry"></i>
            <span>Proyecto: Mantenimiento línea de producción</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="section cta-final" data-aos="fade-up">
    <div class="container">
      <div class="cta-content">
        <h2>¿Listo para transformar tus procesos de limpieza?</h2>
        <p>Contáctanos y descubre cómo la tecnología láser puede optimizar tus operaciones</p>
        <div class="cta-buttons">
          <a href="{{ route('contacto') }}" class="btn btn-primary">
            <i class="fas fa-paper-plane"></i> Solicitar cotización
          </a>
          <a href="{{ route('servicios') }}" class="btn btn-secondary">
            <i class="fas fa-cogs"></i> Ver nuestros servicios
          </a>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Animación de contadores
    function animateCounters() {
      const counters = document.querySelectorAll('.numero[data-count]');
      const speed = 200; // Velocidad en milisegundos
      
      counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const increment = target / speed;
        let current = 0;
        
        const updateCounter = () => {
          if (current < target) {
            current += increment;
            counter.textContent = Math.ceil(current);
            setTimeout(updateCounter, 1);
          } else {
            counter.textContent = target + (counter.getAttribute('data-count') === '98' ? '%' : '+');
          }
        };
        
        updateCounter();
      });
    }
    
    // Iniciar animación cuando la sección sea visible
    const historiaSection = document.querySelector('.historia');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounters();
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    
    if (historiaSection) {
      observer.observe(historiaSection);
    }
    
    // Inicializar AOS
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 800,
        once: true,
        offset: 100
      });
    }
  });
</script>
@endpush