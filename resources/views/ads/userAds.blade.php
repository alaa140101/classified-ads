@extends('layouts.app')

@section('content')
  <p>
    <h2>إعلاناتي</h2>
  </p>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>التاريخ</th>
        <th>عنوان الإعلان</th>
        <th>السعر</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ads as $ad)
        <tr>
          <td>{{$ad->created_at}}</td>
          <td>{{$ad->title}}<a href=""></a></td>
          <td>{{$ad->price}}</td>
          <td>
            <div class="btn-group" role="group">
              <a href="" class="btn-sm btn-primary" role="button">تعديل<i class="glyphicon glyphicon-remove-sign"></i></a>
              <button class="btn-sm btn-danger mr-1" type="submit">حذف <i class="glyphicon glyphicon-remove-sign"></i></button>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
    
@endsection