@extends('layouts.app')

@section('content')

  <div class="row">
    @foreach ($ads as $ad)
    @php 
      // dd($ad->images()->first());
      $img_name = $ad->images->first();
      if(isset($img_name)) 
      {
        $img_name = $img_name['image'];
      }
    @endphp
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card mb-5 text-center">
        <img src="{{$img_name ? '/storage/images/thumbs/'.$img_name : '/storage/images/thumbs/default.jpg'}}" alt="" class="card-img-top thumbnail">
        <div class="card-body">
          <div class="">
            <h6 class="card-title">{{$ad->title}}</h6>
          </div>
          <p class="card-text">{{$ad->price}}  {{$ad->currency->name}}</p>
          <a href="/ad/{{$ad->id}}/{{$ad->slug}}" class="btn btn-sm btn-outline-dark">التفاصيل</a>
        </div>
      </div>
    </div>
        
    @endforeach
  </div>
    
@endsection