@extends('layout.layout')
@section('title', 'TheCoderBlog - Artigos')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/index.css">

<section class="posts">
<h1 class="recentes">Artigos Recentes</h1>
@foreach($artigos as $artigo)
<a href="/artigo/{{$artigo->id}}">
    <div class='box'>
        <div class='text'>
            {!! $artigo->conteudo !!}
        </div>
    </div>
</a>
@endforeach
<br><br><br>
</section>
@endsection
