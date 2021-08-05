@extends('adminlte::page')
@section('title', 'Reservaciones')

@section('content_header')
    <a href="{{ route('admin.reservations.create') }}" class="btn btn-secondary btn-sm float-right">Nueva reservación</a>
    <h1>Listado de Reservaciones</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Registro eliminado</h5>
            {{ session('info') }}
        </div>
    @endif
    @livewire('admin.reservations-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
