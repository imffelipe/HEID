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


<section class="heid-section-alt" id="pqrs">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">// iniciar conexión</span>
            <h2 class="section-title">Contáctanos <span style="color:#a78bfa;">/ PQRS</span></h2>
            <p class="section-desc">¿Tienes una petición, queja, reclamo o felicitación? Escríbenos, cada mensaje importa.</p>
        </div>
 
        <div class="row justify-content-center">
            <div class="col-lg-8">
 
                <div class="contact-terminal">
                    {{-- Topbar decorativa --}}
                    <div class="terminal-topbar">
                        <div class="terminal-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                        </div>
                        <span class="terminal-title font-mono">heid@pqrs ~ <span class="blink-cursor">▌</span></span>
                        <span class="font-mono" style="font-size:0.7rem;color:var(--heid-text-dim);">pqrs.init</span>
                    </div>
 
                    <form id="pqrsForm" class="contact-form-body" novalidate>
 
                        {{-- Fila 1: Nombres + Apellidos --}}
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-field-group">
                                    <label class="field-label" for="pq_nombres">
                                        <i class="bi bi-person-fill"></i> Nombres
                                        <span class="field-required">*</span>
                                    </label>
                                    <div class="field-input-wrap">
                                        <input type="text" id="pq_nombres" name="Nombres" class="heid-input"
                                               placeholder="ej. Ana María" autocomplete="given-name">
                                        <div class="field-line"></div>
                                    </div>
                                    <span class="field-error" id="err_nombres"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-field-group">
                                    <label class="field-label" for="pq_apellidos">
                                        <i class="bi bi-person-lines-fill"></i> Apellidos
                                        <span class="field-required">*</span>
                                    </label>
                                    <div class="field-input-wrap">
                                        <input type="text" id="pq_apellidos" name="Apellidos" class="heid-input"
                                               placeholder="ej. García López" autocomplete="family-name">
                                        <div class="field-line"></div>
                                    </div>
                                    <span class="field-error" id="err_apellidos"></span>
                                </div>
                            </div>
                        </div>
 
                        {{-- Fila 2: Correo + Tipo (selector visual) --}}
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-field-group">
                                    <label class="field-label" for="pq_correo">
                                        <i class="bi bi-envelope-fill"></i> Correo electrónico
                                        <span class="field-required">*</span>
                                    </label>
                                    <div class="field-input-wrap">
                                        <input type="email" id="pq_correo" name="Correo" class="heid-input"
                                               placeholder="nombre@ejemplo.com" autocomplete="email">
                                        <div class="field-line"></div>
                                    </div>
                                    <span class="field-error" id="err_correo"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-field-group">
                                    <label class="field-label" for="pq_tipo">
                                        <i class="bi bi-tag-fill"></i> Tipo de solicitud
                                        <span class="field-required">*</span>
                                    </label>
                                    <div class="field-input-wrap field-select-wrap">
                                        <select id="pq_tipo" name="tipo" class="heid-input heid-select">
                                            <option value="" disabled selected>— Selecciona el tipo —</option>
                                            <option value="Queja">⚠️ Queja</option>
                                            <option value="Peticio">📋 Petición</option>
                                            <option value="Felicitaciones">🌟 Felicitaciones</option>
                                        </select>
                                        <i class="bi bi-chevron-down select-chevron"></i>
                                        <div class="field-line"></div>
                                    </div>
                                    <span class="field-error" id="err_tipo"></span>
                                </div>
                            </div>
                        </div>
 
                        <div id="tipoBadgeWrap" class="mb-3 d-none">
                            <div class="tipo-badge-display">
                                <span class="tipo-badge-label font-mono">// tipo seleccionado:</span>
                                <span class="tipo-badge" id="tipoBadge"></span>
                            </div>
                        </div>
 
                        <div class="form-field-group mb-3">
                            <label class="field-label" for="pq_mensaje">
                                <i class="bi bi-chat-dots-fill"></i> Mensaje
                                <span class="field-required">*</span>
                            </label>
                            <div class="field-input-wrap">
                                <textarea id="pq_mensaje" name="Mensaje" class="heid-input heid-textarea"
                                          placeholder="Describe tu queja, petición o felicitación con el mayor detalle posible..."
                                          rows="4" maxlength="600"></textarea>
                                <div class="field-line"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <span class="field-error" id="err_mensaje"></span>
                                <span class="char-counter font-mono" id="charCounter">0 / 600</span>
                            </div>
                        </div>
 
                        <div class="form-field-group mb-4">
                            <label class="acepto-label" for="pq_acepto">
                                <div class="acepto-checkbox-wrap">
                                    <input type="checkbox" id="pq_acepto" name="acepto" value="1" class="acepto-input">
                                    <span class="acepto-box">
                                        <i class="bi bi-check2 acepto-check-icon"></i>
                                    </span>
                                </div>
                                <span class="acepto-text">
                                    Acepto el tratamiento de mis datos personales conforme a la
                                    <a href="#" class="acepto-link">política de privacidad de HEID</a>.
                                    <span class="field-required">*</span>
                                </span>
                            </label>
                            <span class="field-error ms-1" id="err_acepto"></span>
                        </div>
 
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="heid-submit-btn" id="pqrsSubmitBtn">
                                <span class="btn-text">
                                    <i class="bi bi-send-fill me-2"></i>Enviar PQRS
                                </span>
                                <span class="btn-loading d-none">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                    Enviando...
                                </span>
                            </button>
                        </div>
 
                    </form>
 

                    <div class="contact-success d-none" id="pqrsSuccess">
                        <div class="success-icon"><i class="bi bi-check-circle-fill"></i></div>
                        <h4 class="success-title">¡PQRS enviada!</h4>
                        <p class="success-desc">
                            Tu solicitud ha sido registrada correctamente.<br>
                            <span class="font-mono" style="color:var(--heid-cyan);font-size:0.78rem;">
                                // responderemos a tu correo pronto
                            </span>
                        </p>
                        <button class="heid-reset-btn" id="pqrsResetBtn">Enviar otra solicitud</button>
                    </div>
 
                </div>
 
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>

.contact-terminal {
    background: var(--heid-bg-card, #0d1117);
    border: 1px solid var(--heid-border, rgba(255,255,255,0.08));
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 0 60px rgba(167,139,250,0.06), 0 20px 60px rgba(0,0,0,0.4);
    transition: border-color 0.3s, box-shadow 0.3s;
}
.contact-terminal:hover {
    border-color: rgba(167,139,250,0.25);
    box-shadow: 0 0 80px rgba(167,139,250,0.1), 0 20px 60px rgba(0,0,0,0.4);
}
 

.terminal-topbar {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.25rem;
    background: rgba(0,0,0,0.3);
    border-bottom: 1px solid var(--heid-border, rgba(255,255,255,0.07));
}
.terminal-dots { display:flex; gap:6px; }
.dot { width:12px; height:12px; border-radius:50%; }
.dot-red    { background:#ff5f57; }
.dot-yellow { background:#febc2e; }
.dot-green  { background:#28c840; }
.terminal-title {
    font-family: var(--font-mono,'Courier New',monospace);
    font-size: 0.78rem;
    color: var(--heid-text-dim,#8892a4);
    flex: 1;
    text-align: center;
}
.blink-cursor { animation: blink 1.1s step-end infinite; }
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:0} }
 
.contact-form-body { padding: 2rem 2rem 1.75rem; }
 

.form-field-group { display:flex; flex-direction:column; }
.field-label {
    font-family: var(--font-mono,'Courier New',monospace);
    font-size: 0.72rem;
    color: var(--heid-text-dim, #8892a4);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 0.45rem;
    display: flex;
    align-items: center;
    gap: 0.4rem;
}
.field-required { color: #f87171; font-size:0.65rem; }
 

.field-input-wrap { position:relative; }
.heid-input {
    width: 100%;
    background: rgba(0,0,0,0.35);
    border: 1px solid var(--heid-border, rgba(255,255,255,0.08));
    border-radius: 8px;
    color: #e4e8f0;
    font-size: 0.88rem;
    padding: 0.6rem 0.9rem;
    outline: none;
    transition: border-color 0.25s, box-shadow 0.25s, background 0.25s;
    font-family: inherit;
}
.heid-input::placeholder { color: rgba(136,146,164,0.45); font-size:0.82rem; }
.heid-input:focus {
    border-color: rgba(167,139,250,0.55);
    box-shadow: 0 0 0 3px rgba(167,139,250,0.1);
    background: rgba(167,139,250,0.04);
}
.heid-input.is-invalid {
    border-color: rgba(248,113,113,0.6);
    box-shadow: 0 0 0 3px rgba(248,113,113,0.08);
}
.heid-input.is-valid { border-color: rgba(52,211,153,0.5); }
 

.field-select-wrap { position:relative; }
.heid-select { appearance:none; cursor:pointer; padding-right:2.5rem; }
.select-chevron {
    position: absolute;
    right: 0.85rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--heid-text-dim,#8892a4);
    font-size: 0.75rem;
    pointer-events: none;
    transition: transform 0.2s;
}
.heid-select:focus ~ .select-chevron { transform: translateY(-50%) rotate(180deg); }
.heid-select option { background: #1a1f2e; color: #e4e8f0; }
 
.tipo-badge-display {
    display: inline-flex;
    align-items: center;
    gap: 0.6rem;
    background: rgba(0,0,0,0.25);
    border: 1px solid var(--heid-border,rgba(255,255,255,0.07));
    border-radius: 8px;
    padding: 0.45rem 0.9rem;
}
.tipo-badge-label { font-size:0.68rem; color:var(--heid-text-dim,#8892a4); }
.tipo-badge {
    font-family: var(--font-mono,'Courier New',monospace);
    font-size: 0.72rem;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 20px;
    letter-spacing: 0.04em;
}
.tipo-badge.queja         { background:rgba(248,113,113,0.15); color:#f87171; border:1px solid rgba(248,113,113,0.3); }
.tipo-badge.peticion      { background:rgba(0,229,255,0.1);    color:var(--heid-cyan,#00e5ff); border:1px solid rgba(0,229,255,0.25); }
.tipo-badge.felicitaciones{ background:rgba(167,139,250,0.12); color:#a78bfa; border:1px solid rgba(167,139,250,0.3); }
 

.heid-textarea { resize: vertical; min-height: 110px; line-height:1.6; }
 

.char-counter { font-size:0.68rem; color:var(--heid-text-dim,#8892a4); transition:color 0.2s; }
.char-counter.warn  { color:#febc2e; }
.char-counter.limit { color:#f87171; }
 

.field-line {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #a78bfa, var(--heid-cyan,#00e5ff));
    border-radius: 2px;
    transition: width 0.3s ease;
    pointer-events: none;
}
.heid-input:focus ~ .field-line { width: calc(100% - 16px); }
 

.field-error {
    font-size: 0.7rem;
    color: #f87171;
    min-height: 1em;
    margin-top: 0.2rem;
    font-family: var(--font-mono,'Courier New',monospace);
}

.acepto-label {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    cursor: pointer;
    user-select: none;
}
.acepto-checkbox-wrap { flex-shrink:0; position:relative; margin-top:2px; }
.acepto-input {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
}
.acepto-box {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    border-radius: 5px;
    border: 1.5px solid var(--heid-border,rgba(255,255,255,0.15));
    background: rgba(0,0,0,0.3);
    transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
}
.acepto-check-icon {
    font-size: 0.75rem;
    color: #fff;
    opacity: 0;
    transform: scale(0);
    transition: opacity 0.2s, transform 0.2s cubic-bezier(.34,1.56,.64,1);
}
.acepto-input:checked ~ .acepto-box {
    background: linear-gradient(135deg, #7c3aed, #a78bfa);
    border-color: #a78bfa;
    box-shadow: 0 0 10px rgba(167,139,250,0.35);
}
.acepto-input:checked ~ .acepto-box .acepto-check-icon {
    opacity: 1;
    transform: scale(1);
}
.acepto-text {
    font-size: 0.82rem;
    color: var(--heid-text-dim,#8892a4);
    line-height: 1.5;
}
.acepto-link { color:#a78bfa; text-decoration:none; border-bottom:1px dashed rgba(167,139,250,0.4); }
.acepto-link:hover { color:#c4b5fd; border-bottom-color:#c4b5fd; }

.heid-submit-btn {
    background: linear-gradient(135deg, #7c3aed, #a78bfa);
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 0.7rem 2rem;
    font-weight: 700;
    font-size: 0.9rem;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s, opacity 0.2s;
    display: flex;
    align-items: center;
    letter-spacing: 0.03em;
    position: relative;
    overflow: hidden;
}
.heid-submit-btn::before {
    content:'';
    position:absolute;
    inset:0;
    background: linear-gradient(135deg, rgba(255,255,255,0.15), transparent);
    opacity:0;
    transition:opacity 0.2s;
}
.heid-submit-btn:hover { transform:translateY(-2px); box-shadow:0 8px 30px rgba(167,139,250,0.4); }
.heid-submit-btn:hover::before { opacity:1; }
.heid-submit-btn:active { transform:translateY(0); }
.heid-submit-btn:disabled { opacity:0.6; cursor:not-allowed; transform:none; }
 

.contact-success {
    padding: 3rem 2rem;
    text-align: center;
    animation: fadeInUp 0.5s ease forwards;
}
@keyframes fadeInUp { from{opacity:0;transform:translateY(20px)} to{opacity:1;transform:translateY(0)} }
.success-icon {
    font-size: 3rem;
    color: #34d399;
    margin-bottom: 1rem;
    animation: popIn 0.4s cubic-bezier(.34,1.56,.64,1);
}
@keyframes popIn { from{transform:scale(0)} to{transform:scale(1)} }
.success-title { font-family:var(--font-display,'sans-serif'); font-weight:800; font-size:1.5rem; color:#fff; margin-bottom:0.5rem; }
.success-desc  { color:var(--heid-text-dim,#8892a4); font-size:0.9rem; line-height:1.7; margin-bottom:1.5rem; }
.heid-reset-btn {
    background: transparent;
    border: 1px solid rgba(167,139,250,0.35);
    color: #a78bfa;
    border-radius: 8px;
    padding: 0.5rem 1.5rem;
    font-size: 0.82rem;
    cursor: pointer;
    font-family: var(--font-mono,'Courier New',monospace);
    transition: background 0.2s, border-color 0.2s;
}
.heid-reset-btn:hover { background:rgba(167,139,250,0.1); border-color:#a78bfa; }
 
@media (max-width:576px) { .contact-form-body { padding:1.25rem; } }
</style>
@endpush
 

@push('scripts')
<script>
(function () {
    'use strict';
 
    const $  = id => document.getElementById(id);
    const show = el => el.classList.remove('d-none');
    const hide = el => el.classList.add('d-none');
 

    const setError = (inputId, errId, msg) => {
        const inp = $(inputId);
        const err = $(errId);
        if (!inp) return;
        if (msg) {
            inp.classList.add('is-invalid');
            inp.classList.remove('is-valid');
            if (err) err.textContent = msg;
        } else {
            inp.classList.remove('is-invalid');
            inp.classList.add('is-valid');
            if (err) err.textContent = '';
        }
    };

    const tipoSelect   = $('pq_tipo');
    const badgeWrap    = $('tipoBadgeWrap');
    const badge        = $('tipoBadge');
    const tipoConfig   = {
        'Queja'         : { cls: 'queja',          label: '⚠️ Queja'          },
        'Peticio'       : { cls: 'peticion',        label: '📋 Petición'       },
        'Felicitaciones': { cls: 'felicitaciones',  label: '🌟 Felicitaciones' },
    };
 
    if (tipoSelect) {
        tipoSelect.addEventListener('change', () => {
            const val = tipoSelect.value;
            if (val && tipoConfig[val]) {
                badge.className = 'tipo-badge ' + tipoConfig[val].cls;
                badge.textContent = tipoConfig[val].label;
                show(badgeWrap);

                const err = $('err_tipo');
                if (err) err.textContent = '';
                setError('pq_tipo', 'err_tipo', '');
            } else {
                hide(badgeWrap);
            }
        });
    }
 

    const textarea = $('pq_mensaje');
    const counter  = $('charCounter');
    if (textarea && counter) {
        textarea.addEventListener('input', () => {
            const len = textarea.value.length;
            counter.textContent = `${len} / 600`;
            counter.className = 'char-counter font-mono' +
                (len > 550 ? ' warn' : '') +
                (len >= 600 ? ' limit' : '');
        });
    }
 

    function validate() {
        let ok = true;

        const nombres = $('pq_nombres').value.trim();
        if (!nombres)           { setError('pq_nombres','err_nombres','// nombres requeridos'); ok=false; }
        else if (nombres.length < 2) { setError('pq_nombres','err_nombres','// mínimo 2 caracteres'); ok=false; }
        else                    setError('pq_nombres','err_nombres','');
 
        const apellidos = $('pq_apellidos').value.trim();
        if (!apellidos)             { setError('pq_apellidos','err_apellidos','// apellidos requeridos'); ok=false; }
        else if (apellidos.length < 2) { setError('pq_apellidos','err_apellidos','// mínimo 2 caracteres'); ok=false; }
        else                        setError('pq_apellidos','err_apellidos','');
 
        const correo  = $('pq_correo').value.trim();
        const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!correo)               { setError('pq_correo','err_correo','// correo requerido'); ok=false; }
        else if (!emailRx.test(correo)) { setError('pq_correo','err_correo','// formato inválido'); ok=false; }
        else                       setError('pq_correo','err_correo','');
 
    
        const tipo = tipoSelect ? tipoSelect.value : '';
        if (!tipo) { setError('pq_tipo','err_tipo','// selecciona un tipo'); ok=false; }
        else        setError('pq_tipo','err_tipo','');
 
    
        const msg = $('pq_mensaje').value.trim();
        if (!msg)              { setError('pq_mensaje','err_mensaje','// mensaje requerido'); ok=false; }
        else if (msg.length < 10) { setError('pq_mensaje','err_mensaje','// mínimo 10 caracteres'); ok=false; }
        else                   setError('pq_mensaje','err_mensaje','');

        const acepto    = $('pq_acepto');
        const errAcepto = $('err_acepto');
        if (!acepto.checked) {
            if (errAcepto) errAcepto.textContent = '// debes aceptar la política de privacidad';
            ok = false;
        } else {
            if (errAcepto) errAcepto.textContent = '';
        }
 
        return ok;
    }
 
   
    const form      = $('pqrsForm');
    const submitBtn = $('pqrsSubmitBtn');
    const btnText   = submitBtn?.querySelector('.btn-text');
    const btnLoad   = submitBtn?.querySelector('.btn-loading');
    const success   = $('pqrsSuccess');
    const resetBtn  = $('pqrsResetBtn');
 
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!validate()) return;
 
            submitBtn.disabled = true;
            hide(btnText);
            show(btnLoad);
 
            setTimeout(() => {
                hide(form);
                show(success);
            }, 1400);
        });
    }
 

    if (resetBtn) {
        resetBtn.addEventListener('click', () => {
            form.reset();
            form.querySelectorAll('.heid-input').forEach(el =>
                el.classList.remove('is-valid','is-invalid')
            );
            document.querySelectorAll('.field-error').forEach(e => e.textContent = '');
            hide(badgeWrap);
            if (counter) { counter.textContent = '0 / 600'; counter.className = 'char-counter font-mono'; }
            submitBtn.disabled = false;
            show(btnText);
            hide(btnLoad);
            hide(success);
            show(form);
        });
    }
 
})();
</script>
@endpush

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