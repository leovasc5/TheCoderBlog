@extends('layout.layout')
@section('title', 'TheCoderBlog - Projeto')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/artigo.css">

<div class="box_artigo">
{!! $projeto->conteudo !!}
</div>

<div class="campoComentarios">
    <h2>Comentários</h2>
    <form action="/valida_comentario_projeto" method="post">
        @csrf
        <input type="text" placeholder="Username">
        <br>
        <textarea placeholder="Digite aqui o seu comentário" cols="80" rows="10"></textarea>
        <br>
        <input type="submit" value="Comentar" class="box_submit"/>
    </form>
</div>

@endsection