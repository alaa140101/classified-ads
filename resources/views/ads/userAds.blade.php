@extends('layouts.app')

@section('content')

<p>
  <h2>إعلاناتي</h2>
</p>

@if($ads->isEmpty())
<p class="info">لايوجد لديك إعلانات</p>
@else 
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
          <td>{{$ad->price}}  {{$ad->currency->name}}</td>
          <td>
            <div class="btn-group" role="group">
              <a href="{{ route('ad.edit', $ad->id) }}" class="btn-sm btn-primary ml-1" role="button">تعديل<i class="glyphicon glyphicon-remove-sign"></i></a>
              <form action="{{ route('ad.destroy', $ad->id) }}" method="post" onsubmit="confirm('هل تريد حذف الإعلان؟')">
              @csrf
              @method('DELETE')
                <button class="btn-sm btn-danger m-0" type="submit">حذف <i class="glyphicon glyphicon-remove-sign"></i></button>
              </form>
            </div>
          </td>
        </tr>        
        @endforeach
      </tbody>
    </table>
  @endif     
@endsection