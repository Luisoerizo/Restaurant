@extends('adminlte::page')
@section('title', 'Administrador')

@section('content_header')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-secondary btn-sm float-right">Nuevo Post</a>
    <h1>Listado de posts</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Registro eliminado</h5>
            {{ session('info') }}
        </div>
    @endif
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
