@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="card mt-5 col-md-8">
      <h5 class="card-header bg-white font-weight-bold">画像削除</h5>
      <div class="card-body">
        <form action="{{ route('images.destroy', $image->id) }}" method="post" enctype="multipart/form-data">
          @method('DELETE')
          @csrf
          <div class="form-group row justify-content-center">
            <img src="{{ asset('storage/img'.$image->file_name) }}" alt="" class="">
            <input type="hidden" name="id" value="{{ $image->id }}">
            <input type="submit" class="btn btn-danger btn-block mt-3" value="削除する">
            <a href="{{ route('residences.edit', $image->residence_id) }}" class="btn btn-secondary btn-block mb-5">戻る</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
