@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/table.css">

<table id="customers">
    <tr>
      <th>Projeto</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr> 

    @foreach ($projetos as $projeto)
        <tr>
            <td class="table-column">
                <div class="item">{!! $projeto->conteudo !!}</div>
            </td>
            <td class="table-column">
                <div class="item" id="center">
                    <a href="projeto/editar/{{$projeto->id}}">Editar</a>
                </div>
            </td>
            <td class="table-column">
                <div class="item" id="center">
                    <a>Excluir</a>
                </div>
            </td>
        </tr>
    @endforeach
    
</table>
@endsection