@extends('app')
@section('title', '投票ホーム')

@section('content')
  @include('nav')

<div class="container">
    <div class="text-center py-5">
      <p>どっちのネコがかわいいか投票しよう！</p>
     </div>
@foreach($articles as $article) 
  <div class="d-flex flex-row justify-content-center">
   <div class="col-3">
     <div class="card mt-3">
        <div class="view view-cascade overlay">
          <img src="{{ asset('/storage/'.$article->img)}}">
        </div>
        <div class="card-body elegant-color white-text">
         <h2 class="h5 card-title">
          {{ $article->title }}
          </h2>
        </div>
      </div>
    </div>
  </div>
@endforeach

  
</div>
@endsection