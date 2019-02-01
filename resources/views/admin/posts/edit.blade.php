@extends('layouts.admin')
@section('page-head')
تعديل منشور
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
            {!! Form::open(array('route' => ['posts.update',$post->id],'files'=>true)) !!}
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">العنوان :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$post->title}}" name="title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">المحتوى :</label>
                <textarea class="form-control" rows="5" name="body"> {{$post->body}}</textarea>
            </div>
            <div class="form-group">
                <p> الصورة :</p>
                @if($post->img)

                <img src="{{asset('images/'.$post->img)}}">
    
                @else
                <p style="text-align:right; ">لا يوجد صورة</p>
              
                @endif
                <br>
                {{ Form::file('img')}}
             </div>
             <input type="hidden" name="_method" value="PUT">
            <button class="btn btn-primary float-left">تعديل</button>
       </form>
    </div>
@endsection