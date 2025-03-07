@extends('layouts.app')

@section('template_title')
    Update Tecnologia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update tecnologia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tecnologia.update', $tecnologia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tecnologia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
