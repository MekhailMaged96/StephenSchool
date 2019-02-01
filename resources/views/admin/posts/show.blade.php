@extends('layouts.admin')
@section('page-head')
 {{$post->title}}
@endsection
@section('main-admin')
<section class="all-users">

    <div class="row">
        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success  ml-auto mr-3"><i class='fas fa-edit'></i> تعديل</a>
    </div>
    <div class="row">
        <div class="offset-md-4 col-md-8">
         <p style="text-align:right;  color:#f00;"   class="mt-5">   : المحتوى  </p>
          <p style="text-align:right; ">{{$post->body}}</p>
           <hr>
          <p style="text-align:right; color:#f00;"> :الصورة  </p>
          @if($post->img)

        <img src="{{asset('images/'.$post->img)}}" class="img-responsive">

          @else
          <p style="text-align:right; ">لا يوجد صورة</p>
          
          @endif
          <hr>
          <p style="text-align:right;  color:#f00;"   class="mt-2">   : التاريخ  </p>
          <p style="text-align:right;"  >{{date ( 'M j,Y h:i a',strtotime($post->updated_at) )}}</p>
        </div>
    </div>


</section>
@endsection