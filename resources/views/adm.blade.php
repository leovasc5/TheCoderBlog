@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/buttonAdmin.css">

<center>
<div class="center">
    <a href="/editar-artigo">
        <input type="submit" class="button" value="Editar Artigo"/>
    </a>
</div>

<div class="center">
    <a href="/editar-video">
        <input type="submit" class="button" value="Editar Vídeo"/>
    </a>
</div>

<div class="center">
    <a href="/editar-projeto">
        <input type="submit" class="button" value="Editar Projeto"/>
    </a>
</div>
</center>


@endsection