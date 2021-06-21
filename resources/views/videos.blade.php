@extends('layout.layout')
@section('title', 'TheCoderBlog - Vídeos')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/videos.css">

@foreach ($videos as $video)
    <center>
        <h1>{{$video->titulo}}</h1>
        <iframe width="560" height="315" src="{{$video->url}}" title="{{$video->title}}" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
        <h3>{{$video->descricao}}</h3>
        <hr>
    </center>
@endforeach

@endsection
