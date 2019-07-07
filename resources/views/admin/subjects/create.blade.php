@extends('layouts.admin')
@section('page-head')
  اضافة مادة
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
        <div class="col-md-12 ">
       <form action="{{route('subject.store')}}" method="post">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">الاسم</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name">
                <label for="formGroupExampleInput" class="mt-2">المحتوى</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="المحتوى" name="content">
                <label for="formGroupExampleInput">الدرجة</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الدرجة" name="grade">
            </div>
            <button class="btn btn-primary">اضافة</button>
       </form>
        </div>
    </div>
@endsection