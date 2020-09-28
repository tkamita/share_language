@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-8 mt-5">
      <h3 class="text-center">{{ $residence->name }}</h3>
    </div>
    <div class="border col-md-12 mb-5 mt-3"></div>
    <div class="col-md-8 mt-2">
      <div class="d-flex flex-row bd-highlight mb-3 row">
        <div class="mt-3 pb-3 col-md-3" style="width: 18rem;">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
            <img src="/img/1685623_s.jpg" alt="" class="w-100">
          </button>
        </div>
          <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="/img/1685623_s.jpg" alt="" class="w-100">
              </div>
            </div>
          </div>
        </div>
        <div class="mt-3 pb-3 col-md-3" style="width: 18rem;">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
            <img src="/img/1685623_s.jpg" alt="" class="w-100">
          </button>
        </div>
        <div class="mt-3 pb-3 col-md-3" style="width: 18rem;">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
            <img src="/img/1685623_s.jpg" alt="" class="w-100">
          </button>
        </div>
        <div class="mt-3 pb-3 col-md-3" style="width: 18rem;">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
            <img src="/img/1685623_s.jpg" alt="" class="w-100">
          </button>
        </div>
        <div class="mt-3 pb-3 col-md-3" style="width: 18rem;">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
            <img src="/img/1685623_s.jpg" alt="" class="w-100">
          </button>
        </div>
      </div>
      <div class="row">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" class="bg-info w-25">所在地</th>
              <td>{{ $residence->location }}</td>
            </tr>
            <tr>
              <th scope="row" class="bg-info">交通</th>
              <td>Jacob</td>
            </tr>
            <tr>
              <th scope="row" class="bg-info">賃料</th>
              <td>{{ $residence->minimum_rent }}円 〜{{ $residence->maximum_rent }}円</td>
            </tr>
            <tr>
              <th scope="row" class="bg-info">共益費</th>
              <td>{{ $residence->common_charge }}円</td>
            </tr>
            <tr>
              <th scope="row" class="bg-info">契約期間</th>
              <td>{{ $residence->term }}ヶ月以上</td>
            </tr>
            <tr>
              <th scope="row" class="bg-info">部屋数</th>
              <td>{{ $residence->room_num }}部屋</td>
            </tr>
            <tr>
              <th scope="row" class="bg-info">WI-FI</th>
              @if($residence->wifi === 0)
                <td>無し</td>
              @else
                <td>有り</td>
              @endif
            </tr>
            <tr>
              <th scope="row" class="bg-info">駐輪場</th>
              @if($residence->bicycle === 0)
                <td>無し</td>
              @else
                <td>有り</td>
              @endif
            </tr>
            <tr>
              <th scope="row" class="bg-info">駐車場</th>
              @if($residence->parking === 0)
                <td>無し</td>
              @else
                <td>有り</td>
              @endif
            </tr>
            <tr>
              <th scope="row" class="bg-info">バイク置き場</th>
              @if($residence->motorcycle === 0)
                <td>無し</td>
              @else
                <td>有り</td>
              @endif
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row mt-2">
        <p class="text-muted p-4">{!! nl2br(e($residence->introduction)) !!}</p>
      </div>
    </div>
    <div class="col-md-4">
      <button type="button" class="btn btn-primary btn-block mb-5">検討リストに入れる</button>
      <a href="{{ route('residences.edit', $residence->id) }}" class="btn btn-secondary btn-block mb-5">編集する</a>
      @include('components.sidebar')
    </div>
  </div>
</div>
@endsection