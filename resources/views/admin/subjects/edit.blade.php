@extends('layouts.admin')
@section('page-head')
  تعديل مادة
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
       <form action="#" type="post">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">الاسم</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name">
            </div>
            
            <button class="btn btn-primary float-left">تعديل</button>
       </form>
    </div>
@endsection