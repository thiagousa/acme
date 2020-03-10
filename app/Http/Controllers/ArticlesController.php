<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index',['articles' => $articles]);
    }


    public function show(Article $article)

    {
        return view('articles.show',['article' => $article]);
    }


    public function create()
    {
        return view('articles.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'title'=> 'required',
            'excerpt' => 'required',
             'body'  => 'required'
         ]);


        Article::create([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'user_id' => 1,
            'body' => request('body')
        ]);



        return redirect('articles');

    }

    public function edit(Article $article)
    {

        return view('articles.edit',['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->user_id = 1;
        $article->save();
        return redirect('articles/'.$article->id);

    }


    public function destroy($id)
    {

    }
}
