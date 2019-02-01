@extends('layouts.admin')
@section('page-head')
  انشاء منشور
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
        {!! Form::open(array('route' => 'posts.store','files'=>true)) !!}
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">العنوان :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">المحتوى :</label>
                <textarea class="form-control" rows="5" id="comment" name="body"></textarea>
            </div>
            <div class="form-group">
                <label> الصورة :</label>
                <br>
                {{ Form::file('img')}}
             </div>
                
            <button class="btn btn-primary float-left">انشاء</button>
            {!! Form::close() !!}
    </div>
@endsection
