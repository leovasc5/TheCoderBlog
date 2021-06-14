@extends('layout.layout')
@section('title', 'TheCoderBlog - Vídeos')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">

@foreach ($videos as $video)
    <center>
        <h3>{{$video->titulo}}</h3>
        <iframe width="560" height="315" src="{{$video->url}}" title="{{$video->title}}" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
        <h5>{{$video->descricao}}</h5>
    </center>
@endforeach

@endsection
