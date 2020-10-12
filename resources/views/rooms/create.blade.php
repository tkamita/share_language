@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="card mt-5 col-md-8">
      <h5 class="card-header bg-white font-weight-bold">新規部屋登録</h5>
      @include('components.error')
      <div class="card-body">
        <form action="{{ route('rooms.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">画像</label>
            <div class="col-sm-10">
              <input type="file" class="form-control-file" id="image" name="file_name" >
            </div>
          </div>
          <div class="form-group row">
            <label for="residence" class="col-sm-2 col-form-label">物件名</label>
            <div class="col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="residence_id">
                <option selected>Choose...</option>
                @foreach($residences as $residence)
                  <option value="{{ $residence->id }}">{{ $residence->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="floor" class="col-sm-2 col-form-label">フロア</label>
            <div class="col-sm-10 input-group">
              <input type="number" class="form-control" id="floor" name="floor">
              <div class="input-group-append">
                <span class="input-group-text">階</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="room_num" class="col-sm-2 col-form-label">部屋番号</label>
            <div class="col-sm-10 input-group">
              <input type="number" class="form-control" id="room_num" name="room_num">
              <div class="input-group-append">
                <span class="input-group-text">号室</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="extent" class="col-sm-2 col-form-label">広さ</label>
            <div class="col-sm-10 input-group">
              <input type="number" class="form-control" id="extent" name="extent">
              <div class="input-group-append">
                <span class="input-group-text">帖</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rent" class="col-sm-2 col-form-label">賃料</label>
            <div class="col-sm-10 input-group">
              <input type="number" class="form-control" id="rent" name="rent">
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
            <label for="floor_info" class="col-sm-2 col-form-label">性別</label>
            <div class="col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="floor_info">
                <option value="both">男女共用</option>
                <option value="men">男性限定</option>
                <option value="women">女性限定</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="face_window" class="col-sm-2 col-form-label">窓向き</label>
            <div class="col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="face_window">
                <option value="east">東</option>
                <option value="west">西</option>
                <option value="north">南</option>
                <option value="south">北</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="floor_info" class="col-sm-2 col-form-label">空室情報</label>
            <div class="col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="floor_info">
                <option value="0">空室</option>
                <option value="1">満室</option>
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
