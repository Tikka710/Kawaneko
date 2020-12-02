<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
  <a class="navbar-brand" href="/">
  <img src="{{ asset('./images/cat.png') }}" class="logo mr-1" width="50" height="50">
  かわネコべ～タ
  <p class="float-right text-muted h6 mt-3">かわいいねこはどっち？</p>
  </a>

  <ul class="navbar-nav ml-auto">

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">新規登録</a>
    </li>
    @endguest

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>
    @endguest

    @auth
    <li class="nav-item">
      <a class="nav-link" href="{{ route('articles.create') }}">写真を投稿する</a>
    </li>
    @endauth

    @auth
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout')}}">
      @csrf

    </form>
    <!-- Dropdown -->
    @endauth

  </ul>

</nav>