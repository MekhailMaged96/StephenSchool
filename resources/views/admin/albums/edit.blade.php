@extends('layouts.admin')
@section('page-head')
  {{$album->name}}
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row">
        {!! Form::open(array('route' => ['album.update',$album->id],'files'=>true)) !!}
        @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">الاسم</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" value="{{$album->name}}" name="name">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">تفاصيل</label>
                <textarea class="form-control" rows="5" id="comment"  value="{{$album->description}}"name="description"></textarea>
            </div>
          
            {{ Form::file('cover_image')}}
            <input type="hidden" name="_method" value="PUT"> 
            <button class="btn btn-primary float-left">تعديل</button>
        </form>
    </div>
</section>
@endsection