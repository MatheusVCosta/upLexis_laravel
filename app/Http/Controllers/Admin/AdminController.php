<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Article;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->where('fk_user', Auth::user()->id)->get();
        return view('admin.exibir', compact('articles'));
        
    }
    public function buscar()
    {
        return view('admin.buscar');
    }
    public function salvarArtigo()
    {   
        if(Request::ajax()){
            $dados = Request::all();
            if(Article::create($dados)){
                return json_encode('Sucesso');
            }
        }
    }
    public function deleteArtigo($id_article)
    {
        Article::find($id_article)->delete();
        return redirect()->route('admin.exibir');
    }
}
