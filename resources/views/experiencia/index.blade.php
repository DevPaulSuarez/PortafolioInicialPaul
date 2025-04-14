@php use Illuminate\Support\Str; @endphp
@extends('layouts.app')

@section('template_title')
    Experiencia Laboral
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Experiencia Laboral') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('experiencia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Empresa</th>
										<th>Cargo</th>
                                        <th>Proyecto</th>
										<th>Descripcion</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Fin</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($experiencia as $index => $experiencias)
                                        <tr>
                                            <!-- Mostrar el índice incrementado -->
                                            <td>{{ $index + 1 }}</td>
                                            
                                            <!-- Mostrar los atributos de la experiencia -->
                                            <td> {{ app()->getLocale() == 'en'? Str::limit($experiencias->empresa_en, 20) : Str::limit($experiencias->empresa, 20)}}</td>
                                            <td> {{ app()->getLocale() == 'en'? Str::limit($experiencias->cargo_en, 30) : Str::limit($experiencias->cargo, 30)}}</td>
                                             <!-- Mostrar el nombre del proyecto (usando la relación) -->
                                            <td>{{ Str::limit($experiencias->proyecto ? $experiencias->proyecto->nombre : 'No asignado', 30) }}</td>
                                            <td> {{ app()->getLocale() == 'en'? Str::limit($experiencias->descripcion_en, 30) : Str::limit($experiencias->descripcion, 30)}}</td>
                                            <td>{{ $experiencias->fecha_inicio }}</td>
                                            <td>{{ $experiencias->fecha_fin ?? 'Actualmente' }}</td> <!-- Si no tiene fecha de fin, muestra 'Actualmente' -->
                                            
                                            <td>
                                                <form action="{{ route('experiencia.destroy', $experiencias->id) }}" method="POST">
                                                    <!-- Botón "Show" -->
                                                    <a class="btn btn-sm btn-primary" href="{{ route('experiencia.show', $experiencias->id) }}">
                                                        <i class="fa fa-fw fa-eye"></i> Show
                                                    </a>
                                                    
                                                    <!-- Botón "Edit" -->
                                                    <a class="btn btn-sm btn-success" href="{{ route('experiencia.edit', $experiencias->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i> Edit
                                                    </a>
                                                    
                                                    <!-- CSRF y método DELETE -->
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                    <!-- Botón "Delete" -->
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-fw fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                {!! $experiencia->links() !!}
            </div>
        </div>
    </div>
@endsection
