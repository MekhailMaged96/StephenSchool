@extends('layouts.admin')
@section('page-head')
اضافة الخادم
@endsection
@section('main-admin')
<section class="add-student">
    <div class="row">
        <form action="" method="POST">
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
              
           
                <div class="form-group col-md-2">
                        <label for="inputState">الفصل</label>
                        <select id="inputState" class="form-control" name="class">
                          <option selected>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">رقم الهاتف</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="رقم الهاتف">
                </div>
               
                <button class="btn btn-success float-left">اضافة</button>
        </form>
    </div>
</section>
@endsection