@extends('app')

@section('title', 'ログイン')


@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">かわネコ</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <div class="user-form my-4">
              <h2 class="h3 card-title text-center mt-2">ログイン</h2>
              @include('error_card_list')
              <form method="POST" action="{{ route('login') }}">
              @csrf
                <div class="md-form">
                  <label for="email">メールアドレス</label>
                  <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                </div>

                <div class="md-form">
                  <label for="password">パスワード</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <input type="hidden" name="remember" id="remember" value="on">
                <button class="btn btn-primary" type="submit" text-while>ログイン</button>
              <a href="{{ route('login.{provider}', ['provider' => 'twitter']) }}" class="btn btn-block btn-info">
                <i class="fab fa-google mr-1"></i>Twitterでログイン
              </a>
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
