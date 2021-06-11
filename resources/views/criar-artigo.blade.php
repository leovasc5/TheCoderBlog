@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">

<center>
<form action="/valida-artigo" method="post">
    @csrf
    <textarea name="txtConteudo" id="txtConteudo"></textarea>
    <input type="submit" value="Enviar"/>
</form>
<center>
<script src="/vendor/ckeditor5/build/ckeditor.js"></script>
<script src="/js/ckeditor5.js"> </script>
@endsection