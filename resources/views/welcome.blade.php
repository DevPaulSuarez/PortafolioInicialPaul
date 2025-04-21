@extends('layouts.template')

@section('content')

<div class="row">
    @foreach ($proyectos as $proyecto)
    <!-- Card de Proyecto -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow d-flex flex-column">
            <!-- Imagen principal del proyecto -->
            <img src="{{ $proyecto->imagen }}" class="card-img-top img-fixed" alt="{{ $proyecto->nombre }}">

            <!-- Imagen clickeable para abrir el modal -->
            <div class="img2">
                <img src="{{ $proyecto->imagen }}" alt="" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}">
            </div>

            <!-- Cuerpo de la tarjeta -->
            <div class="card-body d-flex flex-column">
                <!-- Título del proyecto -->
                <h5 class="card-title text-secondary fw-semibold fs-6 mb-3 px-2" style="text-align: center;">
                    {{ $idioma === 'en' ? $proyecto->nombre_en : $proyecto->nombre }}
                </h5>

                <!-- Tecnologías utilizadas -->
                <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
                    @php
                    $tecnologias = $proyecto->experienciaLaboral->flatMap(function($exp) {
                    return $exp->tecnologias;
                    })->unique('id');
                    @endphp

                    @forelse ($tecnologias as $tecnologia)
                    <img class="rounded"
                        src="{{ $tecnologia->icono }}"
                        alt="Ícono de {{ $tecnologia->nombre }}"
                        style="width: 38px; height: 38px; object-fit: contain;">
                    @empty
                    <p class="text-muted small">No hay tecnologías asociadas</p>
                    @endforelse
                </div>

                <!-- Botón al pie -->
                <div class="mt-auto">
                    <a class="btn btn-primary w-100" href="{{ $proyecto->url_live_demo }}" target="_blank">
                        {{ __('messages.ver_demo') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal del Proyecto -->
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal{{ $proyecto->id }}" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-4">
                    <h2 class="text-secondary text-uppercase mb-4">
                        {{ $idioma === 'en' ? $proyecto->nombre_en : $proyecto->nombre }}
                    </h2>

                    <div class="mx-auto mb-4" style="width: 300px; height: 300px;">
                        <video
                            id="videoPlayer{{ $proyecto->id }}"
                            class="rounded shadow w-100 h-100"
                            controls>
                            <source src="{{ $proyecto->url_video_proyecto }}" type="video/mp4">
                            Tu navegador no soporta la reproducción de video.
                        </video>
                    </div>

                    <p class="mx-auto px-3" style="text-align: justify; max-width: 400px; hyphens: auto; line-height: 1.2;">
                        {{ $idioma === 'en' ? $proyecto->descripcion_en : $proyecto->descripcion }}
                    </p>

                    <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
                        <a class="btn btn-primary" href="{{ $proyecto->url_github }}" target="_blank">
                            {{ __('messages.codigo') }}
                        </a>
                        <button class="btn btn-primary" data-bs-dismiss="modal">
                            Atrás
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- JavaScript para detener el video al cerrar el modal -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.portfolio-modal').forEach(function(modal) {
            modal.addEventListener('hidden.bs.modal', function(event) {
                var videoId = 'videoPlayer' + event.target.id.replace('portfolioModal', '');
                var videoPlayer = document.getElementById(videoId);
                if (videoPlayer) {
                    videoPlayer.pause();
                    videoPlayer.currentTime = 0;
                }
            });
        });
    });
</script>

@endsection

@section('tecnologias')
@foreach ($tecnologiasPorCategoria as $categoria => $tecnologias)
<div class="mb-4">
    <h3 class="text-secondary mb-3">
        {{ __('categorias.' . $categoria) }}:
    </h3>

    <ul class="list-unstyled d-flex flex-wrap gap-3 m-0">
        @foreach ($tecnologias as $tecnologia)
        <li class="d-flex flex-column align-items-center justify-content-center rounded p-3 shadow-sm transition-hover"
            style="cursor: pointer; width: 135px; margin-top: 10px;">
            <img class="rounded mb-2"
                src="{{ $tecnologia->icono }}"
                alt="Ícono de {{ $tecnologia->nombre }}"
                style="width: 80px; height: 80px; object-fit: contain;">

            <h6>{{ $tecnologia->nombre }}</h6>
            <!-- <span class="text-muted small">{{ $tecnologia->descripcion }}</span> -->
        </li>
        @endforeach
    </ul>
</div>
@endforeach

@endsection

@section('experiencias')
<h2 class="text-center mb-4">{{ __('messages.experiencia_laboral') }}</h2>

@php
// Agrupar las experiencias por año
$experienciasPorAno = $experiencias->groupBy(function($item) {
return \Carbon\Carbon::parse($item->fecha_fin)->format('Y');
});
@endphp

{{-- Línea de tiempo con solo los años --}}
<div class="timeline">
    @foreach ($experienciasPorAno as $ano => $items)
    <div class="timeline-item year-toggle" data-year="{{ $ano }}">
        <div class="timeline-icon">{{ $ano }}</div>
    </div>
    @endforeach
</div>

<div class="text-center mt-3">
    <p id="description-text" class="timeline-description">{{ __('messages.click_year_for_info') }}</p>
</div>

{{-- Contenedor de experiencias por año, fuera de la línea --}}
<div class="experiencias-por-ano mt-4">
    @foreach ($experienciasPorAno as $ano => $items)
    <div class="year-experiences d-none" id="experiencias-{{ $ano }}">
        <h4 class="text-secundary text-center mb-3">{{ $ano }}</h4>
        <ul class="list-group mb-4">
            @foreach ($items->sortByDesc(function($item) {
            return \Carbon\Carbon::parse($item->fecha_inicio);
            }) as $experiencia) {{-- Ordenar por fecha de inicio, descendente --}}
            @php
            $empresa = $idioma === 'en' ? $experiencia->empresa_en : $experiencia->empresa;
            $cargo = $idioma === 'en' ? $experiencia->cargo_en : $experiencia->cargo;
            $descripcion = $idioma === 'en' ? $experiencia->descripcion_en : $experiencia->descripcion;

            // Formatear las fechas para un formato más legible
            $fechaInicio = \Carbon\Carbon::parse($experiencia->fecha_inicio)->format('M Y');
            $fechaFin = \Carbon\Carbon::parse($experiencia->fecha_fin)->format('M Y');
            @endphp
            <li class="list-group-item">
                <p class="text-muted mb-0"><b><u>{{ $fechaInicio }} - {{ $fechaFin }}</u></b></p>
                <p class="mb-1"><strong>{{ __('messages.EMPRESA') }}:</strong> {{ $empresa }}</p>
                <p class="mb-1"><strong>{{ __('messages.CARGO') }}:</strong> {{ $cargo }}</p>
                <p class="mb-1 text-justify"><strong>{{ __('messages.DESCRIPCION') }}:</strong> {!! $descripcion !!}</p>
            </li>
            @endforeach
        </ul>
    </div>
    @endforeach
</div>
@endsection