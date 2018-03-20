<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/articles', function () {
//     $article1 = "Article 1";
//     $article2 = "Article 2";
//     return view('articles/articles_list', compact('article1','article2'));
// });

Route::get('/articles', 'ArticleCOntroller@showArticles');
