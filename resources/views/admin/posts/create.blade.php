@extends('layouts.admin')
@section('page-head')
  انشاء منشور
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
       <form action="#" type="post">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">العنوان :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">المحتوى :</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <div class="form-group">
                <label> الصورة :</label>
                <br>
                {{ Form::file('image_uploaded')}}
             </div>
                
            <button class="btn btn-primary float-left">انشاء</button>
       </form>
    </div>
@endsection
