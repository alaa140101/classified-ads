@extends('layouts.app')

@section('title', __('titles.adDetail_title'))

@section('content')

<h2>{{$ad->title}} </h2>

@include('alerts.success')

<div class="row ">
    <div class="col-lg-11 col-md-6 col-xs-11 m-2">
        @if(Auth::user())
            <button  id="fav" data-id="{{$ad->id}}" class="{{ $favorited ? 'unfav' : 'fav' }} btn-sm btn-outline-primary waves-effect ">{{ $favorited ? "إضافة إلى المفضلة" : "إزالة من المفضلة"}}</button>
        @endif       
        @include('partials.shareBtns') 
    </div>
    <div class="col-lg-4 col-md-6 col-xs-11">
        <div id="carouselIndicators" class="carousel slide" >
            <div class="carousel-inner" >
                <?php $i=0; ?>
                @if(count($ad->images)==0)
                 <img  src="{{asset('/storage/images/thumbs/default.jpg')}}" >
                @endif
                @foreach($ad->images as $img)
                    <?php $i++;?>
                    <div class="carousel-item{{$i<=1?' active':''}} " >
                        <img   src="{{asset('/storage/images/'.$img->image)}}" >
                    </div>
                @endforeach
            </div>
            <!-- Indicators -->
            <div class="carousel-indicators">
               <?php $i=0; ?>
                @foreach($ad->images as $img)
                <img alt="thumbnail"  class="img-thumbnail"  src="{{asset('/storage/images/thumbs/'.$img->image)}}" data-target="#carouselIndicators" data-slide-to="{{$i++}}">
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-lg-7 col-md-6 col-xs-11">
        <div class="card ">
            <div class="card-body">
                <h4>المعلومات الرئيسية</h4>
                <p class="card-text">   اسم المعلن : {{$ad->user->name}} </p>
                <p class="card-text"> الدولة : {{$ad->country->name}} </p>
                <p class="card-text">السعر:  {{$ad->price}}</p>
                <h4>وصف الإعلان</h4>
                <p class="card-text">{{$ad->text}}</p>
                <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#myModal">تواصل مع المعلن</button>
            </div>
        </div>
    </div>
</div>

<!-- dialog -->
<div id="myModal" class="modal fade" role="dialog" >
    <div class="modal-dialog">
        <!--  content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تواصل مع المعلن</h5>
            </div>
            <div class="modal-body">
                <div class="card-body p-3">
                    <!--Body-->
                    <form id="send">
                        <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="اسمك">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="عنوان بريدك الإلكتروني">
                        </div>
                        <div class="form-group">
                                <textarea class="form-control" name="msg" placeholder="نص الرسالة"></textarea>
                        </div>

                        <input type="hidden" value="{{$ad->user->email}}" class="form-control" name="adv_email" >

                        <div class="text-center">
                            <button id="sendEmail" class="btn btn-primary btn-block rounded-0 py-2">إرسال</button>
                        </div>
                    </form>
                </div>
                <div id="msgs"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            </div>
        </div>
        <!-- end content -->
    </div>
</div>

<div class="row form-group mt-5" >
    <div class="col-lg-11 col-md-6 col-xs-11">
    @include('alerts.error')
     <h3> التعليقات : </h3>
        <form action="#" id="comments" method="post">
            @csrf
           <input type="hidden" name="ad_id" value="{{$ad->id}}">
            <div class="form-group">
                <textarea class="form-control" rows="5"  name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
    </div>
</div>

<div class="row form-group mt-5" >
    <div class="col-lg-11 col-md-6 col-xs-11">
        <div id="display_comment">
        {{-- <?php $comments=$ad->comments  ?>
            @foreach($comments as $comment)
            <ul class="comment-container">
                <li>
                <div class="card">
                    <div class="card-header">
                        <strong>{{$comment->user->name}}</strong>
                    </div>
                    <div class="card-body">
                        {{ $comment->content }}
                    </div>
                    @include('partials.commentForm')

                    @include('partials.commentReplies', ['comments' => $comment->replies])
                </div>
                </li>
            </ul>
            @endforeach --}}
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script>
    $(document).ready(function(){

        // $('#sendEmail').on('click', function(event){
        //     event.preventDefault();
        //     $.ajax({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         url: '/sendMail',
        //         type: 'post',
        //         data: $('#send').serialize(),
        //         success: function (data)
        //         {
        //             $("#msgs")
        //                 .removeClass("alert alert-danger")
        //                 .addClass("alert alert-success")
        //                 .text('تم الإرسال بنجاح')
        //         },
        //         error: function (response)
        //         {
        //             var jsonResponse = JSON.parse(response.responseText);
        //             $("#msgs")
        //                 .empty()
        //                 .addClass("alert alert-danger")
        //             $.each(jsonResponse['errors'], function (key, value) {
        //                 $("#msgs").append('<li>'+value+'</li>');
        //             });
        //         }
        //     });
        // });

        $('#fav').on('click', function(){

            var ad_id = $(this).data('id');
            ad = $(this);
            // var url='/ads/'+ad_id+'/favorite';

            if (ad.hasClass("fav") ) {
                var url='/ads/'+ad_id+'/favorite';
                var status="unfav";
                var text="إزالة من المفضلة"
            }
            else{
                 url='/ads/'+ad_id+'/unfavorite';
                 status="fav";
                 text="إضافة للمفضلة";
            }

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'post',
                data: {
                    'ad_id': ad_id
                },
                success: function(response){
                    ad
                    .removeClass('fav')
                    .removeClass('unfav')
                    .addClass(status)
                    .html(text)
                }
            });

        });
    });
</script>
@endsection