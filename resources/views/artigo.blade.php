@extends('layout.layout')
@section('title', 'TheCoderBlog - Artigo')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/buttonReset.css">
<link rel="stylesheet" href="/css/artigo.css">

<div class="box_artigo">
    <label><b>Autor:</b> Leonardo Vasconcelos Paulino</label>
    <label class="fr"><b>Data:</b> @php
        $array_time = explode(' ', $artigo->created_at);
        $array_dia = explode('-', $array_time[0]);

        echo $array_dia[2].' de ';
        if($array_dia[1] == '01'){
          echo 'Janeiro';
        }
        if($array_dia[1] == '02'){
          echo 'Fevereiro';
        }
        if($array_dia[1] == '03'){
          echo 'Março';
        }
        if($array_dia[1] == '04'){
          echo 'Abril';
        }
        if($array_dia[1] == '05'){
          echo 'Maio';
        }
        if($array_dia[1] == '06'){
          echo 'Junho';
        }
        if($array_dia[1] == '07'){
          echo 'Julho';
        }
        if($array_dia[1] == '08'){
          echo 'Agosto';
        }
        if($array_dia[1] == '09'){
          echo 'Setembro';
        }
        if($array_dia[1] == '10'){
          echo 'Outubro';
        }
        if($array_dia[1] == '11'){
          echo 'Novembro';
        }if($array_dia[1] == '12'){
          echo 'Dezembro';
        }
        echo " de $array_dia[0]";
      @endphp</label>
{!! $artigo->conteudo !!}
</div>

<div class="campoComentarios">
    @if(count($comentarios) != 0)
    <h2>Comentários ({{count($comentarios)}})</h2>
    @else
    <h3>Seja o primeiro a comentar!</h3>
    @endif

    <form action="/valida_comentario_artigo/{{$artigo->id}}" method="post">
        @csrf
        <input type="text" name="username" placeholder="Username">
        <br>
        <textarea placeholder="Digite aqui o seu comentário" name="conteudo" maxlength="191" cols="80" rows="10"></textarea>
        <br>
        <input type="submit" value="Comentar" class="box_submit"/>
    </form>

    @foreach($comentarios as $comentario)
        <div class="comment">
            <p><b>{{$comentario->username}}</b></p>
            <p>{{$comentario->conteudo}}</p>
        </div>
    @endforeach

</div>

@endsection