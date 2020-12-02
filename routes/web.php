<?php

# ユーザー新規登録、ログイン、ログアウト
Auth::routes();
# ユーザー投稿関係(index, show)
Route::get('/', 'ArticleController@index')->name('articles.index');

# ログイン関係 
Route::prefix('login')->name('login.')->group(function () {
  Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
  Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});




// ユーザー投稿関係(create, edit, update, destroy)
Route::resource('/articles', 'ArticleController')->except(['index'])->middleware('auth');


