@extends('layouts.admin')
@section('page-head')
اضافة طالب
@endsection
@section('main-admin')
<section class="add-student">
    <div class="row">
        <form action="{{route('student.store')}}" method="POST">
            @csrf
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
                <div class="form-group">
                    <label for="formGroupExampleInput2">الرتبة</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="rank" placeholder="الرتبة">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">العنوان</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="address" placeholder="العنوان">
                </div>
                <div class="form-group col-md-2">
                        <label for="inputState">الفصل</label>
                        <select id="inputState" class="form-control" name="class">
                          @foreach($teams as $team)  
                          <option selected value="{{$team->id}}">{{$team->name}}</option>
                         @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">رقم الهاتف</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="رقم الهاتف" name="phone">
                </div>
               
                <button class="btn btn-success float-left">اضافة</button>
        </form>
    </div>
</section>
@endsection