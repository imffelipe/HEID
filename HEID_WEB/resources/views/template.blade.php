<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEID — @yield('titulo', 'Human-Enhanced Identity Defense')</title>

    {{-- Bootstrap 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Space+Mono:wght@400;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

    {{-- Custom CSS (Vite) --}}
    @vite(['resources/css/template.css'])

    @stack('styles')
</head>
<body>

    {{-- ===== NAVBAR ===== --}}
    <nav class="heid-navbar navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand heid-logo" href="{{ route('home') }}">
                <span class="logo-bracket">[</span>HEID<span class="logo-bracket">]</span>
            </a>

            <button class="navbar-toggler heid-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#heidNav"
                    aria-controls="heidNav" aria-expanded="false" aria-label="Abrir menú">
                <span></span><span></span><span></span>
            </button>

            <div class="collapse navbar-collapse" id="heidNav">
                <ul class="navbar-nav mx-auto gap-lg-1">

                    <li class="nav-item">
                        <a class="nav-link heid-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           href="{{ route('home') }}">
                            <i class="bi bi-house-door me-1"></i>Inicio
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link heid-link dropdown-toggle {{ request()->routeIs('modulos.*') ? 'active' : '' }}"
                           href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-shield-lock me-1"></i>Módulos
                        </a>
                        <ul class="dropdown-menu heid-dropdown">
                            <li>
                                <a class="dropdown-item {{ request()->routeIs('modulos.kids') ? 'active' : '' }}"
                                   href="{{ route('modulos.kids') }}">
                                    <span class="module-tag kids">Kids</span>
                                    Protección infantil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->routeIs('modulos.silver') ? 'active' : '' }}"
                                   href="{{ route('modulos.silver') }}">
                                    <span class="module-tag silver">Silver</span>
                                    Adultos mayores
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->routeIs('modulos.personal') ? 'active' : '' }}"
                                   href="{{ route('modulos.personal') }}">
                                    <span class="module-tag personal">Personal</span>
                                    Ciudadano digital
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link heid-link {{ request()->routeIs('como-funciona') ? 'active' : '' }}"
                           href="{{ route('como-funciona') }}">
                            <i class="bi bi-cpu me-1"></i>Cómo funciona
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link heid-link {{ request()->routeIs('nosotros') ? 'active' : '' }}"
                           href="{{ route('nosotros') }}">
                            <i class="bi bi-people me-1"></i>Nosotros
                        </a>
                    </li>

                </ul>

                <a href="{{ route('modulos.kids') }}" class="btn heid-cta-btn ms-lg-3">
                    Protégete ahora <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </nav>

    {{-- ===== CONTENIDO PRINCIPAL ===== --}}
    <main>
        @yield('contenido')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="heid-footer">
        <div class="container">
            <div class="row gy-4 align-items-start">

                <div class="col-lg-4">
                    <div class="footer-brand">
                        <span class="logo-bracket">[</span>HEID<span class="logo-bracket">]</span>
                    </div>
                    <p class="footer-tagline">Human-Enhanced Identity Defense</p>
                    <p class="footer-sub">Capa de Confianza Invisible — Latinoamérica 2025</p>
                </div>

                <div class="col-lg-4">
                    <p class="footer-col-title">Navegación</p>
                    <ul class="footer-links list-unstyled">
                        <li><a href="{{ route('home') }}"><i class="bi bi-chevron-right"></i> Inicio</a></li>
                        <li><a href="{{ route('modulos.kids') }}"><i class="bi bi-chevron-right"></i> HEID Kids</a></li>
                        <li><a href="{{ route('modulos.silver') }}"><i class="bi bi-chevron-right"></i> HEID Silver</a></li>
                        <li><a href="{{ route('modulos.personal') }}"><i class="bi bi-chevron-right"></i> HEID Personal</a></li>
                        <li><a href="{{ route('como-funciona') }}"><i class="bi bi-chevron-right"></i> Cómo funciona</a></li>
                        <li><a href="{{ route('nosotros') }}"><i class="bi bi-chevron-right"></i> Nosotros</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <p class="footer-col-title">Tecnología</p>
                    <div class="footer-badges">
                        <span class="badge-item"><i class="bi bi-shield-check"></i> Edge AI</span>
                        <span class="badge-item"><i class="bi bi-lock"></i> Privacy First</span>
                        <span class="badge-item"><i class="bi bi-globe-americas"></i> LATAM</span>
                        <span class="badge-item"><i class="bi bi-cpu"></i> TensorFlow.js</span>
                        <span class="badge-item"><i class="bi bi-eye-slash"></i> Zero Telemetry</span>
                    </div>
                    <p class="footer-copy mt-3">© {{ date('Y') }} HEID. Proyecto de Grado.</p>
                </div>

            </div>
            <div class="footer-line mt-4"></div>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>

    <script>
        // Navbar scroll
        window.addEventListener('scroll', () => {
            document.querySelector('.heid-navbar')
                    .classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>

    @stack('scripts')
</body>
</html>