{{-- @foreach ($categories as $category)
  @isset($ad)
  <option value="{{$category->id}}" {{$ad->category_id==$category->id ? 'selected':""}}>{{$category->name}}</option>                        
  @else 
  <option value="{{$category->id}}">{{$category->name}}</option>
  @endisset
@endforeach --}}
@foreach ($categories as $category)
  <option value="{{$category->id}}" {{ request()->category==$category->id ? 'selected':""}}>{{$category->name}}</option>                        
@endforeach