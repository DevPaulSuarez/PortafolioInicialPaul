@extends('layouts.app')

@section('template_title')
    {{ $tecnologia->name ?? 'Show tecnologia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show tecnologia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tecnologia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tecnologia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $tecnologia->icono }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tecnologia->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
