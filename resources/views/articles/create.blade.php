@extends('app')

@section('title', '投稿画面')

@include('nav')

@section('content')
<div class="container my-5">
  <div class="row">
    <div class="mx-auto col-md-7">
        <div class="card">
          <h2 class="h4 card-header text-center near-moon-gradient text-black">ネコの画像を投稿しよう！</h2>
          <div class="card-body pt-3">
              @include('error_card_list')
            <div class="card-text">
              <form method="POST" class="w-75 mx-auto" action="{{route('articles.store')}}" enctype="multipart/form-data">

                @include('articles.form')

                <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>