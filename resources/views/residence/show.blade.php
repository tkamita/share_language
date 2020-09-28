@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-8 mt-5">
      <h3 class="text-center">{{ $residence->name }}</h3>
    </div>
    <div class="border col-md-12 mb-5"></div>
    <div class="col-md-8">
    </div>
    <div class="col-md-4">
      @include('components.sidebar')
    </div>
  </div>
</div>
@endsection