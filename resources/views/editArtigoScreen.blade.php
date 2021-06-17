@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/table.css">

<table id="customers">
    <tr>
      <th>Artigo</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr> 

    @foreach ($artigos as $artigo)
        <tr>
            <td>{!! $artigo->conteudo !!}</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
    @endforeach
    
</table>
@endsection