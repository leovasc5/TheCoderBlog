@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/addVideo.css">

<form action="/video/update/{{$video->id}}" method="post" id="form" class="form">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" value="{{$video->titulo}}" placeholder="Título" required/><br>
    <input type="text" name="url" value="{{$video->url}}" placeholder="URL do YouTube" required/><br>
    <textarea name="descricao" cols="30" rows="10" placeholder="Descrição" required>{{$video->descricao}}"</textarea><br>
    <input type="submit" id="especial" class="hover" value="Editar">
</form>

@endsection