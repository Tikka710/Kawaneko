@extends('app')
@section('title', '投票ホーム')

@section('content')
  @include('nav')

<div class="container mt-4">
    <div class="text-center py-2">
      <h2 class="h4 near-moon-gradient text-black">どっちのネコがかわいい？？</h2>
     </div>

  <div class="row d-flex justify-content-center">
   <div class="row col-md-4">
   @foreach($articles as $article) 
      @include('articles.photo') 
    @endforeach
    </div>
  </div>


  
</div>
@endsection


<style type="text/css">
.container {
  font-family: YakuHanJP, "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Noto Sans JP", Meiryo, sans-serif;
}
</style>