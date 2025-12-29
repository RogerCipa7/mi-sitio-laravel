{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Limpieza Láser Industrial | Precisión sin contacto')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endpush

@section('content')
    <!-- =====================================
         HERO PRINCIPAL – VIDEO DE FONDO
         ===================================== -->
    <section class="hero-video" aria-label="Presentación principal">
        <!-- Video con imagen de respaldo -->
        <video autoplay muted loop playsinline poster="{{ asset('img/video-poster.jpg') }}">
            <source src="{{ asset('video/laser-loop.mp4') }}" type="video/mp4">
            <!-- Fallback para navegadores que no soportan video -->
            <img src="{{ asset('img/hero-fallback.jpg') }}" alt="Limpieza láser industrial">
        </video>

        <!-- Capa oscura para mejorar legibilidad -->
        <div class="hero-dark" aria-hidden="true"></div>

        <!-- Contenido encima del video -->
        <div class="container">
            <div class="hero-overlay">
                <h1>Limpieza industrial sin químicos.</h1>
                <h2>Sin contacto. Precisión láser.</h2>
                <a href="{{ route('contacto') }}" class="btn btn-primary">Solicitar cotización</a>
            </div>
        </div>
    </section>

    <!-- =====================================
         CONTENIDO PRINCIPAL
         ===================================== -->
    <main class="home-page">

        <!-- SECCIÓN: ¿Qué es LaserClean? -->
        <section class="section intro" data-aos="fade-up">
            <div class="container">
                <div class="section-content">
                    <span class="subtitle">Limpieza con Tecnología</span>
                    <h2>¿Qué es <br><strong>LaserClean?</strong></h2>
                    <p>
                        En LaserClean Colombia ofrecemos servicios especializados de limpieza láser para una amplia variedad de proyectos, desde aplicaciones industriales hasta civiles y de conservación.
                    </p>
                    <p>
                        Nuestra tecnología combina precisión milimétrica y respeto por la superficie tratada, ideal para materiales sensibles o con requisitos técnicos exigentes.
                    </p>
                    <p>
                        La limpieza láser es un método limpio, seguro y eficiente: no requiere químicos, no genera residuos tóxicos, no daña mecánicamente el sustrato y evita los efectos térmicos no deseados.
                    </p>
                    <a href="{{ route('nosotros') }}" class="btn btn-primary">MÁS INFO</a>
                </div>
                <div class="section-image" data-aos="fade-left" data-aos-delay="300">
                    <img src="{{ asset('img/imgn.jpg') }}" alt="Equipo de limpieza láser LaserClean Colombia">
                </div>
            </div>
        </section>

        <!-- SECCIÓN: ¿Por qué limpieza láser? -->
        <section class="section benefits" data-aos="fade-up">
            <div class="container">
                <div class="section-header">
                    <span class="subtitle">Beneficios y Ventajas</span>
                    <h2>¿Por qué limpieza láser?</h2>
                </div>
                <div class="benefits-grid">
                    <div class="benefit-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                        <h3>Alta precisión</h3>
                        <p>Control exacto sin afectar el material base.</p>
                    </div>
                    <div class="benefit-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="fa-solid fa-leaf"></i></div>
                        <h3>Ecológica</h3>
                        <p>Sin químicos, sin residuos tóxicos.</p>
                    </div>
                    <div class="benefit-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="fa-solid fa-magnet"></i></div>
                        <h3>No abrasiva</h3>
                        <p>No daña ni deforma las superficies tratadas.</p>
                    </div>
                    <div class="benefit-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <h3>Uso industrial</h3>
                        <p>Ideal para moldes, metales, maquinaria y más.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN: Materiales que tratamos -->
        <section class="section materials" data-aos="fade-up">
            <div class="container">
                <div class="materials-content">
                    <span class="subtitle">Tecnología aplicada</span>
                    <h2>Materiales<br><strong>que tratamos</strong></h2>
                    <p>
                        Nuestra tecnología láser se adapta a una amplia variedad de superficies,
                        desde metales industriales hasta materiales históricos y delicados.
                    </p>
                    <p>
                        Cada material requiere parámetros específicos para una limpieza segura,
                        eficaz y no invasiva.
                    </p>
                </div>
                <div class="materials-carousel-wrapper">
                    <div class="materials-carousel-track">
                        <!-- Items originales -->
                        <div class="material-item">
                            <img src="{{ asset('img/material-metal.jpg') }}" alt="Metal">
                            <div class="material-label">Metal</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-concreto.jpg') }}" alt="Concreto">
                            <div class="material-label">Concreto</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-madera.jpg') }}" alt="Madera">
                            <div class="material-label">Madera</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-piedra.jpg') }}" alt="Piedra">
                            <div class="material-label">Piedra</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-oxido.jpg') }}" alt="Óxido">
                            <div class="material-label">Óxido</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-graffiti.jpg') }}" alt="Graffiti">
                            <div class="material-label">Graffiti</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-moldes.jpg') }}" alt="Moldes">
                            <div class="material-label">Moldes</div>
                        </div>
                        <!-- Copias para el efecto de scroll infinito -->
                        <div class="material-item">
                            <img src="{{ asset('img/material-metal.jpg') }}" alt="Metal">
                            <div class="material-label">Metal</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-concreto.jpg') }}" alt="Concreto">
                            <div class="material-label">Concreto</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-madera.jpg') }}" alt="Madera">
                            <div class="material-label">Madera</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-piedra.jpg') }}" alt="Piedra">
                            <div class="material-label">Piedra</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-oxido.jpg') }}" alt="Óxido">
                            <div class="material-label">Óxido</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-graffiti.jpg') }}" alt="Graffiti">
                            <div class="material-label">Graffiti</div>
                        </div>
                        <div class="material-item">
                            <img src="{{ asset('img/material-moldes.jpg') }}" alt="Moldes">
                            <div class="material-label">Moldes</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN: Sectores que atendemos -->
        <section class="section sectors" data-aos="fade-up">
            <div class="container">
                <div class="section-header">
                    <span class="subtitle">Sectores que atendemos</span>
                    <h2>Industrias que confían en nosotros</h2>
                </div>
                <div class="sectors-grid">
                    <div class="sector-item" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('img/sector-metal.jpg') }}" alt="Industria metalmecánica">
                        <span>Industria metalmecánica</span>
                    </div>
                    <div class="sector-item" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('img/sector-auto.jpg') }}" alt="Automotriz">
                        <span>Automotriz</span>
                    </div>
                    <div class="sector-item" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('img/sector-restauracion.jpg') }}" alt="Restauración de piezas">
                        <span>Restauración de piezas</span>
                    </div>
                    <div class="sector-item" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('img/sector-moldes.jpg') }}" alt="Moldes industriales">
                        <span>Moldes industriales</span>
                    </div>
                    <div class="sector-item" data-aos="zoom-in" data-aos-delay="500">
                        <img src="{{ asset('img/sector-mantenimiento.jpg') }}" alt="Mantenimiento técnico">
                        <span>Mantenimiento técnico</span>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')
<script>
    // Pausar la animación del carrusel al hacer hover
    document.addEventListener('DOMContentLoaded', function() {
        const carouselTrack = document.querySelector('.materials-carousel-track');
        
        if (carouselTrack) {
            carouselTrack.addEventListener('mouseenter', function() {
                this.style.animationPlayState = 'paused';
            });
            
            carouselTrack.addEventListener('mouseleave', function() {
                this.style.animationPlayState = 'running';
            });
        }
        
        // Inicializar AOS (Animate On Scroll)
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