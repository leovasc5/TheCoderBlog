@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/addVideo.css">

<form action="valida-video" method="post" id="form" class="form">
    @csrf
    <input type="text" name="titulo" placeholder="Título" required/><br>
    <input type="text" name="url" placeholder="URL do YouTube" required/><br>
    <textarea name="descricao" cols="30" rows="10" placeholder="Descrição" required></textarea><br>
    <input type="submit" id="especial" value="Adicionar">
</form>

@endsection