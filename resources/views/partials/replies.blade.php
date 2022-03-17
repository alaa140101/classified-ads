<ul class="comment-container">
  @foreach ($replies as $reply)
  <div class="card bg-light">
    <div class="card-header">
      <strong>{{$reply->user->name}}</strong>
    </div>
    <div class="card-body">
      {{ $reply->content }}
    </div>
    @include('partials.replies', ['replies' => $reply->replies])
  </div>
  @endforeach
</ul>