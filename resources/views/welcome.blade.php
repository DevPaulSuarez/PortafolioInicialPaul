@extends('layouts.template')

@section('content')

    <div class="row">
        @foreach ($proyectos as $proyecto)
            <!-- Card de Proyecto -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow">
                    <img src="{{ $proyecto->imagen }}" class="card-img-top img-fixed" alt="{{ $proyecto->nombre }}">
                    <div class="img2" ><img src="{{ $proyecto->imagen }}" alt="" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}"></div>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $proyecto->nombre }}</h5>
                        <p class="card-text text-truncate" style="max-width: 90%; margin: auto;">
                            {{ $proyecto->descripcion }}
                        </p>
                        <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}">
                            Codigo
                        </button>
                        <a class="btn btn-primary mt-2" class="btn btn-primary" href="{{ $proyecto->url }}" target="_blank">
                            Ver Demo
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
                            <h2 class="text-secondary text-uppercase">{{ $proyecto->nombre }}</h2>
                            <img class="img-fluid rounded mb-3 modal-img-fixed" src="{{ $proyecto->imagen }}" alt="{{ $proyecto->nombre }}">
                            <p>{{ $proyecto->descripcion }}</p>
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
        <div class="d-flex flex-wrap align-items-center gap-3">
        <h3 class="text-secundary m-0" style="flex: 0 0 200px;">{{ ucfirst($categoria) }}:</h3>
            @foreach ($tecnologias as $tecnologia)
            <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-3 m-0">
            <li class="d-flex flex-column align-items-center justify-content-center rounded p-3 shadow-sm transition-hover" style="cursor: pointer; max-width: 150px;">
                <i class="{{ $tecnologia->icono }} fa-3x"></i>
                <h6>{{ $tecnologia->nombre }}</h6>
                <span class="text-muted small">{{ $tecnologia->descripcion }}</span>
            </li>
            </ul>
            @endforeach

        </div>

    @endforeach

@endsection

@section('experiencias')
    <h2 class="text-center mb-4">{{ __('messages.experiencia_laboral') }}</h2>
    
    <div class="timeline">
        @foreach ($experiencias as $experiencia)
        <div class="timeline-item" 
        data-description="<strong>EMPRESA:</strong> {{ $experiencia->empresa }}
                    <strong>CARGO:</strong> {{ $experiencia->cargo }}
                    <strong>DESCRIPCION:</strong> {{ $experiencia->descripcion }}
                    ({{ $experiencia->fecha_inicio }} -  {{ $experiencia->fecha_fin }})">
                <div class="timeline-icon">{{ \Carbon\Carbon::parse($experiencia->fecha_inicio)->format('Y-m') }}</div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-3">
        <p id="description-text" class="timeline-description">{{ __('messages.click_year_for_info') }}</p>
    </div>


@endsection

