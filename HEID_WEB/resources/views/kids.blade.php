@extends('template')
@section('titulo', 'HEID Kids — Protección Infantil')

@section('contenido')

{{-- ── PAGE HERO ─────────────────────────────────────────── --}}
<div class="page-hero">
    <div class="page-hero-glow" style="background: var(--heid-green);"></div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('home') }}#modulos">Módulos</a></li>
                <li class="breadcrumb-item active">HEID Kids</li>
            </ol>
        </nav>

        <div class="row align-items-center g-5">
            <div class="col-lg-7 anim-fade-up">
                <span class="module-tag kids mb-3 d-inline-block">HEID Kids</span>
                <h1 class="page-title" style="color:#fff;">
                    Protección <span class="highlight-green">infantil</span><br>
                    en tiempo real
                </h1>
                <p class="page-subtitle">
                    Detección de grooming y ciberacoso en chats y juegos en línea.
                    Alertas discretas a padres sin invadir la privacidad del menor.
                </p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('como-funciona') }}" class="btn heid-btn-primary" style="background:var(--heid-green); color:var(--heid-bg);">
                        <i class="bi bi-cpu me-2"></i>Ver cómo funciona
                    </a>
                    <a href="{{ route('nosotros') }}" class="btn heid-btn-ghost">
                        <i class="bi bi-people me-2"></i>Sobre el equipo
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex justify-content-center anim-fade-in anim-delay-2">
                <div class="module-visual kids-visual">
                    <i class="bi bi-shield-heart-fill"></i>
                    <div class="visual-ring vr-1"></div>
                    <div class="visual-ring vr-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ── AMENAZAS QUE DETECTA ─────────────────────────────── --}}
<section class="heid-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// amenazas detectadas</span>
            <h2 class="section-title">¿Qué protege <span class="highlight-green">HEID Kids?</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:var(--heid-green)"><i class="bi bi-chat-dots-fill"></i></div>
                    <h5 class="threat-title">Grooming</h5>
                    <p class="threat-desc">Detecta patrones de manipulación y acercamiento inapropiado de adultos hacia menores en chats.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:#ff6b35"><i class="bi bi-emoji-angry-fill"></i></div>
                    <h5 class="threat-title">Ciberacoso</h5>
                    <p class="threat-desc">Identifica mensajes de acoso, humillación y hostigamiento repetitivo en plataformas de juegos.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:var(--heid-cyan)"><i class="bi bi-image-fill"></i></div>
                    <h5 class="threat-title">Contenido inapropiado</h5>
                    <p class="threat-desc">Analiza solicitudes de envío de imágenes o encuentros en persona con desconocidos.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:#a78bfa"><i class="bi bi-exclamation-triangle-fill"></i></div>
                    <h5 class="threat-title">Extorsión digital</h5>
                    <p class="threat-desc">Reconoce intentos de chantaje o extorsión dirigidos a menores de edad.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── CÓMO PROTEGE ─────────────────────────────────────── --}}
<section class="heid-section-alt">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// proceso de protección</span>
            <h2 class="section-title">Cómo funciona <span class="highlight-green">la protección</span></h2>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="process-list">
                    <div class="process-item">
                        <div class="process-dot" style="background:var(--heid-green)"></div>
                        <div>
                            <h5 class="process-title">1. Monitoreo en segundo plano</h5>
                            <p class="process-desc">HEID Kids corre localmente en el dispositivo del menor, analizando conversaciones en tiempo real sin acceder a datos externos.</p>
                        </div>
                    </div>
                    <div class="process-item">
                        <div class="process-dot" style="background:var(--heid-cyan)"></div>
                        <div>
                            <h5 class="process-title">2. Análisis NLP local</h5>
                            <p class="process-desc">Modelos de procesamiento de lenguaje natural (TensorFlow.js) identifican patrones de grooming y acoso en el texto de los chats.</p>
                        </div>
                    </div>
                    <div class="process-item">
                        <div class="process-dot" style="background:#a78bfa"></div>
                        <div>
                            <h5 class="process-title">3. Alerta discreta al tutor</h5>
                            <p class="process-desc">Al detectar una amenaza, notifica al padre o tutor registrado sin mostrar el contenido al menor ni a terceros.</p>
                        </div>
                    </div>
                    <div class="process-item">
                        <div class="process-dot" style="background:var(--heid-orange)"></div>
                        <div>
                            <h5 class="process-title">4. Guía de acción</h5>
                            <p class="process-desc">Provee pasos concretos para que el tutor aborde la situación de manera segura y empática.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="privacy-box" style="border-color:rgba(0,255,136,0.2)">
                    <div class="pb-icon" style="color:var(--heid-green)"><i class="bi bi-lock-fill"></i></div>
                    <h4 style="color:#fff; font-family:var(--font-display);">Privacidad del menor garantizada</h4>
                    <p style="color:var(--heid-text-dim); font-size:0.9rem;">
                        HEID Kids <strong style="color:#fff;">nunca almacena ni transmite</strong> el contenido de las conversaciones.
                        Solo genera una señal de alerta cuando detecta un patrón de riesgo.
                        El análisis ocurre completamente en el dispositivo.
                    </p>
                    <div class="pb-stats">
                        <div class="pb-stat">
                            <span class="pb-num" style="color:var(--heid-green)">0%</span>
                            <span class="pb-label">Datos enviados a servidores</span>
                        </div>
                        <div class="pb-stat">
                            <span class="pb-num" style="color:var(--heid-green)">100%</span>
                            <span class="pb-label">Procesamiento local</span>
                        </div>
                    </div>
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
                <a href="{{ route('modulos.silver') }}" class="module-nav-card silver-nav text-decoration-none">
                    <div class="mnc-icon" style="color:var(--heid-silver)"><i class="bi bi-person-heart"></i></div>
                    <div>
                        <span class="module-tag silver d-inline-block mb-1">HEID Silver</span>
                        <p class="mnc-title">Protección Senior</p>
                        <p class="mnc-desc">Escudo contra estafas y clonación de voz para adultos mayores.</p>
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
.highlight-green { color: var(--heid-green); }
.page-title    { font-family:var(--font-display); font-weight:800; font-size:clamp(2rem,4vw,3.2rem); line-height:1.1; margin-bottom:1rem; }
.page-subtitle { font-size:1.05rem; color:var(--heid-text-dim); max-width:500px; }

.module-visual {
    width:200px; height:200px; position:relative;
    display:flex; align-items:center; justify-content:center;
    font-size:4rem; color:var(--heid-green);
    filter: drop-shadow(0 0 30px rgba(0,255,136,0.3));
    animation: float 3s ease-in-out infinite;
}
.visual-ring {
    position:absolute; border-radius:50%;
    border:1px solid rgba(0,255,136,0.2);
    animation: expand 3s infinite ease-out;
}
.vr-1 { width:150px; height:150px; animation-delay:0s; }
.vr-2 { width:210px; height:210px; animation-delay:1.5s; }

.threat-icon { font-size:2rem; margin-bottom:0.75rem; }
.threat-title { font-family:var(--font-display); font-weight:700; font-size:1rem; color:#fff; margin-bottom:0.4rem; }
.threat-desc  { font-size:0.83rem; color:var(--heid-text-dim); margin:0; }

.process-list { display:flex; flex-direction:column; gap:1.75rem; }
.process-item { display:flex; align-items:flex-start; gap:1rem; }
.process-dot  { width:12px; height:12px; border-radius:50%; flex-shrink:0; margin-top:5px; }
.process-title{ font-family:var(--font-display); font-weight:700; font-size:1rem; color:#fff; margin-bottom:0.3rem; }
.process-desc { font-size:0.84rem; color:var(--heid-text-dim); margin:0; }

.privacy-box {
    background:var(--heid-bg-card); border:1px solid;
    border-radius:16px; padding:2rem;
}
.pb-icon { font-size:2rem; margin-bottom:1rem; }
.pb-stats { display:flex; gap:2rem; margin-top:1.5rem; }
.pb-num   { display:block; font-family:var(--font-display); font-size:1.8rem; font-weight:800; }
.pb-label { font-size:0.75rem; color:var(--heid-text-dim); }

.module-nav-card {
    background:var(--heid-bg-card); border:1px solid var(--heid-border);
    border-radius:14px; padding:1.5rem;
    display:flex; align-items:center; gap:1rem;
    transition:transform 0.3s, border-color 0.3s;
}
.module-nav-card:hover { transform:translateY(-3px); }
.silver-nav:hover   { border-color:rgba(160,180,200,0.3); }
.personal-nav:hover { border-color:rgba(0,229,255,0.3); }
.mnc-icon  { font-size:1.8rem; flex-shrink:0; }
.mnc-title { font-family:var(--font-display); font-weight:700; color:#fff; font-size:0.95rem; margin:0 0 0.2rem; }
.mnc-desc  { font-size:0.8rem; color:var(--heid-text-dim); margin:0; }
.mnc-arrow { font-size:1rem; color:var(--heid-text-dim); margin-left:auto; flex-shrink:0; transition:color 0.2s; }
.module-nav-card:hover .mnc-arrow { color:var(--heid-cyan); }
</style>
@endpush