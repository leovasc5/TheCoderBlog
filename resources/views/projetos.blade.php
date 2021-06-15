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
@php 
for($i = 0; $i <=2; $i++){
    echo "<div class='box'>";
        echo html_entity_decode($projetos[$i]->conteudo);
    echo "</div>";
}
@endphp
</div>
</section>

@endsection
