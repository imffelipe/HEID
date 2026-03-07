@extends('template')
@section('titulo', 'HEID — Seguridad Digital Preventiva')

@section('contenido')

{{-- ── HERO ─────────────────────────────────────────────── --}}
<section class="heid-hero">
    <div class="hero-bg-glow"></div>
    <div class="container">
        <div class="row align-items-center min-vh-100">

            <div class="col-lg-7 hero-content">
                <div class="hero-label anim-fade-up">
                    <span class="dot-pulse"></span>
                    Sistema activo — Protección en tiempo real
                </div>

                <h1 class="hero-title anim-fade-up anim-delay-1">
                    La <span class="highlight-cyan">Capa Invisible</span><br>
                    que protege tu<br>
                    <span class="highlight-cyan" style="text-decoration:underline; text-decoration-color:rgba(0,229,255,0.3); text-underline-offset:6px;">identidad digital</span>
                </h1>

                <p class="hero-desc anim-fade-up anim-delay-2">
                    HEID detecta fraudes, Deepfakes y suplantación de identidad
                    usando Inteligencia Artificial local. Tus datos <strong>no salen de tu dispositivo.</strong>
                </p>

                <div class="hero-actions anim-fade-up anim-delay-3">
                    <a href="{{ route('modulos.kids') }}" class="btn heid-btn-primary">
                        <i class="bi bi-shield-fill-check me-2"></i>Explorar módulos
                    </a>
                    <a href="{{ route('como-funciona') }}" class="btn heid-btn-ghost">
                        <i class="bi bi-play-circle me-2"></i>Cómo funciona
                    </a>
                </div>

                <div class="hero-stats anim-fade-up anim-delay-4">
                    <div class="stat-item">
                        <span class="stat-num">3</span>
                        <span class="stat-label">Módulos de protección</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-num">100%</span>
                        <span class="stat-label">Datos on-device</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-num">IA</span>
                        <span class="stat-label">Edge AI en tiempo real</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-flex justify-content-center anim-fade-in anim-delay-2">
                <div class="hero-shield">
                    <div class="shield-ring ring-1"></div>
                    <div class="shield-ring ring-2"></div>
                    <div class="shield-ring ring-3"></div>
                    <div class="shield-core">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ── MÓDULOS — Preview cards ──────────────────────────── --}}
<section class="heid-section">
    <div class="container">

        <div class="section-header text-center mb-5">
            <span class="section-tag">// elige tu escudo</span>
            <h2 class="section-title">Seguridad para <span class="highlight-cyan">cada persona</span></h2>
            <p class="section-desc">Tres módulos diseñados para los más vulnerables de tu familia.</p>
        </div>

        <div class="row g-4">

            {{-- Kids --}}
            <div class="col-lg-4">
                <div class="preview-card kids-card">
                    <div class="pc-icon kids-icon"><i class="bi bi-shield-heart-fill"></i></div>
                    <span class="module-tag kids mb-2 d-inline-block">HEID Kids</span>
                    <h3 class="pc-title">Protección Infantil</h3>
                    <p class="pc-desc">
                        Detecta grooming y ciberacoso en chats y juegos en línea,
                        alertando a padres sin invadir la privacidad del menor.
                    </p>
                    <ul class="pc-features">
                        <li><i class="bi bi-check2-circle"></i> Detección de grooming con NLP</li>
                        <li><i class="bi bi-check2-circle"></i> Alertas discretas a tutores</li>
                        <li><i class="bi bi-check2-circle"></i> Sin almacenamiento de chats</li>
                    </ul>
                    <a href="{{ route('modulos.kids') }}" class="btn pc-btn kids-btn">
                        Ver módulo completo <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            {{-- Silver --}}
            <div class="col-lg-4">
                <div class="preview-card silver-card featured">
                    <div class="featured-badge-top">Prioritario</div>
                    <div class="pc-icon silver-icon"><i class="bi bi-person-heart"></i></div>
                    <span class="module-tag silver mb-2 d-inline-block">HEID Silver</span>
                    <h3 class="pc-title">Protección Senior</h3>
                    <p class="pc-desc">
                        Escudo inteligente contra estafas bancarias y clonación de voz
                        para adultos mayores.
                    </p>
                    <ul class="pc-features">
                        <li><i class="bi bi-check2-circle"></i> Detección de voz clonada</li>
                        <li><i class="bi bi-check2-circle"></i> Alertas de estafas bancarias</li>
                        <li><i class="bi bi-check2-circle"></i> Interfaz ultra-simple</li>
                    </ul>
                    <a href="{{ route('modulos.silver') }}" class="btn pc-btn silver-btn">
                        Ver módulo completo <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            {{-- Personal --}}
            <div class="col-lg-4">
                <div class="preview-card personal-card">
                    <div class="pc-icon personal-icon"><i class="bi bi-person-badge-fill"></i></div>
                    <span class="module-tag personal mb-2 d-inline-block">HEID Personal</span>
                    <h3 class="pc-title">Escudo Personal</h3>
                    <p class="pc-desc">
                        Protección integral de identidad y transacciones digitales
                        con detección de Deepfakes en tiempo real.
                    </p>
                    <ul class="pc-features">
                        <li><i class="bi bi-check2-circle"></i> Detección de Deepfakes en video</li>
                        <li><i class="bi bi-check2-circle"></i> Análisis de transacciones</li>
                        <li><i class="bi bi-check2-circle"></i> Dashboard de amenazas</li>
                    </ul>
                    <a href="{{ route('modulos.personal') }}" class="btn pc-btn personal-btn">
                        Ver módulo completo <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* Hero */
.heid-hero {
    position: relative;
    overflow: hidden;
    padding-top: var(--nav-height);
}
.hero-bg-glow {
    position: absolute; top: -20%; left: -10%;
    width: 55%; height: 70%;
    background: radial-gradient(ellipse, rgba(0,229,255,0.07) 0%, transparent 70%);
    pointer-events: none;
}
.hero-label {
    display: inline-flex; align-items: center; gap: 0.5rem;
    font-family: var(--font-mono); font-size: 0.72rem;
    color: var(--heid-cyan); letter-spacing: 0.1em; text-transform: uppercase;
    background: var(--heid-cyan-dim); border: 1px solid rgba(0,229,255,0.2);
    padding: 0.35rem 0.9rem; border-radius: 20px; margin-bottom: 1.5rem;
}
.dot-pulse {
    width: 7px; height: 7px; background: var(--heid-green);
    border-radius: 50%; animation: pulse 1.5s infinite;
}
.hero-title {
    font-family: var(--font-display); font-weight: 800;
    font-size: clamp(2.4rem, 5vw, 3.8rem); line-height: 1.1;
    color: #fff; margin-bottom: 1.5rem;
}
.hero-desc {
    font-size: 1.05rem; color: var(--heid-text-dim);
    max-width: 520px; margin-bottom: 2rem;
}
.hero-actions { display: flex; flex-wrap: wrap; gap: 1rem; margin-bottom: 3rem; }
.hero-stats   { display: flex; align-items: center; gap: 1.5rem; }
.stat-item    { text-align: center; }
.stat-num     { display: block; font-family: var(--font-display); font-size: 1.6rem; font-weight: 800; color: var(--heid-cyan); }
.stat-label   { font-size: 0.72rem; color: var(--heid-text-dim); }
.stat-divider { width: 1px; height: 38px; background: var(--heid-border); }

/* Shield */
.hero-shield {
    position: relative; width: 280px; height: 280px;
    display: flex; align-items: center; justify-content: center;
}
.shield-ring {
    position: absolute; border-radius: 50%;
    border: 1px solid rgba(0,229,255,0.18);
    animation: expand 3s infinite ease-out;
}
.ring-1 { width:160px; height:160px; animation-delay:0s; }
.ring-2 { width:220px; height:220px; animation-delay:1s; }
.ring-3 { width:280px; height:280px; animation-delay:2s; }
@keyframes expand {
    0%   { opacity: 0.6; transform: scale(0.85); }
    100% { opacity: 0;   transform: scale(1.1);  }
}
.shield-core {
    width: 100px; height: 100px;
    background: var(--heid-cyan-dim);
    border: 1.5px solid var(--heid-cyan); border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 2.5rem; color: var(--heid-cyan);
    box-shadow: 0 0 40px var(--heid-cyan-glow);
    animation: float 3s ease-in-out infinite;
}
@keyframes float {
    0%,100% { transform: translateY(0); }
    50%     { transform: translateY(-10px); }
}

/* Preview Cards */
.preview-card {
    background: var(--heid-bg-card);
    border: 1px solid var(--heid-border);
    border-radius: 16px; padding: 2rem;
    height: 100%; position: relative; overflow: hidden;
    transition: transform 0.3s, border-color 0.3s, box-shadow 0.3s;
}
.preview-card:hover { transform: translateY(-6px); }
.kids-card:hover    { border-color: rgba(0,255,136,0.35); box-shadow: 0 20px 40px rgba(0,255,136,0.07); }
.silver-card:hover  { border-color: rgba(160,180,200,0.35); }
.personal-card:hover{ border-color: rgba(0,229,255,0.35); box-shadow: 0 20px 40px rgba(0,229,255,0.07); }

.silver-card.featured { border-color: rgba(160,180,200,0.2); }
.featured-badge-top {
    position: absolute; top: 1rem; right: 1rem;
    font-family: var(--font-mono); font-size: 0.62rem;
    background: rgba(160,180,200,0.12); color: var(--heid-silver);
    border: 1px solid rgba(160,180,200,0.25);
    padding: 2px 9px; border-radius: 20px; letter-spacing: 0.05em;
}
.pc-icon {
    width: 52px; height: 52px; border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem; margin-bottom: 0.9rem;
}
.kids-icon     { background: rgba(0,255,136,0.1);  color: var(--heid-green); }
.silver-icon   { background: rgba(160,180,200,0.1); color: var(--heid-silver); }
.personal-icon { background: var(--heid-cyan-dim);  color: var(--heid-cyan); }

.pc-title {
    font-family: var(--font-display); font-weight: 700;
    font-size: 1.15rem; color: #fff; margin-bottom: 0.6rem;
}
.pc-desc  { font-size: 0.86rem; color: var(--heid-text-dim); line-height: 1.6; margin-bottom: 1rem; }
.pc-features { list-style: none; padding: 0; margin-bottom: 1.5rem; }
.pc-features li {
    font-size: 0.82rem; color: var(--heid-text);
    display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.35rem;
}
.pc-features li i { color: var(--heid-cyan); font-size: 0.82rem; }

.pc-btn {
    width: 100%; font-family: var(--font-mono); font-size: 0.78rem;
    padding: 0.55rem 1rem; border-radius: 8px; transition: all 0.25s;
}
.kids-btn    { background:transparent; color:var(--heid-green)  !important; border:1px solid rgba(0,255,136,0.3); }
.silver-btn  { background:transparent; color:var(--heid-silver) !important; border:1px solid rgba(160,180,200,0.3); }
.personal-btn{ background:transparent; color:var(--heid-cyan)   !important; border:1px solid rgba(0,229,255,0.3); }
.kids-btn:hover     { background:rgba(0,255,136,0.08);  box-shadow:0 0 20px rgba(0,255,136,0.15); }
.silver-btn:hover   { background:rgba(160,180,200,0.08); }
.personal-btn:hover { background:var(--heid-cyan-dim);  box-shadow:0 0 20px var(--heid-cyan-glow); }
</style>
@endpush