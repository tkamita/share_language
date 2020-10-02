@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-8 mt-5">
      <h3 class="text-center">{{ $feature->content }}のシェアハウス</h3>
      <ul class="nav nav-pills justify-content-center">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-map-marker-alt"></i> 地域から探す
          </a>
          <div class="dropdown-menu">
            @foreach($prefectures as $prefecture)
              <a href="#" class="dropdown-item">{{ $prefecture->name }}</a>
            @endforeach
          </div>
        </li>
      </ul>
    </div>
    <div class="border col-md-12 mb-5"></div>
    <div class="col-md-8">
      <div class="d-flex flex-row bd-highlight mb-3 row">
        @foreach($feature->residences as $residence)
          <div class="card m-3 pb-3 col-md-5" style="width: 18rem;">
            <img src="{{ asset('storage/img/'.$residence->images[0]->file_name) }}" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">{{ $residence->name }}</h5>
              <p class="card-text">{{ $residence->introduction }}</p>
            </div>
            <a href="{{ route('residences.show', $residence->id) }}" class="byn byn-primary">詳しくみる</a>
          </div>
        @endforeach
      </div>
    </div>
    <div class="col-md-4">
      @include('components.sidebar')
    </div>
  </div>
</div>
@endsection