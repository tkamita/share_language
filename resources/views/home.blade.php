@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="mt-5">
      <h3 class="text-center font-weight-bold">暮らして学ぶ。</h3>
      <h3 class="text-center font-weight-bold">英語を学ぶシェアハウス</h3>
      <div class="mx-auto" style="width: 400px;">
        <p class="text-center">Share Languageは英語を学びたいと考えている人が日本語を学びたいと考えている外国人とシェアハウスで一緒に暮らし、英語力をのばして行くコミュニティの事です。定期的に開催される英会話レッスンやアクティビティを通じて日常生活で英語学習をする事ができます。</p>
      </div>
    </div>
    <div class="border col-md-8 mb-5"></div>
    <div class="col-md-8">
      <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/932772_m.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2111547.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/1685623_s.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="border col-md-8 mb-5"></div>
  </div>
  <div class="row justify-content-center mb-3">
    <div class="mt-5　col-md-8">
      <h3 class="text-center font-weight-bold">
      <i class="fas fa-search"></i>シェアハウスを探す
      </h3>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="card text-center m-3 col-md-4">
      <div class="card-header bg-white">
        <i class="fas fa-map-marker-alt"></i>地域から探す
      </div>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-left-0 border-right-0">
            東京都
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-left-0 border-right-0">
            千葉県
            <span class="badge badge-primary badge-pill">2</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-left-0 border-right-0">
            埼玉県
            <span class="badge badge-primary badge-pill">1</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-left-0 border-right-0">
            神奈川県
            <span class="badge badge-primary badge-pill">1</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="card text-center m-3 col-md-4">
      <div class="card-header bg-white">
        <i class="fas fa-bullseye"></i>特徴から探す
      </div>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-left-0 border-right-0">
            少人数
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-left-0 border-right-0">
            女性専用
            <span class="badge badge-primary badge-pill">2</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-left-0 border-right-0">
            学生専用
            <span class="badge badge-primary badge-pill">1</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-left-0 border-right-0">
            総額７万円以下
            <span class="badge badge-primary badge-pill">1</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
