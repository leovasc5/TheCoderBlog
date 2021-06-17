@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/artigo.css">

<center>
    <form action="/artigo/update/{{ $artigo->id }}" method="post">
        @csrf
        @method('PUT')
        <textarea name="conteudo" id="txtConteudo">
            {!! $artigo->conteudo !!}
        </textarea>
        <input type="submit" value="Enviar"/>
    </form>
</center>

<div class="campoComentarios">
@foreach($comentarios as $comentario)
    <div class="comment">
        <p><b>{{$comentario->username}}</b></p>
        <a href="comentario/delete/{{$comentario->id}}" class="fr">Excluir</a>
        <p>{{$comentario->conteudo}}</p>
    </div>
@endforeach
</div>

<script src="/vendor/ckeditor5/build/ckeditor.js"></script>
<script src="/js/ckeditor5.js"> </script>
@endsection