<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
