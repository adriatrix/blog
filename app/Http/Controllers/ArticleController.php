<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Article;

class ArticleController extends Controller
{
    function showArticles() {
      // $article1 = 'Article 1';
      // $article2 = 'Article 2';
      // return view('articles/articles_list', compact('article1','article2'));

      $articles = Article::all();
      return view ('articles/articles_list', compact('articles'));
    }

    function show($id) {
      // echo "id is: $id";
      $article = Article::find($id);
      // dd($article);
      return view ('articles/single_article', compact('article'));
    }

    function createForm() {
      return view ('articles/create_form');
    }

    function create(Request $request) {
      $rules = array (
        'title' => 'required',
        'content' => 'required'
      );
      $this->validate($request,$rules);


      $new_article= new Article();
      $new_article->title = $request->title;
      $new_article->content = $request->content;
      $new_article->save();

      Session::flash('create_article_success','Article Successfully Created');

      return redirect('/articles');
    }

    function delete($id) {
      $article = Article::find($id);
      $article->delete();

      return redirect('/articles');
    }

    function edit(Request $request, $id) {
      $rules = array (
        'title' => 'required',
        'content' => 'required'
      );
      $this->validate($request,$rules);

      $article = Article::find($id);
      $article->title = $request->title;
      $article->content = $request->content;
      $article->save();



      return redirect()->back();
    }
}
