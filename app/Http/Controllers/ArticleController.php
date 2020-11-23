<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function home()
    {
      $articles = Article::inRandomOrder()->get();

      return view('articles.index', compact('articles'));
    }
}
