@extends('app')

@section('title', '新規登録')

@section('content')

<div class="container">
  <div class="card mt-3">
  <h5 class="card-header info-color white-text text-center py-4">
    <strong>新規登録</strong>
  </h5>
  　　@include('error_card_list')
  <div class="card-body px-lg-5 pt-0">
    <form class="text-center" style="color: #757575;" method="POST" action="{{ route('register') }}">
      @csrf
      <div class="md-form">
        <label for="name">ユーザー名</label>
        <input class="form-control" type="text" id="name" name="name" required value="{{ old('name')}}">
        <small>英数字3〜16文字(登録後の変更はできません)</small>
      </div>
      <div class="md-form">
        <label for="email">メールアドレス</label>
        <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
      </div>
      <div class="md-form">
        <label for="password">パスワード</label>
        <input class="form-control" type="password" id="password" name="password" required>
      </div>
      <div class="md-form">
        <label for="password_confirmation">パスワード(確認のためもう一度)</label>
        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
      </div>
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">新規登録</button>
    </form>

    <div class="mt-0">
      <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
    </div>




  </div>






  </div>
</div>
@endsection