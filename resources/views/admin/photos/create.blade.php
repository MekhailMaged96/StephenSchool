@extends('layouts.admin')
@section('page-head')
  اضافة صورة
@endsection


@section('main-admin')
<section class="class-create">
    <div class="row">
        {!! Form::open(array('route' => 'photo.store','files'=>true)) !!}
        @csrf
 
            {{Form::hidden('album_id',$album_id)}}
         
            <div class="form-group">
                    {{ Form::file('photo')}}
            </div>
            <button class="btn btn-primary float-left">اضافة</button>
       </form>
    </div>
</section>
@endsection