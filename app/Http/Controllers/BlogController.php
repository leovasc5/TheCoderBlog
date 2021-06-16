<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thecoderblog;
use App\Models\videos;
use App\Models\projetos;
use App\Models\comentarios_artigo;

class BlogController extends Controller
{
    public function index(){
        $artigos = thecoderblog::all();

        return view('index', [
            'artigos' => $artigos
        ]);
    }

    public function artigos(){
        $artigos = thecoderblog::all();

        return view('artigos', [
            'artigos' => $artigos
        ]);
    }

    public function videos(){
        $videos = videos::all();

        return view('videos', [
            'videos' => $videos
        ]);
    }

    public function projetos(){
        $projetos = projetos::all();

        return view('projetos', [
           'projetos' =>  $projetos 
        ]);
    }

    public function criarArtigo(){
        return view('criar-artigo', [

        ]);
    }

    public function addVideo(){
        return view('add-video', [

        ]);
    }

    public function addProjeto(){
        return view('add-projeto', [

        ]);
    }

    public function validaArtigo(Request $request){
        $artigo = new thecoderblog;
        $artigo->conteudo = $request->txtConteudo;

        $artigo->save();
        return redirect('/dashboard')->with('cont');
    }

    public function validaVideo(Request $request){
        $video = new videos;
        $video->titulo = $request->titulo;
        $video->url = $request->url;
        $video->descricao = $request->descricao;

        $video->save();
        return redirect('/dashboard')->with('vid');
    }

    public function validaProjeto(Request $request){
        $projeto = new projetos;
        $projeto->conteudo = $request->txtConteudo;

        $projeto->save();
        return redirect('/dashboard')->with('proj');
    }

    public function showArtigo($id){
        $artigo = thecoderblog::findOrFail($id);

        return view('artigo', [
            'artigo' => $artigo
        ]);
    }

    public function showProjeto($id){
        $projeto = projetos::findOrFail($id);

        return view('projeto', [
            'projeto' => $projeto
        ]);
    }

    public function storeComentarioArtigo(Request $request, $id){
        $comentario = new comentarios_artigo;
        $comentario->id_post = $id;
        $comentario->username = $request->username;
        $comentario->conteudo = $request->conteudo;

        $comentario->save();
        return redirect("/artigo/$id");
    }
}