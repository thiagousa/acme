<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index',['article' => $articles]);
    }


    public function show(Article $article)
    {
        return view('articles.show',['article' => $article]);
    }


    public function create()
    {
        return view('articles.create');
    }


    public function store()
    {
        Article::create($this->validateArticle());
        return redirect('articles.index');
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
