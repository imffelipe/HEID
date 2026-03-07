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
            <h1 class="page-title" style="color:#fff;">
                El equipo detrás de<br>
                <span style="color:#a78bfa;">[HEID]</span>
            </h1>
            <p class="page-subtitle">
                Somos estudiantes de Ingeniería de Sistemas comprometidos con hacer
                la ciberseguridad accesible para quienes más la necesitan en Latinoamérica.
            </p>
        </div>
    </div>
</div>

{{-- MISIÓN / VISIÓN --}}
<section class="heid-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="heid-card h-100">
                    <div class="mv-icon" style="color:#a78bfa"><i class="bi bi-bullseye"></i></div>
                    <h3 class="mv-title">Misión</h3>
                    <p class="mv-desc">
                        Proveer seguridad digital accesible para poblaciones vulnerables —
                        niños y adultos mayores — transformando la complejidad técnica
                        en <strong style="color:#fff;">tranquilidad familiar.</strong>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="heid-card h-100">
                    <div class="mv-icon" style="color:var(--heid-cyan)"><i class="bi bi-globe-americas"></i></div>
                    <h3 class="mv-title">Visión</h3>
                    <p class="mv-desc">
                        Ser el estándar de ciberseguridad humana en Latinoamérica para 2030,
                        priorizando la protección <strong style="color:#fff;">proactiva y ética</strong>
                        sobre la reacción al daño.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- VALORES --}}
<section class="heid-section-alt">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// principios del proyecto</span>
            <h2 class="section-title">Nuestros <span style="color:#a78bfa;">valores</span></h2>
        </div>
        <div class="row g-4">
            @php
            $valores = [
                ['icon'=>'bi-lock-fill',       'color'=>'var(--heid-cyan)',   'title'=>'Privacidad primero',   'desc'=>'Ninguna decisión de diseño compromete los datos del usuario. Privacy by Design es innegociable.'],
                ['icon'=>'bi-heart-fill',       'color'=>'#f87171',            'title'=>'Impacto social',       'desc'=>'Cada línea de código tiene un propósito humano: proteger a quien más lo necesita.'],
                ['icon'=>'bi-eye-fill',         'color'=>'var(--heid-green)',  'title'=>'Transparencia',        'desc'=>'Código abierto, explicaciones claras. El usuario siempre sabe qué hace HEID y por qué.'],
                ['icon'=>'bi-lightning-fill',   'color'=>'var(--heid-orange)', 'title'=>'Accesibilidad',        'desc'=>'Tecnología de vanguardia con interfaces simples. La complejidad técnica es invisible para el usuario.'],
                ['icon'=>'bi-shield-check-fill','color'=>'#a78bfa',            'title'=>'Ética en IA',          'desc'=>'Los modelos de IA son entrenados y auditados para evitar sesgos y falsos positivos discriminatorios.'],
                ['icon'=>'bi-people-fill',      'color'=>'var(--heid-cyan)',   'title'=>'Comunidad LATAM',      'desc'=>'Diseñado desde y para Latinoamérica, con contexto cultural y lingüístico local.'],
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

{{-- CONTEXTO ACADÉMICO --}}
<section class="heid-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="academic-card">
                    <div class="ac-icon"><i class="bi bi-mortarboard-fill"></i></div>
                    <h3 style="color:#fff; font-family:var(--font-display); font-weight:700; margin-bottom:0.75rem;">
                        Proyecto de Grado — Ingeniería de Sistemas
                    </h3>
                    <p style="color:var(--heid-text-dim); font-size:0.92rem; line-height:1.8; margin-bottom:1.5rem;">
                        HEID nace como respuesta académica a la creciente amenaza de la ingeniería social
                        en Latinoamérica. Este proyecto integra investigación en ciberseguridad,
                        desarrollo de software con Laravel 11, e Inteligencia Artificial aplicada (Edge AI)
                        para crear un ecosistema de protección real y accesible.
                    </p>
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
.academic-card {
    background:var(--heid-bg-card);
    border:1px solid rgba(167,139,250,0.2);
    border-radius:16px; padding:2.5rem; text-align:center;
}
.ac-icon { font-size:2.5rem; color:#a78bfa; margin-bottom:1rem; }
.ac-tags { display:flex; flex-wrap:wrap; gap:0.5rem; justify-content:center; }
.ac-tag {
    font-family:var(--font-mono); font-size:0.7rem;
    background:rgba(167,139,250,0.1); color:#a78bfa;
    border:1px solid rgba(167,139,250,0.2);
    padding:3px 12px; border-radius:20px;
}
</style>
@endpush