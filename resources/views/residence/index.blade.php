@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-8 mt-5">
      <h3 class="text-center">東京都のシェアハウス</h3>
      <ul class="nav nav-pills justify-content-center">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bullseye"></i>特徴から探す
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">少人数</a>
            <a class="dropdown-item" href="#">女性専用</a>
            <a class="dropdown-item" href="#">学生専用</a>
            <a class="dropdown-item" href="#">総額７万円以下</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="border col-md-12 mb-5"></div>
    <div class="col-md-8">
      <div class="d-flex flex-row bd-highlight mb-3 row">
        <div class="card m-3 pb-3 col-md-5" style="width: 18rem;">
          <img src="img/932772_m.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">新宿</h5>
            <p class="card-text">ミッドセンチュリー期のインダストリアルデザインを彷彿させるヴィンテージ感あふれるオシャレなシュアハウスです。</p>
          </div>
          <a href="#" class="btn btn-primary">詳しくみる</a>
        </div>
        <div class="card m-3 pb-3 col-md-5" style="width: 18rem;">
          <img src="img/932772_m.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">渋谷</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.afdafdfsadfdsafdsafdsfsadfsad</p>
          </div>
          <a href="#" class="btn btn-primary">詳しくみる</a>
        </div>
        <div class="card m-3 pb-3 col-md-5" style="width: 18rem;">
          <img src="img/932772_m.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">池袋</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <a href="#" class="btn btn-primary">詳しくみる</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      @include('components.sidebar')
    </div>
  </div>
</div>
@endsection
