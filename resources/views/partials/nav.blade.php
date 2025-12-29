{{-- resources/views/includes/nav.blade.php --}}
<nav class="navbar">
    <div class="navbar-container">
        <!-- Logo centrado - Versión minimalista -->
        <div class="navbar-brand">
            <a href="{{ route('home') }}" class="brand-link">
                <span class="brand-text">LaserClean</span>
            </a>
        </div>

        <!-- Menú de navegación -->
        <div class="navbar-menu">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'activo' : '' }}">
                    Inicio
                </a></li>
                <li><a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'activo' : '' }}">
                    Nosotros
                </a></li>
                <li><a href="{{ route('servicios') }}" class="{{ request()->routeIs('servicios') ? 'activo' : '' }}">
                    Servicios
                </a></li>
                <li><a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'activo' : '' }}">
                    Contacto
                </a></li>
            </ul>
        </div>

        <!-- Botón CTA minimalista -->
        <div class="navbar-actions">
            <a href="{{ route('contacto') }}" class="btn-nav">
                Cotizar
            </a>
        </div>

        <!-- Botón menú móvil -->
        <button class="menu-toggle" aria-label="Menú de navegación">
            <span class="menu-icon"></span>
        </button>
    </div>

    <!-- Menú móvil -->
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <span class="mobile-brand">LaserClean</span>
            <button class="mobile-close" aria-label="Cerrar menú">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <ul class="mobile-links">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'activo' : '' }}">
                <i class="fas fa-home"></i>
                <span>Inicio</span>
            </a></li>
            <li><a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'activo' : '' }}">
                <i class="fas fa-users"></i>
                <span>Nosotros</span>
            </a></li>
            <li><a href="{{ route('servicios') }}" class="{{ request()->routeIs('servicios') ? 'activo' : '' }}">
                <i class="fas fa-cogs"></i>
                <span>Servicios</span>
            </a></li>
            <li><a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'activo' : '' }}">
                <i class="fas fa-envelope"></i>
                <span>Contacto</span>
            </a></li>
        </ul>
        <div class="mobile-actions">
            <a href="{{ route('contacto') }}" class="btn-mobile">
                <i class="fas fa-calendar-check"></i>
                Solicitar cotización
            </a>
        </div>
    </div>
</nav>