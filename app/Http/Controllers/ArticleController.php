<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;
use JD\Cloudder\Facades\Cloudder;

class ArticleController extends Controller
{
    public function index()
    {
      $articles = Article::inRandomOrder()->take(2)->get();

      return view('articles.index', compact('articles'));
    }

    public function create()
    {
      return view('articles.create');
    }

    public function store(ArticleRequest $request, Article $article)
    {
      
      if($image = $request->file('image'))
      {
        $img = $image->getRealPath();
        Cloudder::upload($img, null);
        $publicId = Cloudder::getPublicId();
        $logoUrl = Cloudder::secureShow($publicId, [
          'width' => 600,
          'height' => 600,
        ]);

        $article->img = $logoUrl;
        $article->public_id = $publicId;
      }
      $article->user_id = $request->user()->id;
      $article->save();

      return redirect()->route('articles.index');
    }

    public function vote(Request $request, Article $article)
    {
      $article->votes()->detach($request->user()->id);
      $article->votes()->attach($request->user()->id);
      
      return [
        'id' => $article->id,
        'countVotes' => $article->count_votes,
      ];
    }

    public function unvote(Request $request, Article $article)
    {
      $article->votes()->detach($request->user()->id);

      return [
        'id' => $article->id,
        'countVotes' => $article->count_votes,
      ];
    }

    public function edit(Article $article)
    {
      return view('articles.edit', ['article' => $article]);
    }

    public function destroy(int $id)
    {
      $article = Article::find($id);

    }


}
