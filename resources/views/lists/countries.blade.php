@foreach ($countries as $country)
  @isset($ad)
  <option value="{{$country->id}}"{{$ad->country_id==$country->id ? 'selected':""}}>{{$country->name}}</option>                        
  @else
  <option value="{{$country->id}}">{{$country->name}}</option>                        
  @endisset
@endforeach