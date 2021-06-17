@extends('layout.layout_user')
@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/table.css">

<table id="customers">
    <tr>
      <th>Company</th>
      <th>Contact</th>
      <th>Country</th>
    </tr> 

    @foreach ($artigos as $artigo)
        <tr>
            <td>{!! $artigo->conteudo !!}</td>
        </tr>
    @endforeach
    
</table>
@endsection