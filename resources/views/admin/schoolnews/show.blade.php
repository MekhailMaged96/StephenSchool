@extends('layouts.admin')
@section('page-head')
عنوان اخبار المدرسة
@endsection

@section('main-admin')
<section class="news-show">
    <div class="row">
        <a  href="{{route('news.school.edit',$schoolnews->id)}}" class="mr-auto ml-5"><i class="fas fa-edit" style="font-size:25px" ></i></a>
        <h5 class="mr-3">{{$schoolnews->title}}</h5>
    </div>
    <div class="row justify-content-end mb-3">
        <div class="col-md-12 col-sm-12 ">
        <article class="mt-5 mr-3 text-right">
            @if($schoolnews->img)
            <img src="{{asset('storage/news/school/'.$schoolnews->img)}}"> 
            @endif 
            <p class="mt-5">
                {{$schoolnews->body}}
            </p>
        <article>
        </div>
    </div>
</section>
@endsection
