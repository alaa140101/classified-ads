@extends('layouts.app')

{{-- @section('title', __('titles.app_title')) --}}

@section('content')
<p><h3 class="mb-5">الإعلانات الأكثر تفضيلًا :</h3></p>

    @include('partials.ads')
@endsection