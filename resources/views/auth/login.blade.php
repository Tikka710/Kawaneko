@extends('app')

@section('title', 'ログイン')


@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">ザツバコ</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">Twitterでログイン</h2>
            <a href="{{ route('login.{provider}', ['provider' => 'twitter']) }}" class="btn btn-block btn-info">
              <i class="fab fa-google mr-1"></i>Twitterでログイン
            </a>

            @include('error_card_list')

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
