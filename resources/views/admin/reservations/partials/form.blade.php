<div class="form-row">
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('client_name', 'Nombre: ') !!}
        {!! Form::text('client_name', null, ['class' => 'form-control text-capitalize', 'placeholder' => 'Ingrese el nombre del cliente']) !!}
        @error('client_name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="col">
    <div class="form-group">
        {!! Form::label('date', 'Fecha') !!}
        {!! Form::date('date', null, ['class' => 'form-control']) !!}
        @error('date')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="col">
    <div class="form-group">
        {!! Form::label('time', 'Hora') !!}
        {!! Form::time('time', null, ['class' => 'form-control']) !!}
        @error('time')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('persons', 'Comensales') !!}
            {!! Form::number('persons', null, ['class' => 'form-control','placeholder' => 'Número de comensales','min'=>'1','max'=>'14']) !!}
            @error('persons')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('email', 'Email del cliente') !!}
            {!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Ingrese el correo electrónico del cliente']) !!}
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

