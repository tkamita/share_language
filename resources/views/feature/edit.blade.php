@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8 mt-4 mb-5">
      <h5 class="font-weight-bold">特徴編集</h5>
      <form action="{{ route('features.update', $feature->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group mt-3">
          <input type="text" class="form-control" id="" name="content" value="{{ $feature->content }}">
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">変更内容を保存する</button>
      </form>
    </div>
  </div>
  @include('components.feature_index')
</div>
@endsection