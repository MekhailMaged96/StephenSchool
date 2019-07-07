@extends('layouts.admin')
@section('page-head')
تعديل الادمن
@endsection
@section('main-admin')
<section class="edit-student">
    <div class="row">
        <form action="{{route('admin.settings.update',$admin->id)}}" method="POST">
            @csrf
            <div class="form-group col-md-3">
                    <label for="inputState">الدور</label>
                    <select id="inputState" class="form-control" name="role_id">
                            @foreach($roles as $role)
                            <option value="{{$role->id}}" {{ $admin->role_id == $role->id ? 'selected="selected"' : '' }} >{{$role->name}}</option>
                            @endforeach
                    </select>
            </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">الاسم</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name" value="{{$admin->name}}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">البريد الالكترونى</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="البريد الالكترونى" value="{{$admin->email}}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">كلمة السر</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" name="password" placeholder="كلمة السر" >
                </div>
          
                {{Form::hidden('_method','PUT')}}
                <button class="btn btn-primary float-left">تعديل</button>
        </form>
    </div>
</section>
@endsection