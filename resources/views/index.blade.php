@extends('layout.layout')
@section('title', 'TheCoderBlog')

@section('topBar')

@section('content')
<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/css/buttonReset.css">

<p class="intro">Olá, eu sou Leonardo Vasconcelos, um desenvolvedor de softwares.</p>
<section class="perfil">   
    <img src="https://avatars.githubusercontent.com/u/70069239?v=4" class="avatar"/>
    <p>
        <img src="https://raw.githubusercontent.com/devicons/devicon/7a4ca8aa871d6dca81691e018d31eed89cb70a76/icons/javascript/javascript-plain.svg" height="40" width="40" style="max-width:100%;" title="JavaScript">
        <img src="https://raw.githubusercontent.com/devicons/devicon/7a4ca8aa871d6dca81691e018d31eed89cb70a76/icons/php/php-plain.svg" height="40" width="40" style="max-width:100%;" title="PHP">
        <img src="https://raw.githubusercontent.com/devicons/devicon/7a4ca8aa871d6dca81691e018d31eed89cb70a76/icons/laravel/laravel-plain.svg" height="40" width="40" style="max-width:100%;" title="Laravel">
        <img src="https://raw.githubusercontent.com/devicons/devicon/7a4ca8aa871d6dca81691e018d31eed89cb70a76/icons/python/python-plain.svg" height="40" width="40" style="max-width:100%;" title="Python">
        <img src="https://raw.githubusercontent.com/devicons/devicon/7a4ca8aa871d6dca81691e018d31eed89cb70a76/icons/mysql/mysql-original.svg" height="40" width="40" style="max-width:100%;" title="SQL">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/Vegas_Pro_15.0.png" height="40" width="40" style="max-width:100%;" title="Vegas Pro">
        <img src="https://raw.githubusercontent.com/devicons/devicon/7a4ca8aa871d6dca81691e018d31eed89cb70a76/icons/photoshop/photoshop-line.svg" height="40" width="40" style="max-width:100%;" title="Photoshop">
    </p>
</section>

<section class="posts">

<h1 class="recentes">Posts Recentes</h1>
{{-- <h1>Teste</h1>
<h1>Teste</h1>
<h1>Teste</h1>
<h1>Teste</h1>
<h1>Teste</h1> --}}
</section>

@endsection
