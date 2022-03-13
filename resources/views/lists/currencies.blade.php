@foreach($currencies as $currency)
    @isset($ad)
        <option value="{{ $currency->id }}" {{$ad->currency_id==$currency->id ? 'selected':""}}>{{ $currency->name }}</option>
    @else
        <option value="{{ $currency->id }}">{{ $currency->name }}</option>
    @endisset
@endforeach



