@extends('layouts.admin')
@section('page-head')
  تعديل مادة
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
       <form action="{{route('subject.update',$subject->id)}}" method="post">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">الاسم</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name" value="{{$subject->name}}">
                <label for="formGroupExampleInput" class="mt-2">المحتوى</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="المحتوى" name="content" value="{{$subject->content}}">
            </div>
            {{Form::hidden('_method','PUT')}}
            <button class="btn btn-success">تعديل</button>
       </form>
    </div>
@endsection