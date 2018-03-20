<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function showArticles() {
      // $article1 = 'Article 1';
      // $article2 = 'Article 2';
      // return view('articles/articles_list', compact('article1','article2'));

      $articles = ["Article 1","Article 2"];
      return view ('articles/articles_list', compact('articles'));
    }
}
