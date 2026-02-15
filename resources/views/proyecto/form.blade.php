<div class="box box-info padding-1">
    <div class="box-body">
        <!-- public_external -->
        <div class="form-group">
            {{ Form::label('publicar_externo', 'Visible externamente?') }}
            {{ Form::checkbox('publicar_externo', 1, $proyecto->publicar_externo ?? false) }}
            {!! $errors->first('publicar_externo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <!-- project_type -->
        <div class="form-group">
            {{ Form::label('tipo_proyecto', 'Tipo de Proyecto') }}
            {{ Form::select('tipo_proyecto', [
        '' => 'Selecciona tipo',
        'small_business' => 'Pequeño Negocio',
        'non_profit' => 'Organización sin fines de lucro',
        'corporate_website' => 'Sitio Web Corporativo',
        'ecommerce' => 'Tienda Electrónica',
        'landing_page' => 'Página de Destino',
        'full_system' => 'Sistema Completo'
    ], $proyecto->tipo_proyecto ?? '', ['class' => 'form-control']) }}
            {!! $errors->first('tipo_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $proyecto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_en') }}
            {{ Form::text('nombre_en', $proyecto->nombre_en, ['class' => 'form-control' . ($errors->has('nombre_en') ? ' is-invalid' : ''), 'placeholder' => 'nombre_en']) }}
            {!! $errors->first('nombre_en', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $proyecto->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $proyecto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_en') }}
            {{ Form::text('descripcion_en', $proyecto->descripcion_en, ['class' => 'form-control' . ($errors->has('descripcion_en') ? ' is-invalid' : ''), 'placeholder' => 'descripcion_en']) }}
            {!! $errors->first('descripcion_en', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url_live_demo') }}
            {{ Form::text('url_live_demo', $proyecto->url_live_demo, ['class' => 'form-control' . ($errors->has('url_live_demo') ? ' is-invalid' : ''), 'placeholder' => 'url_live_demo']) }}
            {!! $errors->first('url_live_demo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url_github') }}
            {{ Form::text('url_github', $proyecto->url_github, ['class' => 'form-control' . ($errors->has('url_github') ? ' is-invalid' : ''), 'placeholder' => 'url_github']) }}
            {!! $errors->first('url_github', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url_video_proyecto') }}
            {{ Form::text('url_video_proyecto', $proyecto->url_video_proyecto, ['class' => 'form-control' . ($errors->has('url_video_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'url_video_proyecto']) }}
            {!! $errors->first('url_video_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer" style="margin-top: 10px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>