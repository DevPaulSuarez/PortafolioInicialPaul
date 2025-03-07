<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tecnologia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('icono') }}
            {{ Form::text('icono', $tecnologia->icono, ['class' => 'form-control' . ($errors->has('icono') ? ' is-invalid' : ''), 'placeholder' => 'icono']) }}
            {!! $errors->first('icono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion', 'Descripción') }}
            {{ Form::text('descripcion', $tecnologia->descripcion, [
                'class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 
                'placeholder' => 'Descripción'
            ]) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('categorias', 'Categoría:') }}
            {{ Form::select('categorias', [
                'lenguaje' => 'Lenguaje',
                'framework' => 'Framework',
                'herramientas' => 'Herramientas',
                'database' => 'Database'
            ], $tecnologia->categorias, [
                'class' => 'form-control' . ($errors->has('categorias') ? ' is-invalid' : '')
            ]) }}
            {!! $errors->first('categorias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer" style="margin-top: 15px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>