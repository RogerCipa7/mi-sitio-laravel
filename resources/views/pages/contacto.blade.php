{{-- resources/views/pages/contacto.blade.php --}}
@extends('layouts.app')

@section('title', 'Contacto | Limpieza Láser Industrial')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
@endpush

@section('content')
<main class="contenedor-contacto-principal">

    <!-- Hero superior: título + subtítulo -->
    <section class="contacto-hero-superior">
        <center><h1>Contacto</h1></center>
        <div class="hero-contacto">
            <h2>Tu solución de limpieza en Bogotá ¡Contáctanos!</h2>
            <p>
                En Aseo & Limpieza, somos especialistas en servicios de limpieza en extrema. Contáctanos para preguntas, cotizaciones o más información sobre nuestros servicios.
            </p>
        </div>
    </section>

    <!-- Contenedor principal -->
    <div class="contenedor-contacto">
        <!-- Columna izquierda: info + mapa -->
        <div class="info-mapa">
            <div class="info-item">
                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                <a href="tel:+573005060655">+57 300 506 0655</a>
            </div>

            <div class="info-item">
                <i class="far fa-clock" aria-hidden="true"></i>
                <span>Lunes a sábado: 8:00 am a 6:00 pm</span>
            </div>

            <div class="info-item">
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                <span>Bogotá</span>
            </div>

            <!-- Mapa: URL corregida -->
            <div class="mapa-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.244875832676!2d-74.0744786851033!3d4.650654696678548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b4d7a4b5b5b%3A0x3d4a7d5b5b5b5b5b!2sBogot%C3%A1%2C%20Cundinamarca%2C%20Colombia!5e0!3m2!1ses!2ses!4v1700000000000!5m2!1ses!2ses" 
                    width="100%"
                    height="300"
                    style="border:0;"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Ubicación en Bogotá">
                </iframe>
            </div>

            <!-- WhatsApp: enlace corregido (sin espacios) -->
            <a href="https://wa.me/573005060655" 
               target="_blank" 
               rel="noopener" 
               class="btn-whatsapp" 
               aria-label="Chatear con nosotros en WhatsApp">
                <i class="fab fa-whatsapp" aria-hidden="true"></i> Asesoría en línea
            </a>
        </div>

        <!-- Formulario -->
        <div class="formulario-contacto">
            <h3>Contáctanos</h3>
            <p>Si deseas contratar o cotizar nuestros servicios de limpieza en Bogotá ¡Diligencia el formulario!</p>

            <form action="#" method="POST" id="form-contacto">
                @csrf <!-- ✅ Token de seguridad de Laravel (opcional si no procesas el formulario aún) -->
                <div class="form-group">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre*" required>
                </div>

                <div class="form-group">
                    <div class="telefono-input">
                        <span class="bandera" aria-hidden="true">🇨🇴</span>
                        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono*" required>
                    </div>
                </div>

                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Correo*" required>
                </div>

                <div class="form-group">
                    <textarea id="mensaje" name="mensaje" placeholder="Envía aquí tu mensaje*" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn-enviar">Solicitar Asesoría</button>
            </form>
        </div>
    </div>

</main>
@endsection