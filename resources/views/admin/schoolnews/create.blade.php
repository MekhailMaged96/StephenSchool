@extends('layouts.admin')
@section('page-head')
انشاء اخبار المدرسة
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
       <form action="{{route('news.school.store')}}"  method="POST" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">العنوان :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">المحتوى :</label>
                <textarea class="form-control" rows="5"  name="body"></textarea>
            </div>
            <div class="form-group">
                <label> الصورة :</label>
                <br>
                {{ Form::file('img')}}
             </div>
                
            <button class="btn btn-primary float-left">انشاء</button>
       </form>
    </div>
@endsection
@section('scripts')

@endsection