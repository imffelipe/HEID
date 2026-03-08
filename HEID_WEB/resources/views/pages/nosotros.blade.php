@extends('template')
@section('titulo', 'Nosotros — El equipo detrás de HEID')

@section('contenido')

<div class="page-hero">
    <div class="page-hero-glow" style="background:#a78bfa;"></div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Nosotros</li>
            </ol>
        </nav>
        <div class="col-lg-8 anim-fade-up">
            <span class="section-tag">// sobre el proyecto</span>
            <h1 class="page-title" style="color:#fff;">El equipo detrás de<br><span style="color:#a78bfa;">[HEID]</span></h1>
            <p class="page-subtitle">Somos estudiantes de Ingeniería de Sistemas comprometidos con hacer la ciberseguridad accesible para quienes más la necesitan en Latinoamérica.</p>
        </div>
    </div>
</div>

<section class="heid-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="heid-card h-100">
                    <div class="mv-icon" style="color:#a78bfa"><i class="bi bi-bullseye"></i></div>
                    <h3 class="mv-title">Misión</h3>
                    <p class="mv-desc">Proveer seguridad digital accesible para poblaciones vulnerables — niños y adultos mayores — transformando la complejidad técnica en <strong style="color:#fff;">tranquilidad familiar.</strong></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="heid-card h-100">
                    <div class="mv-icon" style="color:var(--heid-cyan)"><i class="bi bi-globe-americas"></i></div>
                    <h3 class="mv-title">Visión</h3>
                    <p class="mv-desc">Ser el estándar de ciberseguridad humana en Latinoamérica para 2030, priorizando la protección <strong style="color:#fff;">proactiva y ética</strong> sobre la reacción al daño.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="heid-section-alt">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// el mundo que protegemos</span>
            <h2 class="section-title">Nuestra <span style="color:#a78bfa;">realidad digital</span></h2>
            <p class="section-desc">El entorno donde HEID opera: personas reales, amenazas reales.</p>
        </div>

        <div class="infinite-carousel-wrapper">
            <div class="infinite-carousel-track" id="carouselTrack">
                @php
                $images = [
                    ['url' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&h=400&fit=crop', 'label' => 'Ciberseguridad'],
                    ['url' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=600&h=400&fit=crop', 'label' => 'Código de amenaza'],
                    ['url' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&h=400&fit=crop', 'label' => 'Protección digital'],
                    ['url' => 'https://images.unsplash.com/photo-1614064641938-3bbee52942c7?w=600&h=400&fit=crop', 'label' => 'Seguridad en red'],
                    ['url' => 'https://images.unsplash.com/photo-1504639725590-34d0984388bd?w=600&h=400&fit=crop', 'label' => 'Desarrollo seguro'],
                    ['url' => 'https://images.unsplash.com/photo-1510511459019-5dda7724fd87?w=600&h=400&fit=crop', 'label' => 'Identidad digital'],
                    ['url' => 'https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=600&h=400&fit=crop', 'label' => 'Análisis de datos'],
                    ['url' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&h=400&fit=crop', 'label' => 'Protección familiar'],
                ];
                @endphp

                @foreach($images as $img)
                <div class="carousel-slide">
                    <img src="{{ $img['url'] }}" alt="{{ $img['label'] }}" loading="lazy">
                    <div class="slide-label">{{ $img['label'] }}</div>
                </div>
                @endforeach

                @foreach($images as $img)
                <div class="carousel-slide">
                    <img src="{{ $img['url'] }}" alt="{{ $img['label'] }}" loading="lazy">
                    <div class="slide-label">{{ $img['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="heid-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// en acción</span>
            <h2 class="section-title">HEID en <span style="color:#a78bfa;">contexto</span></h2>
            <p class="section-desc">Comprende el problema que HEID resuelve y el impacto que busca generar.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="video-wrapper">
                    <div class="video-header">
                        <span class="font-mono" style="font-size:0.75rem;color:var(--heid-cyan);">// reproducir video</span>
                        <span class="font-mono" style="font-size:0.72rem;color:var(--heid-text-dim);">Ingeniería Social — El enemigo invisible</span>
                    </div>
                    <div class="video-container">
                        <iframe
                            src="https://www.youtube.com/watch?v=fdwihua_8Vg"
                            title="Ciberseguridad"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="heid-section-alt">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// principios del proyecto</span>
            <h2 class="section-title">Nuestros <span style="color:#a78bfa;">valores</span></h2>
        </div>
        <div class="row g-4">
            @php
            $valores = [
                ['icon'=>'bi-lock-fill',        'color'=>'var(--heid-cyan)',   'title'=>'Privacidad primero',  'desc'=>'Ninguna decisión de diseño compromete los datos del usuario. Privacy by Design es innegociable.'],
                ['icon'=>'bi-heart-fill',        'color'=>'#f87171',            'title'=>'Impacto social',      'desc'=>'Cada línea de código tiene un propósito humano: proteger a quien más lo necesita.'],
                ['icon'=>'bi-eye-fill',          'color'=>'var(--heid-green)',  'title'=>'Transparencia',       'desc'=>'Código abierto, explicaciones claras. El usuario siempre sabe qué hace HEID y por qué.'],
                ['icon'=>'bi-lightning-fill',    'color'=>'var(--heid-orange)', 'title'=>'Accesibilidad',       'desc'=>'Tecnología de vanguardia con interfaces simples. La complejidad técnica es invisible para el usuario.'],
                ['icon'=>'bi-shield-check-fill', 'color'=>'#a78bfa',            'title'=>'Ética en IA',         'desc'=>'Los modelos de IA son entrenados y auditados para evitar sesgos y falsos positivos discriminatorios.'],
                ['icon'=>'bi-people-fill',       'color'=>'var(--heid-cyan)',   'title'=>'Comunidad LATAM',     'desc'=>'Diseñado desde y para Latinoamérica, con contexto cultural y lingüístico local.'],
            ];
            @endphp
            @foreach($valores as $v)
            <div class="col-md-6 col-lg-4">
                <div class="heid-card">
                    <div class="val-icon" style="color:{{ $v['color'] }}"><i class="bi {{ $v['icon'] }}"></i></div>
                    <h5 class="val-title">{{ $v['title'] }}</h5>
                    <p class="val-desc">{{ $v['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="heid-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="academic-card">
                    <div class="ac-icon"><i class="bi bi-mortarboard-fill"></i></div>
                    <h3 style="color:#fff;font-family:var(--font-display);font-weight:700;margin-bottom:0.75rem;">Proyecto de Grado — Ingeniería de Sistemas</h3>
                    <p style="color:var(--heid-text-dim);font-size:0.92rem;line-height:1.8;margin-bottom:1.5rem;">HEID nace como respuesta académica a la creciente amenaza de la ingeniería social en Latinoamérica. Este proyecto integra investigación en ciberseguridad, desarrollo de software con Laravel 11, e Inteligencia Artificial aplicada (Edge AI) para crear un ecosistema de protección real y accesible.</p>
                    <div class="ac-tags">
                        <span class="ac-tag">Ciberseguridad</span>
                        <span class="ac-tag">Edge AI</span>
                        <span class="ac-tag">Ingeniería Social</span>
                        <span class="ac-tag">Laravel 11</span>
                        <span class="ac-tag">TensorFlow.js</span>
                        <span class="ac-tag">Privacy by Design</span>
                        <span class="ac-tag">Impacto Social</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
.page-title    { font-family:var(--font-display); font-weight:800; font-size:clamp(2rem,4vw,3.2rem); line-height:1.1; margin-bottom:1rem; }
.page-subtitle { font-size:1.05rem; color:var(--heid-text-dim); max-width:560px; }
.mv-icon  { font-size:2rem; margin-bottom:0.75rem; }
.mv-title { font-family:var(--font-display); font-weight:700; font-size:1.3rem; color:#fff; margin-bottom:0.6rem; }
.mv-desc  { font-size:0.9rem; color:var(--heid-text-dim); line-height:1.7; margin:0; }
.val-icon  { font-size:1.8rem; margin-bottom:0.75rem; }
.val-title { font-family:var(--font-display); font-weight:700; font-size:1rem; color:#fff; margin-bottom:0.4rem; }
.val-desc  { font-size:0.83rem; color:var(--heid-text-dim); margin:0; }
.academic-card { background:var(--heid-bg-card); border:1px solid rgba(167,139,250,0.2); border-radius:16px; padding:2.5rem; text-align:center; }
.ac-icon { font-size:2.5rem; color:#a78bfa; margin-bottom:1rem; }
.ac-tags { display:flex; flex-wrap:wrap; gap:0.5rem; justify-content:center; }
.ac-tag  { font-family:var(--font-mono); font-size:0.7rem; background:rgba(167,139,250,0.1); color:#a78bfa; border:1px solid rgba(167,139,250,0.2); padding:3px 12px; border-radius:20px; }

.infinite-carousel-wrapper {
    overflow: hidden;
    position: relative;
    width: 100%;
    padding: 1rem 0;
}
.infinite-carousel-wrapper::before,
.infinite-carousel-wrapper::after {
    content: '';
    position: absolute;
    top: 0;
    width: 120px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}
.infinite-carousel-wrapper::before {
    left: 0;
    background: linear-gradient(to right, var(--heid-bg-2), transparent);
}
.infinite-carousel-wrapper::after {
    right: 0;
    background: linear-gradient(to left, var(--heid-bg-2), transparent);
}
.infinite-carousel-track {
    display: flex;
    gap: 1.25rem;
    width: max-content;
    animation: infiniteScroll 35s linear infinite;
}
.infinite-carousel-track:hover {
    animation-play-state: paused;
}
@keyframes infiniteScroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.carousel-slide {
    position: relative;
    flex-shrink: 0;
    width: 280px;
    height: 185px;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--heid-border);
    transition: transform 0.3s, border-color 0.3s;
    cursor: pointer;
}
.carousel-slide:hover {
    transform: translateY(-4px) scale(1.02);
    border-color: rgba(0,229,255,0.35);
}
.carousel-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.7) saturate(0.8);
    transition: filter 0.3s;
}
.carousel-slide:hover img {
    filter: brightness(0.85) saturate(1.1);
}
.slide-label {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 0.5rem 0.75rem;
    background: linear-gradient(to top, rgba(8,15,26,0.9), transparent);
    font-family: var(--font-mono);
    font-size: 0.7rem;
    color: var(--heid-cyan);
    letter-spacing: 0.06em;
}

.video-wrapper {
    background: var(--heid-bg-card);
    border: 1px solid var(--heid-border);
    border-radius: 16px;
    overflow: hidden;
    transition: border-color 0.3s, box-shadow 0.3s;
}
.video-wrapper:hover {
    border-color: rgba(167,139,250,0.35);
    box-shadow: 0 0 40px rgba(167,139,250,0.08);
}
.video-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.9rem 1.25rem;
    border-bottom: 1px solid var(--heid-border);
    background: var(--heid-bg-2);
}
.video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}
</style>
@endpush