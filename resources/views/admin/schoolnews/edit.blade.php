@extends('layouts.admin')
@section('page-head')
تعديل اخبار المدرسة
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
       <form action="{{route('news.school.update',$schoolnews->id)}}" method="post" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">العنوان :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$schoolnews->title}}" name="title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">المحتوى :</label>
                <textarea class="form-control" rows="5" id="textarea" name="body">{{$schoolnews->body}}</textarea>
            </div>
            <div class="form-group">
                <label> الصورة :</label>
                @if($schoolnews->img)
                <img src="{{asset('storage/news/school/'.$schoolnews->img)}}"> 
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