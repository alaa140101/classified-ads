@foreach ($countries as $country)
  <option value="{{$country->id}}"{{ request()->country_id==$country->id ? 'selected':""}}>{{$country->name}}</option>                        
@endforeach