@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/table.css">

<table id="customers">
    <tr>
      <th>Vídeo</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr> 

    @foreach ($videos as $video)
        <tr>
            <td class="table-column">
                <div class="item">{!! $video->titulo !!}</div>
            </td>
            <td class="table-column">
                <div class="item" id="center">
                    <a href="video/editar/{{$video->id}}">Editar</a>
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