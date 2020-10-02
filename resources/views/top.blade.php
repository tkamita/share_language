@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8 mt-5 card">
      <div class="card-header">
        <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">申し込み</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">各種登録</a>
          </li>
        </ul>
      </div>
      
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <h3 class="text-center font-weight-bold mt-3">本日の申し込み件数</h3>
          <p class="text-center">105件数</p>
          <div class="row justify-content-center mt-3 mb-3">
            <button type="button" class="btn btn-primary btn-lg ">申し込み一覧へ</button>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="row justify-content-center">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href="{{ route('residences.create') }}" class="">物件登録画面</a>
              </li>
              <li class="list-group-item">
                <a href="{{ route('features.index') }}" class="">特徴登録画面</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection