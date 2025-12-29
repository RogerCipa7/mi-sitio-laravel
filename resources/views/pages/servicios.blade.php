{{-- resources/views/pages/servicios.blade.php --}}
@extends('layouts.app')

@section('title', 'Servicios | Limpieza Láser Industrial - LaserClean Colombia')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
@endpush

@section('content')
<main class="services-page">

  <!-- HERO SECTION -->
  <section class="hero-services" aria-label="Nuestros servicios de limpieza láser">
    <div class="hero-overlay">
      <div class="container">
        <div class="hero-content" data-aos="fade-up">
          <h1 class="hero-title">Soluciones de limpieza láser<br><span class="highlight">precisión industrial</span></h1>
          <p class="hero-subtitle">Tecnología avanzada que elimina contaminantes sin contacto, sin químicos y sin dañar el sustrato</p>
          <div class="hero-cta">
            <a href="{{ route('contacto') }}" class="btn btn-primary">
              <i class="fas fa-calendar-check"></i> Solicitar diagnóstico
            </a>
            <a href="#servicios-detallados" class="btn btn-secondary">
              <i class="fas fa-search"></i> Explorar servicios
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: SERVICIOS DESTACADOS -->
  <section class="section servicios-destacados" id="servicios-detallados" data-aos="fade-up">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Nuestros Servicios</span>
        <h2>Tecnología láser aplicada a <span class="highlight">diferentes necesidades</span></h2>
        <p class="section-desc">Ofrecemos soluciones especializadas para múltiples industrias y aplicaciones</p>
      </div>
      
      <div class="servicios-grid">
        <!-- Servicio 1 -->
        <div class="servicio-card" data-aos="zoom-in" data-aos-delay="100">
          <div class="servicio-icon">
            <i class="fas fa-industry"></i>
          </div>
          <h3>Limpieza Industrial</h3>
          <p>Eliminación de óxido, pintura, grasa y contaminantes en maquinaria, estructuras y equipos industriales.</p>
          <ul class="servicio-features">
            <li><i class="fas fa-check"></i> Sin desmontar equipos</li>
            <li><i class="fas fa-check"></i> Precisión milimétrica</li>
            <li><i class="fas fa-check"></i> Certificado de limpieza</li>
          </ul>
          <a href="#contacto-form" class="servicio-link">Solicitar información <i class="fas fa-arrow-right"></i></a>
        </div>
        
        <!-- Servicio 2 -->
        <div class="servicio-card" data-aos="zoom-in" data-aos-delay="200">
          <div class="servicio-icon">
            <i class="fas fa-hammer"></i>
          </div>
          <h3>Preparación para Soldadura</h3>
          <p>Limpieza de bordes y superficies metálicas para garantizar soldaduras perfectas y libres de defectos.</p>
          <ul class="servicio-features">
            <li><i class="fas fa-check"></i> Elimina óxido y pintura</li>
            <li><i class="fas fa-check"></i> Prepara superficies rugosas</li>
            <li><i class="fas fa-check"></i> Mejora adherencia</li>
          </ul>
          <a href="#contacto-form" class="servicio-link">Solicitar información <i class="fas fa-arrow-right"></i></a>
        </div>
        
        <!-- Servicio 3 -->
        <div class="servicio-card" data-aos="zoom-in" data-aos-delay="300">
          <div class="servicio-icon">
            <i class="fas fa-history"></i>
          </div>
          <h3>Restauración Patrimonial</h3>
          <p>Limpieza delicada de monumentos, esculturas y piezas históricas sin dañar el material original.</p>
          <ul class="servicio-features">
            <li><i class="fas fa-check"></i> Control de potencia preciso</li>
            <li><i class="fas fa-check"></i> Sin contacto físico</li>
            <li><i class="fas fa-check"></i> Documentación completa</li>
          </ul>
          <a href="#contacto-form" class="servicio-link">Solicitar información <i class="fas fa-arrow-right"></i></a>
        </div>
        
        <!-- Servicio 4 -->
        <div class="servicio-card" data-aos="zoom-in" data-aos-delay="400">
          <div class="servicio-icon">
            <i class="fas fa-cube"></i>
          </div>
          <h3>Limpieza de Moldes</h3>
          <p>Eliminación de residuos en moldes de inyección, matrices y herramientas de producción.</p>
          <ul class="servicio-features">
            <li><i class="fas fa-check"></i> Sin dañar geometrías</li>
            <li><i class="fas fa-check"></i> Alta precisión</li>
            <li><i class="fas fa-check"></i> Reduce tiempos de parada</li>
          </ul>
          <a href="#contacto-form" class="servicio-link">Solicitar información <i class="fas fa-arrow-right"></i></a>
        </div>
        
        <!-- Servicio 5 -->
        <div class="servicio-card" data-aos="zoom-in" data-aos-delay="500">
          <div class="servicio-icon">
            <i class="fas fa-building"></i>
          </div>
          <h3>Remoción de Graffiti</h3>
          <p>Eliminación de pintura spray y graffiti en fachadas, monumentos y espacios públicos.</p>
          <ul class="servicio-features">
            <li><i class="fas fa-check"></i> Sin químicos agresivos</li>
            <li><i class="fas fa-check"></i> Para múltiples superficies</li>
            <li><i class="fas fa-check"></i> Resultados inmediatos</li>
          </ul>
          <a href="#contacto-form" class="servicio-link">Solicitar información <i class="fas fa-arrow-right"></i></a>
        </div>
        
        <!-- Servicio 6 -->
        <div class="servicio-card" data-aos="zoom-in" data-aos-delay="600">
          <div class="servicio-icon">
            <i class="fas fa-cogs"></i>
          </div>
          <h3>Mantenimiento Preventivo</h3>
          <p>Programas de limpieza periódica para mantener equipos y estructuras en óptimas condiciones.</p>
          <ul class="servicio-features">
            <li><i class="fas fa-check"></i> Planes personalizados</li>
            <li><i class="fas fa-check"></i> Reportes técnicos</li>
            <li><i class="fas fa-check"></i> Aumenta vida útil</li>
          </ul>
          <a href="#contacto-form" class="servicio-link">Solicitar información <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: PROCESO DE TRABAJO -->
  <section class="section proceso" data-aos="fade-up">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Cómo trabajamos</span>
        <h2>Nuestro proceso en <span class="highlight">4 pasos</span></h2>
      </div>
      
      <div class="proceso-timeline">
        <div class="proceso-paso" data-aos="fade-right" data-aos-delay="100">
          <div class="paso-numero">01</div>
          <div class="paso-content">
            <h3>Diagnóstico Inicial</h3>
            <p>Evaluamos el material, tipo de contaminante y condiciones específicas del proyecto para definir los parámetros láser óptimos.</p>
            <ul class="paso-details">
              <li>Inspección visual y técnica</li>
              <li>Pruebas de muestras</li>
              <li>Definición de alcance</li>
            </ul>
          </div>
        </div>
        
        <div class="proceso-paso" data-aos="fade-left" data-aos-delay="200">
          <div class="paso-numero">02</div>
          <div class="paso-content">
            <h3>Planificación</h3>
            <p>Desarrollamos un plan detallado que incluye cronograma, recursos necesarios y protocolos de seguridad específicos.</p>
            <ul class="paso-details">
              <li>Programación de actividades</li>
              <li>Coordinación logística</li>
              <li>Preparación de área de trabajo</li>
            </ul>
          </div>
        </div>
        
        <div class="proceso-paso" data-aos="fade-right" data-aos-delay="300">
          <div class="paso-numero">03</div>
          <div class="paso-content">
            <h3>Ejecución</h3>
            <p>Nuestro equipo certificado ejecuta la limpieza láser con equipos de última generación y supervisión constante.</p>
            <ul class="paso-details">
              <li>Calibración de equipos láser</li>
              <li>Ejecución controlada</li>
              <li>Monitoreo en tiempo real</li>
            </ul>
          </div>
        </div>
        
        <div class="proceso-paso" data-aos="fade-left" data-aos-delay="400">
          <div class="paso-numero">04</div>
          <div class="paso-content">
            <h3>Control de Calidad</h3>
            <p>Verificamos los resultados mediante inspección visual y mediciones técnicas, entregando documentación completa.</p>
            <ul class="paso-details">
              <li>Inspección final</li>
              <li>Reporte fotográfico</li>
              <li>Certificado de limpieza</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: INDUSTRIAS QUE ATENDEMOS -->
  <section class="section industrias" data-aos="fade-up">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Sectores especializados</span>
        <h2>Servicios para <span class="highlight">diferentes industrias</span></h2>
      </div>
      
      <div class="industrias-grid">
        <div class="industria-card" data-aos="flip-up" data-aos-delay="100">
          <div class="industria-icon">
            <i class="fas fa-industry"></i>
          </div>
          <h4>Petroquímica</h4>
          <p>Limpieza de equipos, tuberías y estructuras expuestas a corrosión y residuos químicos.</p>
        </div>
        
        <div class="industria-card" data-aos="flip-up" data-aos-delay="150">
          <div class="industria-icon">
            <i class="fas fa-car"></i>
          </div>
          <h4>Automotriz</h4>
          <p>Mantenimiento de moldes, matrices y equipos de producción en líneas de ensamblaje.</p>
        </div>
        
        <div class="industria-card" data-aos="flip-up" data-aos-delay="200">
          <div class="industria-icon">
            <i class="fas fa-ship"></i>
          </div>
          <h4>Naval</h4>
          <p>Limpieza de cascos, hélices y componentes expuestos a agua salada y biocontaminación.</p>
        </div>
        
        <div class="industria-card" data-aos="flip-up" data-aos-delay="250">
          <div class="industria-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <h4>Energía</h4>
          <p>Mantenimiento de turbinas, generadores y equipos en plantas de generación eléctrica.</p>
        </div>
        
        <div class="industria-card" data-aos="flip-up" data-aos-delay="300">
          <div class="industria-icon">
            <i class="fas fa-utensils"></i>
          </div>
          <h4>Alimentos</h4>
          <p>Limpieza de equipos de procesamiento sin químicos que puedan contaminar productos.</p>
        </div>
        
        <div class="industria-card" data-aos="flip-up" data-aos-delay="350">
          <div class="industria-icon">
            <i class="fas fa-landmark"></i>
          </div>
          <h4>Patrimonio</h4>
          <p>Restauración de monumentos históricos, obras de arte y edificios patrimoniales.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: COMPARATIVA TECNOLÓGICA -->
  <section class="section comparativa" data-aos="fade-up">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Ventajas competitivas</span>
        <h2>¿Por qué elegir <span class="highlight">limpieza láser?</span></h2>
      </div>
      
      <div class="comparativa-grid">
        <div class="comparativa-card" data-aos="fade-right" data-aos-delay="100">
          <div class="comparativa-header">
            <h3>Métodos Tradicionales</h3>
            <div class="comparativa-badge tradicional">Convencional</div>
          </div>
          <ul class="comparativa-list">
            <li class="negative"><i class="fas fa-times"></i> Uso de químicos agresivos</li>
            <li class="negative"><i class="fas fa-times"></i> Generación de residuos tóxicos</li>
            <li class="negative"><i class="fas fa-times"></i> Daño al sustrato por abrasión</li>
            <li class="negative"><i class="fas fa-times"></i> Tiempos de secado prolongados</li>
            <li class="negative"><i class="fas fa-times"></i> Riesgo para operarios</li>
            <li class="negative"><i class="fas fa-times"></i> Altos costos de disposición</li>
          </ul>
        </div>
        
        <div class="comparativa-card" data-aos="fade-left" data-aos-delay="200">
          <div class="comparativa-header">
            <h3>Limpieza Láser LaserClean</h3>
            <div class="comparativa-badge laser">Avanzado</div>
          </div>
          <ul class="comparativa-list">
            <li class="positive"><i class="fas fa-check"></i> Sin químicos ni abrasivos</li>
            <li class="positive"><i class="fas fa-check"></i> Cero residuos tóxicos</li>
            <li class="positive"><i class="fas fa-check"></i> No daña el material base</li>
            <li class="positive"><i class="fas fa-check"></i> Resultados inmediatos</li>
            <li class="positive"><i class="fas fa-check"></i> Máxima seguridad operativa</li>
            <li class="positive"><i class="fas fa-check"></i> Ahorro total en disposición</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN: FAQ MEJORADA -->
  <section class="section faq-mejorada" data-aos="fade-up">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Preguntas frecuentes</span>
        <h2>Resolvemos tus <span class="highlight">inquietudes</span></h2>
        <p class="section-desc">Encuentra respuestas a las preguntas más comunes sobre nuestros servicios</p>
      </div>
      
      <div class="faq-grid">
        <div class="faq-column">
          <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
            <button class="faq-question">
              <span class="faq-icon"><i class="fas fa-shield-alt"></i></span>
              <span class="faq-text">¿La limpieza láser es segura para mis equipos?</span>
              <span class="faq-arrow"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="faq-answer">
              <p>Sí, totalmente. Nuestros sistemas láser están calibrados específicamente para cada material y aplicación. Utilizamos tecnología de control de potencia que permite eliminar contaminantes sin afectar el sustrato base. Realizamos pruebas previas para garantizar la seguridad del proceso.</p>
            </div>
          </div>
          
          <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
            <button class="faq-question">
              <span class="faq-icon"><i class="fas fa-clock"></i></span>
              <span class="faq-text">¿Cuánto tiempo toma un servicio completo?</span>
              <span class="faq-arrow"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="faq-answer">
              <p>El tiempo varía según el tamaño del proyecto y el tipo de contaminante. Generalmente, trabajamos 3-5 veces más rápido que métodos tradicionales. Un área de 1m² con óxido moderado puede limpiarse en 2-3 horas. Proporcionamos estimaciones precisas después del diagnóstico inicial.</p>
            </div>
          </div>
          
          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <button class="faq-question">
              <span class="faq-icon"><i class="fas fa-tools"></i></span>
              <span class="faq-text">¿Requiere desmontar la maquinaria?</span>
              <span class="faq-arrow"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="faq-answer">
              <p>En el 90% de los casos, no es necesario desmontar. Nuestros equipos láser son portátiles y diseñados para trabajar in situ. Solo requerimos acceso visual y físico al área a limpiar. Esto reduce significativamente los tiempos de parada y costos de desmontaje/ensamblaje.</p>
            </div>
          </div>
        </div>
        
        <div class="faq-column">
          <div class="faq-item" data-aos="fade-up" data-aos-delay="150">
            <button class="faq-question">
              <span class="faq-icon"><i class="fas fa-leaf"></i></span>
              <span class="faq-text">¿Es realmente ecológica la limpieza láser?</span>
              <span class="faq-arrow"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="faq-answer">
              <p>Absolutamente. No utilizamos químicos, agua ni abrasivos. Los contaminantes removidos son recolectados mediante sistemas de extracción y pueden ser dispuestos como residuos no peligrosos. Reducimos la huella de carbono en un 85% comparado con métodos tradicionales.</p>
            </div>
          </div>
          
          <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
            <button class="faq-question">
              <span class="faq-icon"><i class="fas fa-certificate"></i></span>
              <span class="faq-text">¿Cuentan con certificaciones?</span>
              <span class="faq-arrow"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="faq-answer">
              <p>Sí, contamos con certificaciones ISO 9001:2015 para gestión de calidad y nuestros operadores están certificados en seguridad láser según normas IEC 60825. Además, nuestros equipos cuentan con certificaciones CE y cumplen todas las regulaciones colombianas de seguridad industrial.</p>
            </div>
          </div>
          
          <div class="faq-item" data-aos="fade-up" data-aos-delay="350">
            <button class="faq-question">
              <span class="faq-icon"><i class="fas fa-dollar-sign"></i></span>
              <span class="faq-text">¿Es más costoso que métodos tradicionales?</span>
              <span class="faq-arrow"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="faq-answer">
              <p>Aunque la inversión inicial puede ser mayor, el costo total del ciclo de vida es significativamente menor. Considera: ahorro en químicos, eliminación de costos de disposición, reducción de tiempos de parada, aumento de vida útil del equipo y menores costos de mantenimiento. La ROI promedio es de 6-12 meses.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="section cta-servicios" data-aos="fade-up">
    <div class="container">
      <div class="cta-content">
        <div class="cta-text">
          <h2>¿Listo para transformar<br>tus procesos de limpieza?</h2>
          <p>Solicita una demostración gratuita o cotización personalizada</p>
        </div>
        <div class="cta-buttons">
          <a href="tel:+573001234567" class="btn btn-primary">
            <i class="fas fa-phone-alt"></i> Llamar ahora
          </a>
          <a href="mailto:info@laserclean.com" class="btn btn-secondary">
            <i class="fas fa-envelope"></i> Enviar email
          </a>
          <a href="{{ route('contacto') }}" class="btn btn-outline">
            <i class="fas fa-file-alt"></i> Solicitar cotización
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
    // Inicializar AOS
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 100
      });
    }

    // FAQ Accordion Mejorado
    document.querySelectorAll('.faq-question').forEach(button => {
      button.addEventListener('click', () => {
        const answer = button.nextElementSibling;
        const arrow = button.querySelector('.faq-arrow i');
        
        // Toggle clase active en el botón
        button.classList.toggle('active');
        
        // Toggle respuesta
        if (answer.style.maxHeight) {
          answer.style.maxHeight = null;
          answer.classList.remove('open');
        } else {
          answer.style.maxHeight = answer.scrollHeight + "px";
          answer.classList.add('open');
        }
        
        // Rotar flecha
        if (arrow) {
          arrow.style.transform = button.classList.contains('active') 
            ? 'rotate(180deg)' 
            : 'rotate(0deg)';
        }
      });
    });

    // Smooth scroll para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        if (this.getAttribute('href').startsWith('#') && 
            this.getAttribute('href').length > 1) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            target.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        }
      });
    });

    // Efecto hover para tarjetas de servicios
    document.querySelectorAll('.servicio-card').forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
      });
    });
  });
</script>
@endpush