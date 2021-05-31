<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
class ArticlesController extends Controller
{

    public function index(){

      if(request('tag')){
        $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
      } else {
        $articles = Article::latest()->get();
      }
      //Render list of resource
      $article = Article::latest()->get();

      return view('articles.show', ['article' => $article]);
    }

    public function show(Article $article){

      //Show a single resource
      //$article = Article::findOrFail($id);

      return view('articles.show', ['article' => $article]);
    }

    public function create(){
      return view('articles.create', [
        'tags' => Tag::all()
      ]);
    }

    public function store(){

      $article = new Article($this->validateArticle());
      $article->user_id = 1;
      $article->save();

      $article->tags()->attach(request('tags'));
      //Article::create($this->validateArticle());

      return redirect('\articles');
    }

    public function edit(Article $article){
      //Show a view to edit an existing resource
      //$article = Article::find($id);
      return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article){
      //Persist the edited resource
      //$article = new Article();
      $article->update($this->validateArticle());
      $article->title = request('title');
      $article->excerpt = request('excerpt');
      $article->body = request('body');

      $article->save();

      return redirect('/articles/' . $article->id);
    }

    public function destroy(){
      //Delete the resource
    }

    public function validateArticle(){
      return request()->validate([
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required',
        'tags' => 'exists:tags,id'
      ]);
    }

}
