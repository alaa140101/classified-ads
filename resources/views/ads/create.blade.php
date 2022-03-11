@extends('layouts.app')

@section('title', __('titles.addAd_title'))

@section('content')

<div class="col-lg-8">
    <p><h2> أدخل تفاصيل إعلانك</h2></p>

    {{-- @include('alerts.success') --}}

    {{-- @include('alerts.error') --}}

    <form method="POST" action="{{ route('ad.store') }}" enctype="multipart/form-data" dir="rtl" style="text-align: right">
       @csrf
       <div class="form-group">
            <label for="country_id">حدد البلد</label>
            <select class="form-control" name="country_id" >
               @include('lists.countries')
            </select>
        </div>
        <div class="form-group">
            <label for="catg"> اختر التصنيف</label>
            <select class="form-control" name="category_id" >
               @include('lists.categories')
            </select>
        </div>
        <div class="form-group">
            <label for="title">عنوان الإعلان:</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="details">تفاصيل الإعلان: </label>
            <textarea class="form-control" name="text" rows="3" >{{old('text')}}</textarea>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label" value="{{old('price')}}">السعر/العملة</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="number" class="form-control" value="{{old('price')}}" name="price" step="any" placeholder="السعر" title="السعر" >
                </div>
                <div class="col-md-6" title="">
                    <select class="form-control" name="currency_id">
                        @include('lists.currencies')
                    </select>
                </div>
            </div>
        </div>
        @auth
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">            
        @endauth
        <div class="form-group">
            <label for="details"> أضف الصور </label>
            <input type="file" name="images[]"  class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">أضف الإعلان</button>
    </form>
</div>

@endsection