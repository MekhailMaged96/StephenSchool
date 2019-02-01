@extends('layouts.admin')
@section('page-head')
اضافة الخادم
@endsection
@section('main-admin')
<section class="add-student">
    <div class="row">
        <form action="{{route('teacher.store')}}" method="POST">
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
              
           
           
                    <label for="inputState">الفصول :</label>
                        @foreach($teams as $team)  
                        <div class="form-group">
                            <div class="form-check">
                                 <input type="checkbox" v-model="teamSelected" class="form-check-input" value="{{$team->id}}">
                                 <label class="form-check-label" for="exampleCheck1 "> {{$team->name}} </label>
                             </div>
                         </div>
                        @endforeach
                  
            
                <div class="form-group">
                    <label for="formGroupExampleInput2">رقم الهاتف</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="رقم الهاتف" name="phone">
                </div>
                <input type="hidden" :value="teamSelected" name="teams">
                <button class="btn btn-success float-left">اضافة</button>
        </form>
    </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">
var app = new Vue({
    el:"#app",
    data:{
       teamSelected:[],
    }

});
</script>
@endsection