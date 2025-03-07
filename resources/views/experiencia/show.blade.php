@extends('layouts.app')

@section('template_title')
    {{ $experiencia->name ?? 'Show experiencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show experiencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('experiencia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $experiencia->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $experiencia->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Proyecto:</strong>
                            {{ $experiencia->proyecto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $experiencia->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Inicio:</strong>
                            {{ $experiencia->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Fin:</strong>
                            {{ $experiencia->fecha_fin }}
                        </div>
                        <h3>Tecnologías asociadas:</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
