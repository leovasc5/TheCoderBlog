@extends('layout.layout')
@section('title', 'TheCoderBlog - Artigos')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/index.css">

<section class="posts">
<h1 class="recentes">Artigos Recentes</h1>
@foreach($artigos as $artigo)
<div class='box'>
    {!! $artigo->conteudo !!}
</div>
@endforeach
<br><br><br>
</section>
@endsection
