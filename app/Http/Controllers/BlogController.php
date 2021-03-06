<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thecoderblog;
use App\Models\videos;
use App\Models\projetos;
use App\Models\comentarios_artigo;
use App\Models\comentarios_projeto;
use Illuminate\Support\Facades\DB;

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
        $comentarios = DB::table("comentarios_artigos")->where('id_post', "$id")->latest()->get();

        return view('artigo', [
            'artigo' => $artigo,
            'comentarios' => $comentarios
        ]);
    }

    public function showProjeto($id){
        $projeto = projetos::findOrFail($id);
        $comentarios = DB::table("comentario_projeto")->where('id_post', "$id")->latest()->get();

        return view('projeto', [
            'projeto' => $projeto,
            'comentarios' => $comentarios
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

    public function storeComentarioProjeto(Request $request, $id){
        $comentario = new comentarios_projeto;
        $comentario->id_post = $id;
        $comentario->username = $request->username;
        $comentario->conteudo = $request->conteudo;
        
        $comentario->save();
        return redirect("/projeto/$id");
    }

    public function adm(){
        return view('adm', [

        ]);
    }

    public function editArtigoTable(){
        $artigos = thecoderblog::all();

        return view('editArtigoTable',[
            'artigos' => $artigos
        ]);
    }

    public function editArtigoScreen($id){
        $artigo = thecoderblog::findOrFail($id);
        $comentarios = DB::table("comentarios_artigos")->where('id_post', "$id")->latest()->get();

        return view('editArtigoScreen', [
            'artigo' => $artigo,
            'comentarios' => $comentarios
        ]);
    }

    public function editArtigo(Request $request, $id){
        $now = now();
        DB::table('artigos')->where('id', "$id")->update(['updated_at' => "$now"]);
        DB::table('artigos')->where('id', "$id")->update(['conteudo' => "$request->conteudo"]);

        return redirect("/artigo/$id");
    }

    public function deleteComentario($id_artigo, $id){
        comentarios_artigo::findOrFail($id)->delete();
        return redirect("/artigo/$id_artigo");
    }

    public function editVideoTable(){
        $videos = videos::all();

        return view('editVideoTable', [
            'videos' => $videos
        ]);
    }

    public function editVideoScreen($id){
        $video = videos::findOrFail($id);

        return view('editVideoScreen', [
            'video' => $video
        ]);
    }

    public function editVideo(Request $request, $id){
        $now = now();
        DB::table('videos')->where('id', "$id")->update(['updated_at' => "$now"]);
        DB::table('videos')->where('id', "$id")->update(['titulo' => "$request->titulo"]);
        DB::table('videos')->where('id', "$id")->update(['url' => "$request->url"]);
        DB::table('videos')->where('id', "$id")->update(['descricao' => "$request->descricao"]);

        return redirect("/videos");
    }

    public function editProjetoTable(){
        $projetos = projetos::all();

        return view('editProjetoTable',[
            'projetos' => $projetos
        ]);
    }

    public function editProjetoScreen($id){
        $projeto = projetos::findOrFail($id);
        $comentarios = comentarios_projeto::all();

        return view('editProjetoScreen', [
            'projeto' => $projeto,
            'comentarios' => $comentarios
        ]);
    }

    public function editProjeto(Request $request, $id){
        $now = now();
        DB::table('projetos')->where('id', "$id")->update(['updated_at' => "$now"]);
        DB::table('projetos')->where('id', "$id")->update(['conteudo' => "$request->conteudo"]);

        return redirect("/projeto/$id");
    }

    public function deleteComentarioProjeto($id_projeto, $id){
        comentarios_projeto::findOrFail($id)->delete();
        return redirect("projeto/$id_projeto");
    }

    public function deleteArtigo($id){
        thecoderblog::findOrFail($id)->delete();
        
        $artigos = thecoderblog::all();

        return view('editArtigoTable',[
            'artigos' => $artigos
        ]);
    }

    public function deleteVideo($id){
        videos::findOrFail($id)->delete();

        $videos = videos::all();

        return view('editVideoTable', [
            'videos' => $videos
        ]);
    }

    public function deleteProjeto($id){
        projetos::findOrFail($id)->delete();

        $projetos = projetos::all();

        return view('editProjetoTable',[
            'projetos' => $projetos
        ]);
    }
}