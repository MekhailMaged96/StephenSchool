@extends('layouts.admin')
@section('page-head')
اخبار الكنيسة
@endsection

@section('main-admin')
<section class="news-show">
    <div class="row">
        <a  href="{{route('news.church.edit',$churchnews ->id)}}" class="mr-auto ml-5"><i class="fas fa-edit" style="font-size:25px" ></i></a>
        <h5 class="mr-3">{{$churchnews->title}}</h5>
    </div>
    <div class="row justify-content-end mb-3">
        <div class="col-md-12 col-sm-12 ">
        <article class="mt-5 mr-3 text-right">
            @if($churchnews->img)
            <img src="{{asset('storage/news/church/'.$churchnews->img)}}">  
            @endif
            <p class="mt-5">
                {{$churchnews ->body}}
            </p>
        <article>
        </div>
    </div>
</section>
@endsection
