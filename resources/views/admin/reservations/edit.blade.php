@extends('adminlte::page')
@section('title', 'Reservaciones')

@section('content_header')
    <h1>Editar reservación</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Registro eliminado</h5>
    {{ session('info') }}
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($reservation,['route' => ['admin.reservations.update',$reservation], 'autocomplete' => 'off', 'method' => 'put']) !!}

        @include('admin/reservations/partials/form')

        {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop