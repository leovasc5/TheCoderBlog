@extends('layout.layout')
@section('title', 'TheCoderBlog - Vídeos')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/artigo.css">

<div class="box_artigo">
{!! $artigo->conteudo !!}
</div>

@endsection