@extends('template')
@section('titulo', 'HEID Silver — Protección para Adultos Mayores')

@section('contenido')

{{-- ── PAGE HERO ─────────────────────────────────────────── --}}
<div class="page-hero">
    <div class="page-hero-glow" style="background: var(--heid-silver);"></div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('home') }}#modulos">Módulos</a></li>
                <li class="breadcrumb-item active">HEID Silver</li>
            </ol>
        </nav>
        <div class="row align-items-center g-5">
            <div class="col-lg-7 anim-fade-up">
                <span class="module-tag silver mb-3 d-inline-block">HEID Silver</span>
                <h1 class="page-title" style="color:#fff;">
                    Protección para<br>
                    <span style="color:var(--heid-silver);">adultos mayores</span>
                </h1>
                <p class="page-subtitle">
                    Escudo inteligente contra estafas bancarias y clonación de voz.
                    Diseñado para ser simple, confiable y tranquilizador.
                </p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('como-funciona') }}" class="btn heid-btn-primary" style="background:var(--heid-silver); color:var(--heid-bg);">
                        <i class="bi bi-cpu me-2"></i>Ver cómo funciona
                    </a>
                    <a href="{{ route('nosotros') }}" class="btn heid-btn-ghost">
                        <i class="bi bi-people me-2"></i>Sobre el equipo
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex justify-content-center anim-fade-in anim-delay-2">
                <div class="module-visual" style="color:var(--heid-silver); filter:drop-shadow(0 0 30px rgba(160,180,200,0.3));">
                    <i class="bi bi-person-heart"></i>
                    <div class="visual-ring vr-1" style="border-color:rgba(160,180,200,0.2)"></div>
                    <div class="visual-ring vr-2" style="border-color:rgba(160,180,200,0.12)"></div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ── AMENAZAS ─────────────────────────────────────────── --}}
<section class="heid-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// amenazas detectadas</span>
            <h2 class="section-title">¿Qué protege <span style="color:var(--heid-silver);">HEID Silver?</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:var(--heid-silver)"><i class="bi bi-telephone-fill"></i></div>
                    <h5 class="threat-title">Clonación de voz</h5>
                    <p class="threat-desc">Detecta voces generadas por IA que simulan ser familiares o funcionarios bancarios.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:var(--heid-orange)"><i class="bi bi-bank2"></i></div>
                    <h5 class="threat-title">Estafas bancarias</h5>
                    <p class="threat-desc">Identifica patrones de llamadas fraudulentas que solicitan datos bancarios o transferencias urgentes.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:var(--heid-cyan)"><i class="bi bi-envelope-fill"></i></div>
                    <h5 class="threat-title">Phishing por email</h5>
                    <p class="threat-desc">Analiza correos con alertas falsas de entidades financieras o del gobierno.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:#a78bfa"><i class="bi bi-person-x-fill"></i></div>
                    <h5 class="threat-title">Suplantación de identidad</h5>
                    <p class="threat-desc">Detecta cuando alguien se hace pasar por un familiar en peligro para solicitar dinero.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── DISEÑO PARA ADULTOS MAYORES ─────────────────────── --}}
<section class="heid-section-alt">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// diseño accesible</span>
            <h2 class="section-title">Pensado para la <span style="color:var(--heid-silver);">experiencia senior</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="heid-card">
                    <div class="feat-icon" style="color:var(--heid-silver)"><i class="bi bi-type-h1"></i></div>
                    <h5 class="feat-title">Letra grande y clara</h5>
                    <p class="feat-desc">Interfaz con tipografía aumentada y alto contraste para facilitar la lectura en cualquier condición.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="heid-card">
                    <div class="feat-icon" style="color:var(--heid-green)"><i class="bi bi-bell-fill"></i></div>
                    <h5 class="feat-title">Alertas simples</h5>
                    <p class="feat-desc">Notificaciones directas con instrucciones claras: "Esta llamada puede ser una estafa. No dé sus datos."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="heid-card">
                    <div class="feat-icon" style="color:var(--heid-cyan)"><i class="bi bi-people-fill"></i></div>
                    <h5 class="feat-title">Contacto familiar</h5>
                    <p class="feat-desc">Un botón de emergencia conecta directamente con el familiar de confianza registrado.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="heid-card">
                    <div class="feat-icon" style="color:#ff6b35"><i class="bi bi-mic-fill"></i></div>
                    <h5 class="feat-title">Comandos de voz</h5>
                    <p class="feat-desc">Control por voz para usuarios con dificultades motrices o visuales.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="heid-card">
                    <div class="feat-icon" style="color:#a78bfa"><i class="bi bi-shield-check"></i></div>
                    <h5 class="feat-title">Modo automático</h5>
                    <p class="feat-desc">No requiere intervención del usuario. HEID Silver actúa de fondo sin configuración compleja.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="heid-card">
                    <div class="feat-icon" style="color:var(--heid-silver)"><i class="bi bi-wifi-off"></i></div>
                    <h5 class="feat-title">Funciona sin internet</h5>
                    <p class="feat-desc">El análisis es local: no necesita conexión activa para detectar amenazas de voz clonada.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── NAVEGACIÓN A OTROS MÓDULOS ──────────────────────── --}}
<section class="heid-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// otros módulos</span>
            <h2 class="section-title">Protege a <span class="highlight-cyan">toda tu familia</span></h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <a href="{{ route('modulos.kids') }}" class="module-nav-card kids-nav text-decoration-none">
                    <div class="mnc-icon" style="color:var(--heid-green)"><i class="bi bi-shield-heart-fill"></i></div>
                    <div>
                        <span class="module-tag kids d-inline-block mb-1">HEID Kids</span>
                        <p class="mnc-title">Protección Infantil</p>
                        <p class="mnc-desc">Detección de grooming y ciberacoso para menores.</p>
                    </div>
                    <i class="bi bi-arrow-right mnc-arrow"></i>
                </a>
            </div>
            <div class="col-md-5">
                <a href="{{ route('modulos.personal') }}" class="module-nav-card personal-nav text-decoration-none">
                    <div class="mnc-icon" style="color:var(--heid-cyan)"><i class="bi bi-person-badge-fill"></i></div>
                    <div>
                        <span class="module-tag personal d-inline-block mb-1">HEID Personal</span>
                        <p class="mnc-title">Escudo Personal</p>
                        <p class="mnc-desc">Detección de Deepfakes y protección de identidad digital.</p>
                    </div>
                    <i class="bi bi-arrow-right mnc-arrow"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
@push('styles')
<style>
.page-title    { font-family:var(--font-display); font-weight:800; font-size:clamp(2rem,4vw,3.2rem); line-height:1.1; margin-bottom:1rem; }
.page-subtitle { font-size:1.05rem; color:var(--heid-text-dim); max-width:500px; }
.module-visual {
    width:200px; height:200px; position:relative;
    display:flex; align-items:center; justify-content:center;
    font-size:4rem; animation: float 3s ease-in-out infinite;
}
.visual-ring { position:absolute; border-radius:50%; border:1px solid; animation: expand 3s infinite ease-out; }
.vr-1 { width:150px; height:150px; animation-delay:0s; }
.vr-2 { width:210px; height:210px; animation-delay:1.5s; }
.threat-icon { font-size:2rem; margin-bottom:0.75rem; }
.threat-title { font-family:var(--font-display); font-weight:700; font-size:1rem; color:#fff; margin-bottom:0.4rem; }
.threat-desc  { font-size:0.83rem; color:var(--heid-text-dim); margin:0; }
.feat-icon  { font-size:1.8rem; margin-bottom:0.75rem; }
.feat-title { font-family:var(--font-display); font-weight:700; font-size:1rem; color:#fff; margin-bottom:0.4rem; }
.feat-desc  { font-size:0.83rem; color:var(--heid-text-dim); margin:0; }
.module-nav-card {
    background:var(--heid-bg-card); border:1px solid var(--heid-border);
    border-radius:14px; padding:1.5rem;
    display:flex; align-items:center; gap:1rem;
    transition:transform 0.3s, border-color 0.3s;
}
.module-nav-card:hover { transform:translateY(-3px); }
.kids-nav:hover     { border-color:rgba(0,255,136,0.3); }
.personal-nav:hover { border-color:rgba(0,229,255,0.3); }
.mnc-icon  { font-size:1.8rem; flex-shrink:0; }
.mnc-title { font-family:var(--font-display); font-weight:700; color:#fff; font-size:0.95rem; margin:0 0 0.2rem; }
.mnc-desc  { font-size:0.8rem; color:var(--heid-text-dim); margin:0; }
.mnc-arrow { font-size:1rem; color:var(--heid-text-dim); margin-left:auto; flex-shrink:0; transition:color 0.2s; }
.module-nav-card:hover .mnc-arrow { color:var(--heid-cyan); }
</style>
@endpush