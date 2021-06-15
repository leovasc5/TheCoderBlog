@extends('layout.layout')
@section('title', 'TheCoderBlog - Artigos')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/index.css">

@foreach($artigos as $artigo)
<div class='box'>
    {!! $artigo->conteudo !!}
</div>
@endforeach
@endsection
