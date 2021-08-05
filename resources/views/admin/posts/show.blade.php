@extends('adminlte::page')
@section('title', 'Administrador')

@section('content_header')
    <h1>Detalles del post</h1>
@stop

@section('content')
<section class="pt-5 pb-5">
  <div class="container">
    <article class="row card  border-0 flex-md-row justify-content-between align-items-center card-top">
        <div class="col-md-5  order-md-2 order-1 w-md-50 m-0 p-0">
            <img class="img-fluid rounded" src="{{ Storage::url($post->image->url)}}">
        </div>
        <div class="card-body order-2 order-md-1 col-md-7">
            <div class=" text-uppercase font-weight-bold mb-4 text-warning">{{$post->category->name}}</div>
            <h2 class="card-title display-4 font-weight-bold">
                <span class="text-dark">{{$post->name}}</span>
              </h2>
            <div class="card-text mb-4">
                <p class="lead">{!!$post->extract!!}</p>
                <p class="lead">{!!$post->body!!}</p>
            </div>
            <div class="mt-auto d-flex align-items-center pt-2">
                <div class="mr-3">
                    @foreach ($post->tags as $tag)
                       <span class="bg-secondary px-2 rounded">{{$tag->name}}</span>
                    @endforeach
                </div>
                <div class="d-block">
                    <div class="font-weight-bold">Fecha de creación</div>
                    <div class="text-grey"><p>{{$post->created_at}}</p></div>
                </div>
            </div>
        </div>
    </article>
</div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop