@extends('layouts.admin')
@section('page-head')
انشاء محتوي المدرسة
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
       <form action="{{route('school.settings.store')}}"  method="POST" enctype="multipart/form-data">
           @csrf
           <div class="form-group">
                <label for="formGroupExampleInput">النوع :</label>
                <select class="form-control" id="exampleFormControlSelect1" name="type">
                    <option value="system">نظام</option>
                    <option value="history">تاريخ</option>
                    <option value="schedules">جدول الحصص</option>
                    <option value="enrollment">الالتحاق</option>
                </select>
            </div>
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