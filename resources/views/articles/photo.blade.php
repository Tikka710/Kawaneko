<div class="row">
  <div class="col-md mb-4">
    <div class="card mt-3">
      <div class="view view-cascade overlay">
        <img src="{{ $article->img }}" class="card-img-top" alt="Card image cap">
      </div>
      <div class="card-body info-color-dark white-text rounded-bottom">
        <div class="d-flex align-items-center">
        <article-vote>
        </article-vote>
        
        </div>
        <h7 class="card-title"> {{ $article->created_at->format('Y/m/d H:i') }}</h7>
      </div>
    </div>
  </div>
</div>