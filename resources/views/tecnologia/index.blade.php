@extends('layouts.app')

@section('template_title')
    Tecnologia
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tecnologia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tecnologia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Categoria</th>
										<th>Nombre</th>
										<th>Icono</th>
										<th>Descripcion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tecnologia as $tecnologias)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $tecnologias->categorias }}</td>
											<td>{{ $tecnologias->nombre }}</td>
											<td><i class="{{ $tecnologias->icono }}"></i></td>
											<td>{{ $tecnologias->descripcion }}</td>
                                            <td>
                                                <form action="{{ route('tecnologia.destroy',$tecnologias->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tecnologia.show',$tecnologias->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tecnologia.edit',$tecnologias->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tecnologia->links() !!}
            </div>
        </div>
    </div>
@endsection
