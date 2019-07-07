@extends('layouts.admin')
@section('page-head')
اضافة ادمن
@endsection
@section('main-admin')
<section class="add-student">
    <div class="row">
        <form action="{{route('admin.settings.store')}}" method="POST">
            @csrf
                <div class="form-group col-md-2">
                    <label for="inputState">الدور</label>
                    <select id="inputState" class="form-control" name="role_id">
                        @foreach($roles as $role)
                        <option  value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">الاسم</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم" name="name">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">البريد الالكترونى</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="البريد الالكترونى">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">كلمة السر</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" name="password" placeholder="كلمة السر">
                </div>
               
                <button class="btn btn-success float-left">اضافة</button>
        </form>
    </div>
</section>
@endsection