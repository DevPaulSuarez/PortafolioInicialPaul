<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('empresa') }}
            {{ Form::text('empresa', $experiencia->empresa, ['class' => 'form-control' . ($errors->has('empresa') ? ' is-invalid' : ''), 'placeholder' => 'empresa']) }}
            {!! $errors->first('empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $experiencia->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'cargo']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio', 'Fecha de inicio') }}
            {{ Form::date('fecha_inicio', $experiencia->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin', 'Fecha de Finalización') }}
            {{ Form::date('fecha_fin', $experiencia->fecha_fin, [
                'class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''),
                'placeholder' => 'Selecciona la fecha de finalización'
            ]) }}
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
 <!-- Selector de Proyecto -->
<label for="proyecto_id" {{ isset($experiencia->id) ? 'hidden' : '' }}>Seleccionar Proyecto:</label>
<select name="proyecto_id" id="proyecto_id" class="form-control" required {{ isset($experiencia->id) ? 'hidden' : '' }}>
    <option value="">Selecciona un Proyecto</option>
    @foreach($proyectos as $proyecto)
        <option value="{{ $proyecto->id }}" 
            {{ old('proyecto_id', $experiencia->proyecto_id) == $proyecto->id ? 'selected' : '' }}>
            {{ $proyecto->nombre }}
        </option>
    @endforeach
</select>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $experiencia->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $experiencia->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tecnologias', 'Tecnologías') }}
            <div>
                @foreach ($tecnologias as $tecnologia)
                    <label>
                        {{ Form::checkbox('tecnologias[]', $tecnologia->id, in_array($tecnologia->id, $experiencia->tecnologias->pluck('id')->toArray())) }}
                        {{ $tecnologia->nombre }}
                    </label><br>
                @endforeach
            </div>
        </div>

    </div>
    </div>
    <div class="box-footer" style="margin-top: 15px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>