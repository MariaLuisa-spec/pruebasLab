<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Identificacion') }}
            {{ Form::text('Identificacion', $paciente->Identificacion, ['class' => 'form-control' . ($errors->has('Identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Identificacion']) }}
            {!! $errors->first('Identificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $paciente->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $paciente->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $paciente->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $paciente->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EPS') }}
            {{ Form::text('EPS', $paciente->EPS, ['class' => 'form-control' . ($errors->has('EPS') ? ' is-invalid' : ''), 'placeholder' => 'Eps']) }}
            {!! $errors->first('EPS', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TP') }}
            {{ Form::text('TP', $paciente->TP, ['class' => 'form-control' . ($errors->has('TP') ? ' is-invalid' : ''), 'placeholder' => 'Tp']) }}
            {!! $errors->first('TP', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PTT') }}
            {{ Form::text('PTT', $paciente->PTT, ['class' => 'form-control' . ($errors->has('PTT') ? ' is-invalid' : ''), 'placeholder' => 'Ptt']) }}
            {!! $errors->first('PTT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('III') }}
            {{ Form::text('III', $paciente->III, ['class' => 'form-control' . ($errors->has('III') ? ' is-invalid' : ''), 'placeholder' => 'Iii']) }}
            {!! $errors->first('III', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('AT_III') }}
            {{ Form::text('AT_III', $paciente->AT_III, ['class' => 'form-control' . ($errors->has('AT_III') ? ' is-invalid' : ''), 'placeholder' => 'At Iii']) }}
            {!! $errors->first('AT_III', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TT') }}
            {{ Form::text('TT', $paciente->TT, ['class' => 'form-control' . ($errors->has('TT') ? ' is-invalid' : ''), 'placeholder' => 'Tt']) }}
            {!! $errors->first('TT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fibrinogeno') }}
            {{ Form::text('Fibrinogeno', $paciente->Fibrinogeno, ['class' => 'form-control' . ($errors->has('Fibrinogeno') ? ' is-invalid' : ''), 'placeholder' => 'Fibrinogeno']) }}
            {!! $errors->first('Fibrinogeno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>