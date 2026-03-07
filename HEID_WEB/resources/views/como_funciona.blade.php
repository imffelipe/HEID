@extends('template')
@section('titulo', 'Cómo funciona HEID — Edge AI & Privacidad')

@section('contenido')

<div class="page-hero">
    <div class="page-hero-glow" style="background:var(--heid-cyan);"></div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Cómo funciona</li>
            </ol>
        </nav>
        <div class="col-lg-7 anim-fade-up">
            <span class="section-tag">// arquitectura del sistema</span>
            <h1 class="page-title" style="color:#fff;">
                Tecnología <span class="highlight-cyan">Edge AI</span><br>al servicio humano
            </h1>
            <p class="page-subtitle">
                HEID corre completamente en tu dispositivo. La inteligencia artificial
                analiza, detecta y protege sin enviar ningún dato a servidores externos.
            </p>
        </div>
    </div>
</div>

{{-- 4 PASOS --}}
<section class="heid-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// proceso de protección</span>
            <h2 class="section-title">4 pasos, <span class="highlight-cyan">cero riesgos</span></h2>
        </div>
        <div class="row g-4">
            @php
            $steps = [
                ['num'=>'01','icon'=>'bi-eye',                  'color'=>'var(--heid-cyan)',   'title'=>'Observa',  'desc'=>'HEID monitorea en segundo plano: chats, llamadas y videollamadas activas en tu dispositivo, sin interferir con tu experiencia.'],
                ['num'=>'02','icon'=>'bi-cpu-fill',             'color'=>'var(--heid-green)',  'title'=>'Analiza',  'desc'=>'Modelos de IA ligeros (TensorFlow.js / MediaPipe) procesan los datos localmente. Sin conexión a servidores. Sin latencia externa.'],
                ['num'=>'03','icon'=>'bi-exclamation-triangle', 'color'=>'var(--heid-orange)', 'title'=>'Detecta',  'desc'=>'Identifica patrones de amenaza conocidos: grooming, voz clonada, Deepfakes o intentos de ingeniería social.'],
                ['num'=>'04','icon'=>'bi-bell-fill',            'color'=>'#a78bfa',            'title'=>'Protege',  'desc'=>'Emite alertas inmediatas al usuario o tutor con instrucciones concretas. Tu seguridad, en tiempo real.'],
            ];
            @endphp
            @foreach($steps as $step)
            <div class="col-md-6 col-lg-3">
                <div class="heid-card h-100">
                    <div class="step-num">{{ $step['num'] }}</div>
                    <div class="step-icon" style="color:{{ $step['color'] }}"><i class="bi {{ $step['icon'] }}"></i></div>
                    <h4 class="step-title">{{ $step['title'] }}</h4>
                    <p class="step-desc">{{ $step['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- PRIVACIDAD --}}
<section class="heid-section-alt">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// privacidad por diseño</span>
            <h2 class="section-title">Privacidad <span class="highlight-cyan">garantizada</span></h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="privacy-statement">
                    <i class="bi bi-lock-fill ps-icon"></i>
                    <div>
                        <h4 style="color:#fff; font-family:var(--font-display); margin-bottom:0.75rem;">
                            Tus datos nunca salen de tu dispositivo
                        </h4>
                        <p style="color:var(--heid-text-dim); font-size:0.92rem; margin:0;">
                            HEID está construido bajo el principio de <strong style="color:#fff;">Privacy by Design</strong>.
                            Todos los modelos de IA se ejecutan localmente usando Edge AI.
                            No existe ningún servidor que reciba tu información.
                            No hay telemetría, no hay perfilado, no hay almacenamiento en la nube.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 mt-2 justify-content-center">
            @php
            $privFeats = [
                ['icon'=>'bi-hdd-fill',      'color'=>'var(--heid-cyan)',   'label'=>'Procesamiento 100% local'],
                ['icon'=>'bi-wifi-off',       'color'=>'var(--heid-green)',  'label'=>'Sin dependencia de red'],
                ['icon'=>'bi-eye-slash-fill', 'color'=>'#a78bfa',            'label'=>'Zero telemetría'],
                ['icon'=>'bi-database-slash', 'color'=>'var(--heid-orange)', 'label'=>'Sin base de datos remota'],
            ];
            @endphp
            @foreach($privFeats as $pf)
            <div class="col-6 col-md-3">
                <div class="priv-pill">
                    <i class="bi {{ $pf['icon'] }}" style="color:{{ $pf['color'] }}"></i>
                    <span>{{ $pf['label'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- TECNOLOGÍAS --}}
<section class="heid-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// stack tecnológico</span>
            <h2 class="section-title">Tecnologías <span class="highlight-cyan">que lo hacen posible</span></h2>
        </div>
        <div class="row g-4 justify-content-center">
            @php
            $techs = [
                ['name'=>'TensorFlow.js',  'icon'=>'bi-braces',           'color'=>'var(--heid-orange)', 'desc'=>'Modelos NLP para detección de grooming y patrones de texto malicioso.'],
                ['name'=>'MediaPipe',      'icon'=>'bi-camera-video-fill', 'color'=>'var(--heid-cyan)',   'desc'=>'Análisis facial en tiempo real para detección de Deepfakes en video.'],
                ['name'=>'ONNX Runtime',   'icon'=>'bi-cpu',               'color'=>'var(--heid-green)',  'desc'=>'Inferencia eficiente de modelos ligeros directamente en el navegador.'],
                ['name'=>'Laravel 11',     'icon'=>'bi-server',            'color'=>'#f87171',            'desc'=>'Backend seguro para gestión de usuarios y coordinación del ecosistema.'],
            ];
            @endphp
            @foreach($techs as $t)
            <div class="col-md-6 col-lg-3">
                <div class="heid-card text-center">
                    <div class="tech-icon" style="color:{{ $t['color'] }}"><i class="bi {{ $t['icon'] }}"></i></div>
                    <h5 class="tech-name">{{ $t['name'] }}</h5>
                    <p class="tech-desc">{{ $t['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
@push('styles')
<style>
.page-title    { font-family:var(--font-display); font-weight:800; font-size:clamp(2rem,4vw,3.2rem); line-height:1.1; margin-bottom:1rem; }
.page-subtitle { font-size:1.05rem; color:var(--heid-text-dim); max-width:540px; }
.step-num   { font-family:var(--font-display); font-size:2.8rem; font-weight:800; color:rgba(0,229,255,0.1); line-height:1; margin-bottom:0.5rem; }
.step-icon  { font-size:1.5rem; margin-bottom:0.75rem; }
.step-title { font-family:var(--font-display); font-weight:700; color:#fff; font-size:1rem; margin-bottom:0.5rem; }
.step-desc  { font-size:0.83rem; color:var(--heid-text-dim); margin:0; }
.privacy-statement {
    background:var(--heid-bg-card); border:1px solid rgba(0,229,255,0.15);
    border-radius:16px; padding:2rem;
    display:flex; align-items:flex-start; gap:1.5rem;
}
.ps-icon { font-size:2rem; color:var(--heid-cyan); flex-shrink:0; }
.priv-pill {
    background:var(--heid-bg-card); border:1px solid var(--heid-border);
    border-radius:10px; padding:1rem;
    display:flex; flex-direction:column; align-items:center;
    gap:0.5rem; text-align:center;
    font-family:var(--font-mono); font-size:0.72rem; color:var(--heid-text-dim);
    transition: border-color 0.2s;
}
.priv-pill i { font-size:1.4rem; }
.priv-pill:hover { border-color:rgba(0,229,255,0.25); }
.tech-icon { font-size:2rem; margin-bottom:0.75rem; }
.tech-name { font-family:var(--font-display); font-weight:700; color:#fff; font-size:1rem; margin-bottom:0.4rem; }
.tech-desc { font-size:0.82rem; color:var(--heid-text-dim); margin:0; }
</style>
@endpush