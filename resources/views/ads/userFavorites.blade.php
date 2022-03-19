@extends('layouts.app')

@section('content')
  <div class="col-lg-8">
    <p>
      <h2>تفضيلاتي: </h2>
    </p>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>التاريخ</th>
          <th>عنوان الاعلان</th>
          <th>السعر</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($userfav as $ad)
            <tr>
              <td>{{ $ad->pivot->created_at }}</td>
              <td>{{ $ad->title }}</td>
              <td>{{ $ad->price }}  {{$ad->currency->name}}</td>
              <td>
                <div class="btn-group" role="group">
                  <a class="btn-sm btn-primary" href="/ad/{{$ad->id}}/{{$ad->slug}}" role="button"><i class="glyphicon glyphicon-sign"></i>عرض</a>
                </div>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection