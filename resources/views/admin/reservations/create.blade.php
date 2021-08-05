@extends('adminlte::page')
@section('title', 'Reservaciones')

@section('content_header')
    <h1>Crear reservación</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.reservations.store', 'autocomplete' => 'off']) !!}

        @include('admin/reservations/partials/form')

        {!! Form::submit('Crear Reservación', ['class' => 'btn btn-primary']) !!}
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