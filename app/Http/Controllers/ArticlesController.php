<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        if(request('tag')){
            $articles= Tag::where('name', request('tag'))->firstOrFail()->articles;

        }
        else{
            $articles = Article::latest()->get();
        }

        return view('articles.index',['articles' => $articles]);
    }


    public function show(Article $article)

    {
        return view('articles.show',['article' => $article]);
    }


    public function create()
    {
        return view('articles.create', ['tags' =>  Tag::all()]);
    }


    public function store(Request $request)
    {

        $articles = new Article($this->validateArticles());

        $articles->save();

        $articles->tags()->attach(request('tags'));

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit',['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticles());
        return redirect(route('articles.show',$article->id));

    }


    public function destroy($id)
    {

    }

    public function validateArticles(){

        return  request()->validate([
            'title'=> 'required',
            'excerpt' => 'required',
            'body'  => 'required',
            'user_id' => 'required'
        ]);
    }
}
