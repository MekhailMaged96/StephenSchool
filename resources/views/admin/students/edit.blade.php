@extends('layouts.admin')
@section('page-head')
تعديل الطالب
@endsection
@section('main-admin')
<section class="edit-student">
    <div class="row">
        <form action="{{route('student.update',$user->id)}}" method="POST">
            @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">الاسم</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">البريد الالكترونى</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="البريد الالكترونى" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">كلمة السر</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" name="password" placeholder="كلمة السر" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">الرتبة</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="rank" placeholder="الرتبة" value="{{$user->rank}}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">العنوان</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="address" placeholder="العنوان" value="{{$user->address}}">
                </div>
                <div class="form-group col-md-2">
                        <label for="inputState">الفصل</label>
                        <select id="inputState" class="form-control" name="class">
                                @foreach($teams as $team)
                                <option value="{{$team->id}}" {{ $user->team_id == $team->id ? 'selected="selected"' : '' }} >{{$team->name}}</option>
                                @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">رقم الهاتف</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="رقم الهاتف" name="phone" value="{{$user->phone}}">
                </div>
                {{Form::hidden('_method','PUT')}}
                <button class="btn btn-primary float-left">تعديل</button>
        </form>
    </div>
</section>
@endsection