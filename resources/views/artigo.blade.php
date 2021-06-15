@extends('layout.layout')
@section('title', 'TheCoderBlog - Vídeos')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/artigo.css">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v11.0" nonce="PIsLkpco"></script>

<div class="box_artigo">
{!! $artigo->conteudo !!}
</div>

@endsection