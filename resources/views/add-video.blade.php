@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<form action="valida-video" method="post">
    @csrf
    <input type="text" name="titulo"/><br>
    <input type="text" name="url"/><br>
    <textarea name="descricao" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Adicionar">
</form>

@endsection