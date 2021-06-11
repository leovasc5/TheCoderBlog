<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thecoderblog;
use App\Models\videos;

class BlogController extends Controller
{
    public function index(){
        return view('index', [
            
        ]);
    }

    public function artigos(){
        return view('artigos', [
            
        ]);
    }

    public function videos(){
        return view('videos', [
            
        ]);
    }

    public function projetos(){
        return view('projetos', [
            
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
        return redirect('/')->with('cont');
    }

    public function validaVideo(Request $request){
        $video = new videos;
        $video->titulo = $request->titulo;
        $video->url = $request->url;
        $video->descricao = $request->descricao;

        $video->save();
        return redirect('/')->with('vid');
    }

    public function validaProjeto(Request $request){

    }
}
