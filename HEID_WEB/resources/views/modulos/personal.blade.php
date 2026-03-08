@extends('template')
@section('titulo', 'HEID Personal — Escudo de Identidad Digital')

@section('contenido')

<div class="page-hero">
    <div class="page-hero-glow" style="background:var(--heid-cyan);"></div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Módulos</a></li>
                <li class="breadcrumb-item active">HEID Personal</li>
            </ol>
        </nav>
        <div class="row align-items-center g-5">
            <div class="col-lg-7 anim-fade-up">
                <span class="module-tag personal mb-3 d-inline-block">HEID Personal</span>
                <h1 class="page-title">Tu <span class="highlight-cyan">escudo digital</span><br>para el ciudadano activo</h1>
                <p class="page-subtitle">Detección de Deepfakes, suplantación de identidad y transacciones sospechosas. Protección integral para quien vive en el mundo digital.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('como-funciona') }}" class="btn heid-btn-primary">
                        <i class="bi bi-cpu me-2"></i>Ver cómo funciona
                    </a>
                    <a href="{{ route('nosotros') }}" class="btn heid-btn-ghost">
                        <i class="bi bi-people me-2"></i>Sobre el equipo
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex justify-content-center anim-fade-in anim-delay-2">
                <div class="module-visual" style="color:var(--heid-cyan);filter:drop-shadow(0 0 30px rgba(0,229,255,0.3));">
                    <i class="bi bi-person-badge-fill"></i>
                    <div class="visual-ring vr-1" style="border-color:rgba(0,229,255,0.2)"></div>
                    <div class="visual-ring vr-2" style="border-color:rgba(0,229,255,0.1)"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="heid-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// amenazas detectadas</span>
            <h2 class="section-title">¿Qué protege <span class="highlight-cyan">HEID Personal?</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:var(--heid-cyan)"><i class="bi bi-camera-video-fill"></i></div>
                    <h5 class="threat-title">Deepfakes en video</h5>
                    <p class="threat-desc">Detecta rostros y voces generadas por IA en videollamadas y contenido multimedia en tiempo real.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:var(--heid-orange)"><i class="bi bi-credit-card-2-front-fill"></i></div>
                    <h5 class="threat-title">Fraude transaccional</h5>
                    <p class="threat-desc">Analiza patrones de transacciones inusuales y solicitudes de pago sospechosas.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:var(--heid-green)"><i class="bi bi-fingerprint"></i></div>
                    <h5 class="threat-title">Suplantación de identidad</h5>
                    <p class="threat-desc">Monitorea el uso no autorizado de tu identidad digital en plataformas y redes sociales.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="threat-icon" style="color:#a78bfa"><i class="bi bi-link-45deg"></i></div>
                    <h5 class="threat-title">Ingeniería Social</h5>
                    <p class="threat-desc">Identifica intentos de manipulación psicológica para obtener información confidencial.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="heid-section-alt">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// panel de control</span>
            <h2 class="section-title">Tu <span class="highlight-cyan">dashboard</span> de amenazas</h2>
            <p class="section-desc">Visualiza en tiempo real el estado de tu seguridad digital.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="dashboard-mock">
                    <div class="dm-header">
                        <span class="dm-title font-mono">// Estado de seguridad — Tiempo real</span>
                        <span class="dm-status">
                            <span style="display:inline-block;width:6px;height:6px;background:var(--heid-green);border-radius:50%;animation:pulse 1.5s infinite;margin-right:4px;"></span>Activo
                        </span>
                    </div>
                    <div class="dm-body">
                        <div class="dm-metric green">
                            <i class="bi bi-shield-check-fill"></i>
                            <div>
                                <span class="dm-metric-val">Seguro</span>
                                <span class="dm-metric-label">Estado general</span>
                            </div>
                        </div>
                        <div class="dm-metric cyan">
                            <i class="bi bi-camera-video-fill"></i>
                            <div>
                                <span class="dm-metric-val">0 detectados</span>
                                <span class="dm-metric-label">Deepfakes hoy</span>
                            </div>
                        </div>
                        <div class="dm-metric orange">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                            <div>
                                <span class="dm-metric-val">2 revisadas</span>
                                <span class="dm-metric-label">Transacciones analizadas</span>
                            </div>
                        </div>
                        <div class="dm-metric purple">
                            <i class="bi bi-eye-fill"></i>
                            <div>
                                <span class="dm-metric-val">Monitoreo activo</span>
                                <span class="dm-metric-label">Identidad digital</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex flex-column gap-3">
                <div class="heid-card">
                    <div class="feat-icon" style="color:var(--heid-cyan)"><i class="bi bi-graph-up-arrow"></i></div>
                    <h5 class="feat-title">Historial de amenazas</h5>
                    <p class="feat-desc">Registro local de eventos detectados para seguimiento personal.</p>
                </div>
                <div class="heid-card">
                    <div class="feat-icon" style="color:var(--heid-green)"><i class="bi bi-bell-fill"></i></div>
                    <h5 class="feat-title">Alertas inteligentes</h5>
                    <p class="feat-desc">Notificaciones priorizadas según nivel de riesgo detectado.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <a href="{{ route('modulos.silver') }}" class="module-nav-card silver-nav text-decoration-none">
                    <div class="mnc-icon" style="color:var(--heid-silver)"><i class="bi bi-person-heart"></i></div>
                    <div>
                        <span class="module-tag silver d-inline-block mb-1">HEID Silver</span>
                        <p class="mnc-title">Protección Senior</p>
                        <p class="mnc-desc">Escudo contra estafas y clonación de voz.</p>
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
.page-title    { font-family:var(--font-display); font-weight:800; font-size:clamp(2rem,4vw,3.2rem); line-height:1.1; color:#fff; margin-bottom:1rem; }
.page-subtitle { font-size:1.05rem; color:var(--heid-text-dim); max-width:500px; }
.module-visual { width:200px; height:200px; position:relative; display:flex; align-items:center; justify-content:center; font-size:4rem; animation:float 3s ease-in-out infinite; }
.visual-ring { position:absolute; border-radius:50%; border:1px solid; animation:expand 3s infinite ease-out; }
.vr-1 { width:150px; height:150px; animation-delay:0s; }
.vr-2 { width:210px; height:210px; animation-delay:1.5s; }
.threat-icon  { font-size:2rem; margin-bottom:0.75rem; }
.threat-title { font-family:var(--font-display); font-weight:700; font-size:1rem; color:#fff; margin-bottom:0.4rem; }
.threat-desc  { font-size:0.83rem; color:var(--heid-text-dim); margin:0; }
.feat-icon  { font-size:1.8rem; margin-bottom:0.75rem; }
.feat-title { font-family:var(--font-display); font-weight:700; font-size:1rem; color:#fff; margin-bottom:0.4rem; }
.feat-desc  { font-size:0.83rem; color:var(--heid-text-dim); margin:0; }
.dashboard-mock { background:var(--heid-bg-card); border:1px solid var(--heid-border); border-radius:16px; overflow:hidden; }
.dm-header { padding:1rem 1.5rem; border-bottom:1px solid var(--heid-border); display:flex; justify-content:space-between; align-items:center; }
.dm-title  { font-family:var(--font-mono); font-size:0.75rem; color:var(--heid-text-dim); }
.dm-status { font-family:var(--font-mono); font-size:0.72rem; color:var(--heid-green); display:flex; align-items:center; }
.dm-body   { padding:1.5rem; display:flex; flex-direction:column; gap:1rem; }
.dm-metric { display:flex; align-items:center; gap:1rem; padding:0.9rem 1rem; border-radius:10px; border:1px solid; }
.dm-metric i { font-size:1.4rem; flex-shrink:0; }
.dm-metric-val   { display:block; font-family:var(--font-display); font-weight:700; font-size:0.95rem; color:#fff; }
.dm-metric-label { display:block; font-size:0.72rem; color:var(--heid-text-dim); }
.dm-metric.green  { background:rgba(0,255,136,0.05);   border-color:rgba(0,255,136,0.15);   color:var(--heid-green); }
.dm-metric.cyan   { background:rgba(0,229,255,0.05);   border-color:rgba(0,229,255,0.15);   color:var(--heid-cyan); }
.dm-metric.orange { background:rgba(255,107,53,0.05);  border-color:rgba(255,107,53,0.15);  color:var(--heid-orange); }
.dm-metric.purple { background:rgba(167,139,250,0.05); border-color:rgba(167,139,250,0.15); color:#a78bfa; }
.module-nav-card { background:var(--heid-bg-card); border:1px solid var(--heid-border); border-radius:14px; padding:1.5rem; display:flex; align-items:center; gap:1rem; transition:transform 0.3s,border-color 0.3s; }
.module-nav-card:hover { transform:translateY(-3px); }
.kids-nav:hover   { border-color:rgba(0,255,136,0.3); }
.silver-nav:hover { border-color:rgba(160,180,200,0.3); }
.mnc-icon  { font-size:1.8rem; flex-shrink:0; }
.mnc-title { font-family:var(--font-display); font-weight:700; color:#fff; font-size:0.95rem; margin:0 0 0.2rem; }
.mnc-desc  { font-size:0.8rem; color:var(--heid-text-dim); margin:0; }
.mnc-arrow { font-size:1rem; color:var(--heid-text-dim); margin-left:auto; flex-shrink:0; transition:color 0.2s; }
.module-nav-card:hover .mnc-arrow { color:var(--heid-cyan); }
</style>
@endpush