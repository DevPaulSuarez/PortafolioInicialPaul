@extends('layouts.template')

@section('content')

<div class="row">
    @foreach ($proyectos as $proyecto)
    <!-- Card de Proyecto -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow">
            <img src="{{ $proyecto->imagen }}" class="card-img-top img-fixed" alt="{{ $proyecto->nombre }}">
            <div class="img2"><img src="{{ $proyecto->imagen }}" alt="" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}"></div>
            <div class="card-body text-center">
                <h5 class="card-title">
                    {{ $idioma === 'en' ? $proyecto->nombre_en : $proyecto->nombre }}
                </h5>
                <ul class="list-unstyled">
                    @php
                    $tecnologias = $proyecto->experienciaLaboral->flatMap(function($exp) {
                    return $exp->tecnologias;
                    })->unique('id');
                    @endphp

                    @forelse ($tecnologias as $tecnologia)
                    <img class="rounded mb-2"
                        src="{{ $tecnologia->icono }}"
                        alt="Ícono de {{ $tecnologia->nombre }}"
                        style="width: 50px; height: 50px; object-fit: contain;">
                    @empty
                    <li>No hay tecnologías asociadas</li>
                    @endforelse
                </ul>
                <a class="btn btn-primary mt-2" href="{{ $proyecto->url_live_demo }}" target="_blank">
                    {{ __('messages.ver_demo') }}
                </a>
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
                    <h2 class="text-secondary text-uppercase">{{ $idioma === 'en' ? $proyecto->nombre_en : $proyecto->nombre }}</h2>
                    <div class="mx-auto mb-3" style="width: 300px; height: 300px;">
                        <video
                            width="560"
                            height="315"
                            class="rounded shadow w-100 h-100"
                            controls>
                            <source src="{{ $proyecto->url_video_proyecto }}" type="video/mp4">
                            Tu navegador no soporta la reproducción de video.
                        </video>
                    </div>
                    <p> {{ $idioma === 'en' ? $proyecto->descripcion_en : $proyecto->descripcion }}</p>
                    <a class="btn btn-primary mt-2" href="{{ $proyecto->url_github }}" target="_blank">
                        {{ __('messages.codigo') }}
                    </a>
                    <button class="btn btn-primary mt-2" data-bs-dismiss="modal">
                        Atras
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

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

<div class="timeline">
    @foreach ($experiencias as $experiencia)
    @php
    $empresa = $idioma === 'en' ? $experiencia->empresa_en : $experiencia->empresa;
    $cargo = $idioma === 'en' ? $experiencia->cargo_en : $experiencia->cargo;
    $descripcion = $idioma === 'en' ? $experiencia->descripcion_en : $experiencia->descripcion;
    @endphp

    <div class="timeline-item"
        data-description="{!! 
                '<strong>' . __('messages.EMPRESA') . ':</strong> ' . $empresa . '<br>' .
                '<strong>' . __('messages.CARGO') . ':</strong> ' . $cargo . '<br>' .
                '<strong>' . __('messages.DESCRIPCION') . ':</strong> ' . $descripcion . '<br>' .
                '(' . $experiencia->fecha_inicio . ' - ' . $experiencia->fecha_fin . ')' 
            !!}">
        <div class="timeline-icon">
            {{ \Carbon\Carbon::parse($experiencia->fecha_inicio)->format('Y-m') }}
        </div>
    </div>
    @endforeach
</div>
<div class="text-center mt-3">
    <p id="description-text" class="timeline-description">{{ __('messages.click_year_for_info') }}</p>
</div>


@endsection

