<?php

use App\Http\Middleware\CheckIsVoted;

# ユーザー新規登録、ログイン、ログアウト
Auth::routes();
# ユーザー投稿関係(index, show)
Route::get('/', 'ArticleController@index')->name('articles.index');

# ログイン関係 
Route::prefix('login')->name('login.')->group(function () {
  Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
  Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});

# 投票関係
Route::post('/votes', 'VoteContoller@vote')->name('articles.vote');

// ユーザー投稿関係(create, edit, update, destroy)
Route::resource('/articles', 'ArticleController')->except(['index'])->middleware('auth');

// 投票関係
Route::prefix('articles')->name('articles.')->group(function () {
  Route::put('/{article}/like', 'ArticleController@vote')->name('vote');
  Route::delete('/{article}/like', 'ArticleController@vote')->name('unvote');
});

