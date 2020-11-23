<?php

Auth::routes();

Route::prefix('login')->name('login.')->group(function () {
  Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
});
Route::get('/', 'ArticleController@home');