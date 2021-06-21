@extends('layout.layout')
@section('title', 'TheCoderBlog - Projetos')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/projetos.css">

<section class="posts">
<center>
<h1 class="recentes">Projetos</h1>
</center>

@foreach($projetos as $projeto)
<a href="/artigo/{{$projeto->id}}">
    <div class='box'>
        <div class='text'>
            {!! $projeto->conteudo !!}
        </div>
    </div>
@endforeach
<br><br><br>
</div>
</section>

@endsection