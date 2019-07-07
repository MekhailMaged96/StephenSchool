@extends('layouts.admin')
@section('page-head')
اضافة عام
@endsection
@section('main-admin')
<section class="class-create">
    <div class="row ">
        <div class="col-md-12 ">
       <form action="{{route('year.store')}}" method="post">
           @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">العام الدراسى</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="العام الدراسى" name="year">
            </div>
            <button class="btn btn-primary">اضافة</button>
       </form>
        </div>
    </div>
@endsection