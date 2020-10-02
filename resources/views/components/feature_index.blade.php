<div class="row justify-content-center mt-5">
  <div class="col-md-8">
    <h5 class="font-weight-bold">登録済み特徴一覧</h5>
    <ul class="list-group">
      @foreach($features as $feature)
      
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $feature->content }}
          <div>
            <a href="{{ route('features.show', $feature->id) }}" class="btn btn-primary btn-sm mr-3">関連物件 {{ $feature->residences->count() }}</a>
            <a href="{{ route('features.edit', $feature->id) }}" class="btn btn-warning btn-sm">編集</a>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</div>