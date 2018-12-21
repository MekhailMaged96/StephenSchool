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
       <form action="#" type="post">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">العنوان :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">المحتوى :</label>
                <textarea class="form-control" rows="5" id="textarea"></textarea>
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
@section('scripts')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>
@endsection