@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="card mt-5 col-md-8">
      <h5 class="card-header bg-white font-weight-bold">新規物件登録</h5>
      @include('components.error')
      <div class="card-body">
        <form action="{{ route('residences.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">画像</label>
            <div class="col-sm-10">
              <input type="file" class="form-control-file" id="image" name="file_name" >
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">物件名</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name">
            </div>
          </div>
          <div class="form-group row">
            <label for="feature" class="col-sm-2 col-form-label">特徴</label>
            <div class="col-sm-10">
              @foreach($features as $feature)
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="feature" value="{{ $feature->id }}" name="features[{{ $feature->id }}]" {{ (old('features.'.$feature->id) == $feature->id) ? 'checked' : '' }}>
                  <label class="form-check-label" for="feature">{{ $feature->content }}</label>
                </div>
              @endforeach
            </div>
          </div>
          <div class="form-group row">
            <label for="introduction" class="col-sm-2 col-form-label">紹介文</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="introduction" name="introduction" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="prefecture" class="col-sm-2 col-form-label">都道府県</label>
            <div class="col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="prefecture_id">
                <option selected>Choose...</option>
                @foreach($prefectures as $pref)
                  <option value="{{ $pref->id }}">{{ $pref->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="location" class="col-sm-2 col-form-label">住所</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="location" name="location">
            </div>
          </div>
          <div class="form-group row">
            <label for="minimum_rent" class="col-sm-2 col-form-label">下限家賃</label>
            <div class="col-sm-10 input-group">
              <input type="number" class="form-control" id="minimum_rent" name="minimum_rent">
              <div class="input-group-append">
                <span class="input-group-text">円</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="maximum_rent" class="col-sm-2 col-form-label">上限家賃</label>
            <div class="col-sm-10 input-group">
              <input type="number" class="form-control" id="maximum_rent" name="maximum_rent">
              <div class="input-group-append">
                <span class="input-group-text">円</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="common_charge" class="col-sm-2 col-form-label">共益費</label>
            <div class="col-sm-10 input-group">
              <input type="number" class="form-control" id="common_charge" name="common_charge">
              <div class="input-group-append">
                <span class="input-group-text">円</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="term" class="col-sm-2 col-form-label">契約期間</label>
            <div class="col-sm-10 input-group">
              <input type="number" class="form-control" id="term" name="term">
              <div class="input-group-append">
                <span class="input-group-text">ヶ月</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="room_num" class="col-sm-2 col-form-label">部屋数</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="room_num" name="room_num">
            </div>
          </div>
          <div class="form-group row">
            <label for="wifi" class="col-sm-2 col-form-label">wi-fi</label>
            <div class="col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="wifi">
                <option value="0">無し</option>
                <option value="1">有り</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">駐輪場</label>
            <div class="col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="bicycle">
                <option value="0">無し</option>
                <option value="1">有り</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">駐車場</label>
            <div class="col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="parking">
                <option value="0">無し</option>
                <option value="1">有り</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">バイク置き場</label>
            <div class="col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="motorcycle">
                <option value="0">無し</option>
                <option value="1">有り</option>
              </select>
            </div>
          </div>
          <button type="submit" class="mt-5 btn btn-primary btn-lg btn-block">新規登録</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
