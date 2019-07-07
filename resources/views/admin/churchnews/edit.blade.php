@extends('layouts.admin')
@section('page-head')
تعديل اخبار الكنيسة
@endsection
@section('styles')
<style>
    .class-create form{
        background-color: #ffa641;
    }

</style>
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
       <form action="{{route('news.church.update', $churchnews->id)}}" method="post" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">العنوان :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$churchnews->title}}" name="title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">المحتوى :</label>
                <textarea class="form-control" rows="5" id="textarea" name="body">{{$churchnews->body}}</textarea>
            </div>
            <div class="form-group">
                <label> الصورة :</label>
                @if($churchnews->img)
                <img src="{{asset('storage/news/church/'.$churchnews->img)}}">  
                @endif
                <br>
                {{ Form::file('img')}}
             </div>
             <input type="hidden" name="_method" value="PUT">
            <button class="btn btn-primary float-left">تعديل</button>
       </form>
    </div>
@endsection
@section('scripts')

@endsection