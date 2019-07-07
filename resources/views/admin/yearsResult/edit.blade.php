@extends('layouts.admin')
@section('page-head')
  تعديل العام الدراسى
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
       <form action="{{route('year.update',$year->id)}}" method="post">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">العام الدراسى</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="العام الدراسى" name="year" value="{{$year->year}}">
            </div>
            {{Form::hidden('_method','PUT')}}
            <button class="btn btn-success">تعديل</button>
       </form>
    </div>
@endsection