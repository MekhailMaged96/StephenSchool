@extends('layouts.admin')
@section('page-head')
  اضافة البوم
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row">
        {!! Form::open(array('route' => 'album.store','files'=>true)) !!}
        @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">الاسم</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">تفاصيل</label>
                <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
            </div>
          
            {{ Form::file('cover_image')}}
       
            <button class="btn btn-primary float-left">اضافة</button>
       </form>
    </div>
</section>
@endsection