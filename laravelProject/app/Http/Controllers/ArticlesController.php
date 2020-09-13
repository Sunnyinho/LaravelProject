<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller
{

    public function index(){
    //Render a list of a resource.

        $article = Article::latest()->get();

        return view ('articles.index',['articles' => $article]);

    }

    public function show(Article $article){
    //Show a single resource.

//        $articles = Article::find($id);

        return view('articles.show', ['article' => $article]);

    }

    public function create(){
    //Show a view to create a resource.

        return view('articles.create');

    }

    public function store(){
    //Persist or Holds a new resource.

        request()->validate([

            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'

        ]);


        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function edit(Article $article){
    //Show a view to edit an existing resource.

//        $articles = Article::find($id);

        return view('/articles.edit', ['article' => $article]);
    }

    public function update(Article $article){
    //Persist or Continue or Hold the edited resource.

        request()->validate([

            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'

        ]);

//        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/'.$article->id);

    }

    public function destroy($id){
    //Delete the resource.
        $article = Article::find($id);

        $article->delete();

    }

}
