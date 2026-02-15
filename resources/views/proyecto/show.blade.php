@extends('layouts.app')

@section('template_title')
    {{ $proyecto->nombre ?? 'Show Proyecto' }}
@endsection

@section('content')
<style>
    /* Contenedor general */
    .project-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
    }

    .project-section {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
        background-color: #fff;
    }

    .project-section h5 {
        margin-bottom: 10px;
        font-size: 1.2rem;
        border-bottom: 1px solid #eee;
        padding-bottom: 5px;
    }

    /* Badges */
    .badge {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 12px;
        color: #fff;
        font-size: 0.9rem;
        font-weight: bold;
    }

    .badge-success { background-color: #28a745; }
    .badge-secondary { background-color: #6c757d; }
    .badge-primary { background-color: #007bff; }

    /* Imagen principal */
    .main-image {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    /* Galería de miniaturas */
    .project-thumbnails {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .project-thumbnails img {
        width: 150px;
        height: 100px;
        object-fit: cover;
        border-radius: 4px;
        cursor: pointer;
        transition: transform 0.2s;
        border: 1px solid #ccc;
    }

    .project-thumbnails img:hover {
        transform: scale(1.1);
        border-color: #007bff;
    }

    /* Características */
    .project-features {
        list-style-type: disc;
        padding-left: 20px;
    }

    /* Enlaces */
    .project-links a {
        color: #007bff;
        text-decoration: none;
    }

    .project-links a:hover {
        text-decoration: underline;
    }

    /* Botón volver */
    .btn-back {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 4px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.2s;
    }

    .btn-back:hover {
        background-color: #0056b3;
    }
</style>

<section class="content container-fluid">
    <div class="project-card">

        {{-- Header --}}
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 1.5rem; font-weight: bold;">Detalles del Proyecto</span>
            <a class="btn-back" href="{{ route('proyectos.index') }}">Volver</a>
        </div>

        {{-- Información general --}}
        <div class="project-section">
            <h5>Información General</h5>
            <p><strong>Nombre:</strong> {{ $proyecto->nombre }}</p>
            <p><strong>Nombre (EN):</strong> {{ $proyecto->nombre_en }}</p>
            <p>
                <strong>Tipo de Proyecto:</strong>
                <span class="badge badge-primary">{{ $proyecto->tipo_proyecto ?? 'No definido' }}</span>
            </p>
            <p>
                <strong>Visible Externamente:</strong>
                <span class="badge {{ $proyecto->publicar_externo ? 'badge-success' : 'badge-secondary' }}">
                    {{ $proyecto->publicar_externo ? 'Sí' : 'No' }}
                </span>
            </p>
        </div>

        {{-- Imagen principal --}}
        <div class="project-section">
            <h5>Imagen Principal</h5>
            @if($proyecto->imagen)
                <img src="{{ $proyecto->imagen }}" alt="{{ $proyecto->nombre }}" class="main-image">
            @else
                <p>No disponible</p>
            @endif
        </div>

        {{-- Galería --}}
        @if(count($proyecto->imagenes_urls))
        <div class="project-section">
            <h5>Galería del Proyecto</h5>
            <div class="project-thumbnails">
                @foreach($proyecto->imagenes_urls as $img)
                    <img src="{{ $img }}" alt="Imagen proyecto">
                @endforeach
            </div>
        </div>
        @endif

        {{-- Descripción --}}
        <div class="project-section">
            <h5>Descripción</h5>
            <p>{{ $proyecto->descripcion }}</p>
            <p><strong>Descripción (EN):</strong> {{ $proyecto->descripcion_en }}</p>
        </div>

        {{-- Enlaces --}}
        <div class="project-section project-links">
            <h5>Enlaces</h5>
            <ul>
                <li><strong>Live Demo:</strong> <a href="{{ $proyecto->url_live_demo }}" target="_blank">{{ $proyecto->url_live_demo ?? 'N/A' }}</a></li>
                <li><strong>GitHub:</strong> <a href="{{ $proyecto->url_github }}" target="_blank">{{ $proyecto->url_github ?? 'N/A' }}</a></li>
                <li><strong>Video:</strong> <a href="{{ $proyecto->url_video_proyecto }}" target="_blank">{{ $proyecto->url_video_proyecto ?? 'N/A' }}</a></li>
            </ul>
        </div>

        {{-- Características --}}
        @if($proyecto->caracteristicas)
        <div class="project-section">
            <h5>Características del Proyecto</h5>
            <ul class="project-features">
                @foreach(json_decode($proyecto->caracteristicas) as $caracteristica)
                    <li>{{ $caracteristica }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>
</section>
@endsection
