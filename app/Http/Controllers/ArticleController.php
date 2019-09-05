<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{



    public function add() {


        $data = request()->validate( [

            'titre' => 'required|min:8',
            'contenu'=> 'required|min:20',
            'active' => 'boolean'
        ]);


        $article = new Article;
        $article->titre = request('titre');
        $article->contenu = request('contenu');
        $article->active = request('active');

        $article->save();

        return back();
    }


    public function list() {

        $article = Article::where('active',1)->get();

        return view('articles.list',['list'=>$article]);

    }
}
