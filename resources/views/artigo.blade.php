@extends('layout.layout')
@section('title', 'TheCoderBlog - Artigo')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/artigo.css">

<div class="box_artigo">
    <label><b>Autor:</b> Leonardo Vasconcelos Paulino</label>
    <label><b>Data:</b> {{$artigo->created_at}}
{!! $artigo->conteudo !!}
</div>

<div class="campoComentarios">
    @if(count($comentarios) != 0)
    <h2>Comentários ({{count($comentarios)}})</h2>
    @else
    <h3>Seja o primeiro a comentar!</h3>
    @endif

    <form action="/valida_comentario_artigo/{{$artigo->id}}" method="post">
        @csrf
        <input type="text" name="username" placeholder="Username">
        <br>
        <textarea placeholder="Digite aqui o seu comentário" name="conteudo" maxlength="191" cols="80" rows="10"></textarea>
        <br>
        <input type="submit" value="Comentar"/>
    </form>

    @foreach($comentarios as $comentario)
        <div class="comment">
            <label>{{$comentario->username}}</label>
            <p>{{$comentario->conteudo}}</p>
        </div>
    @endforeach

</div>

@endsection