@extends('layouts.admin')
@section('page-head')
@if($school->type=="enrollment")
الالتحاق بالمدرسة
@elseif($school->type=="system")
نظام المدرسة
@elseif($school->type=="history")
تاريخ المدرسة
@elseif($school->type=="schedules")
جدول الحصص
@endif
@endsection

@section('main-admin')
<section class="news-show">
    <div class="row">
        <a  href="{{route('school.settings.edit',$school->id)}}" class="mr-auto ml-5"><i class="fas fa-edit" style="font-size:25px" ></i></a>
        <h5 class="mr-3">{{$school->title}}</h5>
    </div>
    <div class="row justify-content-end mb-3">
        <div class="col-md-12 col-sm-12 ">
        <article class="mt-5 mr-3 text-right">
            @if($school->img)
            <img src="{{asset('storage/school/'.$school->img)}}">  
            @endif
            <p class="mt-5">
                {{$school->body}}
            </p>
        <article>
        </div>
    </div>
</section>
@endsection
