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
    @if(count($comentarios) != 0)
    <h2>Comentários ({{count($comentarios)}})</h2>
    @else
    <h3>Seja o primeiro a comentar!</h3>
    @endif

    <form action="/valida_comentario_projeto/{{$projeto->id}}" method="post">
        @csrf
        <input type="text" placeholder="Username" name="username">
        <br>
        <textarea placeholder="Digite aqui o seu comentário" name="conteudo" maxlength="191" cols="80" rows="10"></textarea>
        <br>
        <input type="submit" value="Comentar" class="box_submit"/>
    </form>

    @foreach($comentarios as $comentario)
        <div class="comment">
            <p><b>{{$comentario->username}}</b></p>
            <p>{{$comentario->conteudo}}</p>
        </div>
    @endforeach
</div>

@endsection