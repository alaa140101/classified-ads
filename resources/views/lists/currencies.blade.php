@foreach($currencies as $currency)
    <option value="{{ $currency->id }}" {{$ad->currency_id==$currency->id ? 'selected':""}}>{{ $currency->name }}</option>
@endforeach
